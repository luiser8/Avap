<?php
require_once 'db.php';

class Factura{
	private $db;
	private $factura;

	public function __construct(){
		$this->db=db::conexion();
		$this->factura=array();
	}
	//Metodos CRUD
	public function addFactura($id_vehiculo, $id_usuario, $id_cliente, $iva, $total, $razon_social, $n_poliza, $n_siniestro, $fecha, $estado){
        $sql = "INSERT INTO factura(id_factura, id_vehiculo, id_usuario, id_cliente, iva,
                                total, razon_social, n_poliza, n_siniestro, fecha, estado)VALUES(
            NULL, '{$id_vehiculo}', '{$id_usuario}', '{$id_cliente}', '{$iva}', '{$total}', '{$razon_social}',
                    '{$n_poliza}', '{$n_siniestro}', '{$fecha}', '{$estado}')";
            return $this->db->query($sql);

    }

    public function addFacturaRepuesto($id_repuesto, $id_factura, $cantidad){
        $sql = "INSERT INTO factura_repuesto(id_fac_repuesto, id_repuesto, id_factura, cantidad)VALUES(
            NULL, '{$id_repuesto}', '{$id_factura}', '{$cantidad}')";
            return $this->db->query($sql);
    }

    public function allFacturas(){
        $sql = $this->db->query("SELECT factura.id_factura, factura.id_vehiculo, factura.id_usuario,
                                    factura.id_cliente, factura.iva, factura.total, factura.razon_social,
                                    factura.n_poliza, factura.n_siniestro, factura.fecha, factura.estado, factura.fecha_log,   
                                            clientes.id_cliente, clientes.nombres, clientes.apellidos, clientes.correo, clientes.telefono, 
                                                clientes.rif, clientes.razon_social, clientes.direccion,
                                                    usuario.id_rol, usuario.id_usuario, usuario.cuenta
                                            FROM factura 
                                                INNER JOIN clientes ON factura.id_cliente = clientes.id_cliente
                                                INNER JOIN usuario ON factura.id_usuario = usuario.id_usuario");
        
       if(mysqli_num_rows($sql) > 0){
         while($filas = $sql->fetch_assoc()){
            $this->factura[] = $filas;
        }

       }
        return $this->factura;
    }

    public function getFacturas(){
    $sql = $this->db->query("SELECT * FROM factura ORDER BY id_factura DESC LIMIT 1");
        while($filas = $sql->fetch_assoc()){
            $this->factura[] = $filas;
        }
        return $this->factura;      
    }

    public function getFacturaId($id_vehiculo){
        $sql = $this->db->query("SELECT * FROM factura WHERE id_factura = {$id_factura}");
        while($filas = $sql->fetch_assoc()){
            $this->factura[] = $filas;
        }
        return $this->factura;
    } 

   public function editFactura($id_factura, $id_vehiculo, $id_usuario, $id_cliente, $iva, $total, $razon_social, $n_poliza, $n_siniestro, $fecha, $estado){
        $sql = "UPDATE factura SET id_vehiculo='{$id_vehiculo}', id_usuario='{$id_usuario}', 
                        id_cliente='{$id_cliente}', total='{$total}', razon_social='{$razon_social}', n_poliza='{$n_poliza}',
                        n_siniestro='{$n_siniestro}', fecha='{$fecha}', estado='{$estado}'
                  WHERE id_factura='{$id_factura}'";
        return $this->db->query($sql);
    }

    public function delFactura($id_factura){
        $sql = "DELETE FROM factura WHERE id_factura={$id_factura}";
        return $this->db->query($sql);
    }

    public function delFacturaRepuesto($id_factura){
        $sql = "DELETE FROM factura_repuesto WHERE id_factura={$id_factura}";
        return $this->db->query($sql);
    }
}