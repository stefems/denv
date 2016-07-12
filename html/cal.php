<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Denverted | Denver's Local Music Guide </title>
		<?php include("head.php"); ?>
		<!--<?php
			//Establishing Variables
			$servername = "localhost";
			$username = "web";
			$password = "webpleblehcar04#";
			$databasename = "denverted_events";
			//Connecting to DB
			$db = mysqli_connect('localhost','web','webpleblehcar04#','denverted_events') or die('Error connecting to MySQL server.');
			//Composing test query
			$query = "SELECT * FROM event_table0";
			mysqli_query($db, $query) or die('Error querying database.');
			//Composing query to show all rows
			$result = mysqli_query($db, $query);

			$row = mysqli_fetch_array($result);

			while ($row = mysqli_fetch_array($result)) {
				echo $row['eventTitle'] . '<br />';
			}
		?>-->
	</head>

<body>
	<!--Static Home and Filter Icon/Buttons -->
	<!-- TODO: Add on click because mobile can't hover -->
	<div class="container">
		<div class="row">
			<!-- HOME ICON-->
			<div class="col-sm-1 IconDiv">
				<i id="homeIcon" class="fa fa-arrow-down fa-5x" aria-hidden="true"       onmouseover="animateHome()" onmouseout="unanimateHome()"></i>
			</div>
			<!-- Content Section-->
			<div class="col-sm-10">
				<!--MONTH
				TODO: Fixed changes for the upcoming month-->
				<div class="row month" id="july">
				  July
				</div>
				<!--EVENT -->
				<div class="row">
				</div>
				<!--EVENT -->
				<div class="row">
				</div>
				<!--EVENT -->
				<div class="row">
				</div>
			</div>
			<!-- FILTER ICON-->
			<div class="col-sm-1 IconDiv">
				<i id="filterIcon" class="fa fa-sliders fa-5x"   aria-hidden="true" onmouseover="animateFilter()" onmouseout="unanimateFilter()"></i>
			</div>
		</div>
	</div>
	<!---------------------------------------->

</body>

<?php include("footer.php"); ?>
</html>
