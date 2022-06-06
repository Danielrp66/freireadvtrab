<?php
require('includes/conexao.php');
$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id = $id";
$result = mysqli_query($conn, $sql);


while ($registro = mysqli_fetch_assoc($result)) {
    $id = $registro['id'];
    $email = $registro['email'];
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

    <form action="acoes/updateins.php" method="POST">
        
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email ?>">
        <br><br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="Enviar">


    </form>
</body>

</html>