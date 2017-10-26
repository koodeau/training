<html>
<head>
<title>Mix of web languanges</title>
</head>
<body>
<script>
	// JAVASCRIPT PART
var hello="Hello ";
var world="world!";
var br="<br />";
var hello_world=hello+world

document.write("Hello world!"+br+br);
document.write(hello_world+br);

var initials=new Array(2);
initials[0]="Nick";
initials[1]="Williamson";
var initials_sum = initials[0]+initials[1];
document.write(initials_sum);
// alert("Hello world!");
</script>
<?php
	# PHP PART 
$hello="Hello";
$world="world!";
$br="<br />";
$hello_world=$hello." ".$world;

echo "Hello world!".$br.$br;
echo $hello_world.$br;

$initials=array('Nick','Williamson');
$initials_sum=$initials[0].' '.$initials[1];
echo $initials_sum;
?>
</body>
</html>