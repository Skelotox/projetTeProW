<?php
session_start();
include "partials/header.php";
include "partials/navbar.php";
include "modals/connexion_modal.php";
include "partials/footer.php";
include "modals/inscription_modal.php";
?>
<label for="etu">choisissez un étudiant:</label>
<select name="etu" id="etu">
	<?php
	include 'lib/bd.php';

	$select = $db->prepare("SELECT * FROM etudiant");
	$select->execute() or die(print_r($select->errorInfo()));
	while($row = $select->fetch()){
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

		$select = $db->prepare("SELECT a.id_annonce, a.sujet, a.resp_entreprise, e.nom FROM annonce a 
			INNER JOIN entreprise e ON a.id_entreprise = e.id_entreprise");
		$select->execute() or die(print_r($select->errorInfo()));
		while($row = $select->fetch()){
			?>
			<tr>
				<td><?php echo $row["a.id_annonce"];?></td>
				<td><?php echo $row["a.sujete"];?></td>
				<td><?php echo $row["a.resp_entreprise"];?></td>
				<td><?php echo $row["a.nom"];?></td>
			</tr>
			<?php
		}
		?>
	</tbody>
</table>