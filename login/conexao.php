<?php
    define('HOST', '127.0.0.1');
    define('USUARIO', 'root');
    define('SENHA', 'root');
    define('DB', 'login');

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
    $query = 'SELECT * FROM usuario';
    $result = $conexao->query($query);
    print_r($result);
?>