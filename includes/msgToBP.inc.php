<?php

   if (isset($_POST['msg_To_BP'])) {
    // Escape any html characters

     	$msgToBP = nl2br(htmlspecialchars($_POST['msg_To_BP'])) ;

			////WRITE TO TEXT FILE.
			file_put_contents("../BushhillPark/messages/msg-To-BP.txt", $msgToBP) or die("Unable to connect to db!");

	header("Location: ../index.php?msgToBP-Successful");

	}

?>
