<?php 

//variable setting
$firstName = $_REQUEST['firstname'];
$lastName = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];


//check input fields

if (empty($firstName) || empty($lastName) || empty($email) empty($message)) {
    echo "Please fill all the fields";
}

else {
    mail("shitijhp@gmail.com" , "CV data", $message, "From: $firstName <$email>");
    echo "<script type = 'text/javascript'>alert('Your message sent successfully')
        window.history.log(-1);
    </script>";
}



?>