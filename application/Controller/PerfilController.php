<?php
namespace Mini\Controller;

use Mini\Model\Usuario;

class PerfilController
{
    
    public function index()
    {   
        if(!isset($_SESSION["Usuario"])){
            header('location: '. URL .'perfil');
        }

        if(isset($_SESSION["usuarioo"])){

            $usuarioModel = new Usuario();
            $user = $usuarioModel->selectUsuarioID($_SESSION["usuarioo"]->id);
        }

        require APP . 'view/_templates/logueado.php';
        require APP . 'view/perfil/index.php';
        require APP . 'view/_templates/footer.php';        
    }
    
    public function c_updateUsuario(){
        $p_idUsuario= $_SESSION["id"];
        $p_nombre = $_POST['txtNombre']; 
        $p_email = $_POST['txtCorreo'];
    if( $p_nombre =="" || $p_email==""){
        echo '
        <script>
                var r = confirm("Todos los campos son obligatorios.\nPor favor intente de nuevo.");
                if (r == true) {
                    javascript:history.back();
                } else {
                    window.location.href = `'. URL .'inicio`;
                }
        </script>';
    }else{
        $Usuario = new Usuario();
         
            
            $update = $Usuario->updateUsuario(
                $p_idUsuario,
                $p_nombre, 
                $p_email
            );

            
          
        }
    }
    
    public function c_updateClaveUsuario(){
        $p_idUsuario= $_SESSION["id"];
        $p_claveActual = $_POST['txtClaveActual'];
        $p_clave = $_POST['txtClave'];
        $p_clave2 = $_POST['txtClave2'];
        
        
        
        if($p_claveActual == "" || $p_clave ==""|| $p_clave2 == ""){
            echo '
            <script>
                var r = confirm("Todos los campos son obligatorios.\nPor favor intente de nuevo.");
                if (r == true) {
                    javascript:history.back();
                } else {
                    javascript:history.back();
                }
            </script>';
        }else if($p_clave != $p_clave2){
            echo '
            <script>
                var r = confirm("Las contraseñas deben ser iguales.\nPor favor intente de nuevo.");
                if (r == true) {
                    javascript:history.back();
                } else {
                    javascript:history.back();
                }
            </script>';
        }else{
            $Usuario = new Usuario();
            $Usuario_ = $Usuario->selectUsuarioID($p_idUsuario);

            if($Usuario_){

                $claveEncriptada = $Usuario_->password;

                if(password_verify($p_claveActual, $claveEncriptada)){

                    $p_clave = password_hash($p_clave, PASSWORD_BCRYPT);

                    $Usuario->updateClaveUsuario(
                        $p_idUsuario,
                        $p_clave
                    );
                    echo '
                    <script>
                        alert("Su contraseña ha sido actualizada correctamente.\nPor favor vuelva a iniciar sesión.");
                        window.location.href = `'. URL .'cerrarSesion`;
                    </script>';
                }else{
                    echo '
                    <script>
                        var r = confirm("Su contraseña actual es incorrecta.\nPor favor intente de nuevo.");
                        if (r == true) {
                            javascript:history.back();
                        } else {
                            javascript:history.back();
                        }
                    </script>';
                }
            }
        }
    }
   }