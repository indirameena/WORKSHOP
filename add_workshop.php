<?php 
	include 'config/database.php';
	
	if(!empty($_POST)){
	
		$title = $_POST["title"];
		$start_date = $_POST["start_date"];
		$end_date = $_POST["end_date"];
		$start_time = $_POST["start_time"];
		$end_time = $_POST["end_time"];
		$technology = $_POST["technology"];
		$ws_description = $_POST["ws_description"];

		$sql = "INSERT INTO workshop_detail (title,start_date,end_date,start_time,end_time,technology,ws_description) VALUES ('$title','$start_date','$end_date','$start_time','$end_time','$technology','$ws_description')";
		
		$queryStatus = mysqli_query($connection, $sql);

		if(!$queryStatus){
				die("mysql insert error" . mysqli_error($connection));
		} else {
				header("Location: workshoplist.php");
				exit();
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Workshop</title>

	<!-- 1. Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 2. Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- 3. Latest compiled and minified JavaScript -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

<!-- 4. Comment in html : This is the base library which should be loaded on dom at 
very earliest. Becuase all rest libraries like bootstrap datepicker's provide 
solution on the using of jquery bases/functions -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- 5. moment is used to handle date/time calculations.-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

<!-- 6. Datetimepicker standard library introduced by bootstrap.  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<!-- 7. Default minified bootstrap js file. It should also be loaded if we're using
bootstrap's components. Like datetimepicker and nav bar which we find yesterday-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- 8. Now load our scripts at the last becuase our code may dependent on some 
components like we can not intantiate datetimepicker before loading it's library -->
<script type="text/javascript" src="scripts/validation.js"></script>

<!-- Comments -->
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand"> WMS </a>
		</div>

		<ul class="nav navbar-nav">
			<li class="active"> <a href="add_workshop.php"> Add Workshop </a></li>
			<li class=""> <a href="workshoplist.php"> Workshop list </a></li>
			<li class=""> <a href="student_info.php"> Add Student </a></li>
			<li class=""> <a href="student_list.php"> Student List </a></li>
		</ul>
	</div>
</nav>

<div class="container col-md-12">
<h2>Add Workshop detail</h2>



<form action="" method="post">
	<div class="form-group">
		<label>Workshop Title</label>
		<input class=" form-control" type="text" name="title" id="title" required>
	</div>

	<div class="form-group">
		<label>Start Date</label>
		<input class="form-control" type="text" required name="start_date" id="start_date">
	</div>

	<div class="form-group">
		<label>End Date</label>
		<input class="form-control " type="text" required name="end_date" id="end_date">
	</div>

	<div class="form-group">
		<label>Start Time</label>
		<input class="form-control" type="text" required name="start_time" id="start_time">
	</div>

	<div class="form-group">
		<label>End Time</label>
		<input class="form-control " type="text" required name="end_time" id="end_time">
	</div>

	<div class="form-group">
		<label>Technology</label>
		<input class="form-control " type="text" required name="technology" id="technology">
	</div>

	<div class="form-group">
		<label>WorkShop Description</label>
		<textarea id="ws_description" class="form-control" required name="ws_description"> </textarea>
	</div>
	 
	<input type="submit" name="Save" class="btn btn-primary" value="Save">
</form>
</div>
</body>
</html>