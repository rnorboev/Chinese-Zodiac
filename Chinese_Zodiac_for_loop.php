<?php

	echo "<table align=\"center\"><tr>";
	
	$names =array("Rat","OX","Tiger","Rabbit","Dragon","Snake","Horse","Goat","Monkey","Rooster","Dog","Pig");
	for ($i = 0; $i < 12; ++$i) {
	    echo "<td align=\"center\" style=\"color:white; border:2px solid black;background-color:black; text-transform: uppercase;\">" . $names[$i] . "</td>";
	}

		echo "</tr><tr>";

	$startyear = 1912;
	$endyear = 2017;
	$zodiacnames =array("Rat","Ox","Tiger","Rabbit","Dragon","Snake","Horse","Goat","Monkey","Rooster", "Dog","Pig");
	for ($i = 0; $i < 12; ++$i) {
	    echo "<td align=\"center\" style=\"padding:10px; border:2px solid black;\"><img src=\"images/" . $zodiacnames[$i] . ".png\"></td>";
	}
	
	for ($i = $startyear; $i <= $endyear; ++$i) {
	    if ((($i - $startyear) % 12) == 0) {
	        echo "</tr><tr>";
	    }
	    
	    echo "<td align=\"center\" style=\"color:white; 
	    border:2px solid black; background-color:grey;\">" . $i . "</td>";
	}
echo "</tr></table>";
?>