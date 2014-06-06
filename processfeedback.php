<?php

// define variables and set to empty values
$name = $email = $feedb = $ux = $app = $us = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $feedb = test_input($_POST["feedback"]);
  $ux = test_input($_POST["slideUX"]);
  $app = test_input($_POST["slideAP"]);
  $us = test_input($_POST['slideUS']);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





	$con = mysql_connect("localhost", "root", "drinkdeep");
	$db = mysql_select_db("homepage", $con);

	$query = mysql_query("insert into feedback (Name , Email , Feedback , Userx , Appearance, Usability) values ('$name' , '$email' , '$feedb' , '$ux' , '$app' , '$us')");
	mysql_close ("$con");
?>

<html>
	<script>
		window.alert("Feedback Submitted Successfully");
		window.location.replace("feedback.html");
	</script>
</html>