<?php



require_once('../include/class.phpmailer.php');







function email_locaweb($nome_remetente,$email_remetente,$nome_destinatario,$email_destinatario,$cc,$bcc,$nome_reply,$email_reply,$assunto,$mensagem)

{

$mailer = new PHPMailer();





$mailer->IsSMTP();

$mailer->SMTPDebug = 1;

$mailer->Port = 465; 

$mailer->Host = 'mail.humaneclinicadesaude.com.br'; 

 

//Para cPanel: 'localhost';

//Para Plesk 11 / 11.5: 'smtp.dominio.com.br';

 

//Descomente a linha abaixo caso revenda seja 'Plesk 11.5 Linux'

$mailer->SMTPSecure = 'ssl';

 

$mailer->SMTPAuth = true; //Define se haverá ou não autenticação no SMTP

$mailer->Username = 'contato@humaneclinicadesaude.com.br'; //Informe o e-mai o completo

$mailer->Password = 'LfF7k9^aEdJk'; //Senha da caixa postal







$mailer->FromName = $nome_remetente; //Nome que será exibido para o destinatário

$mailer->From = "contato@humaneclinicadesaude.com.br"; //Obrigatório ser a mesma caixa postal indicada em "username"   





$mailer->addReplyTo($email_reply);



$mailer->AddAddress($email_destinatario); //Destinatários



$mailer->AddCC($cc); // Copia



//$mailer->AddCC('luiz@friweb.com.br'); // Copia



$mailer->AddBCC($bcc); // Cópia Oculta





//$mailer->IsHTML(true);  // Define que o e-mail será enviado como HTML

$mailer->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)







$mailer->Subject = $assunto;



$mailer->Body = $mensagem;





if(!$mailer->Send())

{

echo "Mensagem nao enviada";

echo "Erro: " . $mailer->ErrorInfo; exit; 

print "E-mail enviado!";

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

 echo "A mensagem não pode ser enviada";

*/





}



//exit();



?>