<!DOCTYPE html>

<html>
<head>
<title>TP sur Bootstrap</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
<script type="text/javascript">
$(document).ready(function(){
$('.header').height($(window).height());
});
</script>
</head>
<body>

<nav class="navbar navbar-expand-md">
<a class="navbar-brand" href="https://sites.google.com/site/tpe44lesillusionsoptiques/info-presse-classeur/le-triangle-de-penrose"><img class="logo" src="logo.png" height='75' width='90'/><br>	PENROSE</a>
<button class="navbar-toggler navbar-dark" type="button" datatoggle="collapse" data-target="#main-navigation" >
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="main-navigation">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link"
href="Categorie.php">Catégories</a></li>
<li class="nav-item"><a class="nav-link" href="Venteflash.php">Vente Flash</a></li>
<li class="nav-item"><a class="nav-link"
href="verif_vendeur.php">Vendre</a></li>
<li class="nav-item"><a class="nav-link"
href="verif_admi.php">Administrateur</a></li>
<li class="nav-item"><a class="nav-link"
href="verif_acheteur.php">Mon Compte</a></li>
<a class="navbar-brand" href="Panier.php"><img class="panier" src="panier.png" height='70' width='70' ></a>
<a class="navbar-brand" href="logout.php"><img class="deco" src="Deco.png" height='50' width='50'> </a>
</ul>
</div>
</nav>

<?php
session_start ();



if($_SESSION['connected'] == 2){
	?>
	
<body style="background: url('<?php echo $_SESSION['photoprofil'];?>');background-repeat: no-repeat; background-size:cover;"">
</body>
<?php
}
?>

<div class="container features">

<?php 

if($_SESSION['connected'] == 2){
	?>
	
<img style="margin-left: 0px; margin-bottom: 0px; height: 80px; width: 80px;" src="<?php echo $_SESSION['photofond'];?>">
<h1><?php echo $_SESSION['login'];?></h1>

<?php 
}
?>


<div>

<div class="row">

<div class="col-xs-2 col-sm-50">	
<h3 class="feature-title"> Supprimer Livre</h3>
<a href="Rlivre.php"> <img src="addlivre.jpg" height='250' width='400' ></a> <br><br><br>
</div>

<div class="col-xs-2 col-sm-50">
<h3 class="feature-title"> Supprimer Musique </h3>
<a href="Rmusique.php"> <img src="addmusique.jpg" height='250' width='400'> </a> <br><br><br>
</div>
</div>


<div class="row">

<div class="col-xs-6 col-sm-50">
<h3 class="feature-title"> Supprimer Vetements</h3>
<a href="Rvetement.php"><img src="addvet.png" height='250' width='400' > </a> <br><br><br>
</div>

<div class="col-xs-6 col-sm-50">
<h3 class="feature-title"> Supprimer Sports </h3>
<a href="Rsport.php"><img src="addsport.jpg" height='250' width='400'> </a>
</div>

</div>
</div>
</div>
</div>


<footer class="page-footer">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12">

</div>

<h4 class="contact">Contact<br> <br>
37, quai de Grenelle, 75015 Paris, France <br>
penrose@edu.ece.fr <br>
06 22 61 69 40 <br>
06 13 99 67 66
</h4>

</div>
</div>
<div class="copyright">&copy; 2019 Copyright | Droit
d'auteur: webDynamique.ece.fr </div>
</footer>
</body>
</html>