<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #000;
            color: goldenrod;
            text-align: center;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: large;
        }
        button{
            background-color: gold ;
            border: gold;
            color: #fff;
            transition-duration: 1s;
            width: 19%;
            font-size: large;
            height: 30px;
            border-radius: 3px;
        }
        button:hover{
            background-color: #fff;
            color: goldenrod;
        }
        div{
            margin-top: 30%;
        }
    </style>
    <script>
        function pgin(){
            location.href='leitura.php';
        }
    </script>
</head>
<body>
    <div>
        <h2>sua mensagem foi editada</h2>
        <button onclick="pgin()">voltar</button>
    </div>
</body>
</html>