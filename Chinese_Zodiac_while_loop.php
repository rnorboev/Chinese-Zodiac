<style type="text/css">
    #table{
        width: 1150;
        margin: auto;
        border: double 7px #000000;
        padding: 10px;
    }
</style>

<div id="table">
<?php

        	echo "<table align=\"center\"><tr>";
        $names =array("Rat","OX","Tiger","Rabbit","Dragon","Snake","Horse","Goat","Monkey","Rooster","Dog","Pig");
        $i=0;
        while ($i <= 11) {
            echo "<td align=\"center\" style=\"color:white; border:2px solid black; background-color:black; text-transform: uppercase;\">" . $names[$i] . "</td>";
        $i++;
        }
 
            echo "</tr><tr>";

        $startyear = 1912;
        $endyear = 2017;
        $zodiacnames =array("Rat","Ox","Tiger","Rabbit","Dragon","Snake","Horse","Goat","Monkey","Rooster", "Dog","Pig");
		$i=0;
			while ($i <= 11) {
			echo "<td align=\"center\" style=\"padding:5px;\"><img src=\"images/" . $zodiacnames[$i] . ".png\"></td>";
		$i++;
			}
		
		$i = $startyear;
        	while ($i <= $endyear) {
            	if ((($i - $startyear) % 12) == 0) {
                	echo "</tr><tr>";
            }
            echo "<td align=\"center\" style=\"color:white; 
            border:2px solid black; background-color:grey;\">" . $i . "</td>";
            ++$i;
        }
        	echo "</tr></table>"
?>
</div>