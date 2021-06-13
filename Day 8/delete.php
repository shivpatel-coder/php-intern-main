<?php

$connection = mysqli_connect("localhost", "root", "","db_internship");

$id = $_GET['deleteid'];

$q = mysqli_query($connection, "delete from tbl_user where user_id='{$id}'");

if($q){
    echo "<script>alert('Record Deleted');window.location='3-table.php';</script>";
}

