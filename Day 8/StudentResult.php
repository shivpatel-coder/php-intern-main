<?php

$a = $_GET['txt1'];
$b = $_GET['txt2'];
$c = $_GET['txt3'];
$d = $_GET['txt4'];
$e = $_GET['txt5'];

$total = ($a + $b + $c + $d + $e);
echo "Total = $total/500";
$per = ($total)/5;
echo "</br>Percentage = $per";
if($per>=90){
    echo "<table>";
    echo "<tr>";
        echo "<td>";
    echo "<p style='color:green'>PASS with First Class</p>";
        echo "</td>";
       echo "</tr>";
    echo "</table>";
}
else if($per<90&&$per>=70 ){
    echo "<table>";
    echo "<tr>";
        echo "<td>";
    echo "<p style='color:yellow'>PASS with Second Class</p>";
        echo "</td>";
       echo "</tr>";
    echo "</table>";
}
else if($per<70&&$per>=50 ){
    echo "<table>";
    echo "<tr>";
        echo "<td>";
    echo "<p style='color:orange'>PASS with Third Class</p>";
        echo "</td>";
       echo "</tr>";
    echo "</table>";
}
else if($per<50){
    echo "<table>";
    echo "<tr>";
        echo "<td>";
    echo "<p style='color:red'>FAIL</p>";
        echo "</td>";
       echo "</tr>";
    echo "</table>";
}