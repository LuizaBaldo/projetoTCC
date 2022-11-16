<?php
    require_once './functions.php';
?>

<<<<<<< HEAD
<?php
    if(isset($_GET["alterar"])){
        $id = $_GET['alterar'];
        $nome = $_POST["nomeAnimal"];
        $tipo   = $_POST["tipoAnimal"];
        $idade  = $_POST["idade"];
        $sexo = $_POST["sexo"];
        $raca = $_POST["raca"];
        $descricao = $_POST["descricao"];
        $con  = new mysqli("localhost", "root", "", "tcc");
        $sql  = "UPDATE animal SET tipo_animal=? , nome_animal=?, idade= ?, sexo=? ,raca=? ,descricao=? WHERE id=?";
        $statement = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($statement, 'sssssss', $tipo, $nome, $idade, $sexo, $raca, $descricao, $id);
        mysqli_stmt_execute($statement);
        mysqli_close($con);
        header("location: pag_animal.php?id=$id");

    }
?>

<?php
    $animal = buscaAnimalPorId($_GET['id']);
    $instituicao = buscaInstituicaoId($animal['id_usuario']);
?>

<?php 
    if (isset($_FILES["arquivo"])) {
        $arquivo = $_FILES['arquivo'];
        // Validar se o arquivo não esta vazio
        if (!empty($arquivo["name"])) {
            $nomeDoArquivo = $arquivo["name"];
    
            $arquivoValido = true;
    
            // validar extensao do arquivo
            $tipoDoArquivo = array(
                'jpg',
                'jpeg',
                'png'
            );
            $nomeDoArquivo = $arquivo['name'];
            $novoNomeDoArquivo = uniqid();
            $pasta = '../img/';
            $extensaoDoArquivo = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
            if (! in_array($extensaoDoArquivo, $tipoDoArquivo)) {
                echo "<span>Formato de arquivo não suportado. somente upload<b>" . implode(", ", $tipoDoArquivo) . "</b> arquivos .</span>";
                $arquivoValido = false;
            }
    
            // Validate file size
            if ($_FILES["arquivo"]["size"] > 200000) {
                echo "<span>Arquivo muito grande Max:2MB.</span>";
                $arquivoValido = 0;
            }
            
            $path = $pasta . $novoNomeDoArquivo . "." . $extensaoDoArquivo;
    
            if ($arquivoValido) {
                move_uploaded_file($arquivo["tmp_name"], $path);
                $con  = new mysqli("localhost", "root", "", "tcc");
                $sql = "update animal set pathImagem_animal = ? where id = {$animal['id']}";
                $statement = mysqli_prepare($con, $sql);
                mysqli_stmt_bind_param($statement, 's', $path);
                mysqli_stmt_execute($statement);
                mysqli_close($con);
                echo "<script lang='javascript'>window.location.href='pag_animal.php?id=".$animal['id']."';</script>";
            }
            else{
                echo "falha ao enviar arquivo";
            }
        } else 
            echo "No files have been chosen.";
    }
?>

=======
>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
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
    <link rel="stylesheet" href="../css/pag_cadastro_animal.css">
    <link rel="stylesheet" href="../css/styles.css">
    <!-- js -->
<<<<<<< HEAD
    <script lang="javascript" src="../js/pag_alterar_dados_animal.js"></script>
=======

>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adot.org</title>
<<<<<<< HEAD
    
