<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mariachi Esencia Mexicana - Grupo Musical Buenos Aires</title>
    <link rel="stylesheet" href="css/subirImagen.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/responsive.css">
	<script src="https://kit.fontawesome.com/15fbf0e0d4.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- HEADER -->
	<header class="header">
		<div class="logo">
			<a href="../index.html"><img src="../img/Logo-removebg-preview.png" alt="Logo Mariachis"></a>
		</div>
		<nav>
			<label class="icon_menu_2" for="icon_menu">
				<i class="fa-solid fa-bars"></i>
			</label>
			<input type="checkbox" class="nav_input" id="icon_menu">
			<div class="nav">
				<ul>
					<li><a href="../index.html#nosotros">Nosotros</a></li>
					<li><a href="../index.html#galeria">Galeria</a></li>
					<li><a href="../index.html#videos">Video</a></li>
					<li><a href="../index.html#contacto">Contacto</a></li>
					<li><a class="back" href="fotosClientes/subir.php">Fotos de Clientes</a></li>
				</ul>
			</div>
		</nav>
	</header>
    <div class="container">
		<div class="titulo">
            <h1>Fotos de clientes</h1>
            <h3><a href="index.php">Sube tus fotos</a></h3>
        </div>
        <?php
            include("bd.php");
            $select = "SELECT * FROM datos";
            $resultado = $conex->query($select);
            while ($row = $resultado->fetch_assoc()) {
        ?>
        
        <ul>
            <li><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" alt="Publicacion"></li>
            <li><p><b>Nombre y Apellido:</b> <br><?php echo $row['nombre']; ?></p></li> <br>
			<li><p><b>Comentario:</b> <br> <span><?php echo $row['comentario']; ?></span> </p></li>
        </ul>
        <?php
        }
        ?>
    </div>
    <footer>
		<p>Copyright &copy;2021 esenciamexicana. Todos los derechos reservados. <a href="https://instagram.com/typing_timing.web/">Typing Timing</a>.</p>
	</footer>
</body>
</html>