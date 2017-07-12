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
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll" style='font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
        color: #fff;
        text-transform: uppercase;
        '>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
                    <a class="page-scroll" href="#page-top" style="background-color: inherit;">
                        <b>Olá, {{Auth::user()->name}}</b>
                    </a>
                @if(count($user->comprovantematricula) > 0   && @$user->infos->instituicao != null)

                        <a class="page-scroll" href="#page-top" style="background-color: inherit;" title="Seu cadastro está completo">
                            <i class="fa fa-check-circle-o fa-2x" aria-hidden="true" style="color: greenyellow"></i>
                        </a>
                @endif
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about"
                       @if(count($user->comprovantematricula) == 0)
                       title="Comprovante de matrícula não anexados"
                            @endif>
                        @if(count($user->comprovantematricula) == 0)
                            <i class="fa fa-exclamation-circle" id="notcomprovante" aria-hidden="true" style="color: red"></i>
                        @endif
                        Comprovante de Matrícula
                    </a>
                </li>
                <li>
                    <a class="page-scroll" href="#team"
                       @if(@$user->infos->instituicao == null or @$user->infos->instituicao == "")
                       title="Informações não cadastradas"
                            @endif>
                        @if(@$user->infos->instituicao == null or @$user->infos->instituicao == "")
                            <i class="fa fa-exclamation-circle" id="notinfo" aria-hidden="true" style="color: red"></i>
                        @endif
                        Informações Pessoais
                    </a>
                </li>
                <li>
                    <a class="page-scroll" href="#curriculo"
                       @if(!$user->curriculo)
                       title="Currículo não anexado"
                            @endif>
                        @if(!$user->curriculo)
                            <i class="fa fa-exclamation-circle" id="notcurriculo" aria-hidden="true" style="color: red"></i>
                        @endif
                        Currículo
                    </a>
                </li>

                <li>
                    <a class="page-scroll" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                       style="color: #48b5f0">
                        Sair
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

<!-- Header -->
<header style="background-image: url({{ asset('img/header.jpg') }}) !important;">
    <div class="container">
        <div class="intro-text">

            @if(count($user->comprovantematricula) > 0   && @$user->infos->instituicao != null)
                <div class="intro-heading">Cadastro Completo</div>
                <h3>Entraremos em contato em breve!</h3>
                <a href="#about" class="page-scroll btn btn-xl">Editar Informações</a>
            @else
                <div class="intro-heading">Obrigado por se Cadastrar</div>
                <a href="#about" class="page-scroll btn btn-xl">Informar os meus dados</a>
            @endif
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" style="height: 850px ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center" id="comprovantematricula">
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
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" id="formulario">
                @if(count($user->comprovantematricula) == 0)
                    <div class="alert alert-warning" id="alert-warning">
                        <strong>Atenção!</strong> É necessário anexar o comprovante de matrícula primeiro, para inserir as
                        suas informações pessoais.
                    </div>
                @endif
                <h3 class="text-center">Onde você estuda?</h3>
                <form action="{{url('/estagiario/infos')}}" method="post" id="formInfo">

                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="instituicao">Instituição de Ensino*</label>
                        <input type="text" name="instituicao" value="@if(@$user->infos->instituicao){{@$user->infos->instituicao}}@else{{old('instituicao')}}@endif" class="form-control" id="instituicao" placeholder="Informa a sua instituição de ensino"
                               data-error="Por favor, informe sua instituiçaõ de ensino." required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="curso">Curso*</label>
                        <input type="text" class="form-control" id="curso" value="@if(@$user->infos->curso){{@$user->infos->curso}}@else{{old('curso')}}@endif" name="curso" placeholder="Informe o seu curso"
                               data-error="Por favor, informe seu curso." required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="cpf" class="control-label">CPF*</label>
                        <input type="text" name="cpf" data-equals=true value="@if(@$user->infos->cpf){{@$user->infos->cpf}}@else{{old('cpf')}}@endif" class="form-control" id="cpf" placeholder="Inform o seu CPF"
                               data-error="Por favor, informe um CPF válido." required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <br>
                    <h3 class="text-center">Qual seu Endereço ?</h3>
                    <br>
                    <div class="form-group">
                        <label for="cidade">Cidade*</label>
                        <input type="text" class="form-control" id="cidade" value="@if(@$user->infos->cidade){{@$user->infos->cidade}}@else{{old('cidade')}}@endif" name="cidade" placeholder="Informe a Cidade onde mora"
                               data-error="Por favor, informe a sua cidade." required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="bairro">Bairro*</label>
                        <input type="text" class="form-control" id="bairro" value="@if(@$user->infos->bairro){{@$user->infos->bairro}}@else{{old('bairro')}}@endif" name="bairro" placeholder="Informe o bairro onde mora"
                               data-error="Por favor, informe o Bairro onde você mora." required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="rua">Rua</label>
                        <input type="text" class="form-control" id="rua" value="@if(@$user->infos->rua){{@$user->infos->rua}}@else{{old('rua')}}@endif" name="rua" placeholder="Informe a rua onde mora.">
                    </div>

                    <h4 class="text-center">Qual seu telefone para contato ?</h4>

                    <div class="form-group">
                        <label for="telefone">Celular/Telefone*</label>
                        <input type="text" class="form-control" id="telefone" value="@if(@$user->infos->telefone){{@$user->infos->telefone}}@else{{old('telefone')}}@endif" name="telefone" placeholder="Informe somente números"
                               data-error="Por favor, informe um número para contato." required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="disponibilidade">Disponibilidade</label>
                        <input type="text" class="form-control" id="disponibilidade" value="@if(@$user->infos->rua){{@$user->infos->disponibilidade}}@else{{old('disponibilidade')}}@endif" name="disponibilidade" placeholder="Informe a sua disponibilidade para estagiar."
                               data-error="Por favor, informe a sua disponibilidade para estagiar." required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="curriculo" style="height: 700px">
    <div class="container text-center">
        <h2>Você também pode anexar seu currículo!</h2>
        <br>
        <div class="col-lg-12 " id="curriculo">

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

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-102460487-1', 'auto');
    ga('send', 'pageview');

