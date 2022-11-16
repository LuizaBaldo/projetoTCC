<?php
    $con = new mysqli("localhost", "root", "", "tcc");
    $comentario = $_POST["comentario"];
<<<<<<< HEAD
    $nome = $_POST["nomeComentario"];
    $email = $_POST["emailComentario"];
=======
    $nome = $_POST["nome"];
    $email = $_POST["email"];
>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
    $id_animal = $_POST["id_animal"];
    $sql = "insert into comentario (nome, email, conteudo, id_animal)  values (?, ?, ?, ?)";
    $statement = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($statement, 'sssi', $nome, $email, $comentario, $id_animal);
    mysqli_stmt_execute($statement);
    header("location: pag_animal.php?id=$id_animal");
    mysqli_close($con);
