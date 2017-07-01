<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Mittel</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/jquery-file-upload/css/jquery.fileupload.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="{{ asset('css/creative.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

            <a class="navbar-brand page-scroll">Olá {{Auth::user()->name}}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li>

                    <a style="color: #48b5f0" class="page-scroll" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <h4>Sair</h4>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>


<header>
    <div class="header-content">
        <div class="header-content-inner" style="background-color: black; opacity: 0.85">
            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            <h1 id="homeHeading">Obrigado por se cadastrar</h1>
            <hr>
            <p>Agradecemos o seu apoio e por acreditar na nossa idéia!
            <div class="row" style="width: 50%; margin-left: auto;margin-right: auto;">
                <form action="{{url('/estagiario/infos')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="instituicao">Instituição de Ensino</label>
                        <input type="text" name="instituicao" value="@if(@$user->infos->instituicao){{@$user->infos->instituicao}}@endif" class="form-control" id="instituicao" placeholder="Informa a sua instituição de ensino" required>
                    </div>
                    <div class="form-group">
                        <label for="curso">Curso</label>
                        <input type="text" class="form-control" id="curso" value="@if(@$user->infos->curso){{@$user->infos->curso}}@endif" name="curso" placeholder="Curso" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
            </p>
            @if(count($user->comprovantematricula) == 0)
                <br><h3>Por gentileza anexe seu comprovante de matrícula autenticado abaixo.</h3>
            <span class="btn btn-success fileinput-button">
                <span>Selecionar Comprovante de Matrícula</span>
                <!-- The file input field used as target for the file upload widget -->
				        <input id="fileupload" type="file" name="documento"
                        data-token = "{{csrf_token()}}"
                        data-user-id = "{{Auth::user()->id}}" accept="application/pdf">
				    </span>

            <br>
            <br>
            @else
            <table class="table">
                <tbody>
                @foreach($user->comprovantematricula as $file)
                    <tr>
                        <td><a href="view/{{$file->user_id}}/{{$file->id}}">{{$file->arquivo}}</a></td>
                        <td><a href="removeranexo/{{$file->user_id}}/{{$file->id}}" style=" opacity: 1 !important;" class=" btn btn-danger">Remover anexo</a> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @endif
            <!-- The global progress bar -->
            <div id="progress" class="progress" style="display: none">
                <div class="progress-bar progress-bar-success"></div>
            </div>
        </div>

    </div>

</header>


</body>
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bower_components/jquery-file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('bower_components/jquery-file-upload/js/jquery.fileupload.js') }}"></script>

    <script>
        ;(function($)
        {
            'use strict';
            $(document).ready(function(){
                var $fileupload     = $('#fileupload');
                $fileupload.fileupload({
                    url: '{{url('/estagiario/upload')}}',
                    formData: {_token: $fileupload.data('token'),  userId: $fileupload.data('userId')},

                    progressall: function (e, data) {
                        document.getElementById('progress').style = 'block';
                        var progress = parseInt(data.loaded / data.total * 100, 10);
                        $('#progress .progress-bar').css(
                            'width',
                            progress + '%'
                        );
                    },
                    done: function (e, data) {
                        location.reload();
                    }
                });
            });
        })(window.jQuery);
    </script>
</html>