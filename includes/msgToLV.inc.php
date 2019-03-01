<?php

   if (isset($_POST['msg_To_LV'])) {
    // Escape any html characters

     	$msgToLV = nl2br(htmlspecialchars($_POST['msg_To_LV'])) ;

			////WRITE TO TEXT FILE.
			file_put_contents("../LeaValley/messages/msg-To-LV.txt", $msgToLV) or die("Unable to connect to db!");

	header("Location: ../index.php?msgToLV-Successful");

	}

?>
