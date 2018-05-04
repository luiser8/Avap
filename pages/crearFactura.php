<?php require_once '../controllers/usuario/check.php'; ?>
<?php require_once '../controllers/usuario/isAdmin.php'; ?>
<?php require_once 'layout/head.php'; ?>
<?php require_once 'layout/nav.php'; ?>
<?php require_once '../controllers/facturas/getFactura.php';?>
<?php require_once '../controllers/clientes/allClientes.php';?>
<?php require_once '../controllers/almacen/allAlmacen.php';?>
<?php require_once '../controllers/vehiculos/allVehiculo.php';?>

<?php require_once '../views/facturas/seleccionar.phtml';?>

<?php 
    $cliente = new Cliente();
    $clientes = $cliente->getClientes();
    $almacen = new Almacen();
    $repuestos = $almacen->getAlmacen();

 ?>

<div class="row" >
<div class="col-xs-4 col-md-4 text-right pull-right">
    <address>
        <strong>Fecha de Orden:</strong><br>
        
            <input class="form-control" type="date" id="fecha">
        Nro Orden: <strong>1234</strong>
    </address>
</div>
    <div class="col-xs-12 col-md-12">
                <div class="col-xs-6 col-md-6">
                    <strong>Cliente:</strong><br>
                    <div class="form-group">
                        <select name="cliente" id="cliente" class="form-control">
                            <option value="">Selecciona un cliente</option>
                        <?php for($i=0; $i<count($clientes); $i++){ $rs = $clientes[$i]; ?>
                            <option value="<?php echo $rs['id_cliente']; ?>">
                                <?php echo $rs['nombres']; ?>        
                            </option>
                        <?php } ?>
                        </select>
                    </div>
                    
                        <address>
                            <strong>No Poliza:</strong><br>
                            <input type="text" class="form-control" id="no_poliza" name="no_poliza" required placeholder="No Poliza">
                        </address>
                   
                </div>
                <div class="col-xs-6 col-md-6">
                        <address>
                            <strong>Razon social:</strong><br>
                            <input type="text" class="form-control" id="razon_social" name="razon_social" required placeholder="Razon social">
                        </address>
                        <address>
                            <strong>No Siniestro:</strong><br>
                            <input type="text" class="form-control" id="no_siniestro" name="no_siniestro" required placeholder="No Siniestro">
                        </address>
                </div>


    <div class="col-xs-6 col-md-6">
        <strong>Añadir Vehiculo:</strong>
            <input type="checkbox" id="checkbox_vehiculo" class="checkbox-inline" name="checkbox_vehiculo">
        <!-- Campos vehiculos -->
        <div id="mostrar_vehiculo" class="mostrar_vehiculo">
            <div class="form-group">
                <input class="form-control" type="text" name="marca" id="marca" placeholder="Marca" autocomplete="off">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="modelo" id="modelo" placeholder="Modelo" autocomplete="off">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="anio" id="anio" placeholder="Año" autocomplete="off">
            </div>
             <div class="form-group">
                <input class="form-control" type="text" name="placa" id="placa" placeholder="Placa" autocomplete="off">
            </div>
     </div> 
</div>
    <div class="col-xs-6 col-md-6">
        <strong>Añadir Nota de entrega:</strong>
            <input type="checkbox" id="checkbox_nota" class="checkbox-inline" name="checkbox_nota">
        <!-- Campos vehiculos -->
        <div id="mostrar_notas" class="mostrar_notas">
            <div class="form-group">
                <input class="form-control" type="text" name="codigo" id="codigo" placeholder="Código" autocomplete="off">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="empresa_envio" id="empresa_envio" placeholder="Empresa de envio" autocomplete="off">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="guia" id="guia" placeholder="Guia" autocomplete="off">
            </div>
             <div class="form-group">
                <input class="form-control" type="text" name="costo_envio" id="costo_envio" placeholder="Costo del envio" autocomplete="off">
            </div>
             <div class="form-group">
                <select class="form-control" name="estado_nota" id="estado_nota">
                        <option value="0">Selecciona estado</option>
                        <option value="1">Enviado</option>
                        <option value="2">Recibido</option>
                        <option value="3">Devuelto</option>
                        <option value="4">Extraviado</option>
                    </select>
            </div>
             <div class="form-group">
                <input class="form-control" type="date" name="fecha_envio" id="fecha_envio" autocomplete="off">
            </div>
     </div> 
