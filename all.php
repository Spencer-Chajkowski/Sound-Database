<html>
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



$user = 'spechajkowski'; //username
$pass = '6w7eDr4KVwdLySbB'; //password
$db = 'spechajkowski`'; //selecting my database
$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect"); //directing the php where to look. die is an alt function in case the connection cannot establish.


$connect = mysqli_connect("localhost","spechajkowski","6w7eDr4KVwdLySbB","spechajkowski");
	echo "<h4>All Equipment</h4>";
$query = "SELECT * FROM `campus_sound` ORDER BY `asset_number` ASC";
	
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
	echo "</table>";

?>
<input type="button" value="Home" onClick="parent.location='index.html'"/>
</html