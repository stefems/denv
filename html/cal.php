<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Denverted | Denver's Local Music Guide</title>
		<?php include("head.php"); ?>
		<?php
			//Connecting to DB
			$db = mysqli_connect('localhost','web','webplebnafets2015','denverted_events') or die('Error connecting to MySQL server.');
			//Composing test query
			//$query = "SELECT eventTime, ageLimit, eventTitle, eventOpeners, eventVenue, eventLink, eventCost FROM event_table0";
			$query = "select eventOpeners from event_table0";
			mysqli_query($db, $query) or die('Error querying database.');
			//Composing query to show all results
			$result = mysqli_query($db, $query);
			$jsonTest = array();
			//if the number of rows recevied is not 0
			if (mysqli_num_rows($result) > 0) {
				//this runs for each row in the DB
				while ($row = mysqli_fetch_array($result))
				{
					$jsonTest[] = $row[0];
				}
				$jsonTest = utf8_converter($jsonTest);
			}
			else {
				echo 'failed';
			}
			function utf8_converter($array)
			{
				array_walk_recursive($array, function(&$item, $key){
					if(!mb_detect_encoding($item, 'utf-8', true)){
							$item = utf8_encode($item);
					}
				});
				return $array;
			}
			
		?>
		<script type="text/javascript">
			var result = <?php echo json_encode($jsonTest);?>;
			alert(result);
			//How to access a title from the array
			//alert(eventList[0].title);
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
