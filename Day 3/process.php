<?php

$a = $_POST['txt1'];
$b = $_POST['txt2'];
$c = $_POST['txt3'];
$d = $_POST['txt4'];


echo "<table>";
echo "<tr>";
    echo "<td>";
        echo "Name : $a";
    echo "</td>";
echo "</tr>";   
echo "<tr>";
    echo "<td>";
        echo "Age : $b";
    echo "</td>";
echo "</tr>";
echo "<tr>";
    echo "<td>";
        echo "Mobile No : $c";
    echo "</td>";
echo "</tr>";
echo "<tr>";
    echo "<td>";
        echo "City : $d";
    echo "</td>";
echo "</tr>";
echo "<table>";