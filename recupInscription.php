<?php
echo 'Inscription fini, vos information : ';
$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING);
$commentaire = filter_input(INPUT_POST, 'commentaire', FILTER_SANITIZE_STRING);

#var_dump($_POST);

if (empty($nom)) {
    echo 'Veuillez saisir un nom' . '</br>';
} else {
    if (preg_match('/\d/', $nom) > 30) {
        echo 'veuillez ne pas mettre de chiffres' . '</br>';
    } else {
        if (preg_match('/\d/', $nom)) {
            echo '<br/> veuillez ne pas mettre de chiffres </br>';
        } else {
            echo '</br> Votre nom : ';echo $nom;
        }
    }
}
if (empty($email)) {
    echo 'Veuillez saisir un email' . '</br>';
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<br> Veuillez saisir un email valide !</br>';
    } else {
        if (strlen($email) >= 255) {
            echo '<br> Veuillez saisir un email plus court</br>';
        } else {
            echo '</br> Votre email : '; echo $email;
        }
    }
}
if (empty($age)) {
    echo '<br> Veuillez saisir un age';
} else 
    if (!filter_var($age, FILTER_VALIDATE_INT)) {
        echo "<br> l'age n'a des chiffres </br>";
}else {
    if ($age < 18) {
        echo"l'age ne peut pas être inferieur à 18 </br>";
    } else {
        echo '</br> Votre age : ';
echo $age;
    }
}

if (empty($commentaire)) {
    echo 'Veuillez saisir un commentaire' . '</br>';
} else {
   
echo '</br> Votre commentaire : ';
echo $commentaire;
}



