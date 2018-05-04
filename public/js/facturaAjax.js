

$('#repuesto').change(function(){
       $.ajax({
       	url: '../controllers/facturas/facturaAjax.php?id=' + $(this).val(),
       	type:'GET',
       	dataType: "json",
       	success: function(data){
       		console.log(data[0].precio_unitario);
       		$('#precio_unitario').val(data[0].precio_unitario);
       		$('#stock').val(data[0].stock);
       	}
       });
});

$('#repuesto1').change(function(){
       $.ajax({
       	url: '../controllers/facturas/facturaAjax.php?id=' + $(this).val(),
       	type:'GET',
       	dataType: "json",
       	success: function(data){
       		console.log(data[0].precio_unitario);
       		$('#precio_unitario1').val(data[0].precio_unitario);
       		$('#stock1').val(data[0].stock);
       	}
       });
});

$('#agregar').click(function(){
	// $.ajax({
 //       	url: '../controllers/facturas/selectOpcion.php',
 //       	type:'GET',
 //       	success: function(data){
 //       		console.log(data);
 //       		$('#factura tr:last').after(data);
 //       	}
 //       });
});


// $('#cantidad').keyup(function(){
// 	var precio_unitarioXcantidad = $('#precio_unitario').val() * $(this).val();
// 	console.log(precio_unitarioXcantidad);
// 	$('#base_imponible').val(precio_unitarioXcantidad);
// })


// $('#iva').keyup(function(){
// 	var precio_unitarioXcantidad = $('#precio_unitario').val() * $('#cantidad').val();
// 	var iva = precio_unitarioXcantidad * $(this).val() / 100;
// 	var total = precio_unitarioXcantidad + iva;
// 	console.log(total);
// 	$('#total').val(total);
// })

function calculo(cantidad, cantidad1){
	
}