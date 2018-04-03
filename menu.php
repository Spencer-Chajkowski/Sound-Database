<html>
<title>Campus Sound Database</title>
<style>
body {

   background-image: url("dust.png");
   background-color: #cccccc;
	 text-align: center;
font-family: verdana;
    font-size: 20px;
}
</style>

<body>
<h3>Campus Sound Database Menu</h3>
<?php
    if ($_GET["submit"]) {
       header('location: '.$_GET['formMenu']);
       }
?>
<p>
What would you like to view?
<form action="menu.php" method="get">

<select name="formMenu">
  <option value="">Select...</option>
  <option value="all.php">List all equipment</option>
  <option value="mics.php">List the microphones</option>
  <option value="dibox.php">List the direct Boxes</option>
  <option value="amps.php">List the Amp's</option>
  <option value="mixers.php">List the mixers</option>
  <option value="speakers.php">List the speakers</option>
  <option value="other.php">List the Other items</option>
  <option value="port.php">List the portable systems  </option>
  <option value="deployed.php">List the deployed equipment</option>
  <option value="search.html">search for equipment </option>
 
 
</select>
<input type="submit" name="submit">

</p>
