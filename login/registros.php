<?php
    require ('conexao.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="registros.scss">
</head>
<body>
    <!-- <table>
        <tr id="head">
        <th>id</th>
        <th>Usuario</th>
        <th>Senha</th>
        </tr>
        <tr> -->
<?php
// Query SQL para selecionar as colunas usuario e senha da tabela usuario
$sql = "SELECT * FROM usuario";

// Preparar a query
$stmt = $pdo->prepare($sql);

// Executar a query
$stmt->execute();

// Percorrer os resultados e imprimir
echo "<table>";
echo "<tr><th>Usuário</th><th>Senha</th></tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr><td>{$row['usuario']}</td><td>{$row['senha']}</td></tr>";
}
echo "</table>";
?>

    
    
</body>
</html>