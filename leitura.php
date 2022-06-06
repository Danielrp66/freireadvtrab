
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            text-align:center;
        }
    </style>
</head>
<body>
    <h3>Mensagens recebidas</h3>
<table border="1px">
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>email</td>
            <td>telefone</td>
            <td>mensagem</td>
            <td>delete</td>
            <td>editar</td>


        </tr>
            <?php
            require('includes/conexao.php');
            $sql = "SELECT * FROM contato";
            $result = mysqli_query($conn, $sql);
            while($registro = mysqli_fetch_assoc($result)){ 
                $id = $registro['id'];
                $nome = $registro['nome'];
                $email = $registro['email'];
                $telefone = $registro['telefone'];
                $mensagem = $registro['mensagem'];
                
                

                echo"
                <tr>
                    <td>$id</td>
                    <td>$nome</td>
                    <td>$email</td>
                    <td>$telefone</td>
                    <td>$mensagem</td>
                    <td><a href='acoes/deletar.php?id=$id'><button>Deletar</button></a></td>
                    <td><a href='editar.php?id=$id'><button>Editar</button></a></td>
                </tr>
                
                ";

              }         
            ?>
            
    </table>

    <h3>Inscritos</h3>
    <table border="1px">
        <tr>
            <td>id</td>
            <td>email</td>
            <td>delete</td>
            <td>editar</td>
        </tr>
            <?php
            require('includes/conexao.php');
            $sql = "SELECT * FROM usuarios";
            $result = mysqli_query($conn, $sql);
            while($registro = mysqli_fetch_assoc($result)){ 
                $id = $registro['id'];
                $email = $registro['email'];
                echo"<tr>
                    <td>$id</td>
                    <td>$email</td>  
                    <td><a href='acoes/deletarUsu.php?id=$id'><button>Deletar</button></a></td>
                    <td><a href='editarins.php?id=$id'><button>Editar</button></a></td>             
                </tr>
                ";

              }         
            ?>
            
    </table>
</body>
</html>
