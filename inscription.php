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



  
    <div class="container s1"> 
       <br>
         <div class="row text-center bg-danger offset-2 col-md-8 text-white">
            <h3> Formulaire d'inscription</h3>
         </div>
         <br>
      <form class=" offset-3 col-md-6 form text-white" method="post" action="enregistrement.php">
        <br>
        <div class="row  offset-2 col-md-8">
          <label for="nom">Nom</label>
          <input type="text" id="nom" name="nom" required>
        </div> 
        <div class="row offset-2 col-md-8">
          <label for="prenom">Prenom(s)</label>
          <input type="text" id="prenom" name="prenom" required>
        </div> 
        <div class="row offset-2 col-md-8">
          <label for="annee_scolaire">Année scolaire</label>
          <input type="text" id="annee_scolaire" name="annee_scolaire" required>
        </div> 
        <div class="row offset-2 col-md-8">
          <label for="classe">Classe</label>
          <input type="text" id="classe" name="classe" required>
        </div>
        <div class="row offset-2 col-md-8">
          <label for="trimestre">Trimestre</label>
          <input type="text" id="trimestre" name="trimestre" required>
        </div>
        <div class="row offset-2 col-md-8">
          <label for=" moyenne"> Moyenne</label>
          <input type="text" id=" moyenne" name=" moyenne" required>
        </div>
        <div class="row offset-2 col-md-8">
          <label for="parent">Parent</label>
          <input type="text" id="parente" name="parent" required>
        </div>
        <div class="row offset-4 col-md-4 btn b">
            <input type="submit" value="Enregistrer">
        </div>
       </form>  
       
       <div class="row center offset-9 col-md-3">
            <a href="liste.php"><button type="button" class="btn btn-outline-light">Afficher la liste</button></a>
       </div>
          <br>
    </div> 
    
    <?php
require "footer.php";
?>
</body>
</html>