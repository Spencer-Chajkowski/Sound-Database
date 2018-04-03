

<!DOCTYPE html>
<html>
<title>Add Equipment to the Database</title>
<body>
<h3>Sound Database Insert Results</h3>
<?php
// Open the Database, selecting my database
$con = mysqli_connect("localhost","spechajkowski","6w7eDr4KVwdLySbB","spechajkowski");
if (!$con)
  {
    die('Could not connect: ' . mysqli_error($con));
  }

$query = "INSERT INTO `campus_sound`(`catagory`, `model`, `brand`, `date_of_purch`, `deployment`, `Building`, `Room`) VALUES ([catagory],[model],[brand],[deployment],[Building],[room],[date_of_purch])";

$print = mysqli_query($connect,$query) 
						or die("Error! Data not found!");
echo "<table border=1>";

echo "<tr><th>Catagory</th><th>Model</th><th>Brand</th><th>Asset Number</th><th>Deployed To</th><th>Building</th><th>Room</th><th>Purchace Date</th></tr>";
while ($Row=mysqli_fetch_assoc($print)) {
	echo "<tr><td>{$Row['catagory']}</td>";
	echo "<td>{$Row['model']}</td>";
	echo "<td>{$Row['brand']}</td>";
	echo "<td>{$Row['asset_number']}</td>";
	echo "<td>{$Row['deployment']}</td>";
	echo "<td>{$Row['Building']}</td>";
	echo "<td>{$Row['Room']}</td>";
	echo "<td>{$Row['date_of_purch']}</td>
	</tr>";
}
?>

<input type="button" value="Home" onClick="parent.location='index.html'"
>
</html>
