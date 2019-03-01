<?php

   if (isset($_POST['contact_list'])) {
    // Escape any html characters

     	$msgToAllCongs = nl2br(htmlspecialchars($_POST['contact_list'])) ;

			////WRITE TO TEXT FILE.
			file_put_contents("../messagesToAll/msg-To-All-Congs.txt", $msgToAllCongs) or dir("Unable to connect to db!");

	header("Location: ../index.php?msgToAllCongs-Successful");

	}

?>
