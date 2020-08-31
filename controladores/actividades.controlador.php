<?php

class ControladorActividades {
	/*=============================================
	Crear Actividades
	=============================================*/

	static	public function ctrCrearActividades() {

		if(isset($_POST["nuevaActividad"]))
 		{
	 		if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaActividad"]) && 
	 			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevasActividades"]) && 
	 			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevosPropositos"]) && 
	 			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaDescripcion"]) &&
	 			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevasVariaciones"]))
	 			{
				/*VAlidar imagen*/
				$ruta = "";
				if(isset($_FILES["nuevaFoto"]["tmp_name"])){

				list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);

				$nuevoAncho = 500;
				$nuevoAlto = 500;

				/*=============================================
				CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
				=============================================*/
				$directorio = "vistas/img/actividades/".$_POST["nuevaActividad"];
				mkdir($directorio, 0755);
				/*=============================================
				De acerdo al tipo de imagen aplicamos las funciones por defecto
				=============================================*/

				if($_FILES["nuevaFoto"]["type"]=="image/jpeg")
				{
					/*Guardamos la imagen en el directorio*/
					$aleatorio = mt_rand(100,999);
					$ruta = "vistas/img/actividades/".$_POST["nuevaActividad"]."/".$aleatorio.".jpg";
					$origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
					imagejpeg($destino,$ruta);
				}
				if($_FILES["nuevaFoto"]["type"]=="image/png")
				{
					/*Guardamos la imagen en el directorio*/
					$aleatorio = mt_rand(100,999);
					$ruta = "vistas/img/actividades/".$_POST["nuevaActividad"]."/".$aleatorio.".png";
					$origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
					imagepng($destino,$ruta);
				}
			}
				$tabla = "actividades";
				$datos = array("actividad" => $_POST["nuevaActividad"],
 							   "actividades" => $_POST["nuevasActividades"],
 							   "propositos" => $_POST["nuevosPropositos"],
 							   "descripcion" => $_POST["nuevaDescripcion"],
 							   "variaciones" => $_POST["nuevasVariaciones"], 
 							    "foto" => $ruta);
				$respuesta = ModeloActividades::mdlIngresarActividades($tabla,$datos);

				if($respuesta == "ok")
 				{
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
	 							window.location = "PlanActividades";
	 						}
	 						});

	 				 	</script>';
 				}

 			}else{
 				echo '<script> 
 					swal({
 						type: "error",
 						title: "¡La actividad no puede ir vacio o llevar caracteres especiales!",
 						showConfirmButton: true,
 						confirmButtonText: "Cerrar",
 						closeOnConfirm: false

 					}).then((result)=>{
 						if(result.value)
 						{
 							window.location = "PlanActividades";
 						}
 						});

 				 </script>';
 	  }
 	}
  }
  /*=============================================
	Mostrar Actividades
	=============================================*/
	static public function ctrMostrarActividades($item,$valor)
	{
		$tabla = "actividades";

		$respuesta = ModeloActividades::mdlMostrarActividades($tabla,$item,$valor);
		return $respuesta;
	}

	/*=============================================
	Editar Actividad
	=============================================*/
	static public function ctrEditarActividades()
	{ 
		if(isset($_POST["editaractividad"]))
		{
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editaractividad"]) && 
	 			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarActividades"]) && 
	 			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarPropositos"]) && 
	 			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarDescripcion"]) &&
	 			preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarVariaciones"])){


			   	$tabla = "actividades";
			   	$datos = array("editactividad" => $_POST["editaractividad"],
			   					"editactividades" => $_POST["editarActividades"],
			   					"editproposito" => $_POST["editarPropositos"],			   
			   					"editdescripcion" => $_POST["editarDescripcion"],
			   					"editvariacion" => $_POST["editarVariaciones"],
			   					"actividadActual" => $_POST["ActividadActual"]);

			   	$respuesta = ModeloActividades::mdlEditarActividad($tabla,$datos);

			   	if($respuesta == "ok"){
			   		echo '<script> 
	 					swal({
	 						type: "success",
	 						title: "¡La actividad ha sido cambiada correctamente!",
	 						showConfirmButton: true,
	 						confirmButtonText: "Cerrar",
	 						closeOnConfirm: false

	 					}).then((result)=>{
	 						if(result.value)
	 						{
	 							window.location = "PlanActividades";
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
 							window.location = "PlanActividades";
 						}
 						});

 				 </script>';
			}
		}
	}

	/*=============================================
	Borrar Actividad
	=============================================*/
	static public function ctrBorrarActividad()
	{
		if(isset($_GET["idActividad"]))
		{
			$tabla = "actividades";
			$datos = $_GET["idActividad"];
			$respuesta = ModeloActividades::mdlBorrarActividad($tabla,$datos);

			if($respuesta == "ok"){

				echo '<script> 
	 					swal({
	 						type: "success",
	 						title: "La actividad ha sido borrada correctamente",
	 						showConfirmButton: true,
	 						confirmButtonText: "Cerrar",
	 						closeOnConfirm: false
	 					}).then((result)=>{
	 						if(result.value)
	 						{
	 							window.location = "PlanActividades";
	 						}
	 						})

	 				 	</script>';
			}
		}
	}
}