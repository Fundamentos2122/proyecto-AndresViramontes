<?php

class Game{
    private $_id_game;
    private $_nombre_game;
    private $_desarrolladora;
    private $_sinopsis;
    private $_fecha_publicacion;
    private $_portada;

    public function __construct($id_game,$nombre_game,$desarrolladora,$sinopsis,$fecha_publicacion,$portada){
        $this->setId_game($id_game);
        $this->setNombreGame($nombre_game);
        $this->setDesarrolladora($desarrolladora);
        $this->setSinopsis($sinopsis);
        $this->setFechaPublicacion($fecha_publicacion);
        $this->setPortada($portada);
    }

    public function getIdGame(){
        return $this ->_id_game;
    }
    public function setIGame($id_game){
        $this ->_id_game = $id_game;
    }
    public function getNombreGame(){
        return $this ->_nombre_game;
    }
    public function setNombreGame($nombre_game){
        $this ->_nombre_game= $nombre_game;
    }
    public function getDesarrolladora(){
        return $this ->_desarrolladora ;
    }
    public function setDesarrolladora($desarrolladora){
        $this ->_desarrolladora = $desarrolladora;
    }
    public function getSinopsis(){
        return $this ->_sinopsis;
    }
    public function setSinopsis($sinopsis){
        $this ->_sinopsis = $sinopsis;
    }
    public function getFechaPublicacion(){
        return $this ->_fecha_publicacion;
    }
    public function setFechaPublicacion($fecha_publicacion){
        $this ->_fecha_publicacion = $fecha_publicacion;
    }
    public function getPortada(){
        return $this ->_portada;
    }
    public function setPortada($portada){
        $this ->_portada = base64_encode($portada);
    }

    public function returnJson(){
        $game = array();
        $game["id_game"] =  $this->getId();
        $game["nombre_game"]=$this->getNombreGame();
        $game["desarrolladora"]=$this->getDesarrolladora();
        $game["sinopsis"]=$this->getSinopsis();
        $game["fecha_publicacion"]=$this->getFechaPublicacion();
        $game["portada"]=$this->getPortada();

        echo json_encode($game);
    }

}

?>