<?php
session_start();
?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Accueil</a>

            



        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right" id="right-nav">
                <?php
                if($_SESSION["nom"] && $_SESSION["prenom"]) {

                    if($_SESSION["type"] == "enseignant"){
                        ?>
                        <li><a href="attribuer_etu.php">Assigner étudiant</a></li>
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
                } else {
                    ?>
                    <li><a href="" data-toggle="modal" data-target="#connexion" id="navConnexion">Connexion</a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>


