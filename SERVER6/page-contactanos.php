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

<img id="Image-Maps_2201201072000463" src="http://rinocerontefilms.com/wp-content/uploads/template/siguenos.png" usemap="#Image-Maps_2201201072000463" border="0" width="175" height="31" alt=""  style="margin-top:10px;"/>
<map id="_Image-Maps_2201201072000463" name="Image-Maps_2201201072000463">
<area shape="rect" coords="78,0,104,26" href="http://www.twitter.com/" alt="twitter" title="twitter"    />
<area shape="rect" coords="111,0,137,26" href="https://www.facebook.com/pages/Rinoceronte-Films/167780846597141?sk=wall" alt="facebook" title="facebook"    />
<area shape="rect" coords="149,0,170,26" href="http://vimeo.com/rinocerontefilms" alt="vimeo" title="vimeo"    />
<area shape="rect" coords="173,29,175,31" href="http://www.image-maps.com/index.php?aff=mapped_users_2201201072000463" alt="Image Map" title="Image Map" />
</map>

		</div>
	</div>
			<?php endwhile; endif; ?>
			
	
	
</div>

	
		
<?php include("footer.php"); ?>
