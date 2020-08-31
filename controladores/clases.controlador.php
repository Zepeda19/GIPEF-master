<?php

class ControladorClases{

	/*=============================================
	Registro de Clases
	=============================================*/
	static public function ctrCrearClase()
	{ 
		if(isset($_POST["nuevaescuela"]))
		{
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaescuela"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevaclave"])){

			   	$tabla = "clases";
			   	$datos = array("escuela" => $_POST["nuevaescuela"], 
			      			   "clave" => $_POST["nuevaclave"], 
			      			   "fecha" => $_POST["nuevaFecha"], 
			      			   "nivel" => $_POST["niv"], 
			      			   "grado" => $_POST["grad"], 
			      			   "componente" => $_POST["compe"], 
			      			   "aprendizaje" => $_POST["aprend"]);

			   	$respuesta = ModeloClases::mdlIngresarClase($tabla,$datos);

			   	if($respuesta == "ok"){
			   		echo '<script> 
	 					swal({
	 						type: "success",
	 						title: "¡La clase ha sido guardado correctamente!",
	 						showConfirmButton: true,
	 						confirmButtonText: "Cerrar",
	 						closeOnConfirm: false

	 					}).then((result)=>{
	 						if(result.value)
	 						{
	 							window.location = "PlanClase";
	 						}
	 						});

	 				 	</script>';
			   	}

			}else{
				echo '<script> 
 					swal({
 						type: "error",
 						title: "¡La clase no puede ir vacia o llevar caracteres especiales!",
 						showConfirmButton: true,
 						confirmButtonText: "Cerrar",
 						closeOnConfirm: false

 					}).then((result)=>{
 						if(result.value)
 						{
 							window.location = "PlanClase";
 						}
 						});

 				 </script>';
			}
		}
	}

	/*=============================================
	Mostrar Clases
	=============================================*/
	static public function ctrMostrarClases($item,$valor)
	{
		$tabla = "clases";
		$tabla2 ="actividades";

		$respuesta = ModeloClases::mdlMostrarClase($tabla,$item,$valor);
		return $respuesta;
	}

	/*=============================================
	Editar Clases
	=============================================*/
	static public function ctrEditarClase()
	{ 
		if(isset($_POST["editarescuela"]))
		{
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarescuela"])){


			   	$tabla = "clases";
			   	$datos = array("editescuela" => $_POST["editarescuela"],
			   					"escactual" => $_POST["EscuelaActual"],
			   					"editclave" => $_POST["editarclave"],
			   					"editfecha" => $_POST["editarfecha"],
			   					"editarnivel" => $_POST["editarnivel"] );

			   	$respuesta = ModeloClases::mdlEditarClase($tabla,$datos);

			   	if($respuesta == "ok"){
			   		echo '<script> 
	 					swal({
	 						type: "success",
	 						title: "¡La clase ha sido cambiada Correctamente!",
	 						showConfirmButton: true,
	 						confirmButtonText: "Cerrar",
	 						closeOnConfirm: false

	 					}).then((result)=>{
	 						if(result.value)
	 						{
	 							window.location = "PlanClase";
	 						}
	 						});

	 				 	</script>';
			   	}

			}else{
				echo '<script> 
 					swal({
 						type: "error",
 						title: "¡La clase no puede ir vacia o llevar caracteres especiales!",
 						showConfirmButton: true,
 						confirmButtonText: "Cerrar",
 						closeOnConfirm: false

 					}).then((result)=>{
 						if(result.value)
 						{
 							window.location = "PlanClase";
 						}
 						});

 				 </script>';
			}
		}
	}

	/*=============================================
	Borrar Clases
	=============================================*/
	static public function ctrBorrarClase()
	{
		if(isset($_GET["idClase"]))
		{
			$tabla = "clases";
			$datos = $_GET["idClase"];
			$respuesta = ModeloClases::mdlBorrarClase($tabla,$datos);

			if($respuesta == "ok"){

				echo '<script> 
	 					swal({
	 						type: "success",
	 						title: "La clase ha sido borrado correctamente",
	 						showConfirmButton: true,
	 						confirmButtonText: "Cerrar",
	 						closeOnConfirm: false
	 					}).then((result)=>{
	 						if(result.value)
	 						{
	 							window.location = "PlanClase";
	 						}
	 						})

	 				 	</script>';
			}
		}
	}
}

