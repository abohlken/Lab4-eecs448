<?php

function multiply($x,$y)
{
	$z=$x*$y;
	return $z;
}

echo "<table><tr><td></td>";
# for loop for column headers
for($i=1;$i<=100;$i++)
	echo "<td>" . $i . "</td>";
echo "</tr>";

# for loop for rows of table
for($i=1;$i<=100;$i++)
{
	echo "<tr><td>" . $i . "</td>";
	# for loop for columns of table
	for($j=1;$j<=100;$j++)
	{
		echo "<td>" . multiply($i,$j) . "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
