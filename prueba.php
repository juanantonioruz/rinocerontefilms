<?php

$ejemplo="hola que pasa con el ejemplo @@@autor@@@hola soy el autor askjfh lkasjdh fasd @@@autor@@@ pues yo soy el otro autor....";
$autores = array();

$splitea=explode("@@@autor", $ejemplo);
foreach ($splitea as $valor)
if(strstr($valor,"@@@"))
$autores[]=str_replace( "@@@", "",$valor);


//echo "SOY AUTOR!".$valor;
foreach ($autores as $autor)
echo $autor."<hr>";
?>
