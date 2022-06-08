<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/flex1.css">
  <link rel="stylesheet" href="css/formulaire.css">
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="css/styleequipe.css">

</head>


<div class="conteneur-flexible ligne centre">
  <div class="element-flexible">1
<!-- Logo  -->
<div class='Logo_MySoftware'>
    <a href="index.php"><img src="images/logo.png" width="45%" height="45%"></a>
    </div>

  </div>
  <div class="element-flexible">2
  <div class="url_php">

<?php 
//URL PAGE

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
//isset — Détermine si une variable est déclarée et est différente de null
{
  $url = "https";
}
else
{
  $url = "http"; 
}  
$url .= "://"; 
$url .= $_SERVER['HTTP_HOST']; //serveur
$url .= $_SERVER['REQUEST_URI']; //chemin url
//echo $url; 

//$_SERVER est un tableau contenant des informations comme les en-têtes, dossiers et chemins du script. Les entrées de ce tableau sont créées par le serveur web
//HTTP_HOST : il est récupéré à partir de l’en-tête de requête HTTP obtenu à partir de la requête client
//$_SERVER['REQUEST_URI']aura le chemin complet de la page comme appelé
?>



<?php

switch ($url) {
  case "http://localhost:8686/TP/presse.php":
      echo "<br><h3>Bienvenue sur la page Presse </h3>";
      break;
  case "http://localhost:8686/TP/index.php":
      echo "<br><h3> Bienvenue sur la page d'accueil</h3>";
      break;
  case "http://localhost:8686/TP/equipe.php":
    echo "<br> <h3>Bienvenue sur la page  Equipe</h3>";
      break;
  case "http://localhost:8686/TP/produit.php":
     echo "<br><h3> Bienvenue sur la page Produit</h3>";
      break;
  case "http://localhost:8686/TP/nous_rejoindre.php":
      echo "<br><h3> Bienvenue sur la page Nous rejoindre</h3>";
      break;
  case "http://localhost:8686/TP/contact.php":
      echo "<br><h3> Bienvenue sur la page Contactez-nous</h3>";
      break;
}

?>


</div>

  </div>
  <div class="element-flexible">3
<!--------------------------------MENU TOP  ------------------------------------->

<section class="top-nav">
    <!-- Menu desktop    -->
    <div class='menu_invisible'>
    <ul id="menu_acc">
	<li><a href="index.php">ACCUEIL 1</a>
		<ul>
			<li><a href="#">lien sous menu 1</a></li>
			<li><a href="#">lien sous menu 1</a></li>
			<li><a href="#">lien sous menu 1</a></li>
			<li><a href="#">lien sous menu 1</a></li>
		</ul>
	</li>
	<li><a href="produit.php">PRODUIT</a>
		<ul>
			<li><a href="#">Lien sous menu 2</a></li>
			<li><a href="#">Lien sous menu 2</a></li>
			<li><a href="#">Lien sous menu 2</a></li>
			<li><a href="#">Lien sous menu 2</a></li>
		</ul>
	</li>
	<li><a href="nous_rejoindre.php">NOUS REJOINDRE</a>
		<ul>
			<li><a href="#">lien sous menu 3</a></li>
			<li><a href="#">lien sous menu 3</a></li>
			<li><a href="#">lien sous menu 3</a></li>
			<li><a href="#">lien sous menu 3</a></li>
		</ul>
	</li>
	<li><a href="presse.php">PRESSE</a>
		<ul>
			<li><a href="#">Lien sous menu 4</a></li>
			<li><a href="#">Lien sous menu 4</a></li>
			<li><a href="#">Lien sous menu 4</a></li>
			<li><a href="#">Lien sous menu 4</a></li>
		</ul>
	</li>
  <li><a href="equipe.php">EQUIPE</a>
		<ul>
			<li><a href="#">Lien sous menu 5</a></li>
			<li><a href="#">Lien sous menu 5</a></li>
			<li><a href="#">Lien sous menu 5</a></li>
			<li><a href="#">Lien sous menu 5</a></li>
		</ul>
	</li>
  <li><a href="contact.php">CONTACTEZ-NOUS</a>
		<ul>
			<li><a href="#">Lien sous menu 6</a></li>
			<li><a href="#">Lien sous menu 6</a></li>
			<li><a href="#">Lien sous menu 6</a></li>
			<li><a href="#">Lien sous menu 6</a></li>
		</ul>
	</li>
</ul>
</div>
<!-- Fin Menu dsktop    -->

  </section>

  <!--------------------------------------FIN MENU TOP    ------------------------------------------------>
 

  </div>
  
</div>











<br><br><br>

  
  <div class="bandeau_top"> 
<!--------------------------------------------------------------------->
<div class='menu_original_invisible'>


<!--      Bouton hamburger        -->
<div onclick="toggleMenu();" class="container_hamberger">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
<!--   fin Bouton hamburger        -->


<menu id="menuaccordeon">
    <ul>
   <li><a href="index.php">ACCUEIL</a>
      <ul>
         <li><a href="index.php">ACCUEIL DU SITE</a></li>
      </ul>
   </li>
    <li><a href="produit.php">PRODUIT</a>
      <ul>
         <li><a href="produit.php">VOIR NOTRE PRODUIT</a></li>
         <li><a href="#">VOIR UN AUTRE PRODUIT</a></li>
         <li><a href="#">VOIR TOUS LES PRODUITS</a></li>
      </ul>
   </li>
   <li><a href="nous_rejoindre.php">NOUS REJOINDRE</a>
      <ul>
         <li><a href="nous_rejoindre.php">REJOIGNEZ-NOUS</a></li>
      </ul>
   </li>
   <li><a href="presse.php">PRESSE</a>
      <ul>
         <li><a href="presse.php">VOIR L'ARTICLE</a></li>
         <li><a href="#">AUTRE ARTICLE</a></li>
         
      </ul>
   </li>
   <li><a href="equipe.php">EQUIPE</a>
      <ul>
         <li><a href="equipe.php">VOIR L'EQUIPE</a></li>
         
      </ul>
   </li>
   <li><a href="contact.php">CONTACTEZ-NOUS</a>
      <ul>
         <li><a href="contact.php">PAR MAIL</a></li>
         <li><a href="#">PAR TELEPHONE</a></li>
         <li><a href="#">PAR COURRIER</a></li>
      </ul>
   </li>
</ul>
   </menu>
</div>





<!-------------------------------------------------------------------->









  <div class="orloge_php">
<?php
// Si PHP vous affiche deux heures de moins pour la France, Ouvrez dans WAMP le fichier php.ini (click sur icône de WAMP > menu PHP > php.ini), ouvrez php.ini avec un éditeur quelconque et modifiez la ligne tel que suit (au besoin, décommentez la en enlevant le point virgule qui la précède) : date.timezone = "Europe/Brussels"
setlocale(LC_TIME, 'fr');
echo strftime('%A %d %B %Y, %H:%M');
?>
</div>





</div>

  
  <style>
    #menuaccordeon {
        display: none;
      }
      
      #menuaccordeon.active {
        display: block;
      }
</style>



  
<script> 

        function toggleMenu() {console.log("ok");
            document.getElementById("menuaccordeon").classList.toggle("active");
          } 
    </script> 