#declarar las 3 notas de un array asociativo

<?php
 $tab_notas = array("1eval"=>6, "2eval"=>7,"3eval"=>8);
 //funciones
 function media ($tab){
 	$suma = 0;
 	foreach ($tab as $valor){
 		$suma += $valor;
 	}
 	$media = $suma / count($tab);
 	return $media;
 }
 function visualizar ($dato){
 	echo $dato;
 }

 // programa
 visualizar (media($tab_notas));