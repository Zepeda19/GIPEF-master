<?php
	require_once "../controladores/actividades.controlador.php";
	require_once "../modelos/actividades.modelo.php";

	class AjaxActividad{
		/*=============================================
		Editar Clase
		=============================================*/

		public $idActividad;
		public function ajaxEditarActividad(){
			$item = "id";
			$valor = $this->idActividad;
			$respuesta = ControladorActividades::ctrMostrarActividades($item,$valor);

			echo json_encode($respuesta);
		}
	}

	/*=============================================
	Editar Clase
	=============================================*/

	if(isset($_POST["idActividad"])){
		$clase = new AjaxActividad();
		$clase -> idActividad = $_POST["idActividad"];
		$clase -> ajaxEditarActividad();
	}