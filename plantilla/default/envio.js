$(document).ready(function(){

	$("#formulario").submit(insertar)
 
	function insertar(evento){
		evento.preventDefault()
		var datos=new FormData($("#formulario")[0])
	$("#respuesta").html("<img src='img.gif'>")
	$.ajax({
		url:'registrar.php',
		type:'POST',
		data:datos,
		contentType:false,
		processData:false,
		success:function(datos){
			$('#respuesta').html(datos)
		}
	})
	}
})

$(document).ready(function(){

	$("#actualizar1").submit(insertar)

	function insertar(evento){
		evento.preventDefault()
		var datos=new FormData($("#actualizar1")[0])
	$("#respuesta1").html("<img src='img.gif'>")
	$.ajax({
		url:'actualizar.php',
		type:'POST',
		data:datos,
		contentType:false,
		processData:false,
		success:function(datos){
			$('#respuesta1').html(datos)
		}
	})
	} 
})



$(document).ready(function(){

	$("#inscribir").submit(insertar)
 
	function insertar(evento){
		evento.preventDefault()
		var datos=new FormData($("#inscribir")[0])
	$("#respuesta").html("<img src='img.gif'>")
	$.ajax({
		url:'inscribir.php',
		type:'POST',
		data:datos,
		contentType:false,
		processData:false,
		success:function(datos){
			$('#respuesta').html(datos)
		}
	})
	}
})



$(document).ready(function(){

	$("#registro_editar").submit(insertar)

	function insertar(evento){
		evento.preventDefault()
		var datos=new FormData($("#registro_editar")[0])
	$("#respuesta2").html("<img src='img.gif'>")
	$.ajax({
		url:'registros_editar.php',
		type:'POST',
		data:datos,
		contentType:false,
		processData:false,
		success:function(datos){
			$('#respuesta2').html(datos)
		}
	})
	} 
})
