<?php
$destino ="seuemail@email.com";  
$nome=$_POST;   
$assunto= $_POST;
$email=$_POST;
$telefone=$_POST;  
  
$mensagem="Email: ".$email."<br>Telefone: ".$telefone."<br>Assunto: ".$assunto;

$headers = "Content-Type: text/html; charset=iso-8859-1";
$headers.="From: $remetente";           

mail("$destino", "$nome", "$mensagem","$headers");
?>