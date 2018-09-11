<?php

/**
 * Class Songs
 * This is a demo Model class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Model;

use Mini\Core\Model;
use \Exception, \PDOException;
use Mini\Libs\Helper; 

class Usuario extends Model
{
    public function agregarUsuario(
        $p_Nombre,
        $p_Usuario, 
        $p_password,
        $p_email
    ){
     try{
        $sql = "CALL spRegistrar(
            :p_nombre,
            :p_usuario, 
            :p_password,
            :p_email
        );";
        $query = $this->db->prepare($sql);
            $parameters = array(
                ':p_nombre' => $p_Nombre,
                ':p_usuario' => $p_Usuario,
                ':p_password' => $p_password,
                ':p_email' => $p_email
            );
            $query->execute($parameters);
        }catch(PDOException $error){
            throw new $error->getMessage();
        }        
    }
    public function selectUsuarioID($p_idUsuario){
        try{
            $sql = "CALL sp_tblUsuarioSelectUsuarioID(:p_idUsuario);";
            $query = $this->db->prepare($sql);
            $parameters = array(':p_idUsuario' => $p_idUsuario);
            $query->execute($parameters);
            return $query->fetch();
        }catch(PDOException $error){
            throw new $error->getMessage();
        }      
    }
    /**
     * Validar que no exista el nombre de Usuario
     * @param string $p_nombreUsuario nombre de Usuario
     */
    public function selectUsuario($p_Usuario){
        try{
            $sql = "CALL sp_tblLogin(:p_Usuario);";
            $query = $this->db->prepare($sql);
            $parameters = array(':p_Usuario' => $p_Usuario);
            $query->execute($parameters);
            return $query->fetch();
        }catch(PDOException $error){
            throw new $error->getMessage();
        }  
    
    }
    public function getUserWithEmail($p_email)
    {
        $sql = "SELECT id, nombre, usuario, email FROM tblUsuario WHERE email = :p_email LIMIT 1";
        $parameters = array(':p_email' => $p_email);
        try {
            $query = $this->db->prepare($sql);
            $query->execute($parameters);
            return ($query->rowcount() ? $query->fetch() : false);
        } catch (PDOException $e) {
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'Usuario', $e->getCode(), $e->getMessage());
            return false;
        }
        
    }

    public function recoverPassword($p_email, $p_codigo, $p_fechaRecuperacion)
    {
        $sql = "UPDATE tblUsuario SET codigo = :p_codigo, fechaRecuperacion = :p_fechaRecuperacion WHERE email = :p_email";
        $parameters = array(
            ':p_email' => $p_email,
            ':p_codigo' => $p_codigo,
            ':p_fechaRecuperacion' => $p_fechaRecuperacion
        );
        try {
            $query = $this->db->prepare($sql);
            return $query->execute($parameters);
        } catch (PDOException $e) {
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'Usuario', $e->getCode(), $e->getMessage());
            return false;
        } catch (Exception $e) {
            
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'Usuario', $e->getCode(), $e->getMessage());
            return false;
        }
    }
    public function getUserWithCode($p_codigo)
    {
        $sql = "SELECT id, nombre, usuario,email, codigo, fechaRecuperacion FROM tblUsuario WHERE codigo = :p_codigo LIMIT 1";
        $parameters = array(':p_codigo' => $p_codigo);
        try {   
            $query = $this->db->prepare($sql);
            $query->execute($parameters);
            return ($query->rowcount() ? $query->fetch() : false);
        } catch (PDOException $e) {
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'Usuario', $e->getCode(), $e->getMessage());
            return false;
        } catch (Exception $e) {
            
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'Usuario', $e->getCode(), $e->getMessage());
            return false;
        }
    }

    public function updatePasswordFromRecover($p_idUsuario, $p_contrasena)
    {
        $sql = "UPDATE tblUsuario SET password = :p_contrasena, codigo = NULL, fechaRecuperacion = NULL WHERE id = :p_idUsuario";
        $parameters = array(
            ':p_contrasena' => $p_contrasena,
            ':p_idUsuario' => $p_idUsuario
        );
        try {
            $query = $this->db->prepare($sql);
            return $query->execute($parameters);
        } catch (PDOException $e) {
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'usuario', $e->getCode(), $e->getMessage());
            return false;
        } catch (Exception $e) {
            
            $logModel = new Log();
            $sql = Helper::debugPDO($sql, $parameters);
            $logModel->addLog($sql, 'usuario', $e->getCode(), $e->getMessage());
            return false;
        }
    }
    public function updateUsuario(
        $p_idUsuario,
        $p_nombre,
        $p_email){
        try{
            $sql = "CALL sp_tblUsuarioUpdate(
                :p_idUsuario,
		        :p_nombre,
                :p_email
            );";
            $query = $this->db->prepare($sql);
            $parameters = array(
                ':p_idUsuario'=>$p_idUsuario,
		        ':p_nombre'=>$p_nombre,
                ':p_email'=>$p_email
            );
            $query->execute($parameters);
           
            header("Location: " . URL . "perfil");
        }catch(PDOException $error){
            throw new $error->getMessage();
        }     
    }   
    public function updateClaveUsuario($p_idUsuario, $p_clave){
        try{
            $sql = "CALL sp_tblUsuarioUpdateClave(:p_idUsuario, :p_clave);";
            $query = $this->db->prepare($sql);
            $parameters = array(':p_idUsuario' => $p_idUsuario, ':p_clave' => $p_clave);
            $query->execute($parameters);
        }catch(PDOException $error){
            throw new $error->getMessage();
        }
    }


}






















    