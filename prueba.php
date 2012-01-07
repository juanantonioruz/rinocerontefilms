<?php



function encuentra($patron, $texto)
{
$patronArroba="@@@";
$resultado = array();
$splitea=explode($patronArroba, $texto);

foreach ($splitea as $valor)
if(strstr($valor,$patron."@"))
$resultado[]=str_replace( $patron."@", "",$valor);
 return $resultado;
}


$ejemplo="hola que @@@descripcion@pasa con el ejemplo @@@autor@hola soy el autor askjfh lkasjdh fasd @@@autor@ pues yo soy el otro autor....";

$autores=encuentra("autor", $ejemplo);
foreach ($autores as $autor)
echo $autor."<hr>";
if(strpos($ejemplo, "hola")!==false)
echo "existe @";

?>
