<?php
require_once 'db.php';

class NotaEntrega{
	private $db;
	private $nota_entrega;

	public function __construct(){
		$this->db=db::conexion();
		$this->nota_entrega=array();
	}
	//Metodos CRUD
	public function addNotaEntrega($codigo, $id_factura, $empresa_envio, $guia, $costo_envio, $estado_nota, $fecha_envio){
        $sql = "INSERT INTO nota_entrega(id_nota_entrega, cod_nota_entrega, id_factura, empresa_envio, guia, costo_envio, estado, fecha_envio)VALUES(
            NULL, '{$codigo}', '{$id_factura}', '{$empresa_envio}', '{$guia}', '{$costo_envio}', '{$estado_nota}', '{$fecha_envio}')";
            return $this->db->query($sql);
    }

    public function getNotaEnvio(){
        $sql = $this->db->query("SELECT * FROM nota_entrega");
        while($filas = $sql->fetch_assoc()){
            $this->nota_entrega[] = $filas;
        }
        return $this->nota_entrega;
    }

    public function getNotaEnvioId($id_nota_entrega){
        $sql = $this->db->query("SELECT * FROM nota_entrega WHERE id_nota_entrega = {$id_nota_entrega}");
        while($filas = $sql->fetch_assoc()){
            $this->nota_entrega[] = $filas;
        }
        return $this->nota_entrega;
    } 

   public function editNotaEnvio($id_nota_entrega, $estado_nota){
        $sql = "UPDATE nota_entrega SET estado='{$estado_nota}'
                  WHERE id_nota_entrega='{$id_nota_entrega}'";
        return $this->db->query($sql);
    }

    public function delNotaEnvio($id_nota_entrega){
        $sql = "DELETE FROM nota_entrega WHERE id_nota_entrega={$id_nota_entrega}";
        return $this->db->query($sql);
    }
}