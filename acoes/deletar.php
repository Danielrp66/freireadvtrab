<?php
require('../includes/conexao.php');

$id = $_GET['id'];

$sql = "DELETE from contato WHERE id = $id";
if(mysqli_query($conn, $sql)){
    echo "
    <script>
        location.href='../deletou.php'
    </script>";
}
else{
echo 'erro';

}
?>