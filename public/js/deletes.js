function delUsuario(id_usuario){
	var confirmacion = confirm('Seguro que desea eliminar este usuario?');
		if(confirmacion){
			window.location = "../controllers/usuario/delUsuario?id="+id_usuario;
	 }
}