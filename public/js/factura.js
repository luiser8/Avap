//Alicuotas
//Llama modal nuevo
function nuevaFactura(){
    $('#nuevaFactura').modal('toggle');
}

//Llama modal para editar
function editarFactura(index) {
    //Modal edit
    $('#editFactura').modal('toggle');
    
    //Nodos tabla
    var id_cliente = index.parentNode.parentNode.cells[0].textContent;
    var new_nombre = index.parentNode.parentNode.cells[1].textContent;
    var new_apellido = index.parentNode.parentNode.cells[2].textContent;
    var new_correo = index.parentNode.parentNode.cells[3].textContent;
    var new_razon = index.parentNode.parentNode.cells[4].textContent;
    var new_telefono = index.parentNode.parentNode.cells[5].textContent;
    var new_rif = index.parentNode.parentNode.cells[6].textContent;
    var new_direccion = index.parentNode.parentNode.cells[7].textContent;

    //Pego en el formulario
    document.getElementById('id_cliente').value = id_cliente;
    document.getElementById('new_nombre').value = new_nombre;
    document.getElementById('new_apellido').value = new_apellido;
    document.getElementById('new_rif').value = new_rif;
    document.getElementById('new_direccion').value = new_direccion;
    document.getElementById('new_correo').value = new_correo;
    document.getElementById('new_razon').value = new_razon;
    document.getElementById('new_telefono').value = new_telefono;
}

//Elimina el registro
function delFactura(index) {
    var tabla = document.getElementById('tablaFacturas');
    var tr = index.parentNode.parentNode.rowIndex;
    //Nodos tabla
    var id = index.parentNode.parentNode.cells[0].textContent;

   
    var confirmacion = confirm(`Seguro eliminar la factura ${id}`);
        if(confirmacion){
            window.location = "../controllers/facturas/delFactura?id="+id;
             tabla.deleteRow(tr);
        }
}

$("#checkbox_vehiculo").click(function(){
    $('#mostrar_vehiculo').toggleClass("mostrar_vehiculo");
});
$("#checkbox_nota").click(function(){
    $('#mostrar_notas').toggleClass("mostrar_notas");
});