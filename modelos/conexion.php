<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=gipef",
			            "root",
			            "");

		$link->exec("set names utf8"); //evalua todos los carecteres latinos se puedan leer sin problemas

		return $link;

	}
}