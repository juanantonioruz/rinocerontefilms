<?php
/*
Template Name: Cover Page
*/
$valor_header=array("CONTACTANOS", "CONTACT");
include("header.php");
?>
<div id="noticias_container">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="noticia">
		<div class="visual_noticia">
			<img src="http://rinocerontefilms.com/wp-content/uploads/template/GIF_RINO_baja_final.gif">
		</div>
		<div class="cabecera_noticia">
			<?php the_title(); ?>
		</div>
		<div class="contenido_noticia" style="text-align:center;">
			<?php the_content(); ?>


			<img src="http://rinocerontefilms.com/wp-content/uploads/template/siguenos.png" style="margin-top:10px;">
		</div>
	</div>
			<?php endwhile; endif; ?>
			
	
	
</div>

	
		
<?php include("footer.php"); ?>
