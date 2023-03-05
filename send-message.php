<?php
if(isset($_POST['submit'])){
    $to = "ryanjunio073@gmail.com"; // aqui coloque o endereço de e-mail para receber as mensagens
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "Nova mensagem do formulário de contato";
    $message = $_POST['message'];

    $headers = "From: " . $name . "<" . $email . ">" . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    if(mail($to, $subject, $message, $headers)){
        echo "<script>alert('Mensagem enviada com sucesso!');</script>";
    } else{
        echo "<script>alert('Erro ao enviar mensagem. Por favor, tente novamente.');</script>";
    }
}
?>
