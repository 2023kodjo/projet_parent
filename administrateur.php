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

  <div class="container sa1">
    <br>
    <div class="row">
      <div class=" offset-2 col-md-8 text-center text-white bg-danger mt-5 ">
        <h1> Bienvenue chers administrateurs</h1>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="mt-4 offset-3 col-md-2 text-center text-white bg-danger btn">
        <button type="button" class="btn btn-danger">
          <h5>Enregistrer<br>un élève</h5>
        </button>
      </div>
      <div class="mt-4 offset-2 col-md-2 text-center text-white bg-danger btn">
      <a href="liste.php"><button type="button" class="btn btn-danger">
          <h5>Consulter<br>une liste</h5>
        </button></a>
      </div>
      <div class="row">
        <div class="mt-4 offset-2 col-md-2 text-center text-white bg-danger btn ">
          <button type="button" class="btn btn-danger">
            <h5>Enregistrer<br>un parent</h5>
          </button>
        </div>
        <div class="mt-4 offset-4 col-md-2 text-center text-white bg-danger btn ">
          <a href="index.php"><button type="button" class="btn btn-danger">
              <h5>Modification<br>moyenne</h5>
            </button></a>
        </div>
      </div>
      <div class="row">
        <div class="offset-4 col-md-4 text-center text-danger bg-white btn mt-5">
          <a href="index.php"><button type="button" class="btn btn-danger">
              <h5>Ajoutez un administrateur</h5>
            </button></a>
        </div>
      </div>



    </div>
  </div>




  <?php
require "footer.php";
?>

</body>

</html>