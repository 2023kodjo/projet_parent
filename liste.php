
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

<div class="container">
    <div class="row">
        <div class=" pt-2 offset-2 col-md-8 text-center text-white bg-danger mt-5 ">
            <h2><img src="image/Black Blue Yellow Simple Oniversity Graduate School On Logo Templates.png" alt="" width="50px" height="50px"> Listes des élèves <img src="image/black orange minimalist student star logo.png" alt="" width="50px" height="50px"></h2>
          </div>
    </div>
    <br>
    <table class="table table-striped">
				<tr>
				    <th>N°</th>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Annee_scolaire</th>
                    <th>Classe</th>
                    <th>Trimestre</th>
                    <th>Moyenne</th>
                    <th>Parent</th>
            
					<th></th><th class="col bg-primary text-white text-center">Action</th><th></th>
                    
				</tr>


<?php
                require 'connexion.php'; 
                $requete = "SELECT id, nom, prenom, annee_scolaire, classe, trimestre, moyenne, parent FROM eleve";
                $result = $conn->query($requete);
                if($result->rowcount()>0){
                    $num= 1;
                    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        $etudiantId = $row["id"];
                        echo "<tr>";
                        echo "<td>" . $num. "</td>";
                        echo "<td>" . $row["nom"] . "</td>";
                        echo "<td>" . $row["prenom"] . "</td>";
                        echo "<td>" . $row["annee_scolaire"] . "</td>";
                        echo "<td>" . $row["classe"] . "</td>"; 
                        echo "<td>" . $row["trimestre"] . "</td>";
                        echo "<td>" . $row["moyenne"] . "</td>";
                        echo "<td>" . $row["parent"] . "</td>";
                        echo "<td><a href='detail.php?id=" . $etudiantId . "' class='btn btn-dark'>
                        Detail
                        </a></td>";
                        echo "<td><a href='modifier.php?id=" . $etudiantId . "' class='btn btn-success'> 
                        Modifier
                        </a></td>";
                        echo "<td><a href='delete.php?id=" . $etudiantId . "' class='btn btn-danger' onclick='return confirm(\"vouler-vous supprimer?\")'>
                        Supprimer
                        </a></td>";
                        $num++;
                        echo "</tr>";
                    }
                } else{
                    echo "aucun donnée trouvée";
                }
                $conn=NULL;              
?>


</table>
</div>
<?php
require 'footer.php'; 
?>
</body>
</html>