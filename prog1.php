#almacenar en un array las notas de un alumno, visualizar aquellas notas que sean superiores a la media

<?php
 $notas = array(5,6,7,8,9,10);

 //--funciones--

 function media ($tab){
 	$suma = 0;
 	foreach ($tab as $valor){
 		$suma += $valor;
 	}
 	$media = $suma / count($tab);
 	return $media;
 }
function visualizar (dato)($med,$tab){
	foreach ($tab as $valor){
		if ($valor > $med){
			echo $valor." ";
		}
}
 //programa principal
visualizar (media($tab_notas), $tab_notas);

