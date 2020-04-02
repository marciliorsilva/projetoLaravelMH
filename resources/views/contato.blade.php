@extends('templates.baseTemplate')
@section('conteudo-view')
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner3.jpg)">
   <div class="banner-text">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="banner-heading">
                  <h1 class="banner-title">Contato</h1>
                  <ol class="breadcrumb">
                     <li>Pagina Inicial</li>
                     <li><a href="#">Contato</a></li>
                  </ol>
               </div>
            </div><!-- Col end -->
         </div><!-- Row end -->
      </div><!-- Container end -->
   </div><!-- Banner text end -->
</div><!-- Banner area end --> 
<section id="main-container" class="main-container">
   <div class="container">


      <div class="row">
         <div class="col-md-4">
            <div class="ts-service-box-bg text-center">
               <span class="ts-service-icon icon-round">
                  <i class="fa fa-map-marker"></i>
               </span>
               <div class="ts-service-box-content">
                  <h4>Visite nosso escritório</h4>
                  <p>Avenida Doutor Belmínio Correia - Novo do Carmelo - Nº 480 - 3º Andar - Sala 303 - Centro, Camaragibe - PE.</p>
              </div>
            </div>
         </div><!-- Col 1 end -->

         <div class="col-md-4">
            <div class="ts-service-box-bg text-center">
               <span class="ts-service-icon icon-round">
                  <i class="fa fa-envelope"></i>
               </span>
               <div class="ts-service-box-content">
                  <h4>Envio-nos um email</h4>
                  <p>diretoria@mhacesso.com.br</p>
              </div>
            </div>
         </div><!-- Col 2 end -->

         <div class="col-md-4">
            <div class="ts-service-box-bg text-center">
               <span class="ts-service-icon icon-round">
                  <i class="fa fa-phone-square"></i>
               </span>
               <div class="ts-service-box-content">
                  <h4>Ligue-nos</h4>
                  <p>(81) 3118-0202</p>
                  <p>(81) 98883-1746</p>
              </div>
            </div>
         </div><!-- Col 3 end -->

      </div><!-- 1st row end -->

      
      <div class="row">
         <div class="col-md-12">
            <div class="embed-responsive embed-responsive-16by9" style="margin-bottom: 20px;">
           <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63212.736502487096!2d-35.04813945489204!3d-8.019957071464647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1a4f9f2acfaf%3A0x4fd0d0192d506638!2sMH%20Acesso!5e0!3m2!1spt-BR!2sbr!4v1584900861137!5m2!1spt-BR!2sbr"></iframe>
         </div>
      </div>
     
      <div class="row">

         <div class="col-md-12">
            
            <h3 class="column-title text-center">Mensagem</h3>

            <form id="contact-form" action="contact-form.php" method="post" role="form">
               <div class="error-container"></div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label>Nome</label>
                     <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" id="email" 
                        placeholder="" type="email" required>
                     </div>
                  </div>
                   <div class="col-md-12">
                     <div class="form-group">
                        <label>Telefone</label>
                        <input class="form-control" name="telefone" id="telefone" 
                        placeholder="" type="text" required>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label>Assunto</label>
                       <select type="text" id="assunto" class="form-control" placeholder="selecione" required data-error="Por favor selecione um assunto">
                        <option value="" selected="selected"> Assunto</option>
                            <option value="Crítica"> Crítica</option>
                            <option value="Dúvida"> Dúvida</option>
                            <option value="Quero comprar"> Quero comprar</option>
                            <option value="Quero Alugar"> Quero alugar</option>
                            <option value="Tenho uma necessidade"> Tenho uma necessidade</option>
                            <option value="Outros"> Outros</option>
                    <select>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label>Messagem</label>
                  <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
               </div>
               <div class="text-right"><br>
                  <button class="btn btn-primary solid blank" type="submit">Envia mensagem</button> 
               </div>
            </form>
         </div>
      
      </div><!-- Content row -->
   </div><!-- Conatiner end -->
</section><!-- Main container end -->
@endsection