</div>
</div>

</div>

<div class="container">
    <div class="col-md-12">
        <div class="pull-right">
            <button type="button" id="clonar">Clonar</button>
            <button type="button" onclick="selectRepuesto();">Seleccionar</button>

            <a id="addRow" href="javascript:;" title="Add a row" class="btn btn-primary">Agregar</a>
        </div>
        <table class="table table-bordered" id="tabla">        
            <thead>
                <tr class="item-row">
                    <th>Repuesto</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Cantidad</th>
                    <!-- <th>Total</th> -->
                </tr>
            </thead>
            <tbody>
            <!-- Here should be the item row -->
            <tr class="item-row">
                <td><!-- <input class="form-control item" placeholder="Item" type="text"> -->
                    <input type="hidden" class="form-control" id="id_repuesto">
                    <input type="text" readonly="off" class="form-control" id="respuesto_descripcion" required>
                </td>
                <td><input class="form-control price" id="precio_unitario" readonly="off" placeholder="Precio" type="text"></td>
                <td><input class="form-control " id="stock" readonly="off" placeholder="Stock" type="text"></td>
                <td><input class="form-control qty" placeholder="Cantidad" id="cantidad" type="text"></td>
                <!-- <td><span class="total">0.00</span></td> -->
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"><strong>Sub Total</strong></td>
                <td><input class="form-control" type="text" id="subtotal" placeholder="0.00"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="text-right"><strong>IVA</strong></td>
                <td><input class="form-control" id="iva" value="0" type="text"></td>
            </tr>
            
            <tr>
                <td>
                    <select class="form-control" name="estado" id="estado">
                        <option value="0">Selecciona estado</option>
                        <option value="1">Pagada</option>
                        <option value="2">No pagada</option>
                        <option value="3">Anulada</option>
                    </select>
                </td>
                <td></td>
                <td class="text-right"><strong>Total</strong></td>
                <td><input type="text" readonly="off" class="form-control" id="total" placeholder="0.00"></td>
            </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-success pull-right" onclick="creaFactura();" id="btnCreaFactura">Guardar</button>
        <a class="btn btn-info pull-right" href="../pages/facturas">Regresar</a>
    </div>
</div>
<?php require_once 'layout/footer.php'; ?>
    <script>
        jQuery(document).ready(function(){
            jQuery().invoice({
                addRow : "#addRow",
                delete : ".delete",
                parentClass : ".item-row",
                price : ".price",
                qty : ".qty",
                total : ".total",
                totalQty: "#totalQty",
                subtotal : "#subtotal",
                discount: "#discount",
                shipping : "#shipping",
                grandTotal : "#grandTotal"
            });
        });

var cloneCount = 1;
    $("#clonar").on("click",function(){
       
    var tableBody = $('#tabla').find("tbody"),
        trLast = tableBody.find("tr:first"),
        trNew = trLast.clone();

    
    //Elementos


    trLast.after(trNew);
    $('#repuesto').attr('id', 'repuesto'+ cloneCount++);
    $('#precio_unitario').attr('id', 'precio_unitario'+ cloneCount++);
    $('#stock').attr('id', 'stock'+ cloneCount++);
    //$('#repuesto').attr('id', 'repuesto1');
    //$("#id").clone()
});


function selectRepuesto(){
    $('#selectRepuesto').modal('toggle');
}


