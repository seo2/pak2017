<?php
	require_once("ws/_lib/config.php");
	require_once("ws/_lib/MysqliDb.php");
	$db = new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
	
	$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


	function get_img_tienda($id){
		$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
		$tiendas = $db->rawQuery("select * from pak_tiendas_img where punto_interes = $id limit 1");
		if($tiendas){
			foreach ($tiendas as $t) {
				$imagenes = $t['imagenes'];
			}
		}
		return $imagenes;
	}
	function get_local($id){
		$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
		$tiendas = $db->rawQuery("select * from pak_tiendas_local where punto_interes = $id limit 1");
		if($tiendas){
			foreach ($tiendas as $t) {
				$imagenes = $t['local'];
			}
		}
		return $imagenes;
	}
	function get_nom_categoria($id){
		$db 	= new MysqliDb (DBHOST, DBUSER, DBPASS, DBNAME);
		$tiendas = $db->rawQuery("select * from pak_categorias where id_categoria = 128 and id_subcategoria = $id limit 1");
		if($tiendas){
			foreach ($tiendas as $t) {
				$imagenes = $t['nombre_subcategoria'];
			}
		}
		return $imagenes;
	}



?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php if(isset($_GET['tiendaID'])){ 
		$punto_interes = $_GET['tiendaID'];
		$tiendas = $db->rawQuery("select * from pak_tiendas where punto_interes = $punto_interes");
		if($tiendas){
			foreach ($tiendas as $t) {   
		    	$imagen = get_img_tienda($t['punto_interes']);
		    	if(!$imagen){
		        	$imagen = "<?php bloginfo('template_url'); ?>/assets/img/demobgtienda.jpg";
		    	}else{
	                $imagen = 'ws/uploads/img_'. $t['punto_interes'].'_1.jpg';
		    	}
		    	$nombre = $t['nombre'];
				$logo 	= "ws/uploads/logo_". $t['punto_interes'].".jpg";
				$desc 	= trim($t['descripcion']);
				$fono	=$t['telefono_punto_interes'];
				$piso	= $t['numero_piso']; 
				$url	= $t['url_punto_interes']; 
				$mapa	="ws/uploads/plano_".$t['punto_interes'].".jpg";  	
		    	
		    }
		}
		$title = 'Parque Arauco | '.$nombre;
	}else{
		$title = 'Parque Arauco | Mucho más que comprar';
	} 
	
	?>

    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/<?php bloginfo('template_url'); ?>/assets/img/favicon.ico">
    
	<meta property="og:type"	content="business.business">
	<meta property="og:title" 	content="<?php echo $title; ?>">
	<meta property="og:url" 	content="<?php echo $actual_link; ?>">
	<meta property="og:image" 	content="<?php echo 'https://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>/<?php echo $imagen; ?>">

	<?php wp_head(); ?>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <a href="javascript:void(0);" id="return-to-top">
      <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>
    