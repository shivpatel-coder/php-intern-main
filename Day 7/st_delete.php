<?php

$connection = mysqli_connect("localhost", "root", "","db_internship");

$id = $_GET['deleteid'];

$q = mysqli_query($connection, "delete from tbl_student where st_id='{$id}'");

if($q){
    echo "<script>alert('Record Deleted');window.location='st_table.php';</script>";
}

