<?php
require('../includes/conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

echo $id;

$sql = "UPDATE contato
        SET
            nome='$nome',
            email='$email',
            telefone='$telefone',
            mensagem='$mensagem'
        WHERE id = $id ";
        

if (mysqli_query($conn, $sql)) {
    echo "
    <script>
    location.href='../editou.php';
    </script>
    ";
} else {
    echo 'erro';
}
?>