<?php
if (!empty($_GET["name"]) && !empty($_GET["email"]) && !empty($_GET["age"])){
    $name = $_GET["name"]; 
    $email = $_GET["email"];
    $age = $_GET["age"];
    if (strpos($email, "@") && strpos($email, ".") && strlen($name) > 3 && is_numeric($age)) {
        echo "Utente verificato";
    } else {
        echo "Utente non verificato";
    }
}
?>