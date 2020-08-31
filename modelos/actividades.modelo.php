<?php

	require_once "conexion.php";
	class ModeloActividades
	{
		/*=============================================
		Registro de Actividad
		=============================================*/
		static public function mdlIngresarActividades($tabla,$datos)
		{
			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(actividad, actividades, proposito, descripcion, variacion, foto) VALUES (:actividad, :actividades, :propositos, :descripcion, :variaciones, :foto)");

			$stmt->bindParam(":actividad", $datos["actividad"], PDO::PARAM_STR);
			$stmt->bindParam(":actividades", $datos["actividades"], PDO::PARAM_STR);
			$stmt->bindParam(":propositos", $datos["propositos"], PDO::PARAM_STR);
			$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
			$stmt->bindParam(":variaciones", $datos["variaciones"], PDO::PARAM_STR);
			$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

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
		Mostrar Clases
		=============================================*/

	static public function mdlMostrarActividades($tabla,$item,$valor)
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
	Editar Actividad
	=============================================*/
	static public function mdlEditarActividad($tabla,$datos)
	{
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET actividad = :editactividad, actividades = :editactividades, proposito = :editproposito, descripcion = :editdescripcion, variacion = :editvariacion  WHERE actividad = :actividadActual");

		$stmt->bindParam(":editactividad", $datos["editactividad"], PDO::PARAM_STR);
		$stmt->bindParam(":editactividades", $datos["editactividades"], PDO::PARAM_STR);
		$stmt->bindParam(":editproposito", $datos["editproposito"], PDO::PARAM_STR);
		$stmt->bindParam(":editdescripcion", $datos["editdescripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":editvariacion", $datos["editvariacion"], PDO::PARAM_STR);
		$stmt->bindParam(":actividadActual", $datos["actividadActual"], PDO::PARAM_STR);
		
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
	Borrar Actividad
	=============================================*/
	static public function mdlBorrarActividad($tabla,$datos)
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