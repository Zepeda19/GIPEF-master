	/*=============================================
	Editar Curricular
	=============================================*/

	$(".btnEditarCurricular").click(function(){
		var idCurricular = $(this).attr("idCurricular");

		var datos = new FormData();
		datos.append("idCurricular",idCurricular);

		$.ajax({
			url: "ajax/curricular.ajax.php",
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
	Borrar Curricular
	=============================================*/
	$(".btnEliminarCurricular").click(function(){
		var idCurricular = $(this).attr("idCurricular");

		swal({
	 			title: '¿Esta seguro de borrar el Plan Curricular?!',	
	 			text: "¡Si no lo esta puede cancelar la acción!",
	 			type: 'warning',
	 			showCancelButton: true,
	 			confirmButtonColor: '#3085d6',
	 			cancelButtonColor: '#d33',
	 			cancelButtonText: 'Cancelar',
	 			confirmButtonText: 'Si, Borrar el Plan Curricular'
	 		}).then((result)=>{
	 			if(result.value){
	 				window.location = "index.php?ruta=PlanCurricular&idCurricular="+idCurricular;
	 			}
	 		})
	})
