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

    echo "<h1>{$name}, </h1>";
    echo "<h2>Gênero: {$gender}</h2>";
    echo "<h2>Nasceu em: {$nascimento}</h2>";
    echo "<h2>Telefone: {$tel}</h2>";
    echo "<h2>Email: {$email}</h2>";
    

    
    
    
?>