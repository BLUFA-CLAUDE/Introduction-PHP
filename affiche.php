<?php
if(isset($_POST['nom'])){
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $nomPhoto = $_FILES['photo']['name'];
    $photoSize = $_FILES['photo']['size'];
    $langue = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

    setcookie("nom",$nom,time()+30*24*3600);
    setcookie("email",$email,time()+30*24*3600);

    //print_r($_GET);
}else{
    $nom = ""; $email = ""; $langue = "";
}

?>

<html>
    <body>
        Votre nom est: <?php echo($nom) ?> <br>
        Votre email est: <?php echo($email) ?> <br>
        Nom de la photo est: <?php echo($nomPhoto) ?> <br>
        Taille de la photo est: <?php echo($photoSize) ?> <br>
        Votre langue est: <?php echo($langue) ?> <br>
    </body>
</html>