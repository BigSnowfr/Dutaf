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

    <title>Dutaf | Votre budget</title>

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
                <li><a href="catalogue.php?order=article_description&debut=0&limit=50">CATALOGUE</a></li>
                <li class="active"><a href="form_budget.php">VOTRE BUDGET</a></li>
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
            <h3>Quel est votre budget ?</h3>
        </div><!-- /row -->
    </div> <!-- /container -->
</div><!-- /blue -->

<div class="container boxx">
    <h2>Vous pouvez rechercher des articles en fonction de votre budget maximum</h2>
    <form method="get" action="budget_art.php" class="form-inline">
        <div class="col-lg-8">
            <div class="input-group">
                <input type="number" min="1" name="prix" class="form-control" placeholder="Votre budget en euros..." required>
      <span class="input-group-btn">
          <input type="text" name="order" hidden value="article_description">
          <input type="number" name="debut" hidden value="0">
          <input type="number" name="limit" hidden value="50">
        <button class="btn btn-info" type="submit">Rechercher!</button>
      </span>
            </div>
        </div>
    </form>
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
