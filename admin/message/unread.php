<?php
/*
+-----------------------------------------------+
| File name: unread.php                         |
| Author: Akira F. Fukushima                    |
| Date: 26 Nov 2017                             |
| Purpose: Perform SQL query and find how many  |
| unread messages are there on the database and |
| store it on session variable                  |
+-----------------------------------------------+
*/
	include_once('../database/db.php');

	//is_read = 0 (unread message)
	$sql = $conn->prepare("SELECT * FROM message_table WHERE is_read = :val AND is_hidden = 0");
	$sql->execute(array(':val' => "0"));

	// Get all unread messages (where :val = 0)
	$row = $sql->fetchAll(PDO::FETCH_ASSOC);

	$_SESSION["unread"] = count($row);
?>