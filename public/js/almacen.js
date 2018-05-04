//Alicuotas
//Llama modal nuevo
function nuevoRepuesto(){
    $('#nuevoRepuesto').modal('toggle');
}

//Llama modal para editar
function editarRepuesto(index) {
    //Modal edit
    $('#editRepuesto').modal('toggle');

    //Nodos tabla
    var id_repuesto = index.parentNode.parentNode.cells[0].textContent;
    var new_marca = index.parentNode.parentNode.cells[1].textContent;
    var new_descripcion = index.parentNode.parentNode.cells[2].textContent;
    var new_precio_unitario = index.parentNode.parentNode.cells[3].textContent;
    var new_stock = index.parentNode.parentNode.cells[4].textContent;

    //Pego en el formulario
    document.getElementById('id_repuesto').value = id_repuesto;
    document.getElementById('new_marca').value = new_marca;
    document.getElementById('new_descripcion').value = new_descripcion;
    document.getElementById('new_precio_unitario').value = new_precio_unitario;
    document.getElementById('new_stock').value = new_stock;
}

//Elimina el registro
function delRepuesto(index) {
    var tabla = document.getElementById('tablaRepuesto');
    var tr = index.parentNode.parentNode.rowIndex;
    //Nodos tabla
    var id = index.parentNode.parentNode.cells[0].textContent;

   
    var confirmacion = confirm(`Seguro eliminar el repuesto ${id}`);
        if(confirmacion){
            window.location = "../controllers/almacen/delAlmacen?id="+id;
             tabla.deleteRow(tr);
        }
}