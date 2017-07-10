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

<div class="modal fade" id="politica_privacidade" data-backdrop="static" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" style="text-align: center ">Política de privacidade da Mittel Estágios</h2>
            </div>
            <div class="modal-body" style="margin-right: 10px; margin-left: 10px">
                <h4> Informações Gerais</h4>
                <li style="color: red"><p style="color: black;text-align: justify"> Para mover utilize o botão scroll do mouse, ou as setas direcionais do teclado</p></li>
                <li style="color: red"><p style="color: black;text-align: justify"> Para fechar utilize o botão no final da página, ou pressione a tecla "Esc" do teclado</p></li>

                <h2>VISÃO GERAL</h2>
                <p style="text-align: justify">Todas as suas informações pessoais recolhidas, serão usadas para o ajudar a tornar a sua visita no nosso site o
                    mais produtiva e agradável possível.</p>
                <p style="text-align: justify">A garantia da confidencialidade dos dados pessoais dos utilizadores do nosso site é importante para a Mittel Estagios.</p>
                <p style="text-align: justify">Todas as informações pessoais relativas a membros, assinantes, clientes ou visitantes que usem o mittelestagios serão
                    tratadas em concordância com a Lei da Proteção de Dados Pessoais de 26 de outubro de 1998 (Lei n.º 67/98).</p>
                <p style="text-align: justify">A informação pessoal recolhida pode incluir o seu nome, e-mail, número de telefone e/ou telemóvel, morada, data de
                    nascimento e/ou outros.</p>
                <p style="text-align: justify">O uso do mittelstagios pressupõe a aceitação deste Acordo de privacidade. A equipa do mittelstagios reserva-se ao
                    direito de alterar este acordo sem aviso prévio. Deste modo, recomendamos que consulte a nossa política de privacidade
                    com regularidade de forma a estar sempre atualizado.</p>
                <h3>Os anúncios</h3>
                <p style="text-align: justify">Tal como outros websites, coletamos e utilizamos informação contida nos anúncios. A informação contida nos anúncios,
                    inclui o seu endereço IP (Internet Protocol), o seu ISP (Internet Service Provider, como o Sapo, Clix, ou outro),
                    o browser que utilizou ao visitar o nosso website (como o Internet Explorer ou o Firefox), o tempo da sua visita e que
                    páginas visitou dentro do nosso website.</p>
                <h3>Ligações a Sites de terceiros</h3>
                <p style="text-align: justify">O mittelstagios possui ligações para outros sites, os quais, a nosso ver, podem conter informações / ferramentas
                    úteis para os nossos visitantes. A nossa política de privacidade não é aplicada a sites de terceiros, pelo que,
                    caso visite outro site a partir do nosso deverá ler a politica de privacidade do mesmo.</p>
                <p style="text-align: justify">Não nos responsabilizamos pela política de privacidade ou conteúdo presente nesses mesmos sites.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="termos_uso" data-backdrop="static" tabindex="-1" role="dialog" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" style="text-align: center ">TERMOS DE SERVIÇO</h2>
            </div>
            <div class="modal-body" style="margin-left: 15px; margin-right: 15px">
                <h4> Informações Gerais</h4>
                <li style="color: red"><p style="color: black;text-align: justify"> Para mover utilize o botão scroll do mouse, ou as setas direcionais do teclado</p></li>
                <li style="color: red"><p style="color: black;text-align: justify"> Para fechar utilize o botão no final da página, ou pressione a tecla "Esc" do teclado</p></li>

                <h2>VISÃO GERAL</h2>
                <p style="text-align: justify">
                    Esse site é operado pelo Mittel Estagios. Em todo o site, os termos “nós”, “nos” e “nosso” se referem ao Mittel Estagios. O Mittel Estagios proporciona esse site, incluindo todas as informações, ferramentas e serviços disponíveis deste site para você, o usuário, com a condição da sua aceitação de todos os termos, condições, políticas e avisos declarados aqui.

                    Ao visitar nosso site e/ou comprar alguma coisa no nosso site, você está utilizando nossos “Serviços”. Consequentemente, você  concorda com os seguintes termos e condições (“Termos de serviço”, “Termos”), incluindo os termos e condições e políticas adicionais mencionados neste documento e/ou disponíveis por hyperlink. Esses Termos de serviço se aplicam a todos os usuários do site, incluindo, sem limitação, os usuários que são navegadores, fornecedores, clientes, lojistas e/ou contribuidores de conteúdo.

                    Por favor, leia esses Termos de serviço cuidadosamente antes de acessar ou utilizar o nosso site. Ao acessar ou usar qualquer parte do site, você concorda com os Termos de serviço. Se você não concorda com todos os termos e condições desse acordo, então você não pode acessar o site ou usar quaisquer serviços. Se esses Termos de serviço são considerados uma oferta, a aceitação é expressamente limitada a esses Termos de serviço.

                    Quaisquer novos recursos ou ferramentas que forem adicionados à loja atual também devem estar sujeitos aos Termos de serviço. Você pode revisar a versão mais atual dos Termos de serviço quando quiser nesta página. Reservamos o direito de atualizar, alterar ou trocar qualquer parte desses Termos de serviço ao publicar atualizações e/ou alterações no nosso site. É sua responsabilidade verificar as alterações feitas nesta página periodicamente. Seu uso contínuo ou acesso ao site após a publicação de quaisquer alterações constitui aceitação de tais alterações.

                </p>



                <h3>SEÇÃO 1 - TERMOS DA LOJA VIRTUAL</h3>

                <p style="text-align: justify">

                    Ao concordar com os Termos de serviço, você confirma que você é maior de idade em seu estado ou província de residência e que você nos deu seu consentimento para permitir que qualquer um dos seus dependentes menores de idade usem esse site.

                    Você não deve usar nossos produtos para qualquer fim ilegal ou não autorizado. Você também não pode, ao usufruir deste Serviço, violar quaisquer leis em sua jurisdição (incluindo, mas não limitado, a leis de direitos autorais).

                    Você não deve transmitir nenhum vírus ou qualquer código de natureza destrutiva.

                    Violar qualquer um dos Termos tem como consequência a rescisão imediata dos seus Serviços.
                </p>


                <h3>SEÇÃO 2 - CONDIÇÕES GERAIS</h3>

                <p style="text-align: justify">

                    Reservamos o direito de recusar o serviço a qualquer pessoa por qualquer motivo a qualquer momento.

                    Você entende que o seu conteúdo (não incluindo informações de cartão de crédito), pode ser transferido sem criptografia e pode: (a) ser transmitido por várias redes; e (b) sofrer alterações para se adaptar e se adequar às exigências técnicas de conexão de redes ou dispositivos. As informações de cartão de crédito sempre são criptografadas durante a transferência entre redes.

                    Você concorda em não reproduzir, duplicar, copiar, vender, revender ou explorar qualquer parte do Serviço, uso do Serviço, acesso ao Serviço, ou qualquer contato no site através do qual o serviço é fornecido, sem nossa permissão expressa por escrito.

                    Os títulos usados nesse acordo são incluídos apenas por conveniência e não limitam ou  afetam os Termos.
                </p>


                <h3>SEÇÃO 3 - PRECISÃO, INTEGRIDADE E ATUALIZAÇÃO DAS INFORMAÇÕES</h3>

                <p style="text-align: justify">

                    Não somos responsáveis por informações disponibilizadas nesse site que não sejam precisas, completas ou atuais. O material desse site é fornecido apenas para fins informativos e não deve ser usado como a única base para tomar decisões sem consultar fontes de informações primárias, mais precisas, mais completas ou mais atuais. Qualquer utilização do material desse site é por sua conta e risco.

                    Esse site pode conter certas informações históricas. As informações históricas podem não ser atuais e são fornecidas apenas para sua referência. Reservamos o direito de modificar o conteúdo desse site a qualquer momento, mas nós não temos obrigação de atualizar nenhuma informação em nosso site. Você concorda que é de sua responsabilidade monitorar alterações no nosso site.
                </p>

                <h3>SEÇÃO 4 - MODIFICAÇÕES DO SERVIÇO E PREÇOS</h3>

                <p style="text-align: justify">

                    Os preços dos nossos produtos são sujeitos a alterações sem notificação.

                    Reservamos o direito de, a qualquer momento, modificar ou descontinuar o Serviço (ou qualquer parte ou conteúdo do mesmo) sem notificação em qualquer momento.

                    Não nos responsabilizados por você ou por qualquer terceiro por qualquer modificação, alteração de preço, suspensão ou descontinuação do Serviço.
                </p>


                <h3>SEÇÃO 5 - PRODUTOS OU SERVIÇOS (caso aplicável)</h3>

                <p style="text-align: justify">

                    Certos produtos ou serviços podem estar disponíveis exclusivamente online através do site. Tais produtos ou serviços podem ter quantidades limitadas e são sujeitos a apenas devolução ou troca, de acordo com nossa Política de devolução.

                    Fizemos todo o esforço possível da forma mais precisa as cores e imagens dos nossos produtos que aparecem na loja. Não podemos garantir que a exibição de qualquer cor no monitor do seu computador será precisa.

                    Reservamos o direito, mas não somos obrigados, a limitar as vendas de nossos produtos ou Serviços para qualquer pessoa, região geográfica ou jurisdição. Podemos exercer esse direito conforme o caso. Reservamos o direito de limitar as quantidades de quaisquer produtos ou serviços que oferecemos. Todas as descrições de produtos ou preços de produtos são sujeitos a alteração a qualquer momento sem notificação, a nosso critério exclusivo. Reservamos o direito de descontinuar qualquer produto a qualquer momento. Qualquer oferta feita por qualquer produto ou serviço nesse site é nula onde for proibido por lei.

                    Não garantimos que a qualidade de quaisquer produtos, serviços, informações ou outros materiais comprados ou obtidos por você vão atender às suas expectativas, ou que quaisquer erros no Serviço serão corrigidos.
                </p>


                <h3>SEÇÃO 6 - PRECISÃO DE INFORMAÇÕES DE FATURAMENTO E CONTA</h3>

                <p style="text-align: justify">

                    Reservamos o direito de recusar qualquer pedido que você nos fizer. Podemos, a nosso próprio critério, limitar ou cancelar o número de produtos por pessoa, por domicílio ou por pedido. Tais restrições podem incluir pedidos feitos na mesma conta de cliente, no mesmo cartão de crédito, e/ou pedidos que usam a mesma fatura e/ou endereço de envio. Caso façamos alterações ou cancelemos um pedido, pode ser que o notifiquemos por e-mail e/ou endereço/número de telefone de faturamento fornecidos no momento que o pedido foi feito. Reservamos o direito de limitar ou proibir pedidos que, a nosso critério exclusivo, parecem ser feitos por comerciantes, revendedores ou distribuidores.

                    Você concorda em fornecer suas informações de conta e compra completas para todas as compras feitas em nossa loja. Você concorda em atualizar prontamente sua conta e outras informações, incluindo seu e-mail, números de cartão de crédito e datas de validade, para que possamos completar suas transações e contatar você quando preciso.

                    Para mais detalhes, por favor, revise nossa Política de devolução.
                </p>


                <h3>SEÇÃO 7 - FERRAMENTAS OPCIONAIS</h3>

                <p style="text-align: justify">
                    Podemos te dar acesso a ferramentas de terceiros que não monitoramos e nem temos qualquer controle.

                    Você reconhece e concorda que nós fornecemos acesso a tais ferramentas ”como elas são” e “conforme a disponibilidade” sem quaisquer garantias, representações ou condições de qualquer tipo e sem qualquer endosso. Não nos responsabilizamos de forma alguma pelo seu uso de ferramentas opcionais de terceiros.

                    Qualquer uso de ferramentas opcionais oferecidas através do site é inteiramente por sua conta e risco e você se familiarizar e aprovar os termos das ferramentas que são fornecidas por fornecedor(es) terceiro(s).

                    Também podemos, futuramente, oferecer novos serviços e/ou recursos através do site (incluindo o lançamento de novas ferramentas e recursos). Tais recursos e/ou serviços novos também devem estar sujeitos a esses Termos de serviço.
                </p>


                <h3>SEÇÃO 8 - LINKS DE TERCEIROS</h3>

                <p style="text-align: justify">
                    Certos produtos, conteúdos e serviços disponíveis pelo nosso Serviço podem incluir materiais de terceiros.

                    Os links de terceiros nesse site podem te direcionar para sites de terceiros que não são afiliados a nós. Não nos responsabilizamos por examinar ou avaliar o conteúdo ou precisão. Não garantimos e nem temos obrigação ou responsabilidade por quaisquer materiais ou sites de terceiros, ou por quaisquer outros materiais, produtos ou serviços de terceiros.

                    Não somos responsáveis por quaisquer danos ou prejuízos relacionados com a compra ou uso de mercadorias, serviços, recursos, conteúdo, ou quaisquer outras transações feitas em conexão com quaisquer sites de terceiros. Por favor, revise com cuidado as políticas e práticas de terceiros e certifique-se que você as entende antes de efetuar qualquer transação. As queixas, reclamações, preocupações ou questões relativas a produtos de terceiros devem ser direcionadas ao terceiro.
                </p>

                <h3>SEÇÃO 9 - COMENTÁRIOS, FEEDBACK, ETC. DO USUÁRIO</h3>

                <p style="text-align: justify">
                    Se, a nosso pedido, você enviar certos itens específicos (por exemplo, participação em um concurso), ou sem um pedido nosso, você enviar ideias criativas, sugestões, propostas, planos, ou outros materiais, seja online, por e-mail, pelo correio, ou de outra forma (em conjunto chamados de 'comentários'), você concorda que podemos, a qualquer momento, sem restrição, editar, copiar, publicar, distribuir, traduzir e de outra forma usar quaisquer comentários que você encaminhar para nós. Não nos responsabilizamos por: (1) manter quaisquer comentários em sigilo; (2) indenizar por quaisquer comentários; ou (3) responder quaisquer comentários.

                    Podemos, mas não temos a obrigação, de monitorar, editar ou remover conteúdo que nós determinamos a nosso próprio critério ser contra a lei, ofensivo, ameaçador, calunioso, difamatório, pornográfico, obsceno ou censurável ou que viole a propriedade intelectual de terceiros ou estes Termos de serviço.

                    Você concorda que seus comentários não violarão qualquer direito de terceiros, incluindo direitos autorais, marcas registradas, privacidade, personalidade ou outro direito pessoal ou de propriedade. Você concorda que os seus comentários não vão conter material difamatório, ilegal, abusivo ou obsceno. Eles também não conterão nenhum vírus de computador ou outro malware que possa afetar a operação do Serviço ou qualquer site relacionado. Você não pode usar um endereço de e-mail falso, fingir ser alguém diferente de si mesmo, ou de outra forma enganar a nós ou terceiros quanto à origem de quaisquer comentários. Você é o único responsável por quaisquer comentários que você faz e pela veracidade deles. Nós não assumimos qualquer responsabilidade ou obrigação por quaisquer comentários publicados por você ou por qualquer terceiro.
                </p>


                <h3>SEÇÃO 10 - INFORMAÇÕES PESSOAIS</h3>

                <p style="text-align: justify">

                    O envio de suas informações pessoais através da loja é regido pela nossa Política de privacidade. Ver nossa Política de privacidade.
                </p>

                <h3>SEÇÃO 11 - ERROS, IMPRECISÕES E OMISSÕES</h3>

                <p style="text-align: justify">
                    Ocasionalmente, pode haver informações no nosso site ou no Serviço que contém erros tipográficos, imprecisões ou omissões que possam relacionar-se a descrições de produtos, preços, promoções, ofertas, taxas de envio do produto, o prazo de envio e disponibilidade. Reservamos o direito de corrigir quaisquer erros, imprecisões ou omissões, e de alterar ou atualizar informações ou cancelar encomendas caso qualquer informação no Serviço ou em qualquer site relacionado seja imprecisa, a qualquer momento e sem aviso prévio (até mesmo depois de você ter enviado o seu pedido).

                    Não assumimos nenhuma obrigação de atualizar, alterar ou esclarecer informações no Serviço ou em qualquer site relacionado, incluindo, sem limitação, a informações sobre preços, exceto conforme exigido por lei. Nenhuma atualização específica ou data de atualização no Serviço ou em qualquer site relacionado, deve ser utilizada para indicar que todas as informações do Serviço ou em qualquer site relacionado tenham sido modificadas ou atualizadas.
                </p>


                <h3>SEÇÃO 12 - USOS PROIBIDOS</h3>

                <p style="text-align: justify">
                    Além de outras proibições, conforme estabelecido nos Termos de serviço, você está proibido de usar o site ou o conteúdo para: (a) fins ilícitos; (b) solicitar outras pessoas a realizar ou participar de quaisquer atos ilícitos; (c) violar quaisquer regulamentos internacionais, provinciais, estaduais ou federais, regras, leis ou regulamentos locais; (d) infringir ou violar nossos direitos de propriedade intelectual ou os direitos de propriedade intelectual de terceiros; (e) para assediar, abusar, insultar, danificar, difamar, caluniar, depreciar, intimidar ou discriminar com base em gênero, orientação sexual, religião, etnia, raça, idade, nacionalidade ou deficiência; (f) apresentar informações falsas ou enganosas; (g) fazer o envio ou transmitir vírus ou qualquer outro tipo de código malicioso que será ou poderá ser utilizado para afetar a funcionalidade ou operação do Serviço ou de qualquer site relacionado, outros sites, ou da Internet; (h) coletar ou rastrear as informações pessoais de outras pessoas; (i) para enviar spam, phishing, pharm, pretext, spider, crawl, ou scrape; (j) para fins obscenos ou imorais; ou (k) para interferir ou contornar os recursos de segurança do Serviço ou de qualquer site relacionado, outros sites, ou da Internet. Reservamos o direito de rescindir o seu uso do Serviço ou de qualquer site relacionado por violar qualquer um dos usos proibidos.
                </p>

                <h3>SEÇÃO 13 - ISENÇÃO DE RESPONSABILIDADE DE GARANTIAS; LIMITAÇÃO DE RESPONSABILIDADE</h3>

                <p style="text-align: justify">
                    Nós não garantimos, representamos ou justificamos que o seu uso do nosso serviço será pontual, seguro, sem erros ou interrupções.

                    Não garantimos que os resultados que possam ser obtidos pelo uso do serviço serão precisos ou confiáveis.

                    Você concorda que de tempos em tempos, podemos remover o serviço por períodos indefinidos de tempo ou cancelar a qualquer momento, sem te notificar.

                    Você concorda que o seu uso ou incapacidade de usar o serviço é por sua conta e risco. O serviço e todos os produtos e serviços entregues através do serviço são, exceto conforme declarado por nós) fornecidos sem garantia e conforme a disponibilidade para seu uso, sem qualquer representação, garantias ou condições de qualquer tipo, expressas ou implícitas, incluindo todas as garantias implícitas ou condições de comercialização, quantidade, adequação a uma finalidade específica, durabilidade, título, e não violação.

                    Em nenhuma circunstância o Mittel Estagios, nossos diretores, oficiais, funcionários, afiliados, agentes, contratantes, estagiários, fornecedores, prestadores de serviços ou licenciadores serão responsáveis por qualquer prejuízo, perda, reclamação ou danos diretos, indiretos, incidentais, punitivos, especiais ou consequentes de qualquer tipo, incluindo, sem limitação, lucros cessantes, perda de receita, poupanças perdidas, perda de dados, custos de reposição, ou quaisquer danos semelhantes, seja com base em contrato, ato ilícito (incluindo negligência), responsabilidade objetiva ou de outra forma, decorrentes do seu uso de qualquer um dos serviços ou quaisquer produtos adquiridos usando o serviço, ou para qualquer outra reclamação relacionada de alguma forma ao seu uso do serviço ou qualquer produto, incluindo, mas não limitado a, quaisquer erros ou omissões em qualquer conteúdo, ou qualquer perda ou dano de qualquer tipo como resultado do uso do serviço ou qualquer conteúdo (ou produto) publicado, transmitido ou de outra forma disponível através do serviço, mesmo se alertado ​​de tal possibilidade. Como alguns estados ou jurisdições não permitem a exclusão ou a limitação de responsabilidade por danos consequentes ou incidentais, em tais estados ou jurisdições, a nossa responsabilidade será limitada à extensão máxima permitida por lei.
                </p>


                <h3>SEÇÃO 14 - INDENIZAÇÃO</h3>

                <p style="text-align: justify">
                    Você concorda em indenizar, defender e isentar Mittel Estagios e nossos subsidiários, afiliados, parceiros, funcionários, diretores, agentes, contratados, licenciantes, prestadores de serviços, subcontratados, fornecedores, estagiários e funcionários, de qualquer reclamação ou demanda, incluindo honorários de advogados, por quaisquer terceiros devido à violação destes Termos de serviço ou aos documentos que incorporam por referência, ou à violação de qualquer lei ou os direitos de um terceiro.
                </p>

                <h3>SEÇÃO 15 - INDEPENDÊNCIA</h3>

                <p style="text-align: justify">
                    No caso de qualquer disposição destes Termos de serviço ser considerada ilegal, nula ou ineficaz, tal disposição deve, contudo, ser aplicável até ao limite máximo permitido pela lei aplicável, e a porção inexequível será considerada separada desses Termos de serviço. Tal determinação não prejudica a validade e aplicabilidade de quaisquer outras disposições restantes.
                </p>

                <h3>SEÇÃO 16 - RESCISÃO</h3>

                <p style="text-align: justify">
                    As obrigações e responsabilidades das partes incorridas antes da data de rescisão devem continuar após a rescisão deste acordo para todos os efeitos.

                    Estes Termos de Serviço estão em vigor, a menos que seja rescindido por você ou por nós. Você pode rescindir estes Termos de serviço a qualquer momento, notificando-nos que já não deseja utilizar os nossos serviços, ou quando você deixar de usar o nosso site.

                    Se em nosso critério exclusivo você não cumprir com qualquer termo ou disposição destes Termos de serviço, nós também podemos rescindir este contrato a qualquer momento sem aviso prévio e você ficará responsável por todas as quantias devidas até a data da rescisão; também podemos lhe negar acesso a nossos Serviços (ou qualquer parte deles).
                </p>

                <h3>SEÇÃO 17 - ACORDO INTEGRAL</h3>

                <p style="text-align: justify">
                    Caso não exerçamos ou executemos qualquer direito ou disposição destes Termos de serviço, isso não constituirá uma renúncia de tal direito ou disposição.

                    Estes Termos de serviço e quaisquer políticas ou normas operacionais postadas por nós neste site ou no que diz respeito ao serviço constituem a totalidade do acordo  entre nós. Estes termos regem o seu uso do Serviço, substituindo quaisquer acordos anteriores ou contemporâneos, comunicações e propostas, sejam verbais ou escritos, entre você e nós (incluindo, mas não limitado a quaisquer versões anteriores dos Termos de serviço).

                    Quaisquer ambiguidades na interpretação destes Termos de serviço não devem ser interpretadas contra a parte que os redigiu.
                </p>

                <h3>SEÇÃO 18 - LEGISLAÇÃO APLICÁVEL</h3>

                <p style="text-align: justify">
                    Esses Termos de serviço e quaisquer acordos separados em que nós lhe fornecemos os Serviços devem ser regidos e interpretados de acordo com as leis de Itabira, Itabira, MG, 35900491, Brazil.
                </p>

                <h3>SEÇÃO 19 - ALTERAÇÕES DOS TERMOS DE SERVIÇO</h3>

                <p style="text-align: justify">
                    Você pode rever a versão mais atual dos Termos de serviço a qualquer momento nessa página.

                    Reservamos o direito, a nosso critério, de atualizar, modificar ou substituir qualquer parte destes Termos de serviço ao publicar atualizações e alterações no nosso site. É sua responsabilidade verificar nosso site periodicamente. Seu uso contínuo ou acesso ao nosso site ou ao Serviço após a publicação de quaisquer alterações a estes Termos de serviço constitui aceitação dessas alterações.
                </p>

                <h3>SEÇÃO 20 - INFORMAÇÕES DE CONTATO</h3>
                <p style="text-align: justify">

                    As perguntas sobre os Termos de serviço devem ser enviadas para nós através do email: mittel.master@gmail.com ou através do "fale com a gente" na seção contato da página inicial.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
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
            <div class="intro-heading">Bem-vindo à Mittel</div>
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
                <h3 class="section-subheading text-muted">Somos uma Startup com o intuito de criar uma plataforma capaz de ajudar
                empresas e estudantes.
                De que forma?
                O estagiário irá se cadastrar na nossa plataforma, preencher seu perfil e pronto.
                Com os perfis cadastrados, as empresas poderão acessar a nossa plataforma e encontrar o seu estagiário.</h3>
            </div>
        </div>
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
                        <b><p class="alert alert-{{ $msg }}" style="color: black">{{ mb_strtoupper(Session::get('alert-' . $msg), 'UTF-8') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></b>
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
                                <input type="text" class="form-control" placeholder="Informe seu Nome *" id="contact_name" name="contact_name" required data-validation-required-message="Por favor insira seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Informe seu Email *" id="contact_email" name="contact_email" required data-validation-required-message="Por favor insira seu endereço de email.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Informe seu Telefone *" id="contact_phone" name="contact_phone" required data-validation-required-message="Por Favor insira seu número de telefone.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="{{'Digite sua Mensagem aqui *'}}" id="contact_message" name="contact_message" required data-validation-required-message="Por favor insira a mensagem."></textarea>
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
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        {{--<li><a href="#"><i class="fa fa-linkedin"></i></a>--}}
                        {{--</li>--}}
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li>
                        <a href="javascript:void(0)" onclick="politicaprivacidade()" data-toggle="modal" data-target=".bs-modal">Políticas de Privacidade</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" onclick="termosuso()" data-toggle="modal" data-target=".bs-modal">Termos de Uso</a>
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

    function politicaprivacidade() {
        $('#politica_privacidade').modal({
            show: true
        });
    }

    function termosuso() {
        $('#termos_uso').modal({
            show: true
        });
    }

</script>
<!-- Mascara para telefone -->

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/agency.min.js"></script>

</body>

</html>