<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "Jackson";
        echo "Olá mundo PHP, $nome <br>";
        $idade = 12;
        echo "Idade: ".$idade. "<br>";
        if ($idade >18){
            echo "De maior <br>";
        } else {
            echo "De menor <br>";
        }
        echo '2. Imprima apenas as notas maiores que 6 <br>';
        $notas = [7,6,5,8,9];
        for ($i = 0; $i < count($notas); $i++){
            
            if ($notas[$i]>=6){
                echo "Nota posição $i:". $notas[$i]. "<br>";
            }
        }
        echo '3. Crie um vetor com 5 alunos e imprima o aluno da posição 0 e 4 <br>';
        $alunos = ['Lucas Ferron', 'Carlão', 'Sandro ass grand', 'Rafael roça', 'Angelo Catapimbas'];
        for ($i = 0; $i < count($alunos); $i++){
                echo "aluno posição: $i ". $alunos[$i]. "<br>";
        }
    ?>
</body>
</html>