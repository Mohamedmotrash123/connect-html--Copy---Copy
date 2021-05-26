<?php  


if (isset($_POST['name'])    && isset($_POST['number'])  && isset($_POST['message'])  ) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$number = validate($_POST['number']);	
	$message = validate($_POST['message']);


	if (empty($message) || empty($name) ||  empty($number)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO test(name,message,number) VALUES('$name','$message','$number')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: index.html");
}