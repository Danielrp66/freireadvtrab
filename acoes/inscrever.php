<?php
require('../includes/conexao.php');


$email = mb_strtoupper($_POST['emailins']);


$sql = "INSERT INTO 
                usuarios
        (email)
                VALUE
        ('$email');";

if(mysqli_query($conn, $sql)){
    echo "<script>
    location.href='../salvou.php';
    </script>";
}
else{
    echo "<script>
    location.href='../';
    </script>";
}
?>