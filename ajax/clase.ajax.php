<?php
	require_once "../controladores/clases.controlador.php";
	require_once "../modelos/clases.modelo.php";

	class AjaxClases{
		/*=============================================
		Editar Clase
		=============================================*/

		public $idClase;
		public function ajaxEditarClase(){
			$item = "id";
			$valor = $this->idClase;
			$respuesta = ControladorClases::ctrMostrarClases($item,$valor);
			echo json_encode($respuesta);
		}
	}

	/*=============================================
	Editar Clase
	=============================================*/

	if(isset($_POST["idClase"])){
		$editar = new AjaxClases();
		$editar -> idClase = $_POST["idClase"];
		$editar -> ajaxEditarClase();
	}