<?php

    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $email= $_POST['email'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(nombre, email, usuario, contrasena)
                VALUES('$nombre','$email','$usuario','$contrasena')";

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo'
            <script>
                alert("Este correo ya esta registrado");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo'
            <script>
                alert("Este usuario ya esta registrado");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'   
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }else{
        echo'
            <script>
                alert("Intentalo de nuevo, usuario no almacenado");
                window.location = "../index.php;
            </script>
        ';
    }

    mysqli_close($conexion);
?>
