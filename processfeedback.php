<?php
	$con = mysql_connect("localhost", "root", "drinkdeep");
	$db = mysql_select_db("homepage", $con);

	$name = $_POST['name'];
	$email = $_POST['email'];
	$feedb = $_POST['feedback'];
	$ux = $_POST['slideUX'];
	$app = $_POST['slideAP'];
	$us = $_POST['slideUS'];

	$query = mysql_query("insert into feedback (Name , Email , Feedback , Userx , Appearance, Usability) values ('$name' , '$email' , '$feedb' , '$ux' , '$app' , '$us')");
	mysql_close ("$con");
?>

<html>
	<script>
		window.alert("Feedback Submitted Successfully");
		window.location.replace("feedback.html");
	</script>
</html>