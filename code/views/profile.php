<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ecoride profil</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />

    <link href="../css/profil.css" rel="stylesheet" />
</head>

<body id="page-top">




    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Bienvenu</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                    src="<?=$photo?>" alt="iconuser" /></span> <!--Insertion de la photo de la BDD -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#apropos">A Propos</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ecoride">Ecorides à venir</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#historique">Historique des trajets</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#voiture">Voiture(s)</a></li>
                
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- A propos-->
        <section class="resume-section" id="apropos">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    <?=$nom?>
                    <span class="text-primary"><?=$prenom?></span>
                </h1>
                <div class="subheading mb-5">
                <?=$adress?> 
                    <a href="mailto:name@email.com"><?=$email?></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Ecoride-->
        <section class="resume-section" id="ecoride">
            <div class="resume-section-content">
                <h2 class="mb-5">Ecorides à venir</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        
                    
                        <table>
                            
                            <thead style="background-color: rgb(228 240 245);">
                                <tr>
                                    
                                    <th scope="col">Date départ</th>
                                    <th scope="col">Heure départ</th>
                                    <th scope="col">Heure d'arrivée</th>
                                    <th scope="col">durée</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Nombre de place restante</th>

                                </tr>
                            </thead>
                            <tbody>

                            <?=$trajet_futur?>

                                    

                                
                            </tbody>
                        </table>
                        
                    </div>
                    
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Historique des trajets-->
        <section class="resume-section" id="historique">
            <div class="resume-section-content">
                <h2 class="mb-5">Historique des trajets</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    
                    
                <table>
                            <thead style="background-color: rgb(228 240 245);">
                                <tr>
                                    
                                    <th scope="col">Date départ</th>
                                    <th scope="col">Heure départ</th>
                                    <th scope="col">Heure d'arrivée</th>
                                    <th scope="col">durée</th>
                                    <th scope="col">Prix</th>

                                </tr>
                            </thead>
                            <tbody>

                            <?=$trajet_fait?>

                                    

                                
                            </tbody>
                        </table>

                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Voiture-->
        <section class="resume-section" id="voiture">
            <div class="resume-section-content">
                <h2 class="mb-5">Voiture</h2>
                <div class="subheading mb-3">Voitures</div>
                
                <table>
                            
                            <thead style="background-color: rgb(228 240 245);">
                                <tr>
                                    
                                    <th scope="col">Modele</th>
                                    <th scope="col">Immatriculation</th>
                                    <th scope="col">Marque</th>
                                    

                                </tr>
                            </thead>
                            <tbody>

                            <?= $voiture_user ?>
                            </tbody>
                            </table>

            </div>
        </section>
        
        
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>