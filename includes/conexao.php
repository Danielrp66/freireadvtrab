<?php
$conn = mysqli_connect('localhost', 'root', '');

if ($conn) {
    mysqli_select_db($conn, 'freireadv');
} else {
    die('erro ao conectar');
}
?>
