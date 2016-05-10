<?php
    require_once ('sqlconnect.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site web de Dutaf">
    <meta name="author" content="Etienne Fontaine">

    <title>Dutaf | Notre Catalogue</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">


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
            <a class="navbar-brand" href="index.php">Dutaf</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="index.php">ACCUEIL</a></li>
                <li class="active"><a href="catalogue.php?order=article_description&debut=0&limit=50">CATALOGUE</a></li>
                <li><a href="form_budget.php">VOTRE BUDGET</a></li>
                <li><a href="admin/gestion.php">ADMIN</a></li>
                <li id="seaa">
                    <div class="input-group">
                        <form action="recherche.php" method="post">
                            <input type="text" class="form-control" name="recherche" placeholder="Rechercher" style="width: 65% !important;">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </span>
                        </form>
                    </div>
                </li>
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
            <h3>Catalogue</h3>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /blue -->

<div class="container-fluid">
    <div class="row"><?php
        $req1=$bdd->prepare("SELECT COUNT(*) FROM `articles` WHERE 1");
        $req1->execute();
        $resulte = $req1->fetchColumn();

        ?>
        <div class="col-md-6 col-md-offset-3">

            <?php
            $debut = $_GET['debut'];
            $limit = $_GET['limit'];
            $order = $_GET['order'];
            $req=$bdd->query("SELECT * FROM articles INNER JOIN fournisseur ON fournisseur.fournisseur_id = articles._fournisseur_id ORDER BY ".$order." LIMIT ".$limit." OFFSET ".$debut."");
            $result=$req->fetchAll();


            $actuel = $debut;
            $precedent = $actuel - $limit;
            $suivant = $actuel + $limit;
            if($actuel < $limit){
                $precedent = $actuel;
            }
            if($suivant >= $resulte){
                $suivant = $actuel;
            }
            ?>
            <h1>Voici notre catalogue</h1>
            <h2>Total : <?php echo $resulte; ?> articles - <?php echo $limit; ?> articles par page</h2>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Nombre d'articles à afficher <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="catalogue.php?order=<?php echo $order; ?>&debut=0&limit=10">10</a></li>
                    <li><a href="catalogue.php?order=<?php echo $order; ?>&debut=0&limit=30">30</a></li>
                    <li><a href="catalogue.php?order=<?php echo $order; ?>&debut=0&limit=50">50</a></li>
                    <li><a href="catalogue.php?order=<?php echo $order; ?>&debut=0&limit=<?php echo $resulte; ?>">Tous</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Trier par <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="catalogue.php?order=article_designation&debut=0&limit=<?php echo $limit; ?>">Designation</a></li>
                    <li><a href="catalogue.php?order=article_description&debut=0&limit=<?php echo $limit; ?>">Description</a></li>
                    <li><a href="catalogue.php?order=article_prix_vente&debut=0&limit=<?php echo $limit; ?>">Prix Croissant</a></li>
                    <li><a href="catalogue.php?order=article_quantite&debut=0&limit=<?php echo $limit; ?>">Quantité</a></li>
                    <li><a href="catalogue.php?order=_fournisseur_id&debut=0&limit=<?php echo $limit; ?>">Fournisseur</a></li>
                </ul>
            </div>

            <nav>
                <ul class="pager">
                    <?php
                    if($debut == 0):  ?>
                        <li class="previous disabled"><a href="catalogue.php?order=<?php echo $order; ?>&debut=<?php echo $precedent; ?>&limit=<?php echo $limit; ?>"><span aria-hidden="true">&larr;</span> Précédent</a></li>
                    <?php else: ?>
                        <li class="previous"><a href="catalogue.php?order=<?php echo $order; ?>&debut=<?php echo $precedent; ?>&limit=<?php echo $limit; ?>"><span aria-hidden="true">&larr;</span> Précédent</a></li>
                    <?php endif; ?>
                    <?php if($resulte - $debut <= $limit): ?>
                        <li class="next disabled"><a href="catalogue.php?order=<?php echo $order; ?>&debut=<?php echo $suivant; ?>&limit=<?php echo $limit; ?>">Suivant <span aria-hidden="true">&rarr;</span></a></li>
                    <?php else: ?>
                        <li class="next"><a href="catalogue.php?order=<?php echo $order; ?>&debut=<?php echo $suivant; ?>&limit=<?php echo $limit; ?>">Suivant <span aria-hidden="true">&rarr;</span></a></li>
                    <?php endif; ?>
                </ul>
            </nav>
            <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <th>Désignation</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Fournisseur</th>
                </thead>
                <tbody>
                <?php foreach($result as $cle=>$valeur): ?>
                    <tr>
                        <td><?php echo htmlentities($valeur['article_designation']); ?></td>
                        <td><?php echo htmlentities($valeur['article_description']); ?></td>
                        <td><?php echo htmlentities($valeur['article_prix_vente'].' €'); ?></td>
                        <td><?php echo htmlentities($valeur['article_quantite']); ?></td>
                        <td><?php echo htmlentities($valeur['fournisseur_nom']); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>


    <?php include_once ('footer.php'); ?>

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
