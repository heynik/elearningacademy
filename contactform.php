<?php

if (isset($_POST['submit'])) {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $emailid=$_POST['emailid'];
    $feedback=$_POST['feedback'];

    $mailto="lexibe1053@yosemail.com";
    $headers="From :".$emailid;
    $txt="You have received an e-mail from ".$firstname. $lastname.".\n\n".$feedback;
    mail($mailto, $txt, $headers);
    header("Location:feedback.php?mailsend");
}