</head>
    <body>
        <?php
            require_once './partials/common.php';
        ?>
        <div class="row rounded py-2" style="background-color: #66C4A9;">

            <div class="col-4">
                <img src="<?php echo $animal['pathImagem_animal']?>" style="width:100%">
                <form action="" method="POST" enctype="multipart/form-data">
                    <p><label>Selecione o arquivo:</label></p>
                    <input name="arquivo" type="file"></p>
                    <button name="upload" type="submit"> Enviar arquivo</button>
                </form>  
            </div>

            <div class="col-8">              
                <div class="animal_info" style="padding: 0 15px 0 15px;width: 70%">
                    
                    <form method="post" action="pag_alt_dados_animal.php?id=<?php echo $animal["id"]?>&alterar=<?php echo $animal["id"];?>" id="formAlterarInfoAnimal" >
                        <label>Tipo do Animal</label> 
                        <input  type="text" class="form-control" id="txtTipoAnimal" name="tipoAnimal"  value="<?php echo $animal["tipo_animal"];?>"/>

                        <label>Nome</label>
                        <input type="email" class="form-control" id="txtNomeAnimal" name="nomeAnimal"  value="<?php echo $animal["nome_animal"];?>"/>

                        <label>Idade</label>
                        <input type="text" class="form-control" id="txtIdade" name="idade"  value="<?php echo $animal["idade"];?>"/>

                        <label>Sexo</label>
                        <input type="text" class="form-control" id="txtSexo" name="sexo"  value="<?php echo $animal["sexo"];?>"/>

                        <label>Raça</label>
                        <input type="text" class="form-control" id="txtRaca" name="raca"  value="<?php echo $animal["raca"];?>"/>

                        <label>Descrição</label>
                        <textarea type="text" class="form-control" id="txtDescricao" name="descricao"><?php echo $animal["descricao"];?></textarea>

                        <button type="button" class="btn btn-primary mt-3 mb-1" id="btnAltAnimal" name="btnAltAnimal" style="center" onclick="alterarInfoAnimal();">Salvar alteracoes</button>
                        <button type="button" class="btn btn-danger mt-3" id="btnCancelarCadastro" name="btnCancelarCadastro" onclick="voltar()">Cancelar</button>
                    </form>
                    
                </div>
            </div>
        </div>       
    </body>
</html>


<script lang='javascript'>
    function voltar(){
        window.location.href='pag_animal.php?id=<?php echo $animal['id']?>';
=======
</head>
    <body>

        <!-- ========== TUDO QUE TEM "#" PRECISA COLOCAR UM LINK E MUDAR O PHP ========== -->
        <?php
            require_once './partials/common.php';
        ?>
        <div class="container rounded py-2" style="background-color: #66C4A9;">
            <h1 class="text-center">Alterar Animal</h1>
            <div id="formulario">
                <form method="post" action="pag_alt_dados_animal.php?alterar=1" id="formAlterarAnimal">

                <div class="form form-group mt-3" style="width:70%;margin:auto;">
                    <div class="form-row">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="tipo">Selecione o tipo de animal</label>
                                <select name="tipoAnimal" id="tipoAnimal" class="form-select form-select-sm">
                                    <option value="cachorro">Cachorro</option>
                                    <option value="gato">Gato</option>
                                    <option value="ave">Ave</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                    <label for="sexo">Selecione o sexo do animal</label>
                                    <select name="sexoAnimal" id="sexoAnimal" class="form-select form-select-sm">
                                        <option value="Femea">Fêmea</option>
                                        <option value="Macho">Macho</option>
                                    </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nome do animal</label>
                            <input type="text" class="form-control form-control-sm" id="txtNomeAnimal" placeholder="Digite nome do animal" name="nomeAnimal"/>
                        </div>
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Idade estimada do animal em anos</label>
                                <input type="text" class="form-control form-control-sm" id="txtIdadeAnimal" placeholder="Digite a idade estimada do animal em anos" name="idadeAnimal"/>
                            </div>
    
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Raça do animal</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Digite a raça do animal" id="txtRacaAnimal" name="racaAnimal"/>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descrição do animal</label>
                            <textarea type="text" class="form-control form-control-sm" placeholder="Breve descrição do animal" id="txtDescAnimal" name="descAnimal"></textarea>
                        </div> 
                    </div>

                    <br/>

                    <div class="mb-3"> 
                        <div class="d-grid gap-2 col-6 mx-auto rounded" style="background-color: #66C4A9;">
                            <button type="submit" class="btn text-white" id="btnCadastrar" name="btnCadastrar" style="background-color: #4C79D5;">Cadastrar</button>
                        </div>
                    </div>

                </div>
                </form>

                <?php
                if(isset($_GET["salvar"])) cadastrarAnimal();
                ?>
            </div>
        </div>

    </body>
</html>
<?php
    if(isset($_GET["alterar"])){
        $id = $_GET['alterar'];
        $nome   = $_POST["nome"];
        $email  = $_POST["email"];
        $endereco = $_POST["endereco"];
        $cnpj = $_POST["cnpj"];
        $telefone = $_POST["telefone"];
        $con  = new mysqli("localhost", "root", "", "tcc");
        $sql  = "UPDATE usuario SET nome='$nome', email='$email', cnpj='$cnpj',endereco='$endereco', telefone='$telefone' WHERE id='$id'";
        mysqli_query($con, $sql);
        mysqli_close($con);

        echo "<script lang='javascript'>window.location.href='pag_instituicao.php';</script>";
    }
?>

<script lang='javascript'>
    function voltar(){
        window.location.href='pag_instituicao.php';
>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
    }
</script>