</script>
</body>


<script src="{{ asset('bower_components/jquery-file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('bower_components/jquery-file-upload/js/jquery.fileupload.js') }}"></script>
<script src="{{ asset('js/jquery.maskedinput.js') }}"></script>
<script src="{{ asset('js/notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/validator.min.js') }}"></script>

<script>

    @if (Session::has('success'))
        $(document).ready(function() {
            $('html,body').animate({scrollTop:$("#curriculo").offset().top}, 500);
            notificacao('success', '{{ Session::get('success') }}');
        });
    @endif

    @if (Session::has('dangercpf'))
        $(document).ready(function() {
        notificacao('danger', '{{ Session::get('dangercpf') }}');
        $('html,body').animate({scrollTop:$("#team").offset().top}, 500);
    });
    @endif

//    $(document).ready(function () {
//
//    });
    $('#formInfo').validator({
        custom: {
            equals: function(strCPF) {
                var result = TestaCPF(strCPF.val());
                var matchValue = strCPF.data("equals") // true
                if (result !== matchValue) {
                    return "Hey, that's not valid! It's gotta be " + matchValue
                }
            }
        }
    });

    function TestaCPF(strCPF) {
        strCPF.toString();
        var Soma;
        var Resto;
        Soma = 0;
        if (strCPF == "00000000000") return false;

        for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.toString().substring(i-1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11))  Resto = 0;
        if (Resto != parseInt(strCPF.toString().substring(9, 10)) ) return false;

        Soma = 0;
        for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.toString().substring(i-1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;

        if ((Resto == 10) || (Resto == 11))  Resto = 0;
        if (Resto != parseInt(strCPF.toString().substring(10, 11) ) ) return false;
        return true;
    }


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


    $(document).ready(function () {
        @if(count($user->comprovantematricula) == 0)
        $('#formulario :input').attr('disabled', true);
        @endif
        @if(@$user->infos->instituicao == null or @$user->infos->instituicao == "")
            $('#curriculo :input').attr('disabled', true);
        @endif
    });

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
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                },
                done: function (e, data) {
                    var status = JSON.parse(data['result']);
                    if (status[0].status == "error") {
                        notificacao('danger', status[0].message);
                    }else{
                        document.getElementById('notcomprovante').style.display = 'none';
                        document.getElementById('alert-warning').style.display = 'none';
                        $('#formulario :input').removeAttr('disabled');
                        $('html,body').animate({scrollTop:$("#team").offset().top}, 500);
                        notificacao('success', 'Comprovante de matrícula anexado com sucesso!');
                        $('#comprovantematricula :input').attr('disabled', true);
                    }
                }
            });
        });
    })(window.jQuery);
    @endif
    @if(!$user->curriculo)
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
    @endif
    function notificacao(type, message) {
        $.notify({
            // options
            message: message,
        },{
            // settings
            element: 'body',
            position: null,
            type: type,
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "center"
            },
            offset: 100,
            spacing: 10,
            z_index: 1031,
            delay: 5000,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class'
        });

    }
</script>

</html>