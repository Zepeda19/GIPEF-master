  /*=============================================
	subiendo foto de la actividad
	=============================================*/

	$(".nuevaFoto").change(function (){

		var imagen = this.files[0];

		//validar imagen
		if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){
			$(".nuevaFoto").val("");
				swal({
				title: "Error al subir la imagen",
				text: "¡La imagen debe de estar en formato JPG o PNG!",
				type: "error",
				confirmButtonText: "¡Cerrar!"
				});
		}else if(imagen["size"] > 2000000){
			$(".nuevaFoto").val("");
				swal({
					title: "Error al subir la imagen",
					text: "¡La imagen no debe de Pesar mas de 2MB!",
					type: "error",
					confirmButtonText: "¡Cerrar!"
				});
		}else{
			var datosImagen = new FileReader;
			datosImagen.readAsDataURL(imagen);

			$(datosImagen).on("load", function(event){

				var rutaImagen = event.target.result;

				$(".previsualizar").attr("src", rutaImagen);
			})
		}
	})

	/*=============================================
	Editar Actividades
	=============================================*/

	$(".btnEditarActividad").click(function(){
		var idActividad = $(this).attr("idActividad");

		var datos = new FormData();
		datos.append("idActividad",idActividad);

		$.ajax({
			url: "ajax/actividad.ajax.php",
			method: "POST",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			dataType: "json",
			success: function(respuesta){
				$("#editaractividad").val(respuesta["actividad"]);
				$("#editaractividades").val(respuesta["actividad"]);
				$("#editarpropositos").val(respuesta["proposito"]);
				$("#editardescripcion").val(respuesta["descripcion"]);
				$("#editarvariaciones").val(respuesta["variacion"]);
			}
		})
	})

	/*=============================================
	Eliminar Actividad
	=============================================*/

	$(".btnEliminarPlan").click(function(){
		var idActividad = $(this).attr("idActividad");

		swal({
	 			title: '¿Esta seguro de borrar la Actividad?!',	
	 			text: "¡Si no lo esta puede cancelar la acción!",
	 			type: 'warning',
	 			showCancelButton: true,
	 			confirmButtonColor: '#3085d6',
	 			cancelButtonColor: '#d33',
	 			cancelButtonText: 'Cancelar',
	 			confirmButtonText: 'Si, Borrar Actividad'
	 		}).then((result)=>{
	 			if(result.value){
	 				window.location = "index.php?ruta=PlanActividades&idActividad="+idActividad;
	 			}
	 		})
	})