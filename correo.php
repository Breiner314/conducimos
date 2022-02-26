<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['celular']) && !empty($_POST['email']) && !empty($_POST['msg']) && !empty($_POST['asunto'])) {
        $name = $_POST['name'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $asunto = $_POST['asunto'];
        $header = "From: stinbotero@gmail.com" . "\r\n";
        $header .= "Reply-To: stinbotero@gmail.com" . "\r\n";
        $header .="X-Mailer: PHP/". phpversion();
        $mail = @mail($name, $celular, $email, $msg,  $asunto);
        if ($mail){
            echo "<h4> ¡Mensaje enviado correctamente!</h4>";
        }
    }
}


