<?php
	require_once("funciones.php");

	if (!estaLogueado())
	{
		
	}
	if (!isset($_GET["idUser"]))
	{

	}
	$usuarioAVer = getUsuarioById($_GET["idUser"]);
	$files = glob("img/" . $usuarioAVer["id"] . ".{png,jpg,jpeg,gif,bmp,svg}", GLOB_BRACE);
	unset($usuarioAVer["password"]);
	unset($usuarioAVer["id"]);
?>
<html>
<head>
	<title>Perfil</title>
</head>
<body>
	<?php include("header.php"); ?>
	<?php if (is_null($usuarioAVer)) { ?>
		El usuario no existe
	<?php } else { ?>
		<ul>
			<?php foreach ($usuarioAVer as $key => $value) { ?>
				<li>
				<?php echo $key ?>: <?php echo $value ?></br>
				</li>
			<?php } ?>
		</ul>
	<?php } ?>
	<?php if (!empty($files)) { ?>
		<img src="<?php echo $files[0] ?>"/>
	<?php } ?>
</body>
</html>
