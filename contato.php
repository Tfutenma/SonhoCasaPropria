
<?php
    // Criando nossas variáveis para guardar as informações do formulário
    $nome=$_POST['nomeCompleto'];
    $telefone=$_POST['celular'];
    $email=$_POST['email'];
    $assunto=$_POST['assunto'];
    $msg=$_POST['mensagem'];
    // formatando nossa mensagem (que será envaida ao e-mail)
    $mensagem= 'Esta mensagem foi enviada através do formulário de Contato<br><br>';
    $mensagem.='<b>Nome: </b>'.$nome.'<br>';
    $mensagem.='<b>Telefone:</b> '.$telefone.'<br>';
    $mensagem.='<b>E-Mail:</b> '.$email.'<br>';
    $mensagem.='<b>Assunto:</b> '.$assunto.'<br><br>';
    $mensagem.='<b>Mensagem:</b><br> '.$msg;
    // abaixo as requisições do arquivo phpmailer
    require("phpmailer/src/PHPMailer.php");
    require("phpmailer/src/SMTP.php");
    require("phpmailer/src/Exception.php");
 
    // chamando a função do phpmailer
 
$mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP(); // Não modifique
    $mail->Host       = 'sonhocasapropria.com.br';  // SEU HOST (HOSPEDAGEM)
    $mail->SMTPAuth   = true;                        // Manter em true
    $mail->Username   = 'contato@sonhocasapropria.com.br';   //SEU USUÁRIO DE EMAIL
    $mail->Password   = 'A190060a.';                   //SUA SENHA DO EMAIL SMTP password
    $mail->SMTPSecure = 'ssl';    //TLS OU SSL-VERIFICAR COM A HOSPEDAGEM
    $mail->Port       = 465;     //TCP PORT, VERIFICAR COM A HOSPEDAGEM
    //$mail->Port       = 26;
    $mail->CharSet = 'UTF-8';    //DEFINE O CHARSET UTILIZADO
    
    //Recipients
    $mail->setFrom('contato@sonhocasapropria.com.br', 'Sonho da Casa Própria');  //DEVE SER O MESMO EMAIL DO USERNAME
    $mail->addAddress('contato@sonhocasapropria.com.br');     // QUAL EMAIL RECEBERÁ A MENSAGEM!
    $mail->addAddress('adilson@sonhocasapropria.com.br');
    // $mail->addAddress('ellen@example.com');    // VOCÊ pode incluir quantos receptores quiser
    $mail->addReplyTo($email, $nome);  //AQUI SERA O EMAIL PARA O QUAL SERA RESPONDIDO                  
    // $mail->addCC('cc@example.com'); //ADICIONANDO CC
    // $mail->addBCC('bcc@example.com'); //ADICIONANDO BCC
 
    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Formulário Contato: '.$assunto; //ASSUNTO
    $mail->Body    = $mensagem;  //CORPO DA MENSAGEM
    $mail->AltBody = $mensagem;  //CORPO DA MENSAGEM EM FORMA ALT
 
    // $mail->send();
    if(!$mail->Send()) {
        echo "<script>alert('Erro ao enviar o E-Mail');window.location = 'contato.html';</script>";
     }else{
        echo "<script>alert('E-Mail enviado com sucesso!');window.location = 'contato.html';</script>";
     }
     die
?>