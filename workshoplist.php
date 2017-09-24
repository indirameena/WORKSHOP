<?php
	include 'config/database.php';

	if(!empty($_GET)){
		$sqlDelete = "DELETE from workshop_detail where id = " . $_GET["id"];
		$queryStatus = mysqli_query($connection, $sqlDelete);

		if($queryStatus){
			header("Location: workshoplist.php");
		}	
	}  

	$sql = "SELECT * from workshop_detail";

	$queryStatus = mysqli_query($connection, $sql);

	$data = [];

	$i = 0;

	if(mysqli_num_rows($queryStatus) > 0){
		while($row = mysqli_fetch_assoc($queryStatus)){
			$data[$i] = $row;
			$i++;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Workshop List </title>

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
			<li class="active"> <a href="workshoplist.php"> Workshop list </a></li>
			<li class=""> <a href="student_info.php"> Add Student </a></li>
			<li class=""> <a href="student_list.php"> Student List </a></li>
		</ul>
	</div>
</nav>
<div class="container">
<h2> Workshop list </h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th> Id </th>
				<th> Workshop title </th>
				<th> Start Date</th>
				<th> End Date </th>
				<th> Start Time</th>
				<th> End Time </th>
				<th> Technology </th>
				<th> Action </th>
			</tr>
		</thead>

		<tbody>
			<?php 
			if(!empty($data)) {
				foreach($data as $singleRow) { ?>
					<tr>
						<td> <?php echo $singleRow["id"]; ?></td>
						<td> <?php echo $singleRow["title"]; ?> </td>
						<td> <?php echo $singleRow["start_date"]; ?> </td>
						<td> <?php echo $singleRow["end_date"]; ?> </td>
						<td> <?php echo $singleRow["start_time"]; ?> </td>
						<td> <?php echo $singleRow["end_time"]; ?> </td>
						<td> <?php echo $singleRow["technology"]; ?> </td>
						<td>
							<a href="<?php echo "edit_workshop.php?id=" . $singleRow["id"]; ?>"> Edit </a>
							<a href="<?php echo "workshoplist.php?id=" . $singleRow["id"]; ?>"> Delete </a>
						</td>
					</tr>
				<?php }
			} ?>
		</tbody>
	</table>
</div>

</body>
</html>