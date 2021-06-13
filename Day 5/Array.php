<?php

$a = array(1,2,3,4,"akash","Khatri");

echo "By for loop<br/>";
for ($i=0;$i<count($a);$i++)
{
    echo  " ".$a[ $i ];
}
print_r($a );
echo "<pre>";
var_dump($a);
echo "<pre>";
echo "<br/>By Do While Loop<br/>";
$i=0;
do{
    echo " ".$a[$i];
    $i++;
}while($i<count($a));