

<?php
 function existe($valor){
 	if(strpos($_SERVER["REQUEST_URI"], $valor)!==false)
 	return " class='opcion_seleccionada' ";
 
 	
 	
 }
 function compruebaHeader($valor_header, $valor){
 	if($valor_header[0]==$valor)
 	return " class='opcion_seleccionada' ";

 }
 
?>

<hr class="space"><hr class="space"><hr class="space"><hr class="space">
	<div id="footer" class="prepend-2 append-3 last"">
		<hr class="space">
			<div id="footer_menu" class="">
				<div id="footer_menu_izq" class="span-7"><a <?=compruebaHeader($valor_header,'BIENVENIDO')?> href="<?php echo get_permalink(7); ?>"><?=traduce('Inicio', 'Home')?></a> | <a <?=existe('noticias')?> href="<?=esc_url( get_category_link( get_cat_ID( 'noticias' )) ) ?>"><?=traduce('Noticias', 'News')?></a> | <a <?=compruebaHeader($valor_header,'QUIÉNES SOMOS')?> href="<?php echo get_permalink(9); ?>"><?=traduce('Quiénes Somos', 'Who we are')?></a>  | <a <?=existe('cortos')?> href="<?=esc_url( get_category_link( get_cat_ID( 'cortos' )) ) ?>"><?=traduce('Cortos', 'Shorts')?></a> </div>
				<div id="footer_menu_dcha"  class="prepend-10  last"><a <?=existe('largos')?> href="<?=esc_url( get_category_link( get_cat_ID( 'largos' )) ) ?>"><?=traduce('Largos', 'Films')?></a>  | <a <?=existe('encargo')?> href="<?=esc_url( get_category_link( get_cat_ID( 'Hacemos por Encargo' )) ) ?>"><?=traduce('Hacemos por Encargo', 'we do it')?></a>  | <a <?=compruebaHeader($valor_header,'CONTACTANOS')?> href="<?php echo get_permalink(11); ?>" ><?=traduce('Contáctanos', 'Contact')?></a> </div>
			</div>
			
	<!-- fin footer-->


	</div>
		
<!-- fin container_body-->
</div>

<!-- fin contenedor interno-->
</div>

<!-- fin contenedor externo-->
</div>


<!-- 

-->

</body></html>
