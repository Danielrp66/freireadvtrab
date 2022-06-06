<?php
require('../includes/conexao.php');
$id = $_POST['id'];
$email = $_POST['email'];

$sql = "UPDATE
            usuarios
        SET
            email='$email'
        WHERE id = $id ";
            
if(mysqli_query($conn, $sql)){
    echo"
    <script>
    location.href='../editou.php';
    </script>
    ";
}
else{
    echo "<script>
    alert('erro');
    location.href='../';
    </script>";
}
?>