<?php
	$numero = 10;
//funciones
function proceso (&$num){
	$num = num * (-1);
	return $num;
}
function visualizar ($dato){
	echo $dato;
}

//programa
proceso ($numero);
visualizar ($numero);