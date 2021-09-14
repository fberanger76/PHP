<?php include("../includes/header.php"); ?>
<?php include("../includes/nav.php"); ?>
        <h1>Login</h1>
        <p class="text-center">Remplissez les champs pour vous connecter</p>
        <div class="row d-flex justify-content-evenly">
            <div class="col-lg-5 col-sm-12 module_border">
                <form action="" method="post">
                    <div class="form-group pb-3">
                        <label>Nom d'utilisateur</label>
                        <input type="text" name="username"
                            class="form-control"
                            value="">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group pb-3">
                        <label>Mot de passe</label>
                        <input type="password" name="password"
                            class="form-control">
                        <span class="invalid-feedback"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
<?php include("../includes/footer.php"); ?>