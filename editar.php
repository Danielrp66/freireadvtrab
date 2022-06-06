<?php
require('includes/conexao.php');
$id = $_GET['id'];

$sql = "SELECT * FROM contato WHERE id = $id";
$result = mysqli_query($conn, $sql);


while ($registro = mysqli_fetch_assoc($result)) {
    $id = $registro['id'];
    $nome = $registro['nome'];
    $email = $registro['email'];
    $telefone = $registro['telefone'];
    $mensagem = $registro['mensagem'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR CADASTRO</title>
</head>

<body>
    <h3>Editar Cadastro</h3>

    <form action="acoes/update.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $nome ?>">
        <br><br>
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email ?>">
        <br><br>
        <label>telefone:</label>
        <input type="text" name="telefone" value="<?php echo $telefone ?>">
        <br><br>
        <label>mensagem:</label>
        <textarea name="mensagem" cols="30" rows="10"><?php echo $mensagem ?></textarea>
        <br><br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="Enviar">


    </form>
</body>

</html>