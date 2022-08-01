<?php
    include("bd.php");

    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $comentario = $_POST['comentario'];

    $insert = "INSERT INTO datos(nombre, imagen, comentario) VALUES ('$nombre','$imagen','$comentario')";
    $resultado = $conex->query($insert);

    if ($resultado) {
        header("location: subir.php");
    } else {
        ?>
            <h3>¡Ups ha ocurrido un error!</h3>
        <?php
    }
?>