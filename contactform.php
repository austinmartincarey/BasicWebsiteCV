<?php

if (isset($_POST['submit'])){

 $name = $_POST['name'];
 $mailFrom = $_POST['email'];
 $message = $_POST['message'];

 $mailTo = "austin.mcarey@yahoo.com";
 $headers = "From:".$mailFrom;
 $txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $txt, $headers);
header("Location: index.php?mailsend");
}

?>


