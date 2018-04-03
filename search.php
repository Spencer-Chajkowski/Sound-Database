<!DOCTYPE html>
<html>
<title>Sound  Database Lookup Results</title>
<body>
<h3>Sound Database Lookup Results</h3>
<style>
body {

   background-image: url("dust.png");
   background-color: #cccccc;
	 text-align: center;
font-family: verdana;
    font-size: 20px;
}
</style>
<?php
// Open the Database, selecting my database
$con = mysqli_connect("localhost","spechajkowski","6w7eDr4KVwdLySbB","spechajkowski");
if (!$con)
  {
    die('Could not connect: ' . mysqli_error($con));
  }
$SearchTerm = $_GET["search"];

// Tell the user which field is being searched for, and build sql search query
echo "Search Field: " . $_GET["search"]."<br>";
echo "Search Value: ";

if ($SearchTerm == "brand") {
   $SearchValue = $_GET['brand'];
   
   $query = "SELECT * FROM `campus_sound` WHERE `brand`LIKE '".$SearchValue."'";
} elseif ($SearchTerm == "deployment") {
   $SearchValue = $_GET['deployment'];
  

$query = "SELECT * FROM `campus_sound` WHERE `deployment` LIKE '" .$SearchValue."'";}
elseif ($SearchTerm == "asset_number") {
   $SearchValue = $_GET['asset_number'];
   

   $query = "SELECT * FROM `campus_sound` WHERE `asset_number` = '" .$SearchValue."'";

}
elseif ($SearchTerm == "Building") {
   $SearchValue = $_GET['Building'];
   

   $query = "SELECT * FROM `campus_sound` WHERE `Building` LIKE '" .$SearchValue."'";
} elseif ($SearchTerm == "catagory") {
   $SearchValue = $_GET['catagory'];
 

$query = "SELECT * FROM `campus_sound` WHERE `catagory` = '" .$SearchValue."'"; }

// Sanitize the query
//$query = htmlentities($query);
echo $query."<br>";
//Lookup the matches
$result = mysqli_query($con,$query);

//Check if there was a match
if (!$result) {
   die("No match to search ");
}
 
//Display the results
echo "<table border=1>";
if ($SearchTerm == "catagory") {
echo 					"<tr><th>Asset Number</th>
					<th>Catagory</th>
					<th>Model</th>
					<th>Brand</th>
					<th>Deployed To</th>
					<th>Building</th>
					<th>Room</th>
					<th>Purchace Date</th>
				</tr>";
while ($Row=mysqli_fetch_assoc($result)) {
   echo "<tr><td>{$Row['asset_number']}</td>";
	echo "<td>{$Row['catagory']}</td>";
	echo "<td>{$Row['model']}</td>";
	echo "<td>{$Row['brand']}</td>";
	echo "<td>{$Row['deployment']}</td>";
	echo "<td>{$Row['Building']}</td>";
	echo "<td>{$Row['Room']}</td>";
	echo "<td>{$Row['date_of_purch']}</td>
	</tr>";
  }
  }
 else if ($SearchTerm == "deployment") {
echo 					"<tr><th>Asset Number</th>
					<th>Catagory</th>
					<th>Model</th>
					<th>Brand</th>
					<th>Deployed To</th>
					<th>Building</th>
					<th>Room</th>
					<th>Purchace Date</th>
				</tr>";
while ($Row=mysqli_fetch_assoc($result)) {
   echo "<tr><td>{$Row['asset_number']}</td>";
	echo "<td>{$Row['catagory']}</td>";
	echo "<td>{$Row['model']}</td>";
	echo "<td>{$Row['brand']}</td>";
	echo "<td>{$Row['deployment']}</td>";
	echo "<td>{$Row['Building']}</td>";
	echo "<td>{$Row['Room']}</td>";
	echo "<td>{$Row['date_of_purch']}</td>
	</tr>";
  }
  }
else if ($SearchTerm == "Building") {
echo 					"<tr><th>Asset Number</th>
					<th>Catagory</th>
					<th>Model</th>
					<th>Brand</th>
					<th>Deployed To</th>
					<th>Building</th>
					<th>Room</th>
					<th>Purchace Date</th>
				</tr>";
while ($Row=mysqli_fetch_assoc($result)) {
   echo "<tr><td>{$Row['asset_number']}</td>";
	echo "<td>{$Row['catagory']}</td>";
	echo "<td>{$Row['model']}</td>";
	echo "<td>{$Row['brand']}</td>";
	echo "<td>{$Row['deployment']}</td>";
	echo "<td>{$Row['Building']}</td>";
	echo "<td>{$Row['Room']}</td>";
	echo "<td>{$Row['date_of_purch']}</td>
	</tr>";
  }
  }

else if ($SearchTerm == "asset_number") {
echo 				"<tr><th>Asset Number</th>
					<th>Catagory</th>
					<th>Model</th>
					<th>Brand</th>
					<th>Deployed To</th>
					<th>Building</th>
					<th>Room</th>
					<th>Purchace Date</th>
				</tr>";
while ($Row=mysqli_fetch_assoc($result)) {
   echo "<tr><td>{$Row['asset_number']}</td>";
	echo "<td>{$Row['catagory']}</td>";
	echo "<td>{$Row['model']}</td>";
	echo "<td>{$Row['brand']}</td>";
	echo "<td>{$Row['deployment']}</td>";
	echo "<td>{$Row['Building']}</td>";
	echo "<td>{$Row['Room']}</td>";
	echo "<td>{$Row['date_of_purch']}</td>
	</tr>";
  }
  }
  
  else{
 
echo 				"<tr><th>Asset Number</th>
					<th>Catagory</th>
					<th>Model</th>
					<th>Brand</th>
					<th>Deployed To</th>
					<th>Building</th>
					<th>Room</th>
					<th>Purchace Date</th>
				</tr>";
while ($Row=mysqli_fetch_assoc($result)) {
   echo "<tr><td>{$Row['asset_number']}</td>";
	echo "<td>{$Row['catagory']}</td>";
	echo "<td>{$Row['model']}</td>";
	echo "<td>{$Row['brand']}</td>";
	echo "<td>{$Row['deployment']}</td>";
	echo "<td>{$Row['Building']}</td>";
	echo "<td>{$Row['Room']}</td>";
	echo "<td>{$Row['date_of_purch']}</td>
	</tr>";
}
  }
echo "</table>";

?>
<input type="button" value="New search" onClick="parent.location='index.html'"
>
</body>
</html>
