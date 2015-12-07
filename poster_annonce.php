<?php
session_start();
include 'lib/db.php';

if((isset($_POST["sujet"]) && !empty($_POST["sujet"])) && (isset($_POST["resp_ent"]) && !empty($_POST["resp_ent"]))){


	$db->exec('INSERT INTO annonce(sujet, resp_entreprise, id_entreprise) VALUES("'.$_POST["sujet"].'","'.$_POST["resp_ent"].'","'.$_POST["nom_ent"].'")');

	//$rep=$stmt->execute(array(':sujet'=>$_POST["sujet"],':resp_entreprise'=>$_POST["resp_ent"],':id_entreprise'=>$_POST["nom_ent"]));

	//$select->closeCursor();
	header('Location: ../index.php');
}
?>