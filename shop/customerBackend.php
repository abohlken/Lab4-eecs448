<?php

echo '<html>
	<head>
		<title>Game Store</title>
		<script type="text/javascript" src="formChecker.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>';

$uName = $_POST["username"];
$pass = $_POST["password"];

$ffxiv = $_POST["ffxiv"];
$ow = $_POST["overwatch"];
$bb = $_POST["bloodborne"];

$shipping = $_POST["shipping"];

$subtotal = ($ffxiv*30)+($ow*40)+($bb*10);

echo "<p class='header'>Thanks for shopping at our store, " . $uName . "!</p>";
echo "<p>Your password was: ". $pass . "</p>";

echo "<table><tr><th>Item</th><th>Quantity</th><th>Cost Per Item</th><th>Subtotal</th></tr>";
echo "<tr><td>Final Fantasy XIV: Stormblood</td><td>" . $ffxix . "</td><td>$30</td><td>$" . ($ffxiv*30) . "</td></tr>";
echo "<tr><td>Overwatch</td><td>" . $ow . "</td><td>$40</td><td>$" . ($ow*40) . "</td></tr>";
echo "<tr><td>Bloodborne</td><td>" . $bb . "</td><td>$10</td><td>$" . ($bb*10) . "</td></tr>";
echo "<tr><td class='shipping'>Shipping</td><td>" . $shipping . "</td><td></td>";

if($shipping == "free")
{
	echo "<td>$0</td>";
}
else if($shipping == "threeday")
{
	echo "<td>$5</td>";
	$subtotal = $subtotal+5;
}
else
{
	echo "<td>$50</td>";
	$subtotal = $subtotal+50;
}

echo "</tr><tr class='total'><td>Total Cost: </td><td></td><td></td><td>" . $subtotal . "</td>";

echo "</tr></table>";

echo "</html></body>";

?>
