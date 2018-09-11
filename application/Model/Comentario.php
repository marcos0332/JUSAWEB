<?php
namespace Mini\Model;
use Mini\Core\Model;
class Comentario extends Model{
    /**
     * Insertar un Comentario
     * @param string $p_textoComentario Contenido del Comentario
     * @param string $p_fechaHora fecha y hora en la que se realizó el Comentario
     * @param string $p_nombre nombre de la persona que realizó el Comentario
     */
    public function insertComentario($p_textoComentario, $p_nombre){
        try{
            $sql = "CALL sp_tblComentarioinsert(:p_textoComentario, :p_nombre);";
            $query = $this->db->prepare($sql);
            $parameters = array(':p_textoComentario' => $p_textoComentario, ':p_nombre' => $p_nombre);
            $query->execute($parameters);
        }catch(PDOException $error){
            throw new $error->getComentario();
        }        
    }

    public function selectComentario(){
        try{
            $sql = "CALL sp_tblComentarioSelect();";
            $query = $this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
        }catch(PDOException $error){
            throw new $error->getMessage();
        }        
    }
}