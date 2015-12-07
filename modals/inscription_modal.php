
<div class="modal fade" id="inscription" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Inscription</h4>
            </div>
            <div class="modal-body">
                <p>
                <form id="singinform" class="form-horizontal" role="form" method="POST" action="modals/inscription_validation.php">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-nom" type="text" class="form-control" name="nom" value="" placeholder="Nom"/>
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-prenom" type="text" class="form-control" name="prenom" value="" placeholder="Prenom"/>
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-login" type="text" class="form-control" name="login" value="" placeholder="Login"/>
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="login-email" type="email" class="form-control" name="email" value="" placeholder="Email"/>
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Mot de passe"/>
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-rp_password" type="password" class="form-control" name="rp_password" placeholder="Confirmer mot de passe"/>
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                        <input id="login-groupe" type="text" class="form-control" name="groupe" placeholder="Groupe"/>
                    </div>
                    <div class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <input type="submit" id="btn-signin" href="#" class="btn btn-success" value="S'inscrire"/>
                        </div>
                        <br>
                    </div>
                </form>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>

    </div>
</div>