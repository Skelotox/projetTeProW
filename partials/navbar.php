
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left" id="left-nav">
                <a class="navbar-brand" href="accueil.php">Accueil</a>
                <?php
                if(isset($_SESSION["login"]))
                {?>
                    <li><a href="liste_stage.php">Liste des Stages</a></li>
                    <li><a href="planning_soutenance.php">Planning Soutenances</a></li>
                    <li><a href="note.php">Notes</a></li>
                <?php
                }
                ?>
                </ul>
            </div>



        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right" id="right-nav">
                <?php
                $_SESSION["nom"]= "";
                $_SESSION["prenom"]="";
                $_SESSION["type"] = "";




                if($_SESSION["nom"] && $_SESSION["prenom"]) {

                    if($_SESSION["type"] == "enseignant"){
                        ?>
                        <li><a href="new_annonce.php">Poster annonce</a></li>
                        <li><a href="#"><?php echo $_SESSION["nom"].' '.$_SESSION["prenom"] ?></a></li>
                        <li><a href="#">Deconnexion</a></li>
                        <?php
                    }
                    else if ($_SESSION["type"] == "etudiant"){
                        ?>

                        <li><a href="#"><?php echo $_SESSION["nom"].' '.$_SESSION["prenom"] ?></a></li>
                        <li><a href="modals/deco_modal.php">Deconnexion</a></li>
                        <?php
                    }
                }

                ?>
                <?php


                if(!isset($_SESSION["login"]))
                {
                ?>
                    <li><a href="" data-toggle="modal" data-target="#connexion" id="navConnexion">Connexion</a></li>
                    <li><a href="" data-toggle="modal" data-target="#inscription" id="navInscription">Inscription</a></li>
                <?php
                }
                else
                {
                ?>
                <li><a><span class="alert-info">Bienvenue <?php echo $_SESSION["login"]; ?></span></a></li>
                <li><a href="modals/deco_modal.php">Deconnexion</a></li>
                <?php
                }
                ?>



            </ul>
        </div>
    </div>
</nav>


