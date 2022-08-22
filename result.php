<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação do aluno</title>
</head>
<body>
    <h1>Resumo</h1>
    <?php
        $nome = $_GET["nome"];
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $freq = $_GET["freq"];
        echo "Olá! $nome";
        $situacao = "";
        $media = ($nota1 + $nota2) / 2;
        
        // if($freq < 75){
        //     $situacao = "Reprovado por falta";
        // }
        // else{
        //     if($media < 2) {
        //         $situacao = "Reprovado";
        //     }
        //     elseif($media <= 2 || $media < 6){
        //         $situacao = "Exame final";
        //     }
    
        //     else{
        //         $situacao = "Aprovado";
    
        //     }
        // }
            $situacao = ($freq < 75) ? ("Reprovado por falta") : (($media < 2) ?  
            ("Reprovado"): (($media <= 2 || $media < 6) ? ("Exame final") : ("Aprovado")));
        
            echo "<p>Sua média final é: $media</p>";
            echo "Situação: $situacao";
       


    ?>
</body>
</html>