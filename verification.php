<?php
    $username = $_POST["username"];    
    $password = $_POST["password"];    

    if (($username !== "trinix") && ($password !== "bob")) {
        echo "Utilisateur inconnu";
    }
    if (($username === "trinix") || ($password === "bob")) {
        echo "Utilisateur ou mot de passe incorrect";
    }
?>