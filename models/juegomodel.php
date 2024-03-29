<?php

class JuegoModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=chiripa;charset=utf8', 'root', '');
    }

    public function getAll() {
        $query = $this->db->prepare('SELECT * FROM Juego ORDER BY nombre ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function saveStudent($nombre,$apellido,$documento,$especialidad){
        $query = $this->db->prepare('INSERT  INTO alumno(nombre, apellido, dni, id_especialidad) VALUES(?,?,?,?)');
        $query->execute([$nombre, $apellido, $documento, $especialidad]); 
    }
    public function deleteStudent($id_alumno) {
        $query = $this->db->prepare('DELETE FROM alumno WHERE id_alumno=?');
        $query->execute([$id_alumno]); 
    }
    public function getStudent($id_alumno){
            $query = $this->db->prepare('SELECT * FROM alumno WHERE id_alumno=?');
            $query->execute([$id_alumno]);
            return $query->fetch(PDO::FETCH_OBJ);
    }
    public function modifyStudent($nombre,$apellido,$documento,$especialidad,$id_alumno){
        $query = $this->db->prepare('UPDATE alumno SET nombre=? , apellido=?, dni=?, id_especialidad=? WHERE id_alumno =?');
        $query->execute(array($nombre,$apellido,$documento,$especialidad,$id_alumno));
    }

    #///////////////////////////////////////////////////////////////////////////////////
    public function agregarjuego($nombre,$cantidad,$cardgame){
        
        $query = $this->db->prepare('INSERT INTO juego (nombre, cantidad_jugadores, juego_de_cartas) VALUES (?,?,?)');
        $query->execute([$nombre,$cantidad,$cardgame]);
    }

    public function getApuestas() {
        $query = $this->db->prepare('SELECT apuesta.id_apuesta, juego.nombre, apuesta.fecha, apuesta.monto AS juego FROM apuesta JOIN juego ON apuesta.id_juego=juego.id_juego');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}