<?php

class Usuario{
    private $_id;
    private $_nombre;
    private $_nombre_usuario;
    private $_email;
    private $_contra;
    private $_fecha_nacimiento;
    private $_tipo_rol;

    public function __construct($id,$nombre,$nombre_usuario,$email,$contra,$fecha_nacimiento,$tipo_rol){
        $this->setId($id);
        $this->setNombre($cve_unica);
        $this->setNombreUsuario($nombre_completo);
        $this->setEmail($email);
        $this->setPassword($contra);
        $this->setFechaNacimiento($fecha_nacimiento);
        $this->setTipoRol($tipo_rol);
    }

    public function getId(){
        return $this ->_id;
    }
    public function setId($id){
        $this ->_id = $id;
    }
    public function getNombre(){
        return $this ->_nombre;
    }
    public function setNombre($nombre){
        $this ->_nombre = $nombre;
    }
    public function getNombreUsuario(){
        return $this ->_nombre_usuario;
    }
    public function setNombreUsuario($nombre_usuario){
        $this ->_nombre_usuario = $nombre_usuario;
    }
    public function getEmail(){
        return $this ->_email;
    }
    public function setEmail($email){
        $this ->_email = $email;
    }
    public function getPassword(){
        return $this ->_contra;
    }
    public function setPassword($contra){
        $this ->_contra = $contra;
    }

    public function getFechaNacimiento(){
        return $this ->_fecha_nacimiento;
    }
    public function setFechaNacimiento($fecha_nacimiento){
        $this ->_fecha_nacimiento = $fecha_nacimiento;
    }
    
    public function getTipoRol(){
        return $this ->_tipo_rol;
    }
    public function setTipoRol($tipo_rol){
        $this ->_tipo_rol = $tipo_rol;
    }

    public function returnJson(){
        $usuario = array();
        $usuario["id"] =  $this->getId();
        $usuario["nombre"]=$this->getNombre();
        $usuario["nombre_usuario"]=$this->getNombreUsuario();
        $usuario["email"]=$this->getEmail();
        $usuario["password"]=$this->getPassword();
        $usuario["fecha_nacimiento"]=$this->getFechaNacimiento();
        $usuario["tipo_rol"]=$this->getTipoRol();

        echo json_encode($usuario);
    }

}

?>