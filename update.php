<?php

$user = 'spechajkowski'; //username
$pass = '6w7eDr4KVwdLySbB'; //password
$db = 'spechajkowski`'; //selecting my database
$db = new mysqli('localhost', $user, $pass, $db) 
	or die("Unable to connect"); //directing the php where to look. die is an alt function in case the connection cannot establish.

$connect = mysqli_connect("localhost","spechajkowski","6w7eDr4KVwdLySbB","spechajkowski");
	echo "<h4>Search Demo</h4>";
	
if (isset ($_POST['update'])){
	$updateQuery = "UPDATE 'campus_sound' SET 'asset_number'='$_POST[asset_number]',
		'catagory'='$_POST[catagory]',
		'model'='$_POST[model]',
		'brand'='$_POST[brand]',
		'deployment'='$_POST[deployment]',
		'Building'='$_POST[Building]',
		'Room'='$_POST[Room]',
		'date_of_purch'='$_POST[date_of_purch]'
		WHERE 'asset_number'='$_POST[asset_number]'";
	mysql_query($updateQuery, $connect);
	
};
	
	
	
	
	
	
	
$query = "SELECT * FROM `campus_sound`ORDER BY `asset_number` ASC";
	echo $query."<br>";
$print = mysqli_query($connect,$query) 
						or die("Error! Data not found!");
echo "<table border=1>";
	echo "<tr><th>Asset Number</th>
	<th>Asset</th>
	<th>Catagory</th>
	<th>Model</th>
	<th>Brand</th>
	<th>Deployed To</th>
	<th>Building</th>
	<th>Room</th>	
	<th>Purchace Date</th></tr>";


while ($Row=mysqli_fetch_assoc($print)) {
	
	echo "<form.action=update.php method=post>";
	echo "<tr>";
	echo "<td>" .  "<input type=text name=asset_number value=  />" $Row['asset_number'] . "</td>";
	echo "<td>" .  "<input type=text name=catagory value=  />" $Row['catagory']. "</td>";
	echo "<td>" .  "<input type=text name=model value=  />" $Row['model'] . "</td>";
	echo "<td>" .  "<input type=text name=brand value=  />" $Row['brand']. "</td>";
	echo "<td>" .  "<input type=text name=deployment value=  />" $Row['deployment'] ."</td>";
	echo "<td>" .  "<input type=text name=Building value=  />" $Row['Building'] .  "</td>";
	echo "<td>" .  "<input type=text name=Room value=  />" $Row['Room'] . "</td>";
	echo "<td>" .  "<input type=text name=date_of_purch value=  />" $Row['date_of_purch'] . "</td>"
	echo "<td>" .  "<input type=text name=hidden value= />" $Row['asset_number'] . "</td>";
	echo "<td>" .  "<input type=submit name=update value=update />" . "</td>";  
	echo "</tr>";
	echo "</form>";
}
echo "</table>";
mysql_close($connect);


?>

<input type="button" value="Home" onClick="parent.location='index.html'"/>