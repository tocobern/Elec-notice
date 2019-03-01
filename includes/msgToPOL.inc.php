<?php

   if (isset($_POST['msg_To_POL'])) {
    // Escape any html characters

     	$msgToPOL = nl2br(htmlspecialchars($_POST['msg_To_POL'])) ;

			////WRITE TO TEXT FILE.
			file_put_contents("../Polish/messages/msg-To-POL.txt", $msgToPOL) or die("Unable to connect to db!");

	header("Location: ../index.php?msgToPOL-Successful");

	}

?>
