<?php
    require ('conexao.php');
//insert
if(isset($_POST['usuario'])){
    $sql = $pdo->prepare("INSERT INTO usuario(usuario, senha) VALUES(?,?)");
    $sql->execute(array($_POST['usuario'], $_POST['senha']));
    echo '<div class="pop-insert">inserido com sucesso</div>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="a.css">
</head>
<body>
<a href="registros.php" class="registros">Registros</a>
    <form method="post" class="login-container">
        <img src="usuario-de-perfil.png" alt="">
        <input type="email" name="usuario" required placeholder="dude@email.com" id="email">
        <input type="password" name="senha" required placeholder="senha" id="password">
        <span><input type="checkbox" required name="check" id="check">concordar com os <a href="">termos de serviço</a></span>
        <input type="submit" value="Login">
    </form>
</body>
</html>