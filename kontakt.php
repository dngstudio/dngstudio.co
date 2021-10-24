<?php 
$title = 'Kontakt';
require './modules/header.php'; ?>


<?php 
if(isset($_POST['submit'])){
    $to = "office@dngstudio.co"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = $_POST['naslov'];
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


<div class="container header">
    <br>
    <div class="row align-items-center">
        
        
                
        <form action="" method="POST">
        <h5>Ime: </h5> <input type="text" name="first_name"><br>
        <h5>Prezime:</h5> <input type="text" name="last_name"><br>
        <h5>Email:</h5> <input type="text" name="email"><br>
        <h5>Naslov: </h5> <input type="text" name="naslov"><br>
        <h5>Poruka:</h5><textarea rows="5" name="message" cols="30"></textarea><br>
        
        <button type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit">Pošalji</button>
        </form>

</div>
</div>

<?php include './modules/footer.php' ?>
