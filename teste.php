<?php 
 
if (isset($_POST["enviar"])){ 
 
   $nome=$_POST["nomeCompleto"]; 
   $telefone=$_POST["celular"]; 
   $email=$_POST["email"];
   $msg=$_POST["mensagem"]; 
 
   echo "<p>Olá, ".$nome."</p>"; echo "<p>Seu email é: ".$email."</p>"; 
 
   echo "<p>Seu telefone é: ".$telefone."</p>"; 
 
   echo "<p>Mensagem:<br/>".$msg."</p>"; 
} 
 
?>