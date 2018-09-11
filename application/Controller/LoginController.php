<?php
namespace Mini\Controller;
use Mini\Model\Usuario;
class LoginController
{ 
    public function index()
    {   
        if(isset($_SESSION["Usuario"])){
            header('location: '. URL .'perfil');
        }
        require APP . 'view/_templates/iniciar.php';
        require APP . 'view/Login/index.php';
        require APP . 'view/_templates/footer.php';        
    }

    public function c_selectUsuario(){
        $usuario = $_GET['txtUsuario'];
        $Usuario = new Usuario();
        $Usuario_ = $Usuario->selectUsuario($usuario);
        //var_dump($_GET); exit();
        //var_dump($Usuario_); exit();
        if($Usuario_){ 
            $password = $_GET['txtContraseña1'];
            $passwordEncriptada = $Usuario_->password;
            if(password_verify($password, $passwordEncriptada)){
                
                $_SESSION["id"] = $Usuario_->id;
                $_SESSION["usuarioo"] = $Usuario_;
                $_SESSION["Usuario"] = $Usuario_->usuario;
                $_SESSION["Nombre"] = $Usuario_->nombre;
                $_SESSION["Email"] = $Usuario_->email;
                //$_SESSION["Rol"] = $Usuario_->idRol;
                header("location: ". URL ."Perfil");
            }else{
                
                echo '
                <script>
                    var r = confirm("El usuario o la contraseña son incorrectos.\nPor favor intente de nuevo.");
                    if (r == true) {
                        javascript:history.back();
                    } else {
                        window.location.href = `'. URL .'Login`;
                    }
                </script>';
            }           
            
        }else if(!($Usuario_)){
            
            echo '
            <script>
                var r = confirm("El usuario o la contraseña son incorrectos.\nPor favor intente de nuevo.");
                if (r == true) {
                    javascript:history.back();
                } else {
                    window.location.href = `'. URL .'Login`;
                }
            </script>';
            
        }
    }

}