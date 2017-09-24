<?php

	include 'config/database.php';

	$sqlSelectWorkshop = "SELECT id,title from workshop_detail";

	$sqlStatus = mysqli_query($connection, $sqlSelectWorkshop);

	$workshopArray = [];

	if(mysqli_num_rows($sqlStatus) > 0){
		while($row = mysqli_fetch_assoc($sqlStatus)){
			$workshopArray[$row["id"]] = $row["title"];
		}
	}

	if(!empty($_POST)){
		
		$name = $_POST["name"];
		$enrollment_number = $_POST["enrollment_number"];
		$workshop_id = $_POST["workshop_id"];
		$branch = $_POST["branch"];
		$year = $_POST["year"];
		$semester = $_POST["semester"];

		$sqlInsert = "INSERT into student_detail (student_name,enrollment_number,branch,year,semester,workshop_id) VALUES ('$name','$enrollment_number','$branch','$year','$semester','$workshop_id')";

		if(mysqli_query($connection, $sqlInsert)){
			header("Location: student_list.php");
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>MNIT</title>
	<script type="text/javascript" src="scripts/validation.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand"> WMS </a>
		</div>

		<ul class="nav navbar-nav">
			<li class=""> <a href="add_workshop.php"> Add Workshop </a></li>
			<li class=""> <a href="workshoplist.php"> Workshop list </a></li>
			<li class="active"> <a href="student_info.php"> Add Student </a></li>
			<li class=""> <a href="student_list.php"> Student List </a></li>
		</ul>
	</div>
</nav>
<div class="container col-md-5">
<h2>Student Information</h2>
	<form action="" method="post">
		<div class='form-group'>
			<label> Name : </label>
			<input type="text" name="name" class="form-control col-md-5">
		</div>

		<div class='form-group'>
			<label> Workshop : </label>
			<select class="form-control" name="workshop_id">
				<option value="">Please select</option>
				<?php foreach($workshopArray as $key => $value) { ?>
					<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
				<?php } ?>
			</select>
		</div>

		<div class='form-group'>
			<label> Enrollment Number : </label>
			<input type="text" name="enrollment_number" class="form-control ">
		</div>

		<div class='form-group'>
			<label> Branch : </label>
			<input type="text" name="branch" class="form-control ">
		</div>
		
		<div class='form-group'>
			<label> Year : </label>
			<input type="text" name="year" class="form-control ">
		</div>

		<div class='form-group'>
			<label> Semester : </label>
			<input type="text" name="semester" class="form-control">
		</div>

		<input type="submit" name="Save" value="Save" class="btn btn-primary">
	</form>
</div>

</body>
</html>