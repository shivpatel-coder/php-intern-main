<link href="style.css" rel="stylesheet" type="text/css" media="screen" /><!-- comment -->
<center>
<div id= header>
        Student Form
        </div>
    <body>
<?php

$connection = mysqli_connect("localhost", "root", "","db_internship");

$id = $_GET['deleteid'];

$q = mysqli_query($connection, "delete from tbl_student where st_id='{$id}'") or die("ERROR".mysqli_error($connection));

if($q){
    echo "<script>alert('Record Deleted');window.location='st_tables.php';</script>";
}

?>
        </body>
</center>