Estilos css para proyecto a desplegar en wordpress
realizado con lesscss.org


<?=get_permalink()?><?=the_guid($id); ?>
<span style="color: rgb(194, 64, 50);">ENGLISH</span>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>  
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>rino</title>
<link rel="shortcut icon" href="http://rinocerontefilms.com/wp-content/uploads/2011/12/favico.png" />
<link rel="stylesheet" href="http://rinocerontefilms.com/wp-content/uploads/2011/12/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="http://rinocerontefilms.com/wp-content/uploads/2011/12/print.css" type="text/css" media="print"> 
<!--[if lt IE 8]>
<link rel="stylesheet" href="http://rinocerontefilms.com/wp-content/uploads/2011/12/ie.css" type="text/css" media="screen, projection">
<![endif]-->


<link rel="stylesheet" href="http://rinocerontefilms.com/wp-content/uploads/2011/12/styles.css" type="text/css" media="screen"> 
</head><body>

<!-- contenedor externo-->
<div class="container">
<hr class="space"><hr class="space"><hr class="space">
<!-- contenedor interno-->
<div class="prepend-1 span-22 append-1">
<!-- cabecera-->
	<div id="container_cabecera" >
		<div id="pastilla_roja_cabecera">
			<div id="pastilla_texto"><?=$valor_header?>
			</div>
		</div>
		<div id="logo"><img style="width: 357px; height: 70px;" alt="logo" src="http://rinocerontefilms.com/wp-content/uploads/2011/12/logo.png"></div>
		<?php
		$str= get_permalink();
		if(get_locale()=="es_")
		$str2="ESPAÑOL |<a href='".str_replace("/es/", "/en/",$str)."' >ENGLISH</a>";
		else
		$str2=str_replace( "/en/", "/es/",$str);

		
		?>
		<div id="idiomas"><?= $str2 ?> </div>
	</div>
<hr class="space">
<div id="container_body">
