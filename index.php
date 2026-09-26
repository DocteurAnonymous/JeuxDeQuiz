<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeux de quiz</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center">
                <div class=""></div>
                <h1 class="">Jeux de quiz</h1>
                <a href="admin/login.php" class="btn  btn-outline-primary">Espace d'administration</a>
            </div>
            <hr>
            <h3 class="text-center">Entrez vos informations pour commencer le jeu</h3>
        </div>
        <div class="row d-flex justify-content-center">             
            <div class="card shadow mt-3 border p-3 col-6">
                <form action="">
                    <div class="form-group mb-3">
                        <label for="">Entrez votre nom </label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Entrez votre prénom </label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Entrez votre pseudo </label>
                        <input class="form-control" type="text" name="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Choississez votre catégorie de quiz</label>
                        <select class="form-control" name="" id="">
                            <option value="">Culture générale</option>
                            <option value="">Histoire</option>
                            <option value="">Crise des années 80</option>
                        </select>
                    </div>
                    <div class="form-group mb-3 text-end">
                        <button class="btn btn-outline-primary w-50" >Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>