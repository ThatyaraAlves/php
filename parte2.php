<?php
 
 function validateEmail($email){
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        return $email;
}       else {
        echo("$email is not a valid email address");
}
}    

$name = $_POST["name"];
$nascimento = $_POST["data_nasc"];
$tel = $_POST['tel'];
$email = validateEmail($_POST['email']);
if (isset($_POST['gender'])){

    $gender = $_POST['gender'];
 }
$dados = ["Nome"=>$name, "Data_Nascimento"=>$nascimento, "Telefone"=>$tel, "Email"=>$email, "Genero"=>$gender];

function writeFille($arquivo){
    $dadosJson = json_encode($arquivo);
    $arquivo = fopen("texto.txt", "w");
    fwrite($arquivo, $dadosJson);
    fclose($arquivo);
    return $arquivo;
}

$





?>