<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer.php';
require 'Exception.php';
require 'SMTP.php';

function email($para_email, $para_nome, $assunto, $html) {
  $mail2 = new PHPMailer;
  $mail2->IsSMTP();

  $mail2->From = "konosuba12@outlook.com";
    $mail2->FromName = "Levtraz";

  $mail2->Host       = "go6.com.br";
  $mail2->Port       = "587";
  $mail2->SMTPAuth   = "580";
  $mail2->Username   = "go6com";
  $mail2->Password   = "1w1gZWH5";

    $mail2->AddAddress($para_email, $para_nome);

    $mail2->Subject = $assunto;

  $mail2->AltBody = "Para ver essa mensagem, use um programa compatível com HTML!";
    $mail2->MsgHTML($html);
  if ($mail2->Send("constantinofcaio@gmail.com")) {
    return "1";
  } else {
    return $mail2->ErrorInfo;
  }
}

$corpo_email = "<html><body><p>Dados do Formulario <br> </p></body></html>";

$controle = email("constantinofcaio@gmail.com", "Caio Ferreira", "Teste de envio", $corpo_email);

if ($controle == "1") {
echo "envio OK";
} else {
  echo $controle;
}


?>