@extends('templates.baseTemplate')

@section('conteudo-view')
	<!-- Carousel -->
	<div id="main-slide" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ol class="carousel-indicators visible-lg visible-md">
			<li data-target="#main-slide" data-slide-to="0" class="active"></li>
			<li data-target="#main-slide" data-slide-to="1"></li>
			<li data-target="#main-slide" data-slide-to="2"></li>
			<li data-target="#main-slide" data-slide-to="3"></li>
		</ol>
		<!--/ Indicators end-->

		<!-- Carousel inner -->
		<div class="carousel-inner">

			<div class="item active" style="background-image:url(images/slider-main/bg1.jpg)">
				<div class="slider-content text-right" style="margin-top: 130px;">
					<div class="col-md-12">
						<h3 class="slide-sub-title animated7">Hexa advanced</h3>
						<p class="slider-description lead animated7">O Hexa Advanced é um relógio de ponto eletrônico (REP) <br>homologado pelo Ministério do Trabalho e Emprego <br> certificado pelo Inmetro. Mais completo do mercado.</p>
						<p>
							<a href="#" class="slider btn btn-primary">Veja mais</a>
							<a href="#" class="slider btn btn-primary border">Solicitar Orçamento</a>
						</p>
					</div>
				</div>
			</div>
			<!--/ Carousel item 1 end -->

			<div class="item" style="background-image:url(images/slider-main/bg2.jpg)">
				<div class="slider-content text-left" style="margin-top: 130px;">
						<div class="col-md-12">
						<h3 class="slide-sub-title animated7">Lumen Comanda</h3>
						<p class="slider-description lead animated7" >A catraca Lumen Comanda foi desenvolvida exclusivamente<br>  para estabelecimentos comerciais do setor alimentício.</p>
						<p>
							<a href="#" class="slider btn btn-primary">Veja mais</a>
							<a href="#" class="slider btn btn-primary border">Solicitar Orçamento</a>
						</p>
					</div>
				</div>
			</div>
			<!--/ Carousel item 2 end -->

			<div class="item" style="background-image:url(images/slider-main/bg3.jpg)">
				<div class="slider-content text-right" style="margin-top: 130px;">
					<div class="col-md-12">
						<h3 class="slide-sub-title animated7" >Acesso Ligth</h3>
						<p class="slider-description lead animated7" >Controle de acesso com identificação por senha e cartão proximidade.</p>
						<p>
							<a href="#" class="slider btn btn-primary">Veja mais</a>
							<a href="#" class="slider btn btn-primary border" >Solicitar Orçamento</a>
						</p>
					</div>
				</div>
			</div>
			<!--/ Carousel item 3 end -->
			<div class="item" style="background-image:url(images/slider-main/bg4.jpg)">
				<div class="slider-content text-left" style="margin-top: 130px;">
						<div class="col-md-12">
						<h3 class="slide-sub-title animated7">Lumen Black</h3>
						<p class="slider-description lead animated7" >Catraca biométrica para controle de acesso simples,<br> seguro e eficaz.</p>
						<p>
							<a href="#" class="slider btn btn-primary">Veja mais</a>
							<a href="#" class="slider btn btn-primary border">Solicitar Orçamento</a>
						</p>
					</div>
				</div>
			</div>

			<div class="item" style="background-image:url(images/slider-main/bg5.jpg)">
				<div class="slider-content text-right" style="margin-top: 130px;">
					<div class="col-md-12">
						<h3 class="slide-sub-title animated7">Crachás PVC</h3>
						<p class="slider-description lead animated7">Controle de acesso com identificação por senha e cartão proximidade.</p>
						<p>
							<a href="#" class="slider btn btn-primary">Veja mais</a>
							<a href="#" class="slider btn btn-primary border">Solicitar Orçamento</a>
						</p>
					</div>
				</div>
			</div>

		</div><!-- Carousel inner end-->

		<!-- controles -->
		<a class="left carousel-control" href="#main-slide" data-slide="prev">
			<span><i class="fa fa-angle-left"></i></span>
		</a>
		<a class="right carousel-control" href="#main-slide" data-slide="next">
			<span><i class="fa fa-angle-right"></i></span>
		</a>
	</div>
	<!--/ Fim Carousel-->
	<!-- Informativo -->
	<section class="call-to-action-box no-padding">
		<div class="container">
			<div class="action-style-box">
				<div class="row">
					<div class="col-md-12">
						<div class="call-to-action-text text-center">
							<h3 class="action-title">Os melhores produtos do mercado, de alta qualidade para você e sua empresa. Solicite já!</h3>
						</div>
					</div><!-- Col end -->
				
				</div><!-- row end -->
			</div><!-- Action style box -->
		</div><!-- Container end -->
	</section><!-- Fim Informativo -->
	<!-- Serviços -->
	<section id="ts-service-area" class="ts-service-area">
		<div class="container">
			<div class="row text-center">
				
				<h3 class="section-sub-title" style="margin: 0 0 40px;">Serviços</h3>
				
			</div>
			<!--/ Title row end -->

			<div class="row">
				<div class="col-md-4">
					<div class="ts-service-box" >
						<div class="ts-service-box-img pull-left">
							<img src="images/icon-image/suporte.png" alt="" />
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a href="#">Suporte</a></h3>
							<p>Contamos com uma equipe especializada, que está à sua disposição.</p>
						</div>
					</div><!-- Service 1 end -->

					<div class="ts-service-box">
						<div class="ts-service-box-img pull-left">
							<img src="images/icon-image/treinamento.png" alt="" />
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a href="#">Treinamento</a></h3>
							<p>Realizamos treinamentos em sistema de ponto e acesso.</p>
						</div>
					</div><!-- Service 2 end -->

					<div class="ts-service-box">
						<div class="ts-service-box-img pull-left">
							<img src="images/icon-image/apontamento.png" alt="" />
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a href="#">Apontamento</a></h3>
							<p>Calculamos a folha de pagamento dos seus funcionários com agilidade e eficiência.</p>
						</div>
					</div><!-- Service 3 end -->

				</div><!-- Col end -->

				<div class="col-md-4 text-center">
					<img class="service-center-img img-responsive" src="images/services/mh-servico.gif" alt="" loop="-1" />
				</div><!-- Col end -->

				<div class="col-md-4">
					<div class="ts-service-box">
						<div class="ts-service-box-img pull-left">
							<img src="images/icon-image/assistencia.png" alt="" />
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a href="#">Assistência</a></h3>
							<p>Realizamos manutenções preventivas ou corretivas em seu equipamento, com grande eficiência e baixo custo.</p>
						</div>
					</div><!-- Service 4 end -->

					<div class="ts-service-box">
						<div class="ts-service-box-img pull-left">
							<img src="images/icon-image/consultoria.png" alt="" />
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a href="#">Consultoria</a></h3>
							<p>Criando soluções inteligentes em Controle de acesso.</p>
						</div>
					</div><!-- Service 5 end -->

					<div class="ts-service-box">
						<div class="ts-service-box-img pull-left">
							<img src="images/icon-image/vendaAluguel.png" alt="" />
						</div>
						<div class="ts-service-box-info">
							<h3 class="service-box-title"><a href="#">Venda/Aluguel</a></h3>
							<p>Oferecemos os melhores orçamentos para você e sua empresa.</p>
						</div>
					</div><!-- Service 6 end -->
				</div><!-- Col end -->
			</div><!-- Content row end -->

		</div>
		<!--/ Container end -->
	</section><!-- Fim Serviços -->
	<!-- Novidades -->
	<section class="subscribe no-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="subscribe-call-to-acton">
						<h3>Seu equipamento está com problema? Entre em contato.</h3>
						<a href="#" class="btn btn-primary border"><i class="fa fa-whatsapp" aria-hidden="true"></i>WHATSAPP</a>
						<a href="#" class="btn btn-primary border" style="width: 60%;"> <i class="fa fa-comments-o" aria-hidden="true"></i> SOLICITAR CHAMADO</a>
	
					</div>
				</div><!-- Col end -->

				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="ts-newsletter">
						<div class="newsletter-introtext">
							<h4>Informe seu email</h4>
							<p>para receber novidades</p>
						</div>

						<div class="newsletter-form">
							<form action="#" method="post" class="form-inline">
								 <div class="form-group">
									  <input type="email" class="form-control" id="email" placeholder="email">
								  </div>
								  <button type="submit" class="btn btn-primary">Cadastrar</button>
							</form>
						</div>
					</div><!-- Newsletter end -->
				</div><!-- Col end -->

			</div><!-- Content row end -->
		</div>
		<!--/ Container end -->
	</section>
	<!--/ Fim novidades -->
	
@endsection