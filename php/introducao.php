<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>

<body>
    <?php
    $nome = "Yuri Magnan";
    $idade = 18;
    echo "hello world! " . $nome . "<br> Idade: " . $idade;

    if ($idade >= 18) {
        echo "<br> de maior <br>";
    } else {
        echo "<br> de menor";
    }

    $pessoas = [
        "Boina",
        "Rossetti",
        "Giselly <br>"
    ];

    for ($i = 0; $i < count($pessoas); $i++) {
        echo $pessoas[$i];
    }

    $idades = [
        43,
        235,
        65,
        34,
        2,
        4,
        6,
        353,
        23,
        5,
        6,
        3,
        4
    ];

    for ($i = 0; $i < count($idades); $i++) {
        if ($i >= 18) {
            echo "$idades[$i] de maior <br>";
        } else {
            echo "$idades[$i] de menor <br>";
        }
    }

    $opcao = "+";
    $num1 = 456546;
    $num2 = 54656;

    switch ($opcao) {
        case "/":
            $res = $num1 / $num2;
            echo "$num1 / $num2 = $res";
            break;

        case "*":
            $res = $num1 * $num2;
            echo "$num1 * $num2 = $res";
            break;

        case "+":
            $res = $num1 + $num2;
            echo "$num1 + $num2 = $res";
            break;

        case "-":
            $res = $num1 - $num2;
            echo "$num1 - $num2 = $res";
            break;

        default:
            echo "Nenhuma opcao selecionada";

            break;
    }

    ?>
</body>

</html>