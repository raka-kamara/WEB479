<?php
function selection_sort_desc(&$a, $n)
{
	for($i = 0; $i < $n ; $i++)
	{
		$low = $i;
		for($j = $i + 1; $j < $n ; $j++)
		{
			if ($a[$j] > $a[$low])
			{
				$low = $j;
			}
		}
		if ($a[$i] < $a[$low])
		{
			$tmp = $a[$i];
			$a[$i] = $a[$low];
			$a[$low] = $tmp;
		}
	}
}
$n=5;
$a = array();
array_push($a,1);
array_push($a,2);
array_push($a,3);
array_push($a,4);
array_push($a,5);
$len = count($a);
selection_sort_desc($a, $len);
echo "Sorted array: \n"; 
for ($i = 0; $i < $len; $i++)
{
	echo $a[$i] . " ";
}
?>