function addNewRow(index){
  var numRows = $('#tabla .item-row').length;
  $('#tabla .item-row:last').after('\
    <tr>\
      <td><input type="text" class="form-control" readonly="off" id="respuesto_descripcion-'+numRows+'"/></td>\
      <td><input type="text" class="form-control" readonly="off" id="precio_unitario-'+numRows+'"/></td>\
      <td><input type="text" class="form-control" readonly="off" id="stock-'+numRows+'"/></td>\
      <td><input type="number" class="form-control" id="cantidad-'+numRows+'" placeholder="Cantidad"/></td>\
   </tr>\
  ');

  seleccionar(index);
}

//Seleccionar
function seleccionar(index){

    var repuesto = index.parentNode.parentNode.cells[0].textContent;
    var marca = index.parentNode.parentNode.cells[1].textContent;
    var descripcion = index.parentNode.parentNode.cells[2].textContent;
    var precio_unitario = index.parentNode.parentNode.cells[3].textContent;
    var stock = index.parentNode.parentNode.cells[4].textContent;

    var repuestos_arr = [];
    repuestos_arr.push(repuesto, marca, descripcion, precio_unitario, stock);
    console.log(repuestos_arr);

    var repuestos = {
        'repuesto':repuesto,
        'marca':marca,
        'descripcion':descripcion,
        'precio_unitario':precio_unitario,
        'stock':stock
    };

    $('#id_repuesto').val(repuestos.repuesto);
    $('#respuesto_descripcion').val(repuestos.descripcion);
    $('#precio_unitario').val(repuestos.precio_unitario);
    $('#stock').val(repuestos.stock);

    console.log(repuestos);
    // console.log(index.parentNode.parentNode);
    $.ajax({
        url: "../controllers/facturas/addFacturaArray.php",
        type: "post",
        data: repuestos,
        success: function (response) {
           console.log(response);                 
           //window.location = "../pages/facturas";
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }

    });

}

//IVA
$('#iva').keyup(function(){
    //var precio_unitarioXcantidad = $('#precio_unitario').val() * $('#cantidad').val();
    var subtotal = $('#subtotal').val();
    var iva = subtotal * $(this).val() / 100;
    //var total = precio_unitarioXcantidad + iva;
    console.log(iva);
    var total = parseFloat(iva) + parseFloat(subtotal);
        $('#total').val(parseFloat(total).toFixed(2));
    //$('#total').val(total);
})

$('#cantidad').keyup(function(){
    var iva = $('#precio_unitario').val() * $(this).val();
    $('#subtotal').val(parseFloat(iva).toFixed(2));

})
//ajax
function creaFactura(){
    //Calculo iva
        var subtotal = $('#subtotal').val();
        var iva = subtotal * $('#iva').val() / 100;
        var total = parseFloat(iva) + parseFloat(subtotal);

    var data = {
        'repuesto': $('#id_repuesto').val(),//Repuesto

        'cliente' : $('#cliente').val(), //Clientes

        'placa' : $('#placa').val(), //Vehiculos
        'marca' : $('#marca').val(),
        'modelo' : $('#modelo').val(),
        'anio' : $('#anio').val(),

        'subtotal' : subtotal,//Factura
        'iva' : parseFloat(iva).toFixed(2),
        'total' : parseFloat(total).toFixed(2),
        'factura' : 19,
        'cantidad' : $('#cantidad').val(),
        'razon_social' : $('#razon_social').val(),
        'n_poliza' : $('#no_poliza').val(),
        'n_siniestro' : $('#no_siniestro').val(),
        'fecha' : $('#fecha').val(),
        'estado' : $('#estado').val(),

        'codigo' : $('#codigo').val(),//Nota entrega     
        'empresa_envio' : $('#empresa_envio').val(),     
        'guia' : $('#guia').val(),    
        'costo_envio' : $('#costo_envio').val(),    
        'estado_nota' : $('#estado_nota').val(),    
        'fecha_envio' : $('#fecha_envio').val()   
    };

    $.ajax({
        url: "../controllers/facturas/addFactura.php",
        type: "post",
        data: data,
        success: function (response) {
           console.log(response);                 
           //window.location = "../pages/facturas";
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }

    });
}

</script>