<?php
require_once 'db.php';

class Almacen{
	private $db;
	private $almacen;

	public function __construct(){
		$this->db=db::conexion();
		$this->almacen=array();
	}
	//Metodos CRUD
	public function addAlmacen($descripcion, $marca, $precio_unitario, $stock){
        $sql = "INSERT INTO repuesto(id_repuesto, descripcion, marca, precio_unitario, stock)VALUES(
            NULL, '{$descripcion}', '{$marca}', '{$precio_unitario}', '{$stock}')";
            return $this->db->query($sql);
    }

    public function getAlmacen(){
        $sql = $this->db->query("SELECT * FROM repuesto");
        while($filas = $sql->fetch_assoc()){
            $this->almacen[] = $filas;
        }
        return $this->almacen;
    }

    public function getAlmacenId($id_repuesto){
        $sql = $this->db->query("SELECT * FROM repuesto WHERE id_repuesto = {$id_repuesto}");
        while($filas = $sql->fetch_assoc()){
            $this->almacen[] = $filas;
        }
        return $this->almacen;
    } 

   public function editAlmacen($id_repuesto, $descripcion, $marca, $precio_unitario, $stock){
        $sql = "UPDATE repuesto SET descripcion='{$descripcion}', marca='{$marca}', 
                        precio_unitario='{$precio_unitario}', stock='{$stock}'
                  WHERE id_repuesto='{$id_repuesto}'";
        return $this->db->query($sql);
    }

    public function delAlmacen($id_repuesto){
        $sql = "DELETE FROM repuesto WHERE id_repuesto={$id_repuesto}";
        return $this->db->query($sql);
    }
}