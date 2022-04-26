<?php
if(isset($_COOKIE['nom'])){
    header("location:saisie.html");
    $nom = $_COOKIE['nom'];
    $email = $_COOKIE['email'];
    echo("Votre Nom est: $nom et votre Email est: $email");
}else{
    header("location:saisie.html");
}
    
    //print_r($_COOKIE);
?>