<?php


$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);


$to = "vorenuswear@gmail.com";
$subject = "Registro - Site";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email."\r\n".
        "Senha: ".$senha;
$header = "From: yuripadula@hotmail.com"."\r\n".
            "Reply-To".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

}else{
    echo("O Email não pode ser enviado");
}

?>