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
			$query = "SELECT eventOpeners FROM event_table0";
			mysqli_query($db, $query) or die('Error querying database.');
			//Composing query to show all results
			$result = mysqli_query($db, $query);
			/*$jsonTitles = array();
			$jsonTimes = array();
			$jsonAges = array();*/
			$jsonOpeners = array();
			/*
			$jsonVenues = array();
			$jsonLinks = array();
			$jsonCosts = array();
			$jsonCos = array();
			$jsonGenres = array();*/
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_array($result))
				{
					$jsonOpeners[] = $row[0];
					/*$jsonTimes[] = $row[0];
					$jsonAges[] = $row[1];
					$jsonTitles[] = $row[2];
					$jsonOpeners[] = $row[3];
					$jsonVenues[] = $row[4];
					$jsonLinks[] = $row[5];
					$jsonCosts[] = $row[6];
					$jsonCos[] = $row[7];
					$jsonGenres[] = $row[8];*/
				}
			}
			$result = mysqli_num_rows($result)	;
		?>
		<script type="text/javascript">
			var result =  <?php echo $result;?>;
			var eventTitles = <?php echo json_encode($jsonTitles);?>;
			var eventTimes = <?php echo json_encode($jsonTimes);?>;
			var eventAges = <?php echo json_encode($jsonAges);?>;
			var eventOpeners = <?php echo json_encode($jsonOpeners);?>;
			var eventVenues = <?php echo json_encode($jsonVenues);?>;
			var eventLinks = <?php echo json_encode($jsonLinks);?>;
			var eventCosts = <?php echo json_encode($jsonCosts);?>;
			var eventGenres = <?php echo json_encode($jsonGenres);?>;
			//List of event objects
			var eventList = [];
			//for all of the items in the output array
			/*for (i = 0; i < eventTitles.length; i++)
			{
				//create an event object and send it to the array at the same index
				eventList[i] = {
					title: eventTitles[i],
					time: eventTimes[i],
					age: eventAges[i],
					openers: eventOpeners[i],
					venue: eventVenues[i],
					link: eventLinks[i],
					cost: eventCosts[i],
					genre: eventGenres[i]
				};
			}*/
			//alert(eventList[0].title);
			alert(result);
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
