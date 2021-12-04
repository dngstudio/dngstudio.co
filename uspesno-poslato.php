<?php


$to="office@dngstudio.co";
$subject="DNG UPIT";
$body= "Results: " . print_r( $_POST, true );
//$message =

mail($to, $subject, $body);

echo "<pre>";
//print_r($_POST['ime']);
  print_r($_POST);
echo  "</pre>";

?>

<?php 

sleep(0.25);

header('Location: https://www.dngstudio.co');

?>