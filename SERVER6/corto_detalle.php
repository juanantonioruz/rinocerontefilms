<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
 /*
Template Name: Detalle_corto
*/
$valor_header=array("CORTOS", "SHORTS");
include("header.php");

?>

<div id="encargo_container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php
		$ejemplo=preparaContenido(get_the_content());
		$cols=encuentra("COLUMN",$ejemplo);
		?>
	<div id="encargo_col_izq">
	<?=$cols[0]?>

	</div>
	<div id="encargo_col_dcha">
		<?=$cols[1]?>
</div>
		<?php endwhile; endif; ?>
</div>

<?php 
include("footer.php");
 ?>
