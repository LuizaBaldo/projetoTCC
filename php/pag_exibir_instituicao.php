<?php
    require_once './functions.php';
?>

<?php
<<<<<<< HEAD
    $instituicao = buscaInstituicaoId($_GET['id']);
?>

<?php
    function getAnimal($id){
        $con = new mysqli("localhost", "root", "", "tcc");
        $sql = "select * from animal where id_usuario = '$id'";
        $retorno = mysqli_query($con, $sql);
        $rows = array();
        while($row = mysqli_fetch_array($retorno)) {
            $rows[] = $row;
        }
        return $rows;
    }
    $animais = getAnimal($_GET['id']);
=======
    function buscaInstituicaoId($id){
        $con = new mysqli("localhost", "root", "", "tcc");
        $sql = "select * from usuario where id = $id ";
        $retorno = mysqli_query($con, $sql);
        $instituicao = mysqli_fetch_array($retorno);
        return $instituicao;
    }
    $instituicao = buscaInstituicaoId($_GET['id']);
>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
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
            <div class="row justify-content-center me-0"> 
                <div class="card w-75 pt-4" style="background-color: #66C4A9; height: 80vh;">
                    <div class="container_body">

                        <div class="row">
                            <!-- CONTAINER IMG + INFO -->
                            <div class="container_img-about">
                                <div class="row justify-content-center col-sm-12">
                                    <div class="container_img col-5 text-center" style="background-color: #66C4A9;">
                                        <img src="<?php echo $instituicao['pathImagem']?>" style="width:100%">  

                                        <!-- ?php if(UsuarioEhinstituicaoDoAnimal()){?>
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <p><label>Selecione o arquivo:</label></p>
                                                <input name="arquivo" type="file"></p>
                                                <button name="upload" type="submit"> Enviar arquivo</button>
                                            </form>
                                        ?php }?> -->

                                        <!-- <h1><a href="pag_exibir_instituicao.php?id=?= $instituicao['id']?>">?php echo $instituicao['nome']?> </a></h1> MOSTRA A INSTIUICAO DO ANIMAL -->
                                    </div>

                                    <div class="container_about col-6" style="background-color: #66C4A9;">  
                                                            
                                        <div class="animal_info" style="padding: 0 15px 0 15px;width: 70%">
                                            <label>Nome</label> 
                                            <input  type="text" class="form-control" id="txtNomeInst" name="tipoNome" disabled="true" value="<?php echo $instituicao["nome"];?>"/>

                                            <label>Endereço</label>
                                            <input type="text" class="form-control" id="txtEndereco" name="endereco" disabled="true" value="<?php echo $instituicao["endereco"];?>"/>

                                            <label>Telefone</label>
                                            <input type="text" class="form-control" id="txtTelefone" name="telefone" disabled="true" value="<?php echo $instituicao["telefone"];?>"/>

                                            <label>Email</label>
                                            <input type="email" class="form-control" id="txtEmail" name="email" disabled="true" value="<?php echo $instituicao["email"];?>"/>

                                            <label>CNPJ</label>
                                            <input type="text" class="form-control" id="txtvnpj" name="cnph" disabled="true" value="<?php echo $instituicao["cnpj"];?>"/>
                                           
                                        </div>
                                    </div>

                                </div>
                            </div>
                                            


                        </div>

                        <div class="container_modal text-center mt-4 pt-1">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Veja os Animais da Instituição
                            </button>
                        </div>

                    </div>
                </div> <!--FIM CARD-->


            </div>
        </div>

        <!-- MODAL -->
        <div class="modal" id="exampleModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title"><strong>Animais da Instituição</strong></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="d-flex flex-wrap align-content-center">
                            <?php imprimirAnimais($animais)?>
                        </div>   
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>

<script src="">

    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
    })

</script>
=======

        <!-- ========== TUDO QUE TEM "#" PRECISA COLOCAR UM LINK E MUDAR O PHP ========== -->
        <?php
            require_once './partials/common.php';
        ?>
        <div class="container"> 
            <div class="d-flex flex-wrap align-content-center">
                <?php 
                    echo "<div class='col-6 text-center p-3 '>";
                        echo "<div class='border'>";
                            echo '<h2>';
                            echo 'nome da instituicao: '.$instituicao['nome'];
                            echo '<br>';
                            echo 'nome da instituicao: '.$instituicao['endereco'];
                            echo '<br>';
                            echo 'telefone da instituicao: '.$instituicao['telefone'];
                            echo '<br>';
                            echo 'email da instituicao: '.$instituicao['email']; 
                            echo '<br>';
                            echo 'cnpj da instituicao: '.$instituicao['cnpj'];
                        echo '</div>';
                    echo '</div>';
                ?>
            </div>
        </div>
    </body>
</html>

>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
