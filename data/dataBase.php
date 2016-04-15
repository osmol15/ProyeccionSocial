<?php
/*
* File: dataBase.php
* 
* Creado 16-07-2007 08:33
*/

/**
* Conexion centralizada con la base de datos a traves de ADOdb
* 
* @author Max Raul Cruz Rodriguez
* @version 1.0
*/

if (eregi (basename (__FILE__), $_SERVER['PHP_SELF'])) die ("CONTEXT ERROR!");

// Libreria ADOdb para manejo de bases de datos
include_once ("adodb/adodb.inc.php");
include_once ("adodb/adodb-exceptions.inc.php");

// Parametros de configuracion
$driver = "mysql";
$host = "localhost";
$scheme = "tesoreria_metapan";
$user = "root";
$password = "V3rtr!g0";

// Definir el objeto de la conexion
$DATA = null;
try {
	$DATA = NewADOConnection ($driver);
	//$DATA->debug = true;
	$DATA->Connect ($host, $user, $password, $scheme);
	$DATA->SetFetchMode (ADODB_FETCH_ASSOC);
} catch (exception $e) {
	echo "DATA ERROR: ".$e->msg;
	exit;
}

?>
