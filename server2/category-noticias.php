<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
$valor_header=array("NOTICIAS", "NEWS");
include("header.php");

?>

	<div id="noticias_container">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
<div class="noticia">
<div class="visual_noticia">
<!-- img src="imgs/vimeo.png" -->
</div>
<div class="cabecera_noticia">
<?php the_title(); ?>
<!-- <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"></a> -->
</div>
<div class="contenido_noticia">
<?php the_content(); ?>
</div>
</div>
		<?php endwhile; ?>
		<?php else : ?>

		<h2 class="center"><?php _e('Not Found', 'kubrick'); ?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'kubrick'); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>
</div>






<?php get_footer(); ?>
