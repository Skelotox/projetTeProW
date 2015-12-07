<?php
session_start();
include "../lib/db.php";

if((isset($_POST["login"]) && !empty($_POST["login"]) && (isset($_POST["password"]) && !empty($_POST["password"])
    && (isset($_POST["email"]) && !empty($_POST["email"])
        && (isset($_POST["groupe"]) && !empty($_POST["groupe"]) && (isset($_POST["nom"]) && !empty($_POST["nom"])
        && (isset($_POST["prenom"]) && !empty($_POST["prenom"])))))))){

    $insert =$db->prepare("INSERT INTO etudiant VALUES (?,?,?,?,?,?,?)");
    $insert->execute(array(NULL,''.$_POST["nom"].'',''.$_POST["prenom"].'',''.$_POST["email"].'',''.$_POST["login"].'',''.md5($_POST["password"]).'',null)) or die (print_r($insert->errorInfo()));



    $_SESSION["Login"] = $_POST["login"];
    $_SESSION["Nom"] = $_POST["nom"];
    $_SESSION["Prenom"] = $_POST["prenom"];
    $_SESSION["Email"] = $_POST["email"];
    $_SESSION["Mdp"] = $_POST["mdp"];

    header('Location: ../accueil.php');
}


?>

