<!-- Appel du fichier head.php et categorie(backend)   -->
<?php 
    require_once __DIR__  . "/head.php";
    // Appeler le fichier categoriebackend 
    require_once __DIR__ . "/backend/categorie.php";
    // Créer une variable qui vas prendre la liste de nos catégories
    $categories = ListeCategories();
    print_r($categories);
?>
<!-- Appel du fichier head.php  -->

<!-- Appel du fichier navbar.php  -->
<?php 
    require_once __DIR__  . "/navbar.php";
?>
<!-- Appel du fichier navbar.php  -->


<!-- Debut de la partie main -->
<div class="container-fluid">

    <!-- Debut liste dashboard -->
    <div class="row mt-4">
        <div class="col-6">
            <div class="card shadow p-2">
                <h2 class="text-center">Liste des Catégories</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-primary" >
                            <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Description</th>
                            <th scope="col">Admin</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($categories as $key => $categorie): ?>
                            <tr>
                                <th scope="row"><?= $key+1 ?></th>
                                <td><?= $categorie["nom"] ?></td>
                                <td><?= $categorie["description"] ?></td>
                                <td><?= $categorie["nom"] ?></td>
                                <td></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card shadow p-2">
                <h2 class="text-center">Ajouter / Modifier une catégorie</h2>
                <form action="">
                    <div class="form-group mb-3">
                        <label for="nom" class="mb-1" >Nom de la catégorie</label>
                        <input type="text" class="form-control" name="nom" >
                    </div>
                    <div class="form-floating mb-3">
                        <textarea rows="3" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Description de la catégorie</label>
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selectionnez un admin</option>
                            <option value="1">Ismael Sano</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-primary w-100" name="btnAjouter" type="submit">Ajouter</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary w-100" name="btnModifier" type="submit">Modifier</button>
                        </div>
                        <div class="col-12 mt-3 mb-3">
                            <button class="btn btn-outline-primary w-100" name="btnAnnuler" type="reset">Annuler</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin liste dashboard -->

</div>
<!-- Fin de la partie main -->

<!-- Appel du fichier footer.php  -->
<?php 
    require_once __DIR__  . "/footer.php";
?>
<!-- Appel du fichier footer.php  -->

