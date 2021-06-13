<?php

$connection = mysqli_connect("localhost", "root", "","db_internship");

$q = mysqli_query($connection, "select * from tbl_user") or die("ERROR".mysqli_error($connection));

$row = mysqli_fetch_array($q);
print_r($row);

