<?php
namespace Mini\Model;

use Mini\Core\Model;
use \Exception, \PDOException;

class Plantilla extends Model
{


public function updatePhotoOfPerson($photo, $idPerson)
    {
        try {
            $sql = "UPDATE person SET photo = :photo WHERE idPerson = :idPerson";
            $query = $this->db->prepare($sql);
            $parameters = array(':photo' => $photo, ':idPerson' => $idPerson);
            return ($query->execute($parameters) ? true : false);
        } catch (PDOException $ex) {
            return false;
        } catch (Exception $ex) {
            return false;
        }
    }

    public function saveGalleryOfPerson($gallery, $idPerson)
    {
        try {

            $this->db->beginTransaction();

            $savedGalleries = array('uploadOk' => 1, 'message' => '', 'paths' => array());

            foreach ($gallery as $path) {
                
                $sql = "INSERT INTO personGallery(idPerson, photo) VALUES (:idPerson, :photo)";

                $query = $this->db->prepare($sql);
                $parameters = array(':idPerson' => $idPerson, ':photo' => $path);
                if ($query->execute($parameters)) {
                    array_push($savedGalleries['paths'], $path);
                } else {
                    $savedGalleries['uploadOk'] = 0;
                    $savedGalleries['message'] = 'Ocurrio un error intentando guardar la imagen ' . $path;
                    return $savedGalleries;
                }
            }

            $this->db->commit();
            return $savedGalleries;

        } catch (PDOException $ex) {

            $this->db->rollBack();
            $savedGalleries['uploadOk'] = 0;
            $savedGalleries['message'] = 'Ocurrio un error intentando guardar la galeria: '. $ex->getMessage();
            return $savedGalleries;

        } catch (Exception $ex) {

            $this->db->rollBack();
            $savedGalleries['uploadOk'] = 0;
            $savedGalleries['message'] = 'Ocurrio un error intentando guardar la galeria: '. $ex->getMessage();
            return $savedGalleries;

        }
    }
