 <?php
require_once ('../sqlconnect.php');
$Session = new Session();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site web de Dutaf">
    <meta name="author" content="Etienne Fontaine">

    <title>Dutaf | Gestion des articles</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

            <body>

            <!-- Fixed navbar -->
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="../index.php">Dutaf</a>
                    </div>
                    <div class="navbar-collapse collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="../index.php">ACCUEIL</a></li>
                            <li><a href="../catalogue.php?order=article_description&debut=0&limit=50">CATALOGUE</a></li>
                            <li><a href="../form_budget.php">VOTRE BUDGET</a></li>
                            <li class="active"><a href="gestion.php">ADMIN</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>

            <!-- *****************************************************************************************************************
             BLUE WRAP
             ***************************************************************************************************************** -->
            <div id="blue">
                <div class="container">
                    <div class="row">
                        <h3>Gestion du magasin</h3>
                    </div><!-- /row -->
                </div> <!-- /container -->
            </div><!-- /blue -->
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="gestion.php">Gestion</a></li>
                    <li><a href="gest_four.php">Gestion des fournisseurs</a></li>
                </ol>
                <div class="row">
                    <?php
                    $req1=$bdd->prepare("SELECT COUNT(*) FROM `fournisseur` WHERE 1");
                    $req1->execute();
                    $resulte = $req1->fetchColumn();

                    ?>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1>Voici les fournisseurs - Total : <?php echo $resulte; ?> fournisseurs</h1><br/>
                        <?php $Session->flash();  ?>
                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                            <div class="btn-group" role="group">
                                <a href="form_new_four.php"><button type="button" class="btn btn-primary">Ajouter un fournisseur</button></a>
                            </div>
                        </div><br/>
                        <?php
                        $i = 0;
                        $req=$bdd->query("SELECT * FROM fournisseur");
                        $result=$req->fetchAll();?>
                        <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <th>Numéro</th>
                            <th>Nom</th>
                            <th>Ville</th>
                            <th>Téléphone</th>
                            <th>Nombres d'articles</th>
                            <th>Modifer</th>
                            <th>Supprimer</th>
                            </thead>
                            <tbody>
                            <?php foreach($result as $cle=>$valeur):


                                $req2=$bdd->prepare("SELECT COUNT(*) FROM `articles` WHERE _fournisseur_id = '".$valeur['fournisseur_id']."'");
                                $req2->execute();
                                $resultee = $req2->fetchColumn();
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo htmlentities($i); ?></td>
                                    <td><?php echo htmlentities($valeur['fournisseur_nom']); ?></td>
                                    <td><?php echo htmlentities($valeur['fournisseur_ville']); ?></td>
                                    <td><?php echo htmlentities($valeur['fournisseur_numero']); ?></td>
                                    <td><?php echo htmlentities($resultee); ?></td>
                                    <td><a href="form_modif_four.php?id=<?php echo $valeur['fournisseur_id']; ?>">Modifier <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                    <td><a href="valide_sup_four.php?id=<?php echo $valeur['fournisseur_id']; ?>">Supprimer <i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
</div>
                    </div>

                    <!-- Bootstrap core JavaScript
                    ================================================== -->
                    <!-- Placed at the end of the document so the pages load faster -->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                    <script src="./js/bootstrap.min.js"></script>
                    <script src="./js/retina-1.1.0.js"></script>
                    <script src="./js/jquery.hoverdir.js"></script>
                    <script src="./js/jquery.hoverex.min.js"></script>
                    <script src="./js/jquery.prettyPhoto.js"></script>
                    <script src="./js/jquery.isotope.min.js"></script>
                    <script src="./js/custom.js"></script>


            </body>
            </html>