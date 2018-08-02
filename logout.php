<?php require_once("PHP/conecta.php") ?>
<?php
    session_start();

    unset($_SESSION["user_nav"]);
    
?>
<script>location.href='login.php';</script>