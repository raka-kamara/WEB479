<?php

$temperatures = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65,
74, 62, 62, 65, 64, 68, 73, 75, 79, 73";

$temp_array = explode(',', $temperatures);
$total_temp = 0;
$temp_array_length = count($temp_array);

foreach($temp_array as $t_temp)
{
 $total_temp += $t_temp;
}

$average_temperature = $total_temp/$temp_array_length;
echo "Average Temperature is: ".$average_temperature." ";
echo "<br>";
  
sort($temp_array);

echo "Lowest temperature:"; 
echo $temp_array[0]."";
echo "<br>";

echo "Highest temperature: ";
echo $temp_array[count($temp_array)-1]." ";

?>
