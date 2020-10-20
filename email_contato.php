<?php

  if(isset($_POST['email']) && !empty($_POST['email'])){

  $nome = addslashes($_POST['nome']);
  $empresa = addslashes($_POST['empresa']);
  $email = addslashes($_POST['email']);
  $telefone = addslashes($_POST['telefone']);
  $cidade = addslashes($_POST['cidade']);
  $mensagem = addslashes($_POST['mensagem']);

  $to = "luccalpc@gmail.com";
  $subject = "Contato - Meta Automação";
  $body = "Nome: ".$nome. "\r\n".
          "Empresa: ".$empresa. "\r\n".
          "Email: ".$email. "\r\n".
          "Telefone: ".$telefone. "\r\n".
          "Cidade: ".$cidade. "\r\n".
          "Mensagem: ".$mensagem;
  $header = "From:lucca@metaautomacao.com.br"."\r\n".    "Reply-To:".$email."\r\n"
  ."X=Mailer:PHP/".phpversion();
  if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
  }else{
    echo("O Email não pode ser enviado");
  }
}

?>