<?php

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
