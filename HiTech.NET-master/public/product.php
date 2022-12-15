<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HiTech.NET</title>
    <!-- css Bootstrap only -->
    <link rel="stylesheet"
        href="../instructions/ressources/bootstrap-4.5.0/bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.css">
    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>


<body>
    <div class="wrapper">
        <header">
            <?php
                require 'header-admin.php'; 
            ?>
        </header>

        <main>
            <div class="row">
                <div class="col-2 p-4 bg-light" role="navigation">
                    <div class="nav flex-column nav-pills" id="navbarSupportedContent" role="tablist"
                        aria-orientation="vertical">
                        <!---------------------------------------------------------- Menu ------------------------------------------------------------------->
                        <!-- Accueil -->
                        <h2 class="mt-3 ml-2"><i class="mr-2 bi bi-house-door-fill"></i>Accueil</h2>
                        <a class="nav-link" id="v-pills-dashbord-tab" data-toggle="pill" href="#v-pills-dashbord"
                            role="tab" aria-controls="v-pills-dashbord" aria-selected="false">Tableau de bord</a>

                        <!-- Site web -->
                        <div class="dropdown-divider"></div>
                        <h2 class="mt-3 ml-2"><i class="mr-2 bi bi-globe-europe-africa"></i>Site web</h2>
                        <a class="nav-link" id="v-pills-heading-tab" data-toggle="pill" href="#v-pills-heading"
                            role="tab" aria-controls="v-pills-heading" aria-selected="false">Gestion des
                            rubriques</a>
                        <a class="nav-link" id="v-pills-news-tab" data-toggle="pill" href="#v-pills-news" role="tab"
                            aria-controls="v-pills-news" aria-selected="false">Gestion des actualités</a>

                        <!-- Boutique -->
                        <div class="dropdown-divider"></div>
                        <h2 class="mt-3 ml-2"><i class="mr-2 bi bi-basket3-fill"></i>Boutique</h2>
                        <a class="nav-link" id="v-pills-department-tab" data-toggle="pill" href="#v-pills-department"
                            role="tab" aria-controls="v-pills-department" aria-selected="false">Gestion des
                            rayons</a>
                        <a class="nav-link active" id="v-pills-products-tab" data-toggle="pill" href="#v-pills-products"
                            role="tab" aria-controls="v-pills-products" aria-selected="true">Gestion des
                            produits</a>
                        <a class="nav-link" id="v-pills-order-tab" data-toggle="pill" href="#v-pills-order" role="tab"
                            aria-controls="v-pills-order" aria-selected="false">Gestion des commandes</a>

                        <!-- Paramètre -->
                        <div class="dropdown-divider"></div>
                        <h2 class="mt-3 ml-2"><i class="mr-2 bi bi-gear-wide-connected"></i>Paramètre</h2>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-users"
                            role="tab" aria-controls="v-pills-users" aria-selected="false">Gestion des
                            utilisateurs</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-rules"
                            role="tab" aria-controls="v-pills-rules" aria-selected="false">Gestion des rôles</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-preferance"
                            role="tab" aria-controls="v-pills-preferance" aria-selected="false">Gestion des
                            préférences</a>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">

                        <!-- Fichier product.html -->
                        <div class="tab-pane fade show active" id="v-pills-products" role="tabpanel"
                            aria-labelledby="v-pills-products-tab">

                            <div class="d-flex justify-content-between p-5 ">
                                <form class="form-inline">
                                    <div class="form-group mx-sm-3 mb-2">
                                        <input type="text" class="form-control" placeholder="...">
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary mb-2">Rechercher</button>
                                </form>

                                <a class="btn btn-primary text-light" href="product-empty.php"><span class="font-weight-bold">+</span>
                                    Ajouter un produit</a>
                            </div>

                            <!-- Tableau de gestion de produits -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped m-auto">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Statut</th>
                                            <th scope="col">Boutique</th>
                                            <th scope="col">Rayon</th>
                                            <th scope="col">produit</th>
                                            <th scope="col" class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-success">
                                                En boutique
                                            </th>
                                            <td>Périphériques & composants</td>
                                            <td>Ecrans d'ordinateur</td>
                                            <td>AOC 24B1XHS</td>
                                            <td class="text-right">

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-danger mb-2"
                                                    data-toggle="modal" data-target="#staticBackdrop">
                                                    <i class="bi bi-archive-fill mr-2"></i>
                                                    retirer
                                                </button>

                                                <!-- Modal -->
                                                <?php 
                                                    require 'modal-delete.php' ;
                                                ?>

                                                <a class="btn btn-outline-secondary mb-2" href="product-1.php"><i
                                                        class="bi bi-vector-pen mr-2"></i>Modifier</a>
                                                <button type="button" class="btn btn-outline-secondary mb-2" data-toggle="modal" data-target="#caracteristique"><i
                                                        class="bi bi-tags-fill mr-2"></i>Caractéristiques</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-success">
                                                En boutique
                                            </th>
                                            <td>Périphériques & composants</td>
                                            <td>Ecrans d'ordinateur</td>
                                            <td>AOC 24B1XHS</td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-outline-danger mb-2"
                                                    data-toggle="modal" data-target="#staticBackdrop">
                                                    <i class="bi bi-archive-fill i-success mr-2"></i>
                                                    retirer
                                                </button>

                                                <a class="btn btn-outline-secondary mb-2" href="product-1.php"><i
                                                        class="bi bi-vector-pen mr-2"></i>Modifier</a>
                                                <button type="button" class="btn btn-outline-secondary mb-2" 
                                                        data-toggle="modal" data-target="#caracteristique">
                                                        <i class="bi bi-tags-fill mr-2"></i>Caractéristiques</button>
                                                        <?php
                                                            require 'modal-carac.php' ;
                                                        ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-danger">
                                                Retiré
                                            </th>
                                            <td>Périphériques & composants</td>
                                            <td>Ecrans d'ordinateur</td>
                                            <td>AOC 24B1XHS</td>
                                            <td class="text-right">
                                            <button type="button" class="btn btn-outline-success mb-2" data-toggle="modal" data-target="#success"><i
                                                        class="bi bi-check-square-fill  mr-2"></i>Remettre</button>
                                                <a class="btn btn-outline-secondary mb-2" href="product-1.php"><i
                                                        class="bi bi-vector-pen mr-2"></i>Modifier</a>
                                                <button type="button" class="btn btn-outline-secondary mb-2" data-toggle="modal" data-target="#caracteristique"><i
                                                        class="bi bi-tags-fill mr-2"></i>Caractéristiques</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-gray">
                                                En attente
                                            </th>
                                            <td>Périphériques & composants</td>
                                            <td>Ecrans d'ordinateur</td>
                                            <td>AOC 24B1XHS</td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-outline-success mb-2" data-toggle="modal" data-target="#success"><i
                                                        class="bi bi-check-square-fill  mr-2"></i>Mettre en
                                                    boutique</button>

                                                    <?php
                                                            require 'modal-success.php' ;
                                                    ?>

                                                <a class="btn btn-outline-secondary mb-2" href="product-1.php"><i
                                                        class="bi bi-vector-pen mr-2"></i>Modifier</a>
                                                <button type="button" class="btn btn-outline-secondary mb-2" data-toggle="modal" data-target="#caracteristique"><i
                                                        class="bi bi-tags-fill mr-2"></i>Caractéristiques</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-order" role="tabpanel"
                            aria-labelledby="v-pills-order-tab">b</div>
                        <!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">c</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">d</div> -->
                    </div>

                    <!-- Pagination Bootstrap -->

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-5">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <!-- <span aria-hidden="true">&laquo;</span> -->
                                    <i class="bi bi-arrow-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <!-- <span aria-hidden="true">&raquo;</span> -->
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </main>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>

</html>