<?php
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $db = new SQLite3('agenda.db');
    $db->exec("INSERT INTO personas VALUES 
    ('".$nombre."', '".$apellido_paterno."', '".$apellido_materno."', '".$email."', '".$telefono."')")
?>