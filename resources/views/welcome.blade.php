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
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/bootstrap-social.css') }}" rel="stylesheet">
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
<!-- Modal -->
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width: 40%">
        <div class="modal-content">
            <br>
            <div class="bs-example bs-example-tabs">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
                    <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
                </ul>
            </div>
            <div class="modal-body">
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in" id="why">
                        <p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
                        <p></p><br> Please contact <a mailto:href="JoeSixPack@Sixpacksrus.com"></a>JoeSixPack@Sixpacksrus.com</a> for any other inquiries.</p>
                    </div>
                    <div class="tab-pane fade active in" id="signin">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Senha</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <a  href="{{url('/auth/facebook')}}" class="btn btn-block btn-social btn-facebook" style="max-width: 345px">
                                        <span class="fa fa-facebook"></span> Logar com o Facebook
                                    </a>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>


                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Esqueceu sua senha?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="signup">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nome</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Senha</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirmar a Senha</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label"></label>
                                <div class="col-md-6">
                                    <a  href="{{url('/auth/facebook')}}" class="btn btn-block btn-social btn-facebook" style="max-width: 345px">
                                        <span class="fa fa-facebook"></span> Registrar com o Facebook
                                    </a>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Cadastrar
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-modal" id="politicaprivacidade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="width: 40%">
        <div class="modal-content">
            <div class="modal-body">
                <h2>Política de privacidade para <a href='https://mittelestagios.com/'>mittelstagios</a></h2>
                <p>Todas as suas informações pessoais recolhidas, serão usadas para o ajudar a tornar a sua visita no nosso site o
                    mais produtiva e agradável possível.</p>
                <p>A garantia da confidencialidade dos dados pessoais dos utilizadores do nosso site é importante para o mittelstagios.</p>
                <p>Todas as informações pessoais relativas a membros, assinantes, clientes ou visitantes que usem o mittelstagios serão
                    tratadas em concordância com a Lei da Proteção de Dados Pessoais de 26 de outubro de 1998 (Lei n.º 67/98).</p>
                <p>A informação pessoal recolhida pode incluir o seu nome, e-mail, número de telefone e/ou telemóvel, morada, data de
                    nascimento e/ou outros.</p>
                <p>O uso do mittelstagios pressupõe a aceitação deste Acordo de privacidade. A equipa do mittelstagios reserva-se ao
                    direito de alterar este acordo sem aviso prévio. Deste modo, recomendamos que consulte a nossa política de privacidade
                    com regularidade de forma a estar sempre atualizado.</p>
                <h2>Os anúncios</h2>
                <p>Tal como outros websites, coletamos e utilizamos informação contida nos anúncios. A informação contida nos anúncios,
                    inclui o seu endereço IP (Internet Protocol), o seu ISP (Internet Service Provider, como o Sapo, Clix, ou outro),
                    o browser que utilizou ao visitar o nosso website (como o Internet Explorer ou o Firefox), o tempo da sua visita e que
                    páginas visitou dentro do nosso website.</p>
                <h2>Ligações a Sites de terceiros</h2>
                <p>O mittelstagios possui ligações para outros sites, os quais, a nosso ver, podem conter informações / ferramentas
                    úteis para os nossos visitantes. A nossa política de privacidade não é aplicada a sites de terceiros, pelo que,
                    caso visite outro site a partir do nosso deverá ler a politica de privacidade do mesmo.</p>
                <p>Não nos responsabilizamos pela política de privacidade ou conteúdo presente nesses mesmos sites.</p>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Mittel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">A Mittel</a>
                </li>
                <li>
                    <a class="page-scroll" href="#team">Equipe</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contato</a>
                </li>
                @if(Auth::guest())
                    <li>
                        <a class="page-scroll" href="#" data-toggle="modal" data-target=".bs-modal-sm">Login/Cadastro</a>
                    </li>
                @else
                    <li>
                        <a class="page-scroll" href="{{url('/home')}}">Dashboard</a>
                    </li>

                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-heading">Bem vindo a Mittel</div>
            {{--<a href="/register" class="page-scroll btn btn-xl">AQUI</a>--}}
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">O que é a Mittel?</h2>
                <br>
                <h3 class="section-subheading text-muted">Somos uma startup com o intuito de criar uma plataforma capaz de ajudar
                empresas e estagiários.
                De que Forma?
                O estagiário irá se cadastrar na nossa plataforma, preencher seu perfil e pronto.
                Com os perfis cadastrados, as empresas poderão acessar a nossa plataforma e encontrar o seu estagiário.</h3>
            </div>
        </div>
        {{--<div class="row">--}}
            {{--<div class="col-lg-12">--}}
                {{--<ul class="timeline">--}}
                    {{--<li>--}}
                        {{--<div class="timeline-image">--}}
                            {{--<img class="img-circle img-responsive" src="img/about/1.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="timeline-panel">--}}
                            {{--<div class="timeline-heading">--}}
                                {{--<h4>2009-2011</h4>--}}
                                {{--<h4 class="subheading">Our Humble Beginnings</h4>--}}
                            {{--</div>--}}
                            {{--<div class="timeline-body">--}}
                                {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="timeline-inverted">--}}
                        {{--<div class="timeline-image">--}}
                            {{--<img class="img-circle img-responsive" src="img/about/2.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="timeline-panel">--}}
                            {{--<div class="timeline-heading">--}}
                                {{--<h4>March 2011</h4>--}}
                                {{--<h4 class="subheading">An Agency is Born</h4>--}}
                            {{--</div>--}}
                            {{--<div class="timeline-body">--}}
                                {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<div class="timeline-image">--}}
                            {{--<img class="img-circle img-responsive" src="img/about/3.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="timeline-panel">--}}
                            {{--<div class="timeline-heading">--}}
                                {{--<h4>December 2012</h4>--}}
                                {{--<h4 class="subheading">Transition to Full Service</h4>--}}
                            {{--</div>--}}
                            {{--<div class="timeline-body">--}}
                                {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="timeline-inverted">--}}
                        {{--<div class="timeline-image">--}}
                            {{--<img class="img-circle img-responsive" src="img/about/4.jpg" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="timeline-panel">--}}
                            {{--<div class="timeline-heading">--}}
                                {{--<h4>July 2014</h4>--}}
                                {{--<h4 class="subheading">Phase Two Expansion</h4>--}}
                            {{--</div>--}}
                            {{--<div class="timeline-body">--}}
                                {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="timeline-inverted">--}}
                        {{--<div class="timeline-image">--}}
                            {{--<h4>Be Part--}}
                                {{--<br>Of Our--}}
                                {{--<br>Story!</h4>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</section>

<!-- Team Section -->
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Nosso Time</h2>
                {{--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/anacecilia.png" class="img-responsive img-circle" alt="">
                    <h4>Ana Cecília</h4>
                    <p class="text-muted">Negócios</p>
                    <ul class="list-inline social-buttons">
                        {{--<li><a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--</li>--}}
                        <li><a href="https://www.facebook.com/ana.cecilia.27" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/anliy.png" class="img-responsive img-circle" alt="">
                    <h4>Anliy Sargeant</h4>
                    <p class="text-muted">Negócios</p>
                    <ul class="list-inline social-buttons">
                        {{--<li><a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--</li>--}}
                        <li><a href="https://www.facebook.com/anliy.sargeant" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/jader.png" class="img-responsive img-circle" alt="">
                    <h4>Jáder Duarte</h4>
                    <p class="text-muted">Desenvolvedor</p>
                    <ul class="list-inline social-buttons">
                        {{--<li><a href="https://twitter.com/Jader_boliviano" target="_blank"><i class="fa fa-twitter"></i></a>--}}
                        {{--</li>--}}
                        <li><a href="https://www.facebook.com/jader.felipe.3" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/j%C3%A1der-felipe-silva-duarte-693263105/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/jordan.png" class="img-responsive img-circle" alt="">
                    <h4>Jordan Bragon</h4>
                    <p class="text-muted">Desenvolvedor</p>
                    <ul class="list-inline social-buttons">
                        {{--<li><a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--</li>--}}
                        <li><a href="https://www.facebook.com/jordan.bragon" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/jordanbragon/?ppe=1" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/paloma.png" class="img-responsive img-circle" alt="">
                    <h4>Paloma Thaís</h4>
                    <p class="text-muted">Comunicação</p>
                    <ul class="list-inline social-buttons">
                        {{--<li><a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--</li>--}}
                        <li><a href="https://www.facebook.com/paloma.thais15" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="img/team/rafael.jpeg" class="img-responsive img-circle" alt="">
                    <h4>Rafael Fernandes</h4>
                    <p class="text-muted">Web Design</p>
                    <ul class="list-inline social-buttons">

                        <li><a href="https://www.facebook.com/rafael.fernandes.almeida" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">

            {{--@if(Session::has('success'))--}}
                {{--<div class="alert alert-success">--}}
                    {{--{{ Session::get('success') }}--}}
                {{--</div>--}}

            {{--@endif--}}

            <div class="flash-message text-center">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ mb_strtoupper(Session::get('alert-' . $msg), 'UTF-8') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
            </div>

            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Fale com a gente!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                {{--<form name="sentMessage" id="contactForm" novalidate>--}}
                {!! Form::open(['route'=>'contactus.store']) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Seu Nome *" id="contact_name" name="contact_name" required data-validation-required-message="Por favor insira seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Seu Email *" id="contact_email" name="contact_email" required data-validation-required-message="Por favor insira seu endereço de email.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Seu Telefone *" id="contact_phone" name="contact_phone" required data-validation-required-message="Por Favor insira seu número de telefone.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Sua Mensagem *" id="contact_message" name="contact_message" required data-validation-required-message="Por favor insira a mensagem."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Enviar Mensagem</button>
                        </div>
                    </div>
                {!! Form::close() !!}
                {{--</form>--}}
            </div>
        </div>
    </div>

</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Mittel 2017</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--</li>--}}
                        {{--<li><a href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--</li>--}}
                        {{--<li><a href="#"><i class="fa fa-linkedin"></i></a>--}}
                        {{--</li>--}}
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#" data-toggle="modal" data-target=".bs-modal">Políticas de Privacidade</a>
                    </li>
                    {{--<li><a href="#">Termos de Uso</a>--}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="jquery/jquery.min.js"></script>


<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

<script src="{{ asset('js/jquery.maskedinput.js') }}"></script>

<!-- Mascara para telefone -->
<script>
    $('#contact_phone').focusout(function(){
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
</script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/agency.min.js"></script>

</body>

</html>