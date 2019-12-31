<?php
$a=$_GET['a1'];
$b=$_GET['a2'];
if($a==$b)
{
echo"EQUAL NUMBERS";
}
else 
{
echo"LARGEST NUMBER  IS",($a>$b)?$a:$b;
}
?>