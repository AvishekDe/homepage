<?php
	$con = mysql_connect("localhost", "root", "drinkdeep");
	$db = mysql_select_db("homepage", $con);

	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$reason = $_POST['reason'];

	$query = mysql_query("insert into contactrequest (name , reason , contactno) values ('$name' , '$reason' , '$mobile')");
	mysql_close ("$con");
?>

<html>
	<script>
		window.alert("Request Submitted Successfully");
		window.location.replace("contact.html");
	</script>
</html>