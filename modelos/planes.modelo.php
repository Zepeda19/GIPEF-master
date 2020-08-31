<?php
require_once "conexion.php";

class ModeloPlanes{
	/*=============================================
	Registro de Planes
	=============================================*/
	static public function mdlIngresarPlanes($tabla,$datos){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nomescuela, clavescuela, fecha, nivel, grado, componente, aprendizaje) VALUES (:escuela, :clave, :fecha, :nivel, :grado, :componente, :aprendizaje)");
		$stmt->bindParam(":escuela", $datos["escuela"], PDO::PARAM_STR);
		$stmt->bindParam(":clave", $datos["clave"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":nivel", $datos["nivel"], PDO::PARAM_STR);
		$stmt->bindParam(":grado", $datos["grado"], PDO::PARAM_STR);
		$stmt->bindParam(":componente", $datos["componente"], PDO::PARAM_STR);
		$stmt->bindParam(":aprendizaje", $datos["aprendizaje"], PDO::PARAM_STR);

		if($stmt->execute())
			{
				return "ok";
			}else{
				return "error";
			}
			$stmt->close();
			$stmt = null;

	}
	/*=============================================
	Mostrar Planes
	=============================================*/

	static public function mdlMostrarPlanes($tabla,$item,$valor)
	{
		if($item != null)
		{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item,$valor,PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
			return $stmt -> fetchAll();
		}
			$stmt->close();
			$stmt = null;
	}

	/*=============================================
	Editar Clases
	=============================================*/
	static public function mdlEditarPlan($tabla,$datos)
	{
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nomescuela = :editescuela, clavescuela = :editclave, fecha = :editfecha WHERE nomescuela = :escactual");

		$stmt->bindParam(":editescuela", $datos["editescuela"], PDO::PARAM_STR);
		$stmt->bindParam(":editclave", $datos["editclave"], PDO::PARAM_STR);
		$stmt->bindParam(":editfecha", $datos["editfecha"], PDO::PARAM_STR);
		$stmt->bindParam(":escactual", $datos["escactual"], PDO::PARAM_STR);
		
		if($stmt->execute())
			{
				return "ok";
			}else{
				return "error";
			}
			$stmt->close();
			$stmt = null;
	}

	/*=============================================
	Borrar Planes
	=============================================*/
	static public function mdlBorrarPlanes($tabla,$datos)
	{
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
		$stmt -> bindParam(":id",$datos, PDO::PARAM_INT);

		if($stmt->execute())
			{
				return "ok";
			}else{
				return "error";
			}
			$stmt->close();
			$stmt = null;
	}
	
}
