<?php
if(isset($_POST['contact-submit'])){
    $email = $_POST['email'];
    $topic = $_POST['topic'];
    $message = $_POST['message'];

    $mailto = "";
    $headers = "From: ".$email;
    $txt = "New message.\n\n".$message;

    mail($mailto, $topic, $txt, $headers);
    header("location: ./index.html?mailsend");
    exit();
}
header("location: ./index.html?error");