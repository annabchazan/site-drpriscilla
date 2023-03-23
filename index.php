<?php 

/*include("include/sistema_referencia.php");



include("include/sistema_link.php");





include("include/sistema_data.php");

include("include/sistema_imagem.php");*/

/*include("include/sistema_conexao.php");

include("include/sistema_zeros.php");*/

include("include/sistema_protecao.php");



if(isset($_REQUEST['conteudo'])){

     $conteudo=anti_injection($_REQUEST['conteudo']);

}else{

     $conteudo="principal";

}



?>

<!DOCTYPE html>

     <html>

          <?php include("include/head.php");?>

          <body>

               <?php

               if($conteudo == 'principal'){

                    include("include/layout_header.php");

                    include("include/layout_carousel.php");

                    $arquivo = "include/conteudo_" . $conteudo . ".php";

                    if(file_exists($arquivo)){

                         include($arquivo);

                    }

               }else{

                    include("include/layout_header.php");

                 

                    $arquivo = "include/conteudo_" . $conteudo . ".php";

                    if(file_exists($arquivo)){

                         include($arquivo);

                    }

                   

                    

               }

               include("include/layout_footer.php");

               ?>



              

               

     <script src="js/vendor/modernizr-3.5.0.min.js"></script>

     <script src="js/vendor/jquery-1.12.4.min.js"></script>

     <script src="js/popper.min.js"></script>

     <script src="js/bootstrap.min.js"></script>

     <script src="js/owl.carousel.min.js"></script>

     <script src="js/isotope.pkgd.min.js"></script>

     

     <script src="js/waypoints.min.js"></script>

     <script src="js/jquery.counterup.min.js"></script>

     <script src="js/imagesloaded.pkgd.min.js"></script>

     <script src="js/scrollIt.js"></script>

     <script src="js/jquery.scrollUp.min.js"></script>

     <script src="js/wow.min.js"></script>

     <script src="js/nice-select.min.js"></script>

     <script src="js/jquery.slicknav.min.js"></script>

     <script src="js/jquery.magnific-popup.min.js"></script>

     <script src="js/plugins.js"></script>

     <script src="assets/parallax/parallax.min.js"></script>

     <script src="js/ajax_contato.js"></script>

     

     

     <!-- <script src="js/contact.js"></script>

     <script src="js/jquery.ajaxchimp.min.js"></script> -->

     <script src="js/jquery.form.js"></script>

     <script src="js/jquery.validate.min.js"></script>

     <!-- <script src="js/mail-script.js"></script>  -->

     <script src="js/main.js"></script>          

  </body>



</html>









<?php



 