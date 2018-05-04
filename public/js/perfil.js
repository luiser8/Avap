//Alicuotas

//Llama modal para editar
function editarPerfil(index) {
    //Modal edit
    $('#editarPerfil').modal('toggle');

    //Nodos tabla
    var id_new_perfil = index.parentNode.parentNode.cells[0].textContent;
    var new_cuenta = index.parentNode.parentNode.cells[1].textContent;

    //Pego en el formulario
    document.getElementById('id_new_perfil').value = id_new_perfil;
    document.getElementById('new_cuenta').value = new_cuenta;
}

//Elimina el registro
// function delCliente(index) {
//     var tabla = document.getElementById('tablaAlicuota');
//     var tr = index.parentNode.parentNode.rowIndex;
//     //Nodos tabla
//     var id = index.parentNode.parentNode.cells[0].textContent;

   
//     var confirmacion = confirm(`Seguro eliminar la alicouta ${id}`);
//         if(confirmacion){
//             window.location = "../controllers/alicuotas/delAlicuota?id="+id;
//              tabla.deleteRow(tr);
//         }
// }