,<?php
    require "conexao.php";

    $query = 'SELECT * FROM usuario';
    $result = $conexao->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressao do banco</title>
</head>
<body>
    <?php 
        while($cu = mysqli_fetch_assoc($result)){
            echo "<div>". $cu['usuario_id'] . "</div>";
            echo "<div>". $cu['usuario'] . "</div>";
            echo "<div>". $cu['senha'] . "</div>";
        }
     ?>
</body>
</html>