<?php

//Defino a Chave do meu site
$secret_key = '6LeP72sdAAAAAOJldasI0koQiYBzLh-evYMTaSS6';

//Pego a validação do Captcha feita pelo usuário
$recaptcha_response = $_POST['g-recaptcha-response'];

// Verifico se foi feita a postagem do Captcha 
if(isset($recaptcha_response)){
        
    // Valido se a ação do usuário foi correta junto ao google
    $answer = 
        json_decode(
            file_get_contents(
                'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.
                '&response='.$_POST['g-recaptcha-response']
            )
        );

    // Se a ação do usuário foi correta executo o restante do meu formulário
    if($answer->success) {
        
        require_once('sistema_email_locaweb.php');
// Variaveis 
$nome = $_POST['name'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['messagem'];

$assunto = "Contato pelo Site";

$nome_destinatario = "Dra Priscilla Ouverney";

$email_destinatario = "ouverneypriscilla@gmail.com";
$cc = "";
$bcc = "";
$name_reply = $nome;
$email_reply = $email;

$mensagem_completa = "Nome: $nome \n";
$mensagem_completa .= "Telefone: $telefone \n";
$mensagem_completa .= "$mensagem";


$assunto = "Contato pelo Site";

if(email_locaweb($nome,$email,$nome_destinatario,$email_destinatario,$cc,$bcc,$name_reply, $email_reply ,$assunto, $mensagem_completa)==true){
     header("location: https://www.drapriscillaouverney.com.br/?msg=enviado#contato");
}else{
    header("location: https://www.drapriscillaouverney.com.br/?msg=erro#contato");
}
    }

    // Caso o Captcha não tenha sido validado 
    //retorno uma mensagem de erro. 
    else {
        header("location: https://www.drapriscillaouverney.com.br/?msg=semvalidacao#contato");
      
    }
}