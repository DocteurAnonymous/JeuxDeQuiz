<!-- Appel du fichier head.php  -->
<?php 
    require_once __DIR__  . "/head.php";
?>
<!-- Appel du fichier head.php  -->

<!-- Appel du fichier navbar.php  -->
<?php 
    require_once __DIR__  . "/navbar.php";
?>
<!-- Appel du fichier navbar.php  -->


<!-- Debut de la partie main -->
<div class="container-fluid">

    <!-- Debut card analyse -->
    <div class="row mt-4">
        <div class="col-3">
            <div class="card p-2 shadow d-flex flex-row align-items-center">
                <i class="bi bi-people-fill fs-1"></i>
                <div class="ms-3 text-center">
                    <h4>Nombre de Joueurs</h4>
                    <h4>50</h4>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card p-2 shadow d-flex flex-row align-items-center">
                <i class="bi bi-question-circle-fill fs-1"></i>
                <div class="ms-3 text-center">
                    <h4>Nombre de questions</h4>
                    <h4>50</h4>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card p-2 shadow d-flex flex-row align-items-center">
                <i class="bi bi-bookmarks-fill fs-1"></i>
                <div class="ms-3 text-center">
                    <h4>Nombre de Catégories</h4>
                    <h4>50</h4>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card p-2 shadow d-flex flex-row align-items-center">
                <i class="bi bi-trophy-fill fs-1"></i>
                <div class="ms-3 text-center">
                    <h4>Meilleur score</h4>
                    <h4>10/10</h4>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Debut card analyse -->

    <!-- Debut liste dashboard -->
    <div class="row mt-4">
        <div class="col-6">
            <div class="card shadow p-2">
                <h2 class="text-center">Liste des Nouveaux Joueurs</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-primary" >
                            <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Pseudo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@social</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@social</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@social</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card shadow p-2">
                <h2 class="text-center">Liste des Nouveaux Joueurs</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-primary" >
                            <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Pseudo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@social</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@social</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>John</td>
                            <td>Doe</td>
                            <td>@social</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
