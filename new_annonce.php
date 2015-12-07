<?php
session_start();
include "partials/header.php";
include "partials/navbar.php";
include "modals/connexion_modal.php";
include "partials/footer.php";
include "modals/inscription_modal.php";
?>
<div form="form-group">
	<form method="POST" action="poster_annonce.php">
		<label for="sujet">Sujet:</label>
		<input type="text" name="sujet" class="form-control" id="sujet" placeholder="Sujet..."/>

		<label for="resp_ent">Responsable en entreprise:</label>
		<input type="text" name="resp_ent" class="form-control" id="resp_ent" placeholder="Responsable en entreprise..."/>

		<label for="nom_ent">Nom de l'entreprise:</label>
		<select name="nom_ent" id="nom_ent">
			<?php
			include "lib/db.php";
			$select = $db->prepare("SELECT DISTINCT nom, id_entreprise FROM entreprise");
			$select->execute() or die(print_r($select->errorInfo()));
			while($row = $select->fetch()){
				$id= $row["id_entreprise"];
				$nom= $row["nom"];
				?>
				<option value="<?php echo $id;?>"><?php echo $nom;?></option><?php
				
			}
			$select->closeCursor();
			?>
		</select>
		<input type="submit" class="btn btn-default" value="Valider"/>
	</form>
</div>