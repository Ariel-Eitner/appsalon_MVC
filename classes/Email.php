<?php
namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($nombre, $email, $token) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->token = $token;        
    }

    public function enviarConfirmacion() {
        //crear el objeto de email
        $email = new PHPMailer();
        $email->isSMTP();        
        $email->Host = 'smtp.mailtrap.io';
        $email->SMTPAuth = true;
        $email->Port = 2525;
        $email->Username = '318e0a6482e862';
        $email->Password = '228be7078ec7ca';

        $email->setFrom('cuentas@appsalon.com');
        $email->addAddress('cuentas@appsalon.com' , 'AppSalon.com');
        $email->Subject = 'Confirma tu Cuenta';

        //set HTML
        $email->isHTML(TRUE);
        $email->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . "</strong> Has creado tu cuenta en AppSalon, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aqui: <a href='http://". $_SERVER["HTTP_HOST"] . "/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a> </p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este mensaje</p>";
        $contenido .= "</html>";

        $email->Body = $contenido;

        //enviar el mail
        $email->send();
    }

    public function enviarInstrucciones() {
        //crear el objeto de email
        $email = new PHPMailer();
        $email->isSMTP();        
        $email->Host = 'smtp.mailtrap.io';
        $email->SMTPAuth = true;
        $email->Port = 2525;
        $email->Username = '318e0a6482e862';
        $email->Password = '228be7078ec7ca';

        $email->setFrom('cuentas@appsalon.com');
        $email->addAddress('cuentas@appsalon.com' , 'AppSalon.com');
        $email->Subject = 'Reestablece tu Password';

        //set HTML
        $email->isHTML(TRUE);
        $email->CharSet = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p>Hola<strong> " . $this->nombre . "</strong> has solicitado reestablecer tu password, sigue el enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aqui: <a href='http://". $_SERVER["HTTP_HOST"] . "/recuperar?token=" . $this->token . "'>Reestablecer Password</a> </p>";
        $contenido .= "<p>Si no solicitaste esta recuperacion, puedes ignorar este mensaje.</p>";
        $contenido .= "</html>";

        $email->Body = $contenido;

        //enviar el mail
        $email->send();
    }
}
