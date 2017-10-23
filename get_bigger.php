<?php
function get_bigger($first,$second)
{
	if($first>$second)
	{
		return $first;
	} else {
		return $second;
		}
}
$get_bigger = get_bigger(15,2017);
echo $get_bigger;
