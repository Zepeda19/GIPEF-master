<?php
class ControladorPlanes{

	/*=============================================
	Registro de Clases
	=============================================*/
	static public function ctrCrearPlan()
	{
		if(isset($_POST["nuevoEscuela"]))
		{
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoEscuela"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoClaveEscuela"])){

			    $tabla = "planes";
				$datos = array("escuela" => $_POST["nuevoEscuela"], 
			      			   "clave" => $_POST["nuevoClaveEscuela"], 
			      			   "fecha" => $_POST["nuevaFecha"], 
			      			   "nivel" => $_POST["niv"], 
			      			   "grado" => $_POST["grad"], 
			      			   "componente" => $_POST["compe"], 
			      			   "aprendizaje" => $_POST["aprend"]);

				$respuesta = ModeloPlanes::mdlIngresarPlanes($tabla,$datos);
				if($respuesta = "ok"){
			   		echo '<script> 
	 					swal({
	 						type: "success",
	 						title: "¡La actividad ha sido guardado correctamente!",
	 						showConfirmButton: true,
	 						confirmButtonText: "Cerrar",
	 						closeOnConfirm: false

	 					}).then((result)=>{
	 						if(result.value)
	 						{
	 							window.location = "PlanCurricular";
	 						}
	 						});

	 				 	</script>';
			   	}

			}else{
				echo '<script> 
 					swal({
 						type: "error",
 						title: "¡Los planes no pueden ir vacios o llevar caracteres especiales!",
 						showConfirmButton: true,
 						confirmButtonText: "Cerrar",
 						closeOnConfirm: false

 					}).then((result)=>{
 						if(result.value)
 						{
 							window.location = "PlanCurricular";
 						}
 						});

 				 </script>';
			}
		}
	}
	/*=============================================
	Mostrar Planes
	=============================================*/
	static public function ctrMostrarPlanes($item,$valor)
	{
		$tabla = "planes";

		$respuesta = ModeloPlanes::mdlMostrarPlanes($tabla,$item,$valor);
		return $respuesta;
	}
		/*=============================================
	Editar Clases
	=============================================*/
	static public function ctrEditarPlan()
	{ 
		if(isset($_POST["editarescuela"]))
		{
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarescuela"])){


			   	$tabla = "planes";
			   	$datos = array("editescuela" => $_POST["editarescuela"],
			   					"escactual" => $_POST["EscuelaActual"],
			   					"editclave" => $_POST["editarclave"],
			   					"editfecha" => $_POST["editarfecha"]);

			   	$respuesta = ModeloPlanes::mdlEditarPlan($tabla,$datos);

			   	if($respuesta == "ok"){
			   		echo '<script> 
	 					swal({
	 						type: "success",
	 						title: "¡La clase ha sido cambiada correctamente!",
	 						showConfirmButton: true,
	 						confirmButtonText: "Cerrar",
	 						closeOnConfirm: false

	 					}).then((result)=>{
	 						if(result.value)
	 						{
	 							window.location = "PlanCurricular";
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
 							window.location = "PlanCurricular";
 						}
 						});

 				 </script>';
			}
		}
	}

	/*=============================================
	Borrar Plan
	=============================================*/
	static public function ctrBorrarPlan()
	{
		if(isset($_GET["idCurricular"]))
		{
			$tabla = "planes";
			$datos = $_GET["idCurricular"];
			$respuesta = ModeloPlanes::mdlBorrarPlanes($tabla,$datos);

			if($respuesta == "ok"){

				echo '<script> 
	 					swal({
	 						type: "success",
	 						title: "Plan curricular ha sido borrado correctamente",
	 						showConfirmButton: true,
	 						confirmButtonText: "Cerrar",
	 						closeOnConfirm: false
	 					}).then((result)=>{
	 						if(result.value)
	 						{
	 							window.location = "PlanCurricular";
	 						}
	 						})

	 				 	</script>';
			}
		}
	}
}