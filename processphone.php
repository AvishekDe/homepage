<?php


	$name = $mobile = $reason = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $name = test_input($_POST["name"]);
	  $mobile = test_input($_POST["mobile"]);
	  $reason = test_input($_POST["reason"]);
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}



	$con = mysql_connect("localhost", "root", "drinkdeep");
	$db = mysql_select_db("homepage", $con);

	$query = mysql_query("insert into contactrequest (name , reason , contactno) values ('$name' , '$reason' , '$mobile')");
	mysql_close ("$con");
?>

<html>
	<script>
		window.alert("Request Submitted Successfully");
		window.location.replace("contact.html");
	</script>
</html>