<?php
# This function gets empty space to page (<br /> 10 times)
function space($one)
{
	if($one<=10)
	{
		while($one<=10)
		{
			echo "<br />";
			$one++;
		}
	}			
}

$space = space(3);
echo $space;
