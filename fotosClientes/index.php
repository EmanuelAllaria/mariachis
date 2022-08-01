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
    <div class="container_index">
		<div class="titulo">
            <h1>Fotos de clientes</h1>
            <h3><a href="index.php">Sube tus fotos</a></h3>
        </div>
        <form action="val.php" method="POST" enctype="multipart/form-data">

            <label for="text">Nombre y Apellido</label>
            <input class="text" id="text" type="text" required name="nombre"> <br><br>

            <input class="file" type="file" required name="imagen"> <br><br>

            <label for="comentario">Comentario</label>
            <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea> <br><br>

            <input class="submit" type="submit" name="enviar" value="Enviar"> <br><br>
        </form>
    </div>
    <footer>
		<p>Copyright &copy;2021 esenciamexicana. Todos los derechos reservados. <a href="https://instagram.com/typing_timing.web/">Typing Timing</a>.</p>
	</footer>
</body>
</html>