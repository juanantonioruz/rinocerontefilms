<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
$valor_header=array("HACEMOS POR ENCARGO", "WE DO IT");
include("header.php");
//$ejemplo=preparaContenido(get_the_content());
//$col1_up=encuentra("COL1_UP",$ejemplo);
//echo $col1_up[0];
?>
<?php 
query_posts(array('showposts'=>4, 'category_name' => 'Hacemos por Encargo')); ?>
<div id="encargo_container">
   	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); 
		$ejemplo=preparaContenido(get_the_content());
		$columnas=encuentra("COLUMN",$ejemplo);
			$count++;
		?>
			<div class="encargo_col_izq_bis">

<?=$columnas[0]?>

	</div>
	<div class="encargo_col_dcha_bis">
<?=$columnas[1]?>
	</div>
	
<hr>
				<?php endwhile; ?>
	<?php endif; ?>
</div>
	






<?php 
include("footer.php");
 ?>
