<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Enviar datos por url</title>
	<meta charset="utf-8" >
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
	<?php
		$idioma=$_GET["idioma"];
		echo "<h2> Hablamos en $idioma </h2>";
		switch($idioma){
    		case "espannol":
        		echo "españolito";
        		break;
    		case "ingles":
        		echo "inglesito";
        		break;
    		case "frances":
        		echo "francesito";
        		break;
        	case "aleman":
        		echo "alemanito";
        		break;
		}
	?>
	</div>
</body>
</html>