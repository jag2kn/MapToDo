<?php

$respuesta = array("resultado"=>"ok");


$pedido = $_POST;

if (!isset($pedido["op"])){
	$respuesta = array("resultado"=>"ok");
	echo json_encode($respuesta);
}else if ($pedido["op"]=="nuevo"){
	file_put_contents("datos.log", json_encode($pedido)."\n", FILE_APPEND);
	echo json_encode($respuesta);
}elseif ($pedido["op"]=="todos"){
	$datos = file_get_contents("datos.log");
	$lineas = explode("\n", $datos);
	$respuesta = implode("|", $lineas);
	echo $respuesta;
}



