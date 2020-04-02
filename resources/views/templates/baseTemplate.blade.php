<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title> {{$titulo}} </title>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="Content-language" content="pt-BR" />
        <meta name="lang" content="pt-BR" />
        <meta name="googlebot" content="follow, index" />
        <meta name="robots" content="follow, index" /> 
        <meta name="description" content="Na MH acesso você encontra Relógio de ponto eletrônico informatizado, catracas, catraca para controle de acesso, protocoladores, controle de vigilancia e biometria, Contratos de Manutenção, Contrato de Apontamento, Sistema de ponto e acesso" />
        <meta name="keywords" content="relógio,ponto,acesso,treinamento,sistema,ponto eletrônico,manutenção,contratos,relógio de ponto,crachás,relógio ponto,relógios,folha de pagamento,eletrônico,cartões de ponto,bobinas,controle de ponto,controle de acesso,controle de vigilancia,informatizado,catraca,catracas,biometria,biometrico,MH acesso,digital,impressão digital" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <!-- CSS
	    ================================================== -->

	    <!-- Bootstrap -->
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!-- Template styles-->
	    <link rel="stylesheet" href="css/style.css">
	    <!-- Responsive styles-->
	    <link rel="stylesheet" href="css/responsive.css">
	    <!-- FontAwesome -->
	    <link rel="stylesheet" href="css/font-awesome.min.css">
	    <!-- Animation -->
	    <link rel="stylesheet" href="css/animate.css">
	    <!-- Owl Carousel -->
	    <link rel="stylesheet" href="css/owl.carousel.min.css">
	    <link rel="stylesheet" href="css/owl.theme.default.min.css">
	    <!-- Colorbox -->
	    <link rel="stylesheet" href="css/colorbox.css">

	    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        

    </head>

    <body>
        <div class="body-inner">
            @include('templates.menu')
			@yield('conteudo-view')
			<!-- rodape -->
			<footer id="footer" class="footer bg-overlay">
				<div class="footer-main">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-12 col-xs-12 footer-widget footer-about">
								<h3 class="widget-title">Sobre nós</h3>
								
								<p>Uma empresa de Tecnologia em Controle de Ponto e Acesso que fornece Assistência e Consultoria Técnica em Controles de Acesso , Ponto e Segurança.</p>
								<div class="footer-social">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										
									</ul>
								</div><!-- Footer social end -->
							</div><!-- Col end -->

							<div class="col-md-4 col-sm-12 col-xs-12 footer-widget">
								<h3 class="widget-title">O horário comercial</h3>
								<div class="working-hours">
									Nosso suporte disponíveis para ajudá-lo.
									<br><br> Segunda - Sexta: <span class="text-right">08:00 - 18:00 </span>
									<br> Sábado, Domingo e feriados: <span class="text-right">Fechado</span>
								</div>
							</div><!-- Col end -->

							<div class="col-md-4 col-sm-12 col-xs-12 footer-widget">
								<h3 class="widget-title">Serviços</h3>
								<ul class="list-arrow">
									<li><a href="service-single.html">Suporte</a></li>
									<li><a href="service-single.html">Treinamento</a></li>
									<li><a href="service-single.html">Apontamento</a></li>
									<li><a href="service-single.html">Assistência</a></li>
									<li><a href="service-single.html">Consultoria</a></li>
									<li><a href="service-single.html">Venda/Compra</a></li>
								</ul>
							</div><!-- Col end -->
							<!--
							<div id="escritorio-desktop"  class="col-md-8 col-sm-12 footer-widget" style="position: absolute; margin-top: 210px; height: 100px;">	
								<h3 class="widget-title">Escritório</h3>
								
								<p>Avenida Doutor Belmínio Correia - Novo do Carmelo - Nº 480 - 3º Andar - Sala 303 - Centro, Camaragibe - PE.</p>
							</div>
							-->
						</div><!-- Row end -->
						

					</div><!-- Container end -->
				</div><!-- Footer main end -->

				<div class="copyright">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<div class="copyright-info text-center">
									<span>Copyright © 2020 Todos os direitos reservados</span>
								</div>
							</div>
						</div><!-- Row end -->

						<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
							<button class="btn btn-primary" title="Back to Top">
								<i class="fa fa-angle-double-up"></i>
							</button>
						</div>

					</div><!-- Container end -->
				</div><!-- Copyright end -->

			</footer><!-- Fim do rodape -->

			<!-- Arquivos javascript
			================================================== -->

			<!-- initialize jQuery Library -->
			<script type="text/javascript" src="js/jquery.js"></script>
			<!-- Bootstrap jQuery -->
			<script type="text/javascript" src="js/bootstrap.min.js"></script>
			<!-- Owl Carousel -->
			<script type="text/javascript" src="js/owl.carousel.min.js"></script>
			<!-- Color box -->
			<script type="text/javascript" src="js/jquery.colorbox.js"></script>
			<!-- Isotope -->
			<script type="text/javascript" src="js/isotope.js"></script>
			<script type="text/javascript" src="js/ini.isotope.js"></script>

			<!-- Template custom -->
			<script type="text/javascript" src="js/custom.js"></script>
					
        </div>
       


    </body>
</html>