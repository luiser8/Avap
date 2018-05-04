//Alicuotas
//Llama modal nuevo
function nuevoUsuario(){
    $('#nuevoUsuario').modal('toggle');
}

//Llama modal para editar
function editUsuario(index) {
    //Modal edit
    $('#editUsuario').modal('toggle');

    //Nodos tabla
    var id_new_usuario = index.parentNode.parentNode.cells[0].textContent;
    var new_cuenta = index.parentNode.parentNode.cells[1].textContent;

    //Pego en el formulario
    document.getElementById('id_new_usuario').value = id_new_usuario;
    document.getElementById('new_cuenta').value = new_cuenta;
}

//Elimina el registro
function delUsuario(index) {
    var tabla = document.getElementById('tablaUsuario');
    var tr = index.parentNode.parentNode.rowIndex;
    //Nodos tabla
    var id = index.parentNode.parentNode.cells[0].textContent;

   
    var confirmacion = confirm(`Seguro eliminar el usuario ${id}`);
        if(confirmacion){
            window.location = "../controllers/usuario/delUsuario?id="+id;
             tabla.deleteRow(tr);
        }
}