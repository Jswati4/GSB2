<html>
<head>
<title>Annuaire : Affichage d'erreur</title>
 <meta NAME="Author" CONTENT="Jessica Alexis">
 <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
  <!-- appel feuille de style -->
 <link href="../CSS/style.css" type="text/css" rel="stylesheet" media="all">
 </head>
 <body>
 
 <?php
 $erreur=$_GET["erreur"];
echo "<p class='erreur'>$erreur</p>";
 ?>
 
 <!-- Lien pour retourner à la page initiale -->
 <a href="index.php">Retour accueil</a>
 
<body>
</html>