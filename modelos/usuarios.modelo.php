<?php

require_once "conexion.php";

class ModeloUsuarios
{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarUsuarios($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item"); //BUSCA EN BD

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR); //AGREGA SEGURIDAD Y SOLO ACEPTA CARACTERES (NO CODIGO, NO SCRIPTS)

		$stmt -> execute();

		return $stmt -> fetch();

	}
}