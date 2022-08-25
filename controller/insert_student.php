<?php 
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		include('../db.php');
	    $name =  $_POST['name'];
	    $dob =  $_POST['dob'];
	    // $sex =  $_POST['sex'];
	    $email =  $_POST['email'];
	    $contact =  $_POST['contact'];
	    $address =  $_POST['address'];
	    $dept =  $_POST['dept'];
	    $section =  $_POST['section'];
	    $sql = "INSERT INTO `students` (`name`, `date`,`email`, `contact`, `address`, `dept_id`, `section_id`) VALUES ('$name', '$dob','$email', '$contact', '$address', '$dept', '$section')";
	    $stmt = $con->prepare($sql);
		 // execute the query
		$stmt->execute();
	   echo $stmt->rowCount() . " records UPDATED successfully";
}
?>