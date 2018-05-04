<?php
require_once 'db.php';

class Cliente{
	private $db;
	private $cliente;

	public function __construct(){
		$this->db=db::conexion();
		$this->cliente=array();
	}
	//Metodos CRUD
	public function addCliente($nombres, $apellidos, $correo, $razon, $telefono, $rif, $direccion){
        $sql = "INSERT INTO clientes(id_cliente, nombres, apellidos, 
                            correo, razon_social, telefono, rif, direccion)VALUES(
            NULL, '{$nombres}', '{$apellidos}', '{$correo}', '{$razon}', '{$telefono}', '{$rif}', '{$direccion}')";
            return $this->db->query($sql);
    }

    public function getClientes(){
        $sql = $this->db->query("SELECT * FROM clientes");
        while($filas = $sql->fetch_assoc()){
            $this->cliente[] = $filas;
        }
        return $this->cliente;
    }

    public function getClienteId($id_cliente){
        $sql = $this->db->query("SELECT * FROM clientes WHERE id_cliente = {$id_cliente}");
        while($filas = $sql->fetch_assoc()){
            $this->cliente[] = $filas;
        }
        return $this->cliente;
    } 

   public function editCliente($id_cliente, $nombres, $apellidos, $correo, $razon, $telefono, $rif, $direccion){
        $sql = "UPDATE clientes SET nombres='{$nombres}', apellidos='{$apellidos}', correo='{$correo}',
                                    razon_social='{$razon}', telefono='{$telefono}', rif='{$rif}', direccion='{$direccion}'
                  WHERE id_cliente='{$id_cliente}'";
        return $this->db->query($sql);

    }

    public function deleteCliente($id_cliente){
        $sql = "DELETE FROM clientes WHERE id_cliente={$id_cliente}";
        return $this->db->query($sql);
    }
}