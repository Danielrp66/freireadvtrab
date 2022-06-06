<?php
require('../includes/conexao.php');

$nome = mb_strtoupper($_POST['nome']);
$email = mb_strtoupper($_POST['email']);
$telefone = $_POST['telefone'];
$mensagem = mb_strtoupper($_POST['mensagem']);

$sql = "INSERT INTO 
                contato
        (nome, email, telefone, mensagem)
                VALUE
        ('$nome','$email','$telefone','$mensagem');";

if(mysqli_query($conn, $sql)){
    echo "<script>
    location.href='../salvou.php';
    </script>";
}
else{
    echo "<script>
    alert('erro');
    location.href='../';
    </script>";
}
?>