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

        <header>
            <?php
                require 'header-admin.php'; 
            ?>
        </header>

        <main>
            <div class="row">
                <div class="col-2 p-4 bg-light">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <!---------------------------------------------------------- Menu ------------------------------------------------------------------->
                        <!-- Accueil -->
                        <h2 class="mt-3 ml-2"><i class="mr-2 bi bi-house-door-fill"></i>Accueil</h2>
                        <a class="nav-link" id="v-pills-dashbord-tab" data-toggle="pill" href="#v-pills-dashbord" role="tab"
                            aria-controls="v-pills-dashbord" aria-selected="false">Tableau de bord</a>
                        <!-- Site web -->
                        <div class="dropdown-divider"></div>
                        <h2 class="mt-3 ml-2"><i class="mr-2 bi bi-globe-europe-africa"></i>Site web</h2>
                        <a class="nav-link" id="v-pills-heading-tab" data-toggle="pill" href="#v-pills-heading" role="tab"
                            aria-controls="v-pills-heading" aria-selected="false">Gestion des
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
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-users" role="tab"
                            aria-controls="v-pills-users" aria-selected="false">Gestion des
                            utilisateurs</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-rules" role="tab"
                            aria-controls="v-pills-rules" aria-selected="false">Gestion des rôles</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-preferance"
                            role="tab" aria-controls="v-pills-preferance" aria-selected="false">Gestion des
                            préférences</a>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- Fichier product-1.html -->
                        <div class="tab-pane fade show active" id="v-pills-products" role="tabpanel"
                            aria-labelledby="v-pills-products-tab">
                            <div class="d-flex justify-content-between p-5 ">
                                <!-- Bouton Annuler les modifications -->
                                <a class="btn btn-outline-secondary font-weight-bold" href="product.php">
                                    <i class="bi bi-x"></i>
                                    Annuler les modifications
                                </a>
                                <!-- Bouton Valider et enregistrer la fiche-->
                                <button type="button" class="btn btn-primary font-weight-bold">
                                    <i class="bi bi-check-lg font-weight-bold"></i>
                                    Valider et enregistrer la fiche
                                </button>
                            </div>
                            <div>
                                <form>
                                    <!--------------------------------------------------
                                                         Gestion
                                      -------------------------------------------------->
                                    <fieldset class="form-group bg-light p-4">
                                        <legend class="col-form-label font-weight-bold">
                                            <h3>Gestion</h3>
                                        </legend>
                                        <!-- Statut -->
                                        <fieldset class="form-group">
                                            <div class="row mb-3">
                                                <legend class="col-form-label col-sm-2 pt-0 font-weight-bold">Statut
                                                </legend>
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios1" value="option1">
                                                        <label class="form-check-label font-weight-bold text-secondary"
                                                            for="gridRadios1">
                                                            En attente de mise en ligne
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios2" value="option2" checked>
                                                        <label class="form-check-label font-weight-bold text-success"
                                                            for="gridRadios2">
                                                            En boutique
                                                        </label>
                                                    </div>
                                                    <div class="form-check disabled">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gridRadios3" value="option3" disabled>
                                                        <label class="form-check-label font-weight-bold text-danger"
                                                            for="gridRadios3">
                                                            Retiré
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Boutique -->
                                            <div class="form-group row mb-3">
                                                <label for="boutique"
                                                    class="col-sm-2 col-form-label font-weight-bold">Boutique</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="boutique">
                                                        <option>Choisir une boutique ...</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- rayon -->
                                            <div class="form-group row">
                                                <label for="rayon"
                                                    class="col-sm-2 col-form-label font-weight-bold">Rayon</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="rayon">
                                                        <option>Choisir un rayon ...</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                              <input type="password" class="form-control" id="inputPassword3">
                                            </div>
                                          </div> -->
                                        </fieldset>
                                    </fieldset>
                                    <!--------------------------------------------------
                                                         Présentatiion
                                      -------------------------------------------------->
                                    <fieldset class="form-group bg-light p-4">
                                        <legend class="col-form-label font-weight-bold">
                                            <h3>Présentation</h3>
                                        </legend>
                                        <!-- Marque -->
                                        <div class="form-group row mb-3">
                                            <label for="marque"
                                                class="col-sm-2 col-form-label font-weight-bold">Marque</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="marque" value="#">
                                            </div>
                                        </div>
                                        <!-- Référence du produit -->
                                        <div class="form-group row mb-3">
                                            <label for="reference"
                                                class="col-sm-2 col-form-label font-weight-bold">Référence du
                                                produit</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="reference" value="#">
                                            </div>
                                        </div>
                                        <!-- Etiquettes -->
                                        <div class="form-group row mb-3">
                                            <label for="etiquette"
                                                class="col-sm-2 col-form-label font-weight-bold">Etiquettes</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="etiquette" value="#">
                                            </div>
                                        </div>
                                        <!-- Prix -->
                                        <div class="form-group row mb-3">
                                            <label for="prix" class="col-sm-2 col-form-label font-weight-bold">Prix</label>
                                            <div class="col-sm-10">
                                                <div class="input-group mb-2 mr-sm-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text font-weight-bold">Price</div>
                                                    </div>
                                                    <input type="text" class="form-control" id="prix" placeholder="#">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text font-weight-bold">£</div>
                                                        <div class="input-group-text font-weight-bold">éco-participation
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" id="prix" placeholder="#">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text font-weight-bold">£</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Description principale (MarkDown) -->
                                        <div class="form-group row mb-3">
                                            <label for="description"
                                                class="col-sm-2 col-form-label font-weight-bold">Description principale
                                                (MarkDown)</label>
                                            <div class="col-sm-10">
                                                <textarea name="#" class="form-control" id="description" cols="30"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!--------------------------------------------------
                                                         Photo
                                      -------------------------------------------------->
                                    <fieldset class="form-group bg-light p-4">
                                        <legend class="col-form-label font-weight-bold">
                                            <h3>Photo</h3>
                                        </legend>
                                        <!-- Photo 1 -->
                                        <div class="form-group row mb-3">
                                            <label for="customFile-1" class="col-sm-2 col-form-label font-weight-bold">Photo
                                                1</label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile-1">
                                                    <label class="custom-file-label font-weight-bold"
                                                        for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Photo 2 -->
                                        <div class="form-group row mb-3">
                                            <label for="customFile-2" class="col-sm-2 col-form-label font-weight-bold">Photo
                                                2</label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile-2">
                                                    <label class="custom-file-label font-weight-bold"
                                                        for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Photo 3 -->
                                        <div class="form-group row mb-3">
                                            <label for="customFile-3" class="col-sm-2 col-form-label font-weight-bold">Photo
                                                3</label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile-3">
                                                    <label class="custom-file-label font-weight-bold"
                                                        for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Photo 4 -->
                                        <div class="form-group row mb-3">
                                            <label for="customFile-4" class="col-sm-2 col-form-label font-weight-bold">Photo
                                                4</label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile-4">
                                                    <label class="custom-file-label font-weight-bold"
                                                        for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!--------------------------------------------------
                                                         Descriptif 1
                                      -------------------------------------------------->
                                    <fieldset class="form-group bg-light p-4">
                                        <legend class="col-form-label font-weight-bold display-1">
                                            <h3>Descriptif 1</h3>
                                        </legend>
                                        <!-- Titre -->
                                        <div class="form-group row mb-3">
                                            <label for="titre"
                                                class="col-sm-2 col-form-label font-weight-bold">Titre</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="titre"
                                                    value="Un moniteur Full HD performant et tout en finesse">
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <div class="form-group row mb-3">
                                            <label for="imgFile"
                                                class="col-sm-2 col-form-label font-weight-bold">Image</label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="imgFile">
                                                    <label class="custom-file-label font-weight-bold"
                                                        for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Texte -->
                                        <div class="form-group row mb-3">
                                            <label for="texte-1"
                                                class="col-sm-2 col-form-label font-weight-bold">Texte</label>
                                            <div class="col-sm-10">
                                                <textarea name="#" class="form-control" id="Texte-1" cols="30"
                                                    rows="10">...</textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!--------------------------------------------------
                                                         Descriptif 2
                                      -------------------------------------------------->
                                    <fieldset class="form-group bg-light p-4">
                                        <legend class="col-form-label font-weight-bold">
                                            <h3>Descriptif 2</h3>
                                        </legend>
                                        <!-- Titre -->
                                        <div class="form-group row mb-3">
                                            <label for="titre-2"
                                                class="col-sm-2 col-form-label font-weight-bold">Titre</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="titre-2"
                                                    value="Appréciez le design sans contour">
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <div class="form-group row mb-3">
                                            <label for="imgFile-2"
                                                class="col-sm-2 col-form-label font-weight-bold">Image</label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="imgFile-2">
                                                    <label class="custom-file-label font-weight-bold"
                                                        for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Texte -->
                                        <div class="form-group row mb-3">
                                            <label for="texte-2"
                                                class="col-sm-2 col-form-label font-weight-bold">Texte</label>
                                            <div class="col-sm-10">
                                                <textarea name="#" class="form-control" id="Texte-2" cols="30"
                                                    rows="10">...</textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <!--------------------------------------------------
                                                         Descriptif 3
                                      -------------------------------------------------->
                                    <fieldset class="form-group bg-light p-4">
                                        <legend class="col-form-label font-weight-bold">
                                            <h3>Descriptif 3</h3>
                                        </legend>
                                        <!-- Titre -->
                                        <div class="form-group row mb-3">
                                            <label for="titre-3"
                                                class="col-sm-2 col-form-label font-weight-bold">Titre</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="titre-3"
                                                    value="Tout le confort nécessaire">
                                            </div>
                                        </div>
                                        <!-- Image -->
                                        <div class="form-group row mb-3">
                                            <label for="imgFile-3"
                                                class="col-sm-2 col-form-label font-weight-bold">Image</label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="imgFile-3">
                                                    <label class="custom-file-label font-weight-bold"
                                                        for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Texte -->
                                        <div class="form-group row mb-3">
                                            <label for="texte-2"
                                                class="col-sm-2 col-form-label font-weight-bold">Texte</label>
                                            <div class="col-sm-10">
                                                <textarea name="#" class="form-control" id="Texte-2" cols="30" rows="10"
                                                    value="">...</textarea>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
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