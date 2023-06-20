<body>
<div class="container">
 <div class="row">
			<div class="col md-12">
		      <img src="../projet_parent/image/20200616-DRC-01-780x439.jpg" alt="" width="50%" >
			  <a href="index.php"><button type="button" class="btn btn-outline-danger  mt-3 offset-9 col-md-2"><img src="../projet_application_ufr/image/icone 2.png" alt="" width="20%"> Go Back</button></a>
			</div>
            <div class=" text-center fs-2 bg-danger text-white mt-3">
                Bravo! Inscription éffectuée avec succès!
                <img src="../projet_application_ufr/image/validé.png" alt="" width="10%">
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
        $query = "INSERT INTO eleve (nom, prenom, annee_scolaire, classe, trimestre, moyenne, parent)
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



	<!-- Chargement des fichiers JavaScript de Bootstrap -->
	<script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>