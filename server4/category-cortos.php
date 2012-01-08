<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
$valor_header=array("CORTOS", "SHORTS");
include("header.php");
$count = 0;

?>
<div id="quienes_somos_container" class="showgrid">

<?php 
query_posts(array('showposts'=>4, 'category_name' => 'cortos')); ?>
   	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); 
			$count++;
		?>
			<div class="film" style="<?=($count==1) ? 'float: left;' :'' ?>">
				<div class="visual_film">
<?php
if ( has_post_thumbnail() )
		the_post_thumbnail( 'thumbnail' );
?>
				</div>
				<div class="cabecera_film">
				<?php the_title(); ?>
				</div>
				<div class="contenido_film">
<?php the_content(__('Read the rest of this entry &raquo;', 'kubrick')); ?>
				</div>
				<div style="text-align:right;">
				<div class="img_mas" ><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><img src="imgs/mas.png"></a></div>
				<div class="saber_mas_film"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>">SABER MAS</a></div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
	


                	








<?php 
include("footer.php");
?>
