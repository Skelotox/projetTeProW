<?php
include "index.php";
include "lib/db.php";

$select = $db->query("SELECT * FROM annonce");
$select2 = $db->query("SELECT * FROM entreprise");
?>


<?php
while($donnees = $select->fetch()) {
      $donnees2 = $select2->fetch();
    ?>
    <div class="row">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="container">
                <div class="panel panel-default">
                    <nav class="navbar navbar-default">
                        <a class="navbar-brand">
                            <p class="text-justify>">
                                <span class="glyphicon glyphicon-record"></span><?php echo " " . $donnees["sujet"]; ?>
                            </p>
                        </a>
                        <span class="navbar-text pull-right next"><strong><?php echo $donnees2["ville"]. ": </strong><em>" .$donnees2["adresse"]. " </em>"; ?></span>
                    </nav>
                    <div class="panel panel-body">
                        <strong><h4><u>
                           <?php
                           echo $donnees2["nom"]. ":</u></strong></h4><br /><strong>Secteur d'activite:</strong> " .$donnees2["secteur_activite"]. "<br /> <strong>Tel:</strong> 0" .$donnees2["tel"]. "<br /><strong>Responsable:</strong> " .$donnees["responsable"];
                           ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>




