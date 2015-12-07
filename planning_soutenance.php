<?php
include "index.php";
include "lib/db.php";


$select = $db->query("SELECT e.nom FROM etudiant e, affecte a WHERE e.id_etudiant = a.id_etudiant");
$select2 = $db->query("SELECT * FROM soutenance");
$select3 = $db->query("SELECT e.nom FROM enseignant e, affecte a where e.id_enseignant = a.enseignant_tuteur");
$select4 = $db->query("SELECT e.nom FROM enseignant e,soutenance s WHERE e.id_enseignant = s.co_souteneur");

?>




<div class="panel panel-default">
    <div class="panel-heading"><h3>Planning Soutenance</h3></div>
    <div class="panel-body">
    <table class="table">

        <th><u><h4>Nom:</h4></u></th>
        <th><u><h4>Salle:</h4></u></th>
        <th><u><h4>Tuteur IUT:</h4></u></th>
        <th><u><h4>Co Souteneur:</h4></u></th>
        <th><u><h4>Tuteur Entreprise:</h4></u></th>
        <th><u><h4>Date:</h4></u></th>

        <?php
        while($donnees = $select->fetch()) {
              $donnees2 = $select2->fetch();
              $donnees3 = $select3->fetch();
              $donnees4 = $select4->fetch();
        ?>
        <tr>
        <th><?php echo $donnees["nom"]; ?></th>
        <td><?php echo $donnees2["salle"]; ?></td>
        <td><?php echo $donnees3["nom"]; ?></td>
        <td><?php echo $donnees4["nom"]; ?></td>
        <td><?php if($donnees2["tuteur_entreprise"] ==1) {echo "Présent";}else {echo "Absent";} ?></td>
        <td><?php echo $donnees2["date_soutenance"]; ?></td>
        </tr>
        <?php
        }
        ?>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </table>
    </div>
</div>

