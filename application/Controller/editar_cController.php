<?php
namespace Mini\Controller;

class editar_cController
{
    
    public function index()
    {   
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/editar_c/index.php';
        require APP . 'view/_templates/footer.php';        
    }
    public function newPassword($code = null)
    {
        if (isset($code)) {
            // Instance new Model (Song)
            $usuarioModel = new usuario();
            // do deleteSong() in model/model.php
            $usuario = $usuarioModel->getUserWithCode($code);
            if ($usuario === false) {
                $mensaje = 'El código de recuperación de contraseña no es valido. Por favor intenta de nuevo.';
                require APP . 'view/recuperar_c.php';
            } else {
                $current = date("Y-m-d H:i:s");
                if (strtotime($current) > strtotime($usuario->fechaRecuperacion)) {
                    $mensaje = 'El código de recuperación de contraseña ha expirado. Por favor intenta de nuevo.';
                    require APP . 'view/editar_c.php';
                } else {
                    require APP . 'view/editar_c/nueva_c.php';
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
            if ($contrasena != $repetirContrasena) {
                $Usuario = new stdClass();
                $Usuario->idUsuario = $idUsuario;
                $mensaje = 'Las contraseñas no coinciden. Por favor, verifique la información.';
                require APP . 'view/editar_c.php';
                return;
            } else {
                $usuarioModel = new Usuario();
                $contrasena = password_hash($_POST['txtContrasena'], PASSWORD_BCRYPT);
                $resultado = $usuarioModel->updatePasswordFromRecover($idUsuario, $contrasena);
                if ($resultado != false) {
                    
                    $mensaje = 'Su contraseña ha sido cambiada con éxito.';
                    
                    require APP . 'view/_templates/header.php';
                    require APP . 'view/Login/index.php';
                    require APP . 'view/_templates/footer.php';
                    return;
                } else {
                    $Usuario = new stdClass();
                    $Usuario->idUsuario = $idUsuario;
                    $mensaje = 'Ocurrio un error al intentar cambiar la contraseña. Por favor, verifique la información.';
                    require APP. 'view/editar_c.php';
                    return;
                }
            }
        }else{
            header('location:'.URL);
        }
        
    }
}