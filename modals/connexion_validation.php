<?php
session_start();
include "../lib/db.php";

if((isset($_POST["login"]) && !empty($_POST["login"])) && (isset($_POST["password"]) && !empty($_POST["password"]))){

	$select = $db->prepare("SELECT * FROM etudiant WHERE login = ? AND mdp= ? ");
	$select->execute(array($_POST["login"], md5($_POST["password"]))) or die(print_r($select->errorInfo()));
	$nbRow = $select->rowCount();

	if($nbRow == 0){
		$select = $db->prepare("SELECT * FROM enseignant WHERE login = ? AND mdp= ? ");
		$select->execute(array($_POST["login"], md5($_POST["password"]))) or die(print_r($select->errorInfo()));

		$row = $select->fetch();
		$_SESSION["login"]= $row["login"];
		/*var_dump($row["nom"]);
		exit;*/
		$_SESSION["id_enseignant"]= $row["id_enseignant"];
		$_SESSION["prenom"]= $row["prenom"];
		$_SESSION["type"] = "enseignant";
		

	}
	else{
		$row = $select->fetch();
		$_SESSION["nom"]= $_POST["nom"];
        $_SESSION["login"] = $_POST["login"];
		$_SESSION["id_etu"]= $_POST["id_etu"];
		$_SESSION["prenom"]= $_POST["prenom"];
		$_SESSION["type"] = "etudiant";

		
	}



    $_SESSION["login"] = $_POST["login"];
    $_SESSION["id_etu"]= $_POST["id_etu"];
    $_SESSION["prenom"]= $_POST["prenom"];
    $_SESSION["type"]= $_POST["type"];

	$select->closeCursor();
	header('Location: ../accueil.php');
}
?>
