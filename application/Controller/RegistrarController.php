<?php
namespace Mini\Controller;

use Mini\Model\Usuario;

class RegistrarController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {   
        if(!isset($_SESSION["Usuario"])){
            header('location: '. URL .'Login');
        }
        require APP . 'view/_templates/header.php';
        require APP . 'view/Registrar/index.php';
        require APP . 'view/_templates/footer.php';        
    }

    public function crearUsuario()
    {
        $p_nombre = $_POST['txtNombre'];
        $p_usuario = $_POST['txtUsuario'];
        $p_password1 = $_POST['txtContraseña1'];
        $p_password2= $_POST['txtContraseña2'];
        $p_email1 = $_POST['txtEmail1'];
        $p_email2 = $_POST['txtEmail2'];
    
        
        if($p_nombre == "" || $p_usuario == "" || $p_password1 == "" || $p_password2 == "" || $p_email1 == "" || $p_email2 == "")
        {
            echo '
                <script>
                    var r = confirm("Todos los campos marcados con *, son obligatorios.\nPor favor intente de nuevo.");
                    if (r == true) {
                        javascript:history.back();
                    } else {
                        window.location.href = `'. URL .'inicio`;
                    }
                </script>';
            
        }else if($p_password1 != $p_password2){
            echo '
                <script>
                    var r = confirm("Las contraseñas no coinciden. \nPor favor verifique que su contraseña sean iguales.");
                    if (r == true) {
                        javascript:history.back();
                    } else {
                        window.location.href = `'. URL .'inicio`;
                    }
                </script>';
        }else{
            $usuario = new Usuario();
            if($usuario->selectUsuario($p_usuario)){
                echo '
                <script>
                    var r = confirm("El usuario ya existe.\nPor favor intente con otro.");
                    if (r == true) {
                        javascript:history.back();
                    } else {
                        window.location.href = `'. URL .'inicio`;
                    }
                </script>';
            }else{
                $p_password1 = password_hash($p_password1, PASSWORD_BCRYPT);
                $usuario->agregarUsuario(
                    $p_nombre, 
                    $p_usuario, 
                    $p_password1,
                    $p_email1
                );
                header('location: '. URL .'perfil'); 
            }
        }
    }}