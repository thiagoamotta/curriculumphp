<?php require_once("PHP/conecta.php") ?>
<?php
        //adicionando variavel de sessão
            session_start();

        //verificando se esta configurado o post
            if ( isset($_POST["username"])){
                
        //declarando variaveis a serem utilizadas
            $username = $_POST["username"];
            $password = $_POST["password"];
?>        
<!--alerta com boostrap para erro de login-->
<div class="container">
<div class="alert alert-danger" role="alert">
Usuário e/ou Senha inválidos!
</div>
</div>
<!--inicio da consulta para realização do login-->
<?php              
        //realizando filtro no banco
            $login = "SELECT * ";
            $login .="FROM login ";
            $login .="WHERE username ='{$username}' and password = '{$password}' ";
         
        //validando consulta
            $acesso = mysqli_query($conecta, $login);
            if (!$acesso){
                die("Falha na consulta ao banco!");
            }
            $informacao = mysqli_fetch_assoc($acesso);
            
            if( empty($informacao)){
                $mensagem="Login sem sucesso.";
            }else{
                $_SESSION["user_nav"] = $informacao["id"];
                header("location:index.php");
            }
        }
?>
<html>
    <head>
        <title>Curso de Bootstrap</title>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="_css/estiloLogin.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400" rel="stylesheet">
        <meta charset="utf-8">
    </head>
        
    <body>
        <div class="container-fluid">
        <div class="div col-sm-offset-6 col-md-offset-6 col-lg-offset-4">
            <div class="container2">
            <img class="img-responsive img-circle" src="img/thiago.png"/>
            <p>Thiago Alves - Curriculum Vitae</p>
                
            <form action="login.php" method="post">
                
            <input type="text" class="form-control" name="username" placeholder="Usuário">
                
            <input type="password" class="form-control" name="password" placeholder="Senha">
                

            <input type="submit" class="btn btn-success" value="Login"> 
                
            </form>
            </div>
        </div>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </div>
    </body>
</html>