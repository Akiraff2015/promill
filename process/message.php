<?php
	include_once("../database/db.php");
	session_start();

	$stmt = $conn->prepare("INSERT INTO message_table (company_name, contact_name, email, cep, telephone, address, subject, message, date_created, utext_id) VALUES (:c_name, :name, :email, :cep, :telephone, :address, :subject, :message, NOW(), :utext_id)");

	//no-robot: generates 4 random numbers and froms string, that needs to match user submission and session variable.
	//_token: generates random token from ./process/validate.php to prevent CSRF (Cross Reference Forgery).
	if (isset($_POST["submit_message"]) && $_POST["no-robot"] == $_SESSION["no-robot"] && $_POST['_token'] == $_SESSION['token']) {
		$stmt->execute(array(
			":c_name" => htmlentities($_POST["company_name"]),
			":name" => htmlentities($_POST["contact_name"]),
			":email" => htmlentities($_POST["email"]),
			":cep" => htmlentities($_POST["cep"]),
			":telephone" => htmlentities($_POST["telephone"]),
			":address" => htmlentities($_POST["address"]),
			":subject" => htmlentities($_POST["subject"]),
			":message" => htmlentities($_POST["message"]),
			":utext_id" => uniqid()
		));

		//redirects the user to success page.
		header("Location: ./success");

		// Destroys the session token, and generate new one.
		unset($_SESSION["token"]);

		//if the fail-message session exist, destroy it.
		if (isset($_SESSION["fail-message"])) {
			unset($_SESSION["fail-message"]);
		}
	}

	// If user didn't submit valid input in the contact submission
	else {
		$_SESSION["fail-message"] = TRUE;
		header("Location: ../contato");
	}
?>