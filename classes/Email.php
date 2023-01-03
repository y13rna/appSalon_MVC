<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {
    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token){
        $this->email=$email;
        $this->nombre=$nombre;
        $this->token=$token;
    }
    
    public function enviarConfirmacion(){

        // Crear el objeto de email
        $mail=new PHPMailer();
        $mail->isSMTP();
        $mail->Host='smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '728256abaacfb3';
        $mail->Password = '45829b32463fd4';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com ');
        $mail->Subject='Confirma tu cuenta';

        // Set HMTL
        $mail->isHTML(true);
        $mail->CharSet= 'UTF-8';

        $contenido="<html>";
        $contenido.= "<p><strong>Hola " . $this->nombre . "</strong>, has creado tu cuenta en App Salon, por favor, confírmala presionando el siguiente enlace.</p>";
        $contenido.="<p>Presiona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=".$this->token . "'>Confirmar Cuenta</a></p>";
        $contenido.="<p>Si tu no solicitaste esta cuenta, ignora este mensaje.</p>";
        $contenido.="</html>";

        $mail->Body=$contenido;

        // Enviar mail
        $mail->send();
    }

    public function enviarInstrucciones(){
        // Crear el objeto de email
        $mail=new PHPMailer();
        $mail->isSMTP();
        $mail->Host='smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '728256abaacfb3';
        $mail->Password = '45829b32463fd4';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com ');
        $mail->Subject='Reestablece tu contraseña';

        // Set HMTL
        $mail->isHTML(true);
        $mail->CharSet= 'UTF-8';

        $contenido="<html>";
        $contenido.= "<p><strong>Hola " . $this->nombre . "</strong>, has solicitado reestablecer tu contraseña en App Salon, por favor, presionando el siguiente enlace para realizarlo.</p>";
        $contenido.="<p>Presiona aquí: <a href='http://localhost:3000/recuperar?token=".$this->token . "'>Reestablecer Contraseña</a></p>";
        $contenido.="<p>Si tu no solicitaste esta cuenta, ignora este mensaje.</p>";
        $contenido.="</html>";

        $mail->Body=$contenido;

        // Enviar mail
        $mail->send();
    }
}