	/*=============================================
	Editar Clase
	=============================================*/

	$(".btnEditarClase").click(function(){
		var idClase = $(this).attr("idClase");
 
		var datos = new FormData();
		datos.append("idClase",idClase);

		$.ajax({
			url: "ajax/clase.ajax.php",
			method: "POST",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			dataType: "json",
			success: function(respuesta){ 

				$("#editarescuela").val(respuesta["nomescuela"]);

				$("#editarclave").val(respuesta["clavescuela"]);

				$("#editarfecha").val(respuesta["fecha"]);
				
				$("#editnivel").html(respuesta["nivel"]);
				$("#editgrado").html(respuesta["grado"]);
				$("#editcompetencia").html(respuesta["componente"]);
				$("#editapre").html(respuesta["aprendizaje"]);

			}
		})
	})

	/*=============================================
	Eliminar Clase
	=============================================*/

	$(".btnEliminarClase").click(function(){
		var idClase = $(this).attr("idClase");

		swal({
	 			title: '¿Esta seguro de borrar la clase?!',	
	 			text: "¡Si no lo esta puede cancelar la acción!",
	 			type: 'warning',
	 			showCancelButton: true,
	 			confirmButtonColor: '#3085d6',
	 			cancelButtonColor: '#d33',
	 			cancelButtonText: 'Cancelar',
	 			confirmButtonText: 'Si, Borrar Clase'
	 		}).then((result)=>{
	 			if(result.value){
	 				window.location = "index.php?ruta=PlanClase&idClase="+idClase;
	 			}
	 		})
	})