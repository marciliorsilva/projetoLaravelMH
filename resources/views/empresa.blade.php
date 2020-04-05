@extends('templates.baseTemplate')
@section('conteudo-view')
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
    <div class="banner-text">
       <div class="container">
          <div class="row">
             <div class="col-xs-12">
                <div class="banner-heading">
                   <h1 class="banner-title">Empresa</h1>
                </div>
             </div><!-- Col end -->
          </div><!-- Row end -->
       </div><!-- Container end -->
    </div><!-- Banner text end -->
 </div><!-- Banner area end --> 


 <section id="main-container" class="main-container">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <h3 class="column-title">Sobre nós</h3>
             <p id="sobre" > A MHACESSO, fundada em 2009, é uma empresa de Tecnologia em Controle de Ponto e Acesso que está no mercado há mais de 10 anos fornecendo Assistência e Consultoria Técnica em Controles de Acesso , Ponto e Segurança.
                Nossos serviços são baseados em muita experiência e qualidade de nossa equipe, prestamos serviços para clientes de diferentes segmentos de mercado: Indústrias, Comércios, Empresas Públicas ou Privadas, Condomínios, Refeitórios, Academias de Ginástica Natação , Clubes, etc.
             </p>
             <p></p>

          </div><!-- Col end -->
          <div class="col-md-6">
               
            <div id="page-slider" class="owl-carousel owl-theme page-slider small-bg">

               <div class="item" style="background-image:url(images/slider-pages/slide-page1.jpg)">
                  <div class="container">
                     <div class="box-slider-content">
                        <div class="box-slider-text">
                           <h2 class="box-slide-title">Leadership</h2>
                        </div>    
                     </div>
                  </div>
               </div><!-- Item 1 end -->

               <div class="item" style="background-image:url(images/slider-pages/slide-page2.jpg)">
                  <div class="container">
                     <div class="box-slider-content">
                        <div class="box-slider-text">
                           <h2 class="box-slide-title">Relationships</h2>
                        </div>    
                     </div>
                  </div>
               </div><!-- Item 1 end -->

               <div class="item" style="background-image:url(images/slider-pages/slide-page3.jpg)">
                  <div class="container">
                     <div class="box-slider-content">
                        <div class="box-slider-text">
                           <h2 class="box-slide-title">Performance</h2>
                        </div>    
                     </div>
                  </div>
               </div><!-- Item 1 end -->
            </div><!-- Page slider end-->          
         

         </div><!-- Col end -->

       </div><!-- Content row end -->

    </div><!-- Container end -->
    <div id="ts-features" class="ts-features">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="ts-intro">
                        <h2 class="into-title">Nossa Missão</h2>
                        
                        <p>É ser uma empresa de referência. Reconhecida em todo nordeste na área de tecnologia, pela qualidade de nossos produtos e serviços voltados a controle de acesso, ponto e segurança. Com o compromisso de melhor atender e satisfazer as necessidades dos nossos clientes.</p>
                    </div><!-- Intro box end -->
    
    
                </div><!-- Col end -->
    
                <div class="col-md-6 col-xs-12">
                    <div class="ts-intro">
                        <h2 class="into-title">Nossa Visão</h2>
                        <p>Ser a empresa numero 1º no Brasil no ramo de consultoria em controle de acesso, ponto e segurança.</p>
                    </div><!-- Intro box end -->
    
    
                </div><!-- Col end -->
    
                
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div>
 </section><!-- Main container end -->   

@endsection