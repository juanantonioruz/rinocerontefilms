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
<?php the_content();?>

</div>
<div class="autor" style="float: left;">
	<div class="visual_autor">
	<img src="imgs/nayra.png" width="290px">
	</div>
	<div class="cabecera_autor">
	NAYRA SANZ FUENTES
	</div>
	<div class="contenido_autor">
	Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
	</div>
</div>
<div class="autor" style="float: right;">
	<div class="visual_autor">
	<img src="imgs/javier.png" width="290px">
	</div>
	<div class="cabecera_autor">
	JAVIER SANZ FUENTES
	</div>
	<div class="contenido_autor">
	Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
	</div>
</div>

		<?php endwhile; endif; ?>
</div>
	
<?php  
include("footer.php");
 ?>
