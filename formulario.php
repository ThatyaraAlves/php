<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício notas alunos</title>
</head>
<body>
    <h1>Notas </h1>
    <fieldset>
        <form action="result.php" method="GET">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <br>
            <label for="nota1">Nota 1º bimestre</label>
            <input type="number" name="nota1" id="nota1"/>
            <br>
            <label for="nota2">Nota 2º bimestre</label>
            <input type="number" name="nota2" id="nota2">
            <br>
            <label for="freq">Frequência</label>
            <input type="number" name="freq" id="freq">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </fieldset>
    
    
</body>
</html>