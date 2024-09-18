<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["tel"])) {
    $errorMSG .= "tel is required ";
} else {
    $message = $_POST["tel"];
}

// MESSAGE
if (empty($_POST["campus"])) {
    $errorMSG .= "campus is required ";
} else {
    $message = $_POST["campus"];
}


$EmailTo = "josia710@gmail.com"; //change email
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "tel: ";
$Body .= $tel;
$Body .= "\n";
$Body .= "Campus: ";
$Body .= $campus;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>
