<?php
/*
+-----------------------------------------------+
| File name: validate.php                       |
| Author: Akira F. Fukushima                    |
| Date: 26 Nov 2017                             |
| Purpose: Generate tokens for forms. in order  |
| not be hijacked.                              |
+-----------------------------------------------+
*/

function generate_token() {
	if (!isset($_SESSION["token"])) {
		$token = md5(uniqid(microtime(), true));
		$_SESSION["token"] = $token;
		return $_SESSION["token"];
	}
	return $_SESSION["token"];
}
?>