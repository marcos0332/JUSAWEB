<?php
namespace Mini\Controller;
use Mini\Libs\Helper;
use Mini\Model\Comentario;
use Mini\Model\Multimedia;
class comentarController
{
    public function index()
    {     
        if($_SESSION["id"] == null){
            header("Location: ".URL."iniciarSesion");
        }
        require APP . 'view/_templates/editar_perfil.php';
        
        $Comentario = new Comentario();
        $comentarios = $Comentario->selectComentario();
        
        require APP . 'view/comentar/index.php';
        require APP . 'view/_templates/footer.php';
    }
   
    public function c_insertComentario(){
        $p_textoComentario= $_POST['txtComentario'];
        $p_nombre= $_POST['txtNombre'];
        
        if($p_textoComentario=="" || $p_nombre== ""){
            echo '
                <script>
                    var r = confirm("debes llenar todos los campos.");
                    if (r == true) {
                        javascript:history.back();
                    } else {
                        window.location.href = `'. URL .'inicio`;
                    }
                </script>';
        }else{
            $Comentario = new Comentario();
            $Comentario->insertComentario(
                $p_textoComentario,
                $p_nombre
            );
            echo '
                <script>
                    window.location.href = `'. URL .'comentar`;
                    
                </script>';
            
        }  
    }
            
}
