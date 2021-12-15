<?php
class Game{
    private $_id_re;
    private $_id_game;
    private $_review;


    public function __construct($id,$cve_unica,$nombre_completo,$fecha_nacimiento,$foto){
        $this->setId($id);
        $this->setCveUnica($cve_unica);
        $this->setNombreCompleto($nombre_completo);
        $this->setFechaNacimiento($fecha_nacimiento);
        $this->setFoto($foto);
    }

    public function getId(){
        return $this ->_id;
    }
    public function setId($id){
        $this ->_id = $id;
    }
    public function getCveUnica(){
        return $this ->_cve_unica;
    }
    public function setCveUnica($cve_unica){
        $this ->_cve_unica = $cve_unica;
    }
    public function getNombreCompleto(){
        return $this ->_nombre_completo;
    }
    public function setNombreCompleto($nombre_completo){
        $this ->_nombre_completo = $nombre_completo;
    }

    public function returnJson(){
        $alumno = array();
        $alumno["id"] =  $this->getId();
        $alumno["cve_unica"]=$this->getCveUnica();
        echo json_encode($alumno);
    }

}

?>