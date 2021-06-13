<?php

$connection = mysqli_connect("localhost", "root", "","db_internship");

$q = mysqli_query($connection, "select * from tbl_student") or die("ERROR".mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Email</th>";
echo "<th>BloodGroup</th>";
echo "<th>Mobile</th>";
echo "<th>Address</th>";
echo "<th>Password</th>";
echo "<th>Date of Birth</th>";
echo "<th>Pincode</th>";
echo "<th>Action</th>";
echo "</tr>";
while($row = mysqli_fetch_array($q) ){
    echo "<tr>";
    echo "<td>{$row['st_id']}</td>";
    echo "<td>{$row['st_name']}</td>";
    echo "<td>{$row['st_gender']}</td>";
    echo "<td>{$row['st_email']}</td>";
    echo "<td>{$row['st_bloodgroup']}</td>";
    echo "<td>{$row['st_mobile']}</td>";
    echo "<td>{$row['st_address']}</td>";
    echo "<td>{$row['st_password']}</td>";
    echo "<td>{$row['st_dob']}</td>";
    echo "<td>{$row['st_pincode']}</td>";
    echo "<td><a href='st_edit.php?id={$row['st_id']}'>Edit</a> | <a href='st_delete.php?deleteid={$row['st_id']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";

echo "<a href='studentdata.php'>Add Record</a>";