<?php
session_start();

if (isset($_POST['submit'])) {

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Invalid Email";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mailTo = "info@digitallyelite.com";
    $headers = "From:" . $mailFrom;
    $txt = "You have received an e-mail from " . $name . ".\n\n" . $message . " The Contact number is " . $phone;

    if (mail($mailTo, 'Digitally Elite', $txt, $headers)) {

        $_SESSION['message'] = "Thanks for contacting, Your mesage have been sent successfully!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }

    //testing this should be removed in prod.
    // mail($mailTo, 'Digitally Elite', $txt, $headers);
    // $_SESSION['message'] = "Thanks for contacting, Your mesage have been sent successfully!";
    // header('Location: ' . $_SERVER['HTTP_REFERER']);

} else {
    $_SESSION['message'] = "Something went wrong try again latter!";
    header("Location: ../index.php");

}
