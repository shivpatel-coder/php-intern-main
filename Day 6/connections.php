<?php

$connection = mysqli_connect("localhost", "root", "", "db_internship");

$q = mysqli_query($connection,
      "insert into tbl_user(user_name,user_gender,user_mobile ) values('Akash','Male',1234567890)" ) or die("Error". mysqli_errno($connection)) ;

if($q){
    echo "<script>alert('Record added');</script>";
}