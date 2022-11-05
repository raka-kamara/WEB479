<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 3; $row++) { 
		echo "<tr> \n";
		for ($col=0; $col <= 4; $col++) { 
		   $p = rand(1,100);
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>
