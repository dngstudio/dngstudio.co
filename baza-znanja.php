<?php 
$title = 'Baza znanja';
require './modules/header.php'; 

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "dngbaza";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Crko bre: " . $conn->connect_error);
} 


$sql = "SELECT blogID as id, autor , Naziv , datum, text FROM blog ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["autor"]. " " . $row["Naziv"]. "<br>";
    }
  } else {
    echo "Nema blogova";
  }
  $conn->close();

?>


<?php include './modules/footer.php' ?>
