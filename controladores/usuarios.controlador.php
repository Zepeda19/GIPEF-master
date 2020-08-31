<?php

class ControladorUsuarios{

	/*=============================================
	INGRESO DE USUARIO
	=============================================*/

	public function ctrIngresoUsuario(){

		if(isset($_POST["ingUsuario"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

				$tabla = "docentes";

				$item = "filiacion";

				$valor = $_POST["ingUsuario"];

				$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);
				//var_dump($respuesta);

				if($respuesta["filiacion"] == $_POST["ingUsuario"] && $respuesta["contraseña"] == $_POST["ingPassword"]){

					$_SESSION["iniciarSesion"] = "ok";  //EL NOMBRE DE  SESION SE TOMA DESDE PLANTILLA.PHP

					echo '<script>

						window.location = "inicio";

					</script>';

				}else{

					echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

				} 

			}	

		}

	}

}
	


