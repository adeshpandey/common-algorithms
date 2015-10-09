<?php
$n = $argv[1];

for($i=1;$i<=$n;$i++)
{	
	$c=1;
	for($j=1;$j<=($n-$i);$j++)
	{
		echo " ";
	}	
	for($k=1;$k<=$i;$k++)
	{

	echo $c." ";
	$c = $c*($i-$k)/$k;
	}
	echo "\n";
}
?>