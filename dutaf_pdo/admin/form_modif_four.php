<?php
require_once ('../sqlconnect.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dutaf | Modifier un fournisseur</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php require_once ('nav.php');
$id = $_GET['id'];
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>


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
            <h3>Mise à jour d'un fournisseur</h3>
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

        <h1>Modifier un fournisseur</h1>
        <?php
        $req=$bdd->prepare("SELECT * FROM fournisseur WHERE fournisseur_id = :id");
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        foreach($req as $cle=>$valeur): ?>
        <form action="valide_modif_four.php" method="post">
            <input name="id" value="<?php echo $valeur['fournisseur_id'];?>" hidden>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" class="form-control" value="<?php echo $valeur['fournisseur_nom'];?>"><br/>
            <label for="telephone">Téléphone :</label>
            <input type="tel" name="telephone" class="form-control" value="<?php echo $valeur['fournisseur_numero'];?>"><br/>
            <label for="ville">Ville :</label>
            <input type="text" name="ville" class="form-control" value="<?php echo $valeur['fournisseur_ville'];?>"><br/>

            <button class="btn btn-info btn-block">Valider</button>
            <?php endforeach; ?>
        </form>

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