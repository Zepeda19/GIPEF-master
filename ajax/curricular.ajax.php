<?php
	require_once "../controladores/planes.controlador.php";
	require_once "../modelos/planes.modelo.php";

	class AjaxCurricular{
		/*=============================================
		Editar Clase
		=============================================*/

		public $idCurricular;
		public function ajaxEditarCurricular(){
			$item = "id";
			$valor = $this->idCurricular;
			$respuesta = ControladorPlanes::ctrMostrarPlanes($item,$valor);

			echo json_encode($respuesta);
		}
	}

	/*=============================================
	Editar Clase
	=============================================*/

	if(isset($_POST["idCurricular"])){
		$clase = new AjaxCurricular();
		$clase -> idCurricular = $_POST["idCurricular"];
		$clase -> ajaxEditarCurricular();
	}