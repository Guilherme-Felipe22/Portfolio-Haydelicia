<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mesage']);

$to = "guilhermefrm2208@gmail.com";
$subjet = "Contato - Portfólio";
$body = "Nome: ".$nome "/r/n"
        "Email: ".$email "/r/n"
        "Mensagem: ".$mensagem;
$header = "From:guilherme@portfoliohaydelicia.epizy.com"."/r/n"
            ."Reply-To:".$email."/r/n"
            ."X=Mailer:PHP/".phpversion();

if(mail($to,$subjet,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("Email não pode ser enviado.");
}

}

?>