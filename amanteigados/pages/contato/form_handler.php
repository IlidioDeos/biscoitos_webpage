<?php

$name = $_POST['name'];
$email_visitante = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


$email_from = '';

$email_assunto = '';

$email_corpo = "User Name: $name.\n".
                 "User Email: $email_visitante.\n".
                  "Assunto: $assunto.\n".
                  "Mensagem: $mensagem.\n";
$to = "contato@amanteigadosdaserra.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $email_visitante \r\n";

mail($to, $email_assunto, $email_corpo, $headers);

header("Location: contatos.html")



?>