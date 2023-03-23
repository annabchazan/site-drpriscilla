<?php

    include_once("recaptchalib.php");

?>
<script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>
<title> Dra. Priscilla Ouverney </title>
<div id='sobre-nos' class="section-about-us">
    <div class="container">
        <div class="row">

            <div class="col-xl-6 col-lg-6">
                <div class="box-info">
                    <!-- <h2></h2> -->
                      <div data-aos="fade-right" data-aos-duration="1500">
                    <h1>Dra. Priscilla Ouverney</h1>
                    <p> Dra. Priscilla concluiu a graduação em odontologia pela Universidade Federal Fluminense (UFF) em 2009. Para mais, em 2015, ela não só finalizou seu mestrado em implantodontia pela faculdade São Leopoldo Mundic, como também iniciou sua imersão em harmonização facial. Todo esse trajeto foi efetivado por um objetivo principal, cuidar da saúde, bem estar e autoestima dos seus pacientes.
                        
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="welcome_thumb">
                    <div class="thumb_1">
                          <div data-aos="fade-left" data-aos-duration="1500">
                        <img src="img/dr.jpg" style="border-radius: 5px; max-height:450px; ">
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div id="servicos">
    <div class="doutores">
        <div class="container">
            <div class="doctors_title mb-55" style="text-align: center;">
                <h3>Serviços</h3><!--<span></span>--><br>
            </div>           
            <div class="row">
                <div class="col-md-3">
                    <div class="img-icon">
                        <div class="escuro">
                            <div data-aos="zoom-out" data-aos-duration="1500">
                         <img src="img/servicos/bichectomia.jpg" width="100%" style="border-radius: 5px; "><br><br></div>
                           <h3>Bichectomia</h3><br>
                        </div>
                     </div>   
                </div>
                 <div class="col-md-3">
                    <div class="img-icon">
                        <div class="claro4">
                            <div data-aos="zoom-in" data-aos-duration="1500">
                           <img src="img/servicos/extracao.jpg" width="100%" style="border-radius: 5px; "><br><br></div>
                           <h3>Extração de siso</h3><br>
                        </div>
                     </div>   
                </div>
            
          
                <div class="col-md-3">
                    <div class="img-icon">
                        <div class="claro3">
                            <div data-aos="zoom-out" data-aos-duration="1500">
                           <img src="img/servicos/implante.jpg" width="100%" style="border-radius: 5px; "><br><br></div>
                           <h3>Implante</h3><br>
                        </div>
                     </div>   
                </div>
           
            <div class="col-md-3">
                    <div class="img-icon">
                        <div class="claro1">
                            <div data-aos="zoom-in" data-aos-duration="1500">
                            <img src="img/servicos/harmonizacao.jpg" width="100%" style="border-radius: 5px; "><br><br></div>
                            <h3>Harmonização facial</h3><br>
                        </div>
                     </div>   
                </div>
            </div>
          <br><br> <a href="servicos"> <button  class="button button-contactForm boxed-btn"  style="display: block; margin: 0 auto;" >Ver mais</button></a>
        </div>
    </div>
