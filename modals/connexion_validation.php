<?php
session_start();
include "../lib/db.php";

if((isset($_POST["username"]) && !empty($_POST["username"])) && (isset($_POST["password"]) && !empty($_POST["password"]))){

	$select = $db->prepare("SELECT * FROM etudiant WHERE login = ? AND mdp= ? ");
	$select->execute(array($_POST["username"], $_POST["password"])) or die(print_r($select->errorInfo()));
	$nbRow = $select->rowCount();

	if($nbRow == 0){
		$select = $db->prepare("SELECT * FROM enseignant WHERE login = ? AND mdp= ? ");
		$select->execute(array($_POST["username"], $_POST["password"])) or die(print_r($select->errorInfo()));

		$row = $select->fetch();
		$_SESSION["nom"]= $row["nom"];
		/*var_dump($row["nom"]);
		exit;*/
		$_SESSION["id_enseignant"]= $row["id_enseignant"];
		$_SESSION["prenom"]= $row["prenom"];
		$_SESSION["type"] = "enseignant";
		

	}
	else{
		$row = $select->fetch();
		$_SESSION["nom"]= $row["nom"];
		$_SESSION["id_etu"]= $row["id_etu"];
		$_SESSION["prenom"]= $row["prenom"];
		$_SESSION["type"] = "etudiant";
		
	}

	$select->closeCursor();
	header('Location: ../index.php');
}
?>