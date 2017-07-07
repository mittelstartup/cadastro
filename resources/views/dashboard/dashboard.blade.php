<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mittel</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/jquery-file-upload/css/jquery.fileupload.css') }}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->

<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <a class="navbar-brand page-scroll" href="https://mittelestagios.com/#page-top">Mittel</a>
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="page-scroll" href="#page-top"> <h2>Olá {{Auth::user()->name}}</h2></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>

                    <button class="page-scroll btn btn-primary" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <h4>Sair</h4>
                    </button>

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

<!-- Header -->
<header style="background-image: url({{ asset('img/header.jpg') }}) !important;">
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading">Obrigado por se Cadastrar</div>
            <a href="#about" class="page-scroll btn btn-xl">Informar os meus dados</a>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" style="height: 850px ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                @if(count($user->comprovantematricula) == 0)
                    <h2>Anexe seu comprovante de matrícula autenticado abaixo.</h2>
                    <span class="btn btn-success fileinput-button">
                        <span>Selecionar Comprovante de Matrícula</span>
                        <!-- The file input field used as target for the file upload widget -->
				        <input id="fileupload" type="file" name="documento"
                               data-token = "{{csrf_token()}}"
                               data-user-id = "{{Auth::user()->id}}" accept="application/pdf">
				        </span>
                @else

                    @foreach($user->comprovantematricula as $file)
                        <h2>Comprovante de matrícula</h2>
                        <a href="view/{{$file->user_id}}/{{$file->id}}">{{$file->arquivo}}</a>
                        <a href="removeranexo/{{$file->user_id}}/{{$file->id}}" style=" opacity: 1 !important;" class=" btn btn-danger">Remover Comprovante</a>

                    @endforeach
                @endif
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="bg-light-gray" style="height: 900px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <h2 class="text-center">Onde você estuda?</h2>
                <form action="{{url('/estagiario/infos')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="instituicao">Instituição de Ensino</label>
                        <input type="text" name="instituicao" value="@if(@$user->infos->instituicao){{@$user->infos->instituicao}}@endif" class="form-control" id="instituicao" placeholder="Informa a sua instituição de ensino" required>
                    </div>
                    <div class="form-group">
                        <label for="curso">Curso</label>
                        <input type="text" class="form-control" id="curso" value="@if(@$user->infos->curso){{@$user->infos->curso}}@endif" name="curso" placeholder="Informe o seu curso" required>
                    </div>
                    <br>
                    <h2 class="text-center">Qual seu Endereço e Telefone de Contato?</h2>
                    <br>
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" value="@if(@$user->infos->cidade){{@$user->infos->cidade}}@endif" name="cidade" placeholder="Informe a Cidade onde mora" required>
                    </div>
                    <div class="form-group">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" value="@if(@$user->infos->bairro){{@$user->infos->bairro}}@endif" name="bairro" placeholder="Informe o bairro onde mora" required>
                    </div>
                    <div class="form-group">
                        <label for="rua">Rua</label>
                        <input type="text" class="form-control" id="rua" value="@if(@$user->infos->rua){{@$user->infos->rua}}@endif" name="rua" placeholder="Informe a rua onde mora.">
                    </div>

                    <h4 class="text-center">Como conseguimos entrar em contato com você?</h4>

                    <div class="form-group">
                        <label for="telefone">Celular/Telefone</label>
                        <input type="text" class="form-control" id="telefone" value="@if(@$user->infos->telefone){{@$user->infos->telefone}}@endif" name="telefone" placeholder="Informe seu telefone para contato" required>
                    </div>
                    <div class="form-group">

                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
        {{--<div class="row">--}}
        {{--<div class="col-lg-8 col-lg-offset-2 text-center">--}}
        {{--<p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
</section>

<!-- Contact Section -->
<section id="curriculo" style="height: 700px">
    <div class="container">
        <h2 class="text-center">Você também pode anexar seu currículo!</h2>
        <br>
        <div class="col-lg-12 text-center">
            @if($user->curriculo)
                <a href="viewcurriculo/{{$user->curriculo->user_id}}/{{$user->curriculo->id}}">{{$user->curriculo->arquivo}}</a>
                <a href="removercurriculo/{{$user->curriculo->user_id}}/{{$user->curriculo->id}}" style=" opacity: 1 !important;" class=" btn btn-danger">Remover Currículo</a>
            @else
                <span class="btn btn-success fileinput-button" id="curriculo">
                    <span>Selecionar Currículo</span>
            <!-- The file input field used as target for the file upload widget -->
                    <input id="uploadcurriculo" type="file" name="documento"
                           data-token = "{{csrf_token()}}"
                           data-user-id = "{{Auth::user()->id}}"
                    accept="application/pdf">
                </span>
            @endif
        </div>
    </div>
    </div>
</section>

<footer>
</footer>


<!-- jQuery -->
<script src="{{ asset('jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/agency.min.js"></script>

</body>


<script src="{{ asset('bower_components/jquery-file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('bower_components/jquery-file-upload/js/jquery.fileupload.js') }}"></script>
<script src="{{ asset('js/jquery.maskedinput.js') }}"></script>
<script src="{{ asset('js/bootbox.min.js') }}"></script>
@if (Session::has('success'))
    <script type="text/javascript">
        $(document).ready(function() {
            bootbox.alert('{{ Session::get('success') }}');
            window.location.href='#curriculo';
        });

    </script>

@endif
<script>

    $('#telefone').focusout(function(){
        var phone, element;
        element = $(this);
        element.unmask();
        phone = element.val().replace(/\D/g, '');
        if(phone.length > 10) {
            element.mask("(99) 99999-999?9");
        } else {
            element.mask("(99) 9999-9999?9");
        }
    }).trigger('focusout');
    @if(count($user->comprovantematricula) == 0)
        ;(function($)
    {
        'use strict';
        $(document).ready(function(){
            var $fileupload = $('#fileupload');
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
                    var status = JSON.parse(data['result']);
                    if (status[0].status == "error") {
                        bootbox.alert(status[0].message);
                        document.getElementById('progress').style = 'none';
                    }else{
                        window.location.href='#team';
                    }
                }
            });
        });
    })(window.jQuery);
    @endif
        ;(function($)
    {
        'use strict';
        $(document).ready(function(){
            var $fileupload = $('#uploadcurriculo');
            $fileupload.fileupload({
                url: '{{url('/estagiario/curriculo')}}',
                formData: {_token: $fileupload.data('token'),  userId: $fileupload.data('userId')},

                progressall: function (e, data) {
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