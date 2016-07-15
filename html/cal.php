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
			$query = "SELECT eventTitle, eventTime FROM event_table0";
			mysqli_query($db, $query) or die('Error querying database.');
			//Composing query to show all results
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) > 0) {
				$jsonData = array();
				$jsonData2 = array();				
				while ($row = mysqli_fetch_array($result)) {
					$jsonData[] = $row[0];
					$jsonData2[] = $row[1];
					
				}
				//$jsonData[$index] =  mysqli_fetch_array($result, MYSQL_ASSOC);
			}
			
		?>-->
		<script type="text/javascript">
			var output = <?php echo json_encode($jsonData);?>;
			var output2 = <?php echo json_encode($jsonData2);?>;
		</script>
	</head>

<body>
	<!--Static Home and Filter Icon/Buttons -->
	<!-- TODO: Add on click because mobile can't hover -->
	<div class="topRow">
		<!-- HOME ICON-->
		<div class="iconDiv" id="homeDiv">
			<a href="index.php"><i id="homeIcon" class="fa fa-arrow-down fa-5x" aria-hidden="true" onmouseover="animateHome()" onmouseout="unanimateHome()" ></i></a>
		</div>
		<!-- FILTER ICON-->
		<div class="iconDiv" id="filterDiv">
			<i id="filterIcon" class="fa fa-sliders fa-5x"   aria-hidden="true" onmouseover="animateFilter()" onmouseout="unanimateFilter()"></i>
		</div>
		<!-- Month DIV-->
		<div class="middleDiv" id="monthDiv">
			Month
		</div>
		
	</div>
	<!-- Content Section-->
	<div class="contentDiv">
		<!--MONTH
		TODO: Fixed changes for the upcoming month-->
		<!--EVENT -->
		<div >A
		</div>
		<!--EVENT -->
		<div >B
		</div>
		<!--EVENT -->
		<div >C
		</div>
		<!--EVENT -->
		<div >A
		</div>
		<!--EVENT -->
		<div >B
		</div>
		<!--EVENT -->
		<div >C
		</div>
		<!--EVENT -->
		<div >A
		</div>
		<!--EVENT -->
		<div >B
		</div>
		<!--EVENT -->
		<div >C
		</div>
		<!--EVENT -->
		<div >A
		</div>
		<!--EVENT -->
		<div >B
		</div>
		<!--EVENT -->
		<div >C
		</div>
	</div>
	<!---------------------------------------->

</body>

<?php include("footer.php"); ?>
</html>
