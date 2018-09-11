<?php
namespace Mini\Controller;
use Mini\Model\Usuario;
use Mini\Core\Controller;
use Mini\Libs\Helper;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// use Mini\Libs\Helper;

class recuperar_cController
{
    
    public function index()
    { 
         
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/recuperar_c/recover.php';
        require APP . 'view/_templates/footer.php'; 
        
          
    }



    public function sendMail($email, $nombre, $codigo)
    {
        $template = file_get_contents(APP.'view/recuperar_c/template.php');
        $template = str_replace("{{name}}", $nombre, $template);
        $template = str_replace("{{action_url_2}}", '<b>http:'.URL.'recuperar_c/newPassword/'.$codigo.'</b>', $template);
        $template = str_replace("{{action_url_1}}", 'http:'.URL.'recuperar_c/newPassword/'.$codigo, $template);
        $template = str_replace("{{year}}", date('Y'), $template);
        $template = str_replace("{{operating_system}}", Helper::getOS(), $template);
        $template = str_replace("{{browser_name}}", Helper::getBrowser(), $template);

        $mail = new PHPMailer(true);
        $mail->CharSet = "UTF-8";

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'jusaweb1918@gmail.com';   //username
            $mail->Password = 'jusa123456';   //password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;                    //smtp port

            $mail->setFrom('jusaweb1918@gmail.com', 'Variedades y Comunicaciones');
            $mail->addAddress($nombre, $email);

            $mail->isHTML(true);

            $mail->Subject = 'Recuperación de contraseña - Variedades y Comunicaciones';
            $mail->Body    = $template;

            if (!$mail->send()) {
                return false;
            } else {
                return true;
            }
        } catch (Exception $e) {
            return false;
            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
    public function sendRecoveryCode()
    {
        if (isset($_POST["txtEmail"]) && trim($_POST["txtEmail"] != '')) {
            $email = $_POST['txtEmail'];
            $codigo = $this->createRandomCode();
            $fechaRecuperacion = date("Y-m-d H:i:s", strtotime('+24 hours'));
            $usuarioModel = new Usuario();
            $usuario = $usuarioModel->getUserWithEmail($email);

            // var_dump($usuario);
            // exit();

            if ($usuario === false) {

                $mensaje = 'El correo electrónico no se encuentra registrado en el sistema.';
                require APP . 'view/recuperar_c/recover.php';
            
            } else {

                $respuesta = $usuarioModel->recoverPassword($email, $codigo, $fechaRecuperacion);
            
                if ($respuesta) {
                    $hola = $this->sendMail( $usuario->nombre, $email, $codigo);
                        if($hola != false){
                            $mensaje = 'Se ha enviado un correo electrónico con las instrucciones para el cambio de tu contraseña. Por favor verifica la información enviada.';

                        }else{
                            $mensaje = 'error no se envio el correo';
                        }
                    require APP . 'view/recuperar_c/recover.php';
                } else {
                    $mensaje = 'No se recuperar la cuenta. Si los errores persisten comuniquese con el administrador del sitio.';
                    require APP . 'view/recuperar_c/recover.php';
                }
            }
        } else {
            $mensaje = 'El campo de correo electrónico es requerido.';
            require APP . 'view/recuperar_c/recover.php';
        } 
    }
    public function newPassword($code = null)
    {
        if (isset($code)) {
            // Instance new Model (Song)
            $usuarioModel = new Usuario();
            // do deleteSong() in model/model.php
            $usuario = $usuarioModel->getUserWithCode($code);
            if ($usuario === false) {
                $mensaje = 'El código de recuperación de contraseña no es valido. Por favor intenta de nuevo.';
                require APP . 'view/recuperar_c/recover.php';
            } else {
                $current = date("Y-m-d H:i:s");
                if (strtotime($current) > strtotime($usuario->fechaRecuperacion)) {
                    $mensaje = 'El código de recuperación de contraseña ha expirado. Por favor intenta de nuevo.';
                    require APP . 'view/recuperar_c/recover.php';
                } else {
                    require APP . 'view/recuperar_c/nueva_c.php';
                }
            }
        } else {
            header('location: ' . URL);
        }
    }
    public function updatePasswordWithCode()
    {
        if (isset($_POST['btnGuardar'])) {
            $idUsuario = $_POST['txtIdUsuario'];
            $contrasena = $_POST['txtContrasena'];
            $repetirContrasena = $_POST['txtRepetirContrasena'];
            exit();
            if ($contrasena != $repetirContrasena) {
                $Usuario = new stdClass();
                $Usuario->idUsuario = $idUsuario;
                $mensaje = 'Las contraseñas no coinciden. Por favor, verifique la información.';
                require APP . 'view/recuperar_c/nueva_c.php';
                return;
            } else {
                $usuarioModel = new Usuario();
                $contrasena = password_hash($_POST['txtContrasena'], PASSWORD_BCRYPT);
                $resultado = $usuarioModel->updatePasswordFromRecover($idUsuario, $contrasena);
                if ($resultado != false) {
                    
                    $mensaje = 'Su contraseña ha sido cambiada con éxito.';
                    header('location:'.URL.'Login');
                    
                } else {
                    $Usuario = new stdClass();
                    $Usuario->idUsuario = $idUsuario;
                    $mensaje = 'Ocurrio un error al intentar cambiar la contraseña. Por favor, verifique la información.';
                    require APP. 'view/recuperar_c/nueva_c.php';
                    return;
                }
            }
        }else{
            
        }
        
    }
    
    public function createRandomCode()
    {
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;
    
        while ($i <= 7) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }
    
        return time().$pass;
    }

    
}