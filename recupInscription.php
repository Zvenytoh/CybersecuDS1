<?php
echo 'RecupInscription';
$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$age = filter_input(INPUT_POST, 'naissance', FILTER_SANITIZE_STRING);
$nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);

$telephone = filter_input(INPUT_POST, 'naissance', FILTER_SANITIZE_STRING);
var_dump($_POST);
if (empty($nom)) {
    echo 'Veuillez saisir un nom' . '</br>';
} else {
    if (strlength($nom) > 30) {
        echo 'Veuillez écrire un nom de 30 caractères maximum' . '</br>';
    } else {
        if (preg_match('/\d/', $nom)) {
            echo '<br/> veuillez ne pas mettre de chiffres';
        } else {
            if (preg_match('/[^a-zA-Z\d]/', $nom)) {
                echo '<br> le nom a des chiffres';
            }
        }
    }
}
if (empty($email)) {
    echo 'Veuillez saisir un email' . '</br>';
} else {
    if (!filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
        echo '<br> Veuillez saisir un email valide !';
    } else {
        if (strlen($email) >= 255) {
            echo '<br> Veuillez saisir un email plus court';
        }
    }
}
if (empty($age)) {
    echo '<br> Veuillez saisir un age';
}