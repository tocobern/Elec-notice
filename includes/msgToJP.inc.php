<?php

   if (isset($_POST['msg_To_JP'])) {
    // Escape any html characters

     	$msgToJP = nl2br(htmlspecialchars($_POST['msg_To_JP'])) ;

			////WRITE TO TEXT FILE.
			file_put_contents("../jubileepark/messages/msg-To-JP.txt", $msgToJP) or dir("Unable to connect to db!");

	header("Location: ../index.php?msgToBP-Successful");

	}

?>
