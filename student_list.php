<?php

	include 'config/database.php';

	$sqlSelectStudentDetail = "SELECT student_detail.*, workshop_detail.title from student_detail LEFT JOIN workshop_detail ON student_detail.workshop_id = workshop_detail.id ";

	$sqlStatus = mysqli_query($connection, $sqlSelectStudentDetail);

	$data = [];

	$i = 0;

	if(mysqli_num_rows($sqlStatus) > 0){
		while($row = mysqli_fetch_assoc($sqlStatus)){
			$data[$i] = $row;
			$i++;
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Student List </title>

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
			<li class=""> <a href="student_info.php"> Add Student </a></li>
			<li class="active"> <a href="student_list.php"> Student List </a></li>
		</ul>
	</div>
</nav>

<div class="container">
<h2> Student List </h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th> S.No. </th>
				<th> Enrollment No. </th>
				<th> Student Name </th>
				<th> Branch </th>
				<th> Semester </th>
				<th> Year </th>
				<th> Selected Workshop </th>
			</tr>
		</thead>

		<tbody>

			<?php foreach($data as $singleRow) {  ?>
				<tr>
					<td> #<?php echo $singleRow["id"]; ?> </td>
					<td> <?php echo $singleRow["enrollment_number"]; ?> </td>
					<td> <?php echo $singleRow["student_name"]; ?> </td>
					<td> <?php echo $singleRow["branch"]; ?> </td>
					<td> <?php echo $singleRow["semester"]; ?> </td>
					<td> <?php echo $singleRow["year"]; ?> </td>
					<td> <?php echo $singleRow["title"]; ?> </td>
				</tr>	
			<?php } ?>

		</tbody>		
	</table>
</div>

</body>
</html>