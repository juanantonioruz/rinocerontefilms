<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>  
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>rinocerontefilms</title>
<link rel="shortcut icon" href="http://rinocerontefilms.com/wp-content/uploads/template/favico.png" />
<link rel="stylesheet" href="http://rinocerontefilms.com/wp-content/uploads/template/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="http://rinocerontefilms.com/wp-content/uploads/template/print.css" type="text/css" media="print"> 
<!--[if lt IE 8]>
<link rel="stylesheet" href="http://rinocerontefilms.com/wp-content/uploads/2011/12/ie.css" type="text/css" media="screen, projection">
<![endif]-->
<?php

function traduce($esp, $eng){
	if(get_locale()=="es_ES")
		return $esp;
		else
		return $eng;
}
?>

<link rel="stylesheet" href="http://rinocerontefilms.com/wp-content/uploads/template/styles.css" type="text/css" media="screen"> 
</head><body>

<!-- contenedor externo-->
<div class="container">
<hr class="space"><hr class="space"><hr class="space">
<!-- contenedor interno-->
<div class="prepend-1 span-22 append-1">
<!-- cabecera-->
	<div id="container_cabecera" >
		<div id="pastilla_roja_cabecera">
			<div id="pastilla_texto"><?=traduce($valor_header[0], $valor_header[1])?>
			</div>
		</div>
		<div id="logo"><img style="width: 357px; height: 70px;" alt="logo" src="http://rinocerontefilms.com/wp-content/uploads/template/logo_mod.png"></div>
		<?php
		$str= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		if(get_locale()=="es_ES")
		$str2="ESPAÑOL |<a href='http://". $_SERVER["SERVER_NAME"]."/en".$_SERVER["REQUEST_URI"]."' >ENGLISH</a>";
		else
		$str2="<a href='http://". $_SERVER["SERVER_NAME"]."/es".$_SERVER["REQUEST_URI"]."' >ESPAÑOL</a> | ENGLISH";;

		
		?>
		<div id="idiomas"><?= $str2 ?> </div>
	</div>
<hr class="space">
<div id="container_body">
