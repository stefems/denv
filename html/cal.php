<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Denverted | Denver's Local Music Guide </title>
		<?php include("head.php"); ?>
		<?php
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
			$new_array = array();
			$index = 0;
			while ($row = mysqli_fetch_array($result)) {
				$new_array[$index++] = $row;
 			}
			$fullArraySize = count($new_array);
			//resetting the index to 0 for use in the JS
			$i = 0;
		?>
		<!-- -Apparently you cannot call php multiple times, so putting it in a loop is stupid. Jesus, where to go from here...->
		<script type="text/javascript">
			//getting the size of the full array
			var size = <?php echo $fullArraySize; ?>;
			var jsonArrays;
			//for the number of rows
			for (var i = 0; i < size; i++) {
				//create a single json array
				var jArray = <?php echo json_encode(array_shift($new_array)['id']);?>;
				//var lol = <?php echo array_pop($new_array); ?>;
				//connect the monster string, newest element at the front
				jsonArrays = jsonArrays + "\n" + jArray;
			}
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
