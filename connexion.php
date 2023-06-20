
<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'application';
 
 //On essaie de se connecter
 
 $conn = new PDO("mysql:host=$servername;dbname=application", $username, $password);
 if ($conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)){
 }else{ echo "Erreur : " . $e->POSTMessage(); }
?>