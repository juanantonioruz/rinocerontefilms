<?php



function encuentra($patron, $texto)
{
$patron="@@@".$patron;
$resultado = array();
$splitea=explode($patron, $texto);
foreach ($splitea as $valor)
if(strstr($valor,"@@@"))
$resultado[]=str_replace( "@@@", "",$valor);
 return $resultado;
}


$ejemplo="hola que pasa con el ejemplo @@@autor@@@hola soy el autor askjfh lkasjdh fasd @@@autor@@@ pues yo soy el otro autor....";

$autores=encuentra("autor", $ejemplo);
foreach ($autores as $autor)
echo $autor."<hr>";
if(strpos($ejemplo, "hola")!==false)
echo "existe @";

?>
