<?php
if(isset($_POST['submit'])){
    $to = "giobero999@gmail.com"; // this is your Email address
    $from = $_POST['email']. PHP_EOL; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mail = $_POST['mail'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Thanks!" . "\n\n" . "We appreciate your interest in Pixelart. We will use your Email wisely and will notify you about our really cool upcoming features very soon." ."\n\n". " You can look at our facebook page https://www.facebook.com/pixelart.ge/?fref=ts.". "\n\n" . "Have a great day!" . "\n\n" . "PixelArt Team" ;

    $file = fopen("emailList.txt","a+");
    fwrite($file,$from);
    print_r(error_get_last());


    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
