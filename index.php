<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
    <style>
        div {
            border: solid;
            border-radius: 10px;
            background-color: rgb(180, 175, 175);
        }
        h1 {
            font-family: 'Courier New', Courier, monospace;
            font-weight: 800;
            text-align: center;
        }
        h2, p {
            font-family: 'Courier New', Courier, monospace;
            margin-left: 30px;
        }
        p {
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div>
        <h1>Show do Bilhão</h1>

        <?php
        $perguntas = array();
        array_push($perguntas, "Em qual reino se encontram as bactérias?");
        array_push($perguntas, "Quantos países tem na América do Sul?");
        array_push($perguntas, "Qual é um exemplo de reação endotérmica?");
        array_push($perguntas, "Qual dos seguintes verbos é transitivo:");
        array_push($perguntas, "Qual a raiz quadrada de 289?");

        $alternativas = array();
        for ($i = 0; $i < sizeof($perguntas); $i++){
            array_push($alternativas, array());
        }

        array_push($alternativas[0], "Vegetal", "Protista", "Monera", "Fungi");
    
        array_push($alternativas[1], "11 países", "12 países", "13 países", "14 países");

        array_push($alternativas[2], "queima de uma vela", "condensação da água", "dissolução de cloreto de cálcio na água", "cozimento de alimentos");

        array_push($alternativas[3], "dormir", "beber", "precisar", "usar");

        array_push($alternativas[4], "16", "17", "18", "19");

        $respostas = array(2, 2, 3, 0, 1);

        for($i = 0; $i < sizeof($perguntas); $i++){
            $num = $i + 1;
            echo "<h2> PERGUNTA $num<h2>";
            echo "<h2>$perguntas[$i]<h2>";

            $num = 1;
            foreach ($alternativas[$i] as $alternativa) {
                echo "<p> [$num] $alternativa<p>";
                $num++;
            }
            echo "<br>";
        }
        ?>
    </div>
</body>
</html>