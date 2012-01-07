<?php
/*
Template Name: Cover Page
*/
$valor_header=array("QUIÉNES SOMOS", "WHO WE ARE");
include("header.php");

?>
<div id="quienes_somos_container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="cabecera_quienes_somos"><?php the_title(); ?></div>
<div id="texto_quienes_somos">
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
$ejemplo=get_the_content();
$ejemplo = apply_filters('the_content', $ejemplo);
	$ejemplo = str_replace(']]>', ']]&gt;', $ejemplo);

$autores=encuentra("AUTOR",$ejemplo);
$descripcion=encuentra("DESCRIPCION",$ejemplo);
?>
<?=$descripcion[0]?>

</div>

<div class="autor" style="float: left;">
	<div class="visual_autor">
	<img src="http://rinocerontefilms.com/wp-content/uploads/template/nayra.png" width="290px">
	</div>
	<div class="cabecera_autor">
	NAYRA SANZ FUENTES
	</div>
	<div class="contenido_autor">
	<?=$autores[0]?>
	</div>
</div>
<div class="autor" style="float: right;">
	<div class="visual_autor">
	<img src="http://rinocerontefilms.com/wp-content/uploads/template/javier.png" width="290px">
	</div>
	<div class="cabecera_autor">
	JAVIER SANZ FUENTES
	</div>
	<div class="contenido_autor">
	
		<?=$autores[1]?>
	</div>
</div>

		<?php endwhile; endif; ?>
</div>
	
<?php  
include("footer.php");
 ?>
