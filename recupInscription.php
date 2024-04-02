<?php
echo 'RecupInscription';
$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING);
$commentaire = filter_input(INPUT_POST, 'commentaire', FILTER_SANITIZE_STRING);

var_dump($_POST);

if (empty($nom)) {
    echo 'Veuillez saisir un nom' . '</br>';
} else {
    if (preg_match('/\d/', $nom) > 30) {
        echo 'veuillez ne pas mettre de chiffres' . '</br>';
    } else {
        if (preg_match('/\d/', $nom)) {
            echo '<br/> veuillez ne pas mettre de chiffres';
        } 
    }
}
if (empty($email)) {
    echo 'Veuillez saisir un email' . '</br>';
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<br> Veuillez saisir un email valide !';
    } else {
        if (strlen($email) >= 255) {
            echo '<br> Veuillez saisir un email plus court';
        }
    }
}
if (empty($age)) {
    echo '<br> Veuillez saisir un age';
} else 
    if (!filter_var($age, FILTER_VALIDATE_INT)) {
        echo "<br> l'age n'a des chiffres";
}else {
    if ($age < 18) {
        echo"l'age ne peut pas être inferieur à 18";
    }
}

if (empty($commentaire)) {
    echo 'Veuillez saisir un commentaire' . '</br>';
}