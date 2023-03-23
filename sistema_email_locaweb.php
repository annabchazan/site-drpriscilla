<?php

require_once('PHPMailer/class.phpmailer.php');


function email_locaweb($nome_remetente,$email_remetente,$nome_destinatario,$email_destinatario,$cc,$bcc,$nome_reply,$email_reply,$assunto,$mensagem)
{
$mailer = new PHPMailer();


$mailer->IsSMTP();
$mailer->SMTPDebug = 1;
$mailer->Port = 587; 
$mailer->Host = 'smtp.gmail.com'; 
 
//Para cPanel: 'localhost';
//Para Plesk 11 / 11.5: 'smtp.dominio.com.br';
 
//Descomente a linha abaixo caso revenda seja 'Plesk 11.5 Linux'
$mailer->SMTPSecure = 'tls';
 
$mailer->SMTPAuth = true; //Define se haver� ou n�o autentica��o no SMTP
$mailer->Username = 'contatopriscillaouverney@gmail.com'; //Informe o e-mai o completo
$mailer->Password = 'priscilla4779'; //Senha da caixa postal



$mailer->FromName = $nome_remetente; //Nome que ser� exibido para o destinat�rio
$mailer->From = "formulariocursoenfermagem@gmail.com"; //Obrigat�rio ser a mesma caixa postal indicada em "username"   


$mailer->addReplyTo($email_reply);

$mailer->AddAddress($email_destinatario); //Destinat�rios

//$mailer->AddCC($cc); // Copia

//$mailer->AddCC('luiz@friweb.com.br'); // Copia

//$mailer->AddBCC($bcc); // C�pia Oculta


//$mailer->IsHTML(true);  // Define que o e-mail ser� enviado como HTML
$mailer->CharSet = 'UTF-8'; // Charset da mensagem (opcional)



$mailer->Subject = $assunto;

$mailer->Body = $mensagem;


if(!$mailer->Send())
{
echo "Mensagem nao enviada";
echo "Erro: " . $mailer->ErrorInfo; exit; 
print "E-mail enviado!";
return false;
}

/*$headers = "MIME-Version: 1.1\r\n";

$headers .= "Content-type: text/plain; charset=UTF-8\r\n";

$headers .= "From: contato@conderedondo.com.br\r\n"; // remetente

$headers .= "Return-Path: contato@conderedondo.com.br\r\n"; // return-path

$headers .= "Reply-To: <".$email_reply.">";
$envio = mail("contato@conderedondo.com.br", $assunto, $mensagem, $headers);
 
if($envio)
 echo "Mensagem enviada com sucesso";
else
 echo "A mensagem n�o pode ser enviada";
*/
return true;

}

//exit();

?>