<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moyenne des élèves</title>
  <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
<div class="container EN">
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="row center offset-5 col-md-2 mt-2">
            <a href="liste.php"><button type="button" class="btn btn-outline-light">Afficher la liste</button></a>
       </div>
 <div class="row">
            <div class=" text-center fs-2 bg-danger text-white mt-3">
                Bravo! Inscription éffectuée avec succès!
                <img src="../projet_application_ufr/image/validé.png" alt="" width="7%">
                <a href="index.php"><button type="button" class="btn btn-light offset-1 col-md-2"><img src="../projet_application_ufr/image/icone 2.png" alt="" width="20%"> Go Back</button></a>
            </div>
		</div>
 </div>
 
 <?php
    session_start();
    require 'connexion.php'; 
      if(isset($_POST)){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $annee_scolaire=$_POST['annee_scolaire'];
        $classe=$_POST['classe'];
        $trimestre=$_POST['trimestre'];
        $moyenne=$_POST['moyenne'];
        $parent=$_POST['parent'];
        $query="INSERT INTO eleve (nom, prenom, annee_scolaire, classe, trimestre, moyenne, parent)
        VALUES (:nom, :prenom, :annee_scolaire, :classe, :trimestre, :moyenne, :parent)";
        $query_run=$conn->prepare($query);
        $query_run->bindParam(':nom',$nom);
        $query_run->bindParam(':prenom',$prenom);
        $query_run->bindParam(':annee_scolaire',$annee_scolaire);
        $query_run->bindParam(':classe',$classe);
        $query_run->bindParam(':trimestre',$trimestre); 
        $query_run->bindParam(':moyenne',$moyenne);
        $query_run->bindParam(':parent',$parent);
      try {
        $query_run->execute();
        $msg_success=" Vos données ont été bien enregistrées!";
          } catch (PDOException $e) {
                   $msg="Erreur d'enregistrement" . $e->getMessage();
                   }
}

?>

<?php
require "footer.php";
?>

	<!-- Chargement des fichiers JavaScript de Bootstrap -->
	<script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>