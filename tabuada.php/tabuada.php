<?php 
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST['numero']);

    echo "<h1>Resultado da Tabuada</h1>";

    if ($numero > 0) {
        echo "<h2>Tabuada do número</h2>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<p>$numero x $i = $resultado</p>";

        }
        
            
        
    } else {
        echo "<p style='color:red;'>Por favor, insira um número positivo!</p>";

    }
} else {
    echo "<p>Use o formulário para enviar um número.</p>";
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
    
    <style>
        body {
            background-color: #ddb7ff;
            font-family: Arial, sans-serif;
            color: #4b0082;
            text-align: center;
            padding: 40px;
        }

        h1 {
            color: #6a0dad;
        }

        h2 {
            color: #800080;
        }

        form {
            margin-bottom: 30px;
        }

        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            border: 2px solid #b19cd9;
            border-radius: 5px;
            width: 200px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #800080;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #9932cc;
        }

        p {
            font-size: 18px;
        }

        .erro {
            color: red;
        }

        form {
            background-color: #e6ccff;
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(75, 0, 130, 0.2);
        }
    </style>
