<?php

if($_POST){
    header('location:dashboard.php');
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeux de quiz</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>
<body class="login-page">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-5 card p-3">
                <form action="" method="POST" >
                    <h4 class="text-center">Informations de connexion</h4>
                    <div class="form-group mb-3">
                        <label class="form-label" for="">Email</label>
                        <input name="email" type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="">Mot de passe</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary btn-lg w-50">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>