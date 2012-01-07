page contactanos
<?php
/*
Template Name: Cover Page
*/
$valor_header="CONTACTANOS";
include("header.php");
?>
<div id="noticias_container">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="noticia">
		<div class="visual_noticia">
			<img src="/images/rino.png">
		</div>
		<div class="cabecera_noticia">
			<?php the_title(); ?>
		</div>
		<div class="contenido_noticia" style="text-align:center;">
			<?php the_content(); ?>


			<img src="/images/siguenos.png" style="margin-top:10px;">
		</div>
	</div>
			<?php endwhile; endif; ?>
			
	
	
</div>

	
		
<?php get_footer(); ?>
