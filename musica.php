<?php

    $titulo = $_POST["titulo"];
    $duracao = $_POST["duracao"];
    $compositor = $_POST["compositor"];
    $album = $_POST["album"];

    $conn = new mysqli("localhost:3306", "root", "PUC@1234", "exmusicadb");
    $query = "INSERT INTO musica(titulo, duracao, compositor, album) VALUES ('$titulo', '$duracao', '$compositor', '$album')";
    $result = mysqli_query($conn, $query);

    if ($result == true) {
        $mensagem = "Enviado com sucesso!";
    }

    echo json_encode($mensagem);
?>