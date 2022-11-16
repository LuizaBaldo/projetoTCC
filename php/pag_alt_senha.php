<?php
    require_once './functions.php';
    if(isset($_SESSION["id"])==false){
        header("location: pag_login.php");
        exit();
    }
<<<<<<< HEAD
    $user = getUserLogged();
=======
    $user = getUserLogged($_SESSION["id"]);
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
    <link rel="stylesheet" href="../css/pag_alt_senha.css">
    <link rel="stylesheet" href="../css/styles.css">
    <!-- js -->
    <script lang="javascript" src="../js/pag_alt_senha.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adot.org</title>
</head>
    <body>

        <?php
            require_once './partials/common.php';
        ?>

        <div class="container rounded mt-5 p-3" style="background-color: #66C4A9; width: 60%;">
            <h1 class="text-center">Alterar Senha</h1>
            <div id="formulario">
                <form method="post" action="pag_alt_senha.php?alterarSenha=1" id="formAlterarSenha">
<<<<<<< HEAD
                    <div class="form" style="width:70%;margin:auto;">
                        <div class="row">
=======

                    <div class="form" style="width:70%;margin:auto;">
                        <div class="row">

>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
                            <div class="mb-3">
                                <label class="form-label">Senha Antiga</label>
                                <input type="password" class="form-control form-control-sm" placeholder="Digite sua senha antiga" id="txtSenhaAntiga" name="txtSenhaAntiga"/>
                            </div>
<<<<<<< HEAD
=======

>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
                            <div class="mb-3">
                                <label class="form-label">Nova Senha</label>
                                <input type="password" class="form-control form-control-sm" placeholder="Digite uma senha" id="txtSenhaNova" name="txtSenhaNova"/>
                            </div>
<<<<<<< HEAD
=======

>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
                            <div class="mb-3">
                                <label class="form-label">Confirme a nova senha</label>
                                <input type="password" class="form-control form-control-sm" placeholder="Confirme a senha" id="txtConfirmeSenha" name="txtConfirmeSenha"/>
                            </div>
<<<<<<< HEAD
                        <br/>
                            <div class="mt-3">
                                <div class="d-grid gap-2 col-6 mx-auto rounded" style="background-color: #4C79D5;">
                                    <button type="button" class="btn text-white" id="btnAlterar" name="btnAlterar" onclick="validar();">Alterar</button>
                                </div>
                            </div>
=======

                        <br/>
                            <div class="d-flex justify-content-between mb-3">
                                <a href="pag_usuario.php">
                                    <button type="button" class="btn btn-danger mt-2" id="btnCancelarCadastro" name="btnCancelarCadastro" onclick="voltar()">Cancelar</button>
                                </a>
                                <button type="button" class="btn btn-primary mt-2" id="btnAlterar" name="btnAlterar" onclick="validar();">Alterar</button>
                            </div>

>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </body>
</html>

<?php
<<<<<<< HEAD
=======

>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
    if(isset($_GET['alterarSenha'])){
        $senhaAntiga = $_POST['txtSenhaAntiga'];
        $id = $user['id'];
        $email = $user['email'];
<<<<<<< HEAD
        $senhaNova = password_hash($_POST["txtSenhaNova"], PASSWORD_BCRYPT);
        $confirmaSenhaNova = $_POST['txtConfirmeSenha'];
        $con = new mysqli("localhost", "root", "", "tcc");
        $sql1 = "select * from usuario where email= ?";
        $statement = mysqli_prepare($con, $sql1);
        mysqli_stmt_bind_param($statement, 's', $email);
        mysqli_stmt_execute($statement);
        $resultado = mysqli_stmt_get_result($statement);
        if($reg = mysqli_fetch_array($resultado)){
            if(password_verify($senhaAntiga, $reg['senha'])){
                $sql = "UPDATE usuario SET senha='$senhaNova' WHERE id='$id'";
                $resultado = mysqli_query($con, $sql);
                echo "<script lang='javascript'>alert('Senha Alterada com sucesso');</script>";
                echo "<script lang='javascript'>window.location.href='sair.php';</script>";
            }
            else{
                echo "<script lang='javascript'>alert('Senha Antiga Invalida');</script>";
            }
        }
        mysqli_close($con);
=======
        $senhaNova = $_POST['txtSenhaNova'];
        $confirmaSenhaNova = $_POST['txtConfirmeSenha'];
        $con = new mysqli("localhost", "root", "", "tcc");
        $query = mysqli_query($con,"SELECT email,senha FROM usuario WHERE id='$id' AND email='$email' AND senha='$senhaAntiga'");
        $num = mysqli_fetch_array($query);
     
        if($num>0){
            $con = mysqli_query($con, "UPDATE usuario SET senha='$senhaNova' WHERE id='$id'");
            echo "<script lang='javascript'>alert('Senha Alterada com sucesso');</script>";
            echo "<script lang='javascript'>window.location.href='pag_usuario.php';</script>";
        }else{
            echo "<script lang='javascript'>alert('Senha Antiga Invalida');</script>";
            echo "<script lang='javascript'>window.location.href='pag_alt_senha.php';</script>";
            
        }
        mysqli_close($con);
        
>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
    }

?>

<<<<<<< HEAD
=======

>>>>>>> 2e0e58766551ba90e70ed6a739f9bf1880cacfcd
<script lang='javascript'>
    function voltar(){
        window.location.href='pag_usuario.php';
    }
</script>