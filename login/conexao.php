<?php
    // define('HOST', '127.0.0.1');
    // define('USUARIO', 'root');
    // define('SENHA', 'root');
    // define('DB', 'login');

    // $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
    $pdo = new PDO('mysql:host=172.27.3.11;dbname=login','app','123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>