</div>
<div id="procedimentos">
<div class="doutores">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="doctors_title mb-55" style="text-align:center;">
                    <h1>Procedimentos realizados</h1>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="expert_active owl-carousel">
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <img src="img/resultado/7.jpg" >
                        </div>
                        <div class="experts_name text-center">
                            <h3>Bichectomia</h3>

                        </div>
                    </div>
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <img src="img/resultado/1.jpg" >
                        </div>
                        <div class="experts_name text-center">
                            <h3>Preenchimento Labial</h3>

                        </div>
                    </div>
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <img src="img/resultado/2.jpg">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Implantodontia</h3>

                        </div>
                    </div>
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <img src="img/resultado/3.jpg" >
                        </div>
                        <div class="experts_name text-center">
                            <h3>Toxina botulínica</h3>

                        </div>
                    </div>
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <img src="img/resultado/6.jpg" >
                        </div>
                        <div class="experts_name text-center">
                            <h3>Rinomodelação</h3>

                        </div>
                    </div>
                    
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <img src="img/resultado/5.jpg" >
                        </div>
                        <div class="experts_name text-center">
                            <h3 >Clareamento</h3>

                        </div>
                    </div>
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <img src="img/resultado/4.jpg" >
                        </div>
                        <div class="experts_name text-center">
                            <h3>Implantodontia</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<div id="contato" class="section-cotent">
        <div class="container">
           <div class='form-contato'>
           <br> 
            <h3> Contato </h3>
            </div>
           
              <div class="row">
                <div class="col-md-7 col-sm-6">
                  <?php if ($_GET['msg'] == "enviado") : ?>
                        <div class="mensagem">
                            <p class="full-row">
                                Mensagem enviada com sucesso. &nbsp;&nbsp;
                                <a href="https://www.drapriscillaouverney.com.br/#contato">
                                    <span class="fecha_mensagem">&times;</span>
                                </a>
                            </p>
                        </div>
                        <br>
                         <?php elseif ($_GET['msg'] == "semvalidacao") : ?>
                        <div class="mensagem2">
                            <p class="full-row">
                              Por favor, confirme que não é um robô. &nbsp; &nbsp;
                                <a href="https://www.drapriscillaouverney.com.br/#contato">
                                    <span class="fecha_mensagem">&times;</span>
                                </a>
                            </p>
                        </div>
                        <br>
                    <?php elseif ($_GET['msg'] == "erro") : ?>
                        <div class="mensagem2" >
                            <p class="full-row">
                                Erro ao enviar mensagem. &nbsp; &nbsp;
                                <a href="https://www.drapriscillaouverney.com.br/#contato">
                                    <span class="fecha_mensagem">&times;</span>
                                </a>
                            </p>
                        </div>
                        <br>
                    <?php endif ?>
                    <div class="contact-form">
                        <form action="envia_email.php" method="POST" enctype="multipart/form-data">
                            <p class="full-row">
                                <label for="name-id">Nome:</label>
                                <input type="text" id="name-id" name="name">
                            </p>
                            <p class="full-row">
                                <label for="email-id">Email:</label>
                                <input type="text" id="email-id" name="email">
                            </p>
                            <p class="full-row">
                                <label for="subject-id">Telefone:</label>
                                <input type="text" required autocomplete="off" maxlength="14" id="telefone-id" name="telefone">
                            </p>
                            <p class="full-row">
                                <label for="message">Mensagem:</label>
                                <textarea name="messagem" id="message" rows="6"></textarea>
                            </p>
                          <p class="full-row">
                  <div class="g-recaptcha" id="recaptcha" data-sitekey="6LeP72sdAAAAAFxeIt4xHmnoQOXN12A3p3GId8qn"></div>
            </p>
                             <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm boxed-btn" >Enviar</button>
            </div>
          
                        </form>
                    </div>
                </div>
                <!-- /.col-md-3 -->
                <div class="col-md-5 col-sm-6">
                    <h4 class="widget-title"><i class="fa fa-map-marker"></i> Nossa localização</h4>
                    <div class="map-holder">
                        <div class="google-map-canvas" id="map-canvas" style="height: 250px;">
                            <iframe class="maps-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.875997938641!2d-42.53211668557645!3d-22.282686621499273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x978b9600db7db3%3A0x38d7b2aaf6f817eb!2sDra%20Priscilla%20S.%20Ouverney%20-%20Odontologia!5e0!3m2!1spt-PT!2sbr!4v1637847117614!5m2!1spt-PT!2sbr" frameborder="0" style="border:0; width: 100%; height: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                        </div>
                    </div>
                    <!-- /.map-holder -->
                    <div class="contact-info">
                      
                        <span><i class="fa fa-home"></i> Rua Monte Líbano - Centro nº 55 <br>   Ed. Trade Center, sala 207</span>
                         <a href="https://api.whatsapp.com/send?phone=5522981145775"><span><i class="fa fa-whatsapp"></i>(22) 98114-5774</a></span>
                        <span><i class="fa fa-envelope"></i>ouverneypriscilla@gmail.com</span>
                    </div>
                </div>
                <!-- /.col-md-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
  