<?php
    require_once './functions.php';
?>

<?php
    function getAnimais($filtro){
        $con = new mysqli("localhost", "root", "", "tcc");
        $sql = "select * from animal ";
        if(!empty($filtro)){
            $sql = $sql.'where nome_animal like "%'.$filtro.'%" or tipo_animal = "'.$filtro.'" or raca like "%'.$filtro.'%" or sexo = "'.$filtro.'"';
        }
        $retorno = mysqli_query($con, $sql);
        $rows = array();
        while($row = mysqli_fetch_array($retorno)) {
            $rows[] = $row;
        }
        return $rows;
    }
    $animais = getAnimais($_GET['filtro'] ?? null);
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- icons font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/pag_animal.css">
    <link rel="stylesheet" href="../css/styles.css">
    <!-- js -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adot.org</title>
</head>
    <body>

<<<<<<< HEAD
        <?php
            require_once './partials/common.php';
        ?>

        <div class="container_main"> 
            <div class="d-flex flex-wrap align-content-center">
                <?php foreach ($animais as $animal){
=======

        <!-- ========== TUDO QUE TEM "#" PRECISA COLOCAR UM LINK E MUDAR O PHP ========== -->
        <?php
            require_once './partials/common.php';
        ?>
        <div class="container_main"> 
            <div class="d-flex flex-wrap align-content-center justify-content-between">
                <?php foreach ($animais as $animal){
                    // echo "<div class='col-6 text-center p-3 '>";
                    //     echo '<a href="pag_animal.php?id='.$animal['id'].'" ; style="text-decoration: none; color:inherit; ">';
                    //         echo "<div class='border'>";
                    //             echo 'tipo do animal: '.$animal['tipo_animal'];
                    //             echo '<br>';
                    //             echo 'nome do animal: '.$animal['nome_animal'];
                    //             echo '<br>';
                    //             echo 'idade do animal: '.$animal['idade'];
                    //             echo '<br>';
                    //             echo 'sexo do animal: '.$animal['sexo']; 
                    //             echo '<br>';
                    //             echo 'raça do animal: '.$animal['raca'];
                    //             echo '<br>';
                    //             echo 'descrição do animal: '.$animal['descricao'];
                    //         echo '</div>';
                    //     echo '</a>';
                    // echo '</div>';
>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
                    $nome_animal = $animal['nome_animal'];
                    $raca = $animal['raca'];
                    // TESTE CARD 
                    echo '<div class="container_exibir p-5">';
                        echo '<div class="row">';
<<<<<<< HEAD
                            echo '<div class="card" style="width:300px">';
                                echo '<img class="card-img-top" src="'.$animal['pathImagem_animal'].'" alt="Card image">';
=======
                            echo '<div class="card" style="width:300px; background-color: #66C4A9;">';
                                echo '<img class="card-img-top pt-2 rounded" src="../img/img_avatar1.png" alt="Card image">';
>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
                                echo '<div class="card-body">';
                                    echo '<h4 class="card-title">Nome: ' .$nome_animal; '</h4>';
                                    echo '<p class="card-text">Raça: ' .$raca; '</p>';
                                    echo '<p>';
<<<<<<< HEAD
                                    echo '<a href="pag_animal.php?id='.$animal['id'].'" ; style="text-decoration: none; color:inherit; ">Veja Mais</a>';
=======
                                    echo '<a href="pag_animal.php?id='.$animal['id'].'" ; style="text-decoration: none; color: #4C79D5; ">Veja mais...</a>';
>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }?>
            </div>
        </div>
<<<<<<< HEAD
        
=======
>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
    </body>
</html>
