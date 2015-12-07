<?php
session_start();
include "partials/header.php";
include "partials/navbar.php";
include "modals/connexion_modal.php";
include "modals/inscription_modal.php";
include "partials/footer.php";
include 'lib/db.php';
?>
<label for="etu">choisissez un étudiant:</label>
<select name="etu" id="etu">
	<?php
	$select = $db->prepare("SELECT * FROM etudiant");
	$select->execute() or die(print_r($select->errorInfo()));
	foreach($select as $row){
		$id= $row["id_etudiant"];
		$nom= $row["nom"];
		$prenom= $row["prenom"];
		?>
		<option value="<?php echo $id;?>"><?php echo $nom.' '.$prenom;?></option><?php
				
	}
	$select->closeCursor();
	?>
</select>


<table class="table table-strapped">
	<thead>
		<tr>
			<th>id</th>
			<th>sujet</th>
			<th>resp entreprise</th>
			<th>entreprise</th>
		</tr>
	</thead>
	<tbody>
		<?php

		$select = $db->prepare("SELECT a.id_annonce, a.sujet, a.responsable, e.nom FROM annonce a 
			INNER JOIN entreprise e ON a.id_entreprise = e.id_entreprise");
		$select->execute() or die(print_r($select->errorInfo()));
		foreach($select as $row){
			?>
			<tr>
				<td><?php echo $row["id_annonce"];?></td>
				<td><?php echo $row["sujet"];?></td>
				<td><?php echo $row["responsable"];?></td>
				<td><?php echo $row["nom"];?></td>
			</tr>
			<?php
		}
		?>
	</tbody>
</table>