<?php

$a = array(
    0 => 10,
    "c" => "Computer",
    "php" => "Web Development",
    10 => "Ten"
);

foreach ($a as $value) {
    echo "<br>Value is $value";
}

foreach ($a as $key => $value) {
    echo "<br>Key is <b>$key</b> and Value is <b>$value</b>";
}