<?php

$connection = mysqli_connect("localhost", "root", "","db_internship");

if(!isset($_GET['id']) || empty($_GET['id']) ){
    header("location:3-table.php");
}
$editid = $_GET['id'];

$editq = mysqli_query($connection, "select * from tbl_user where user_id='{$editid}'") or die("ERROR". mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);

if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobile = $_POST['txt3'];
    
    $uq = mysqli_query($connection, "update tbl_user set user_name='{$name}', user_gender='{$gender}', user_mobile='{$mobile}' where user_id='{$editid}'") or die("ERROR". mysqli_error($connection));
    
    if($uq){
        echo "<script>alert('Record Updated');window.location='3-table.php';</script>";
    }
}
?>

<html>
    <body>
        <form method="post">
            Name: <input type="text" value="<?php echo $editdata['user_name']; ?>" name="txt1" /><br/>
            Gender: Male<input type="radio" value="Male" <?php if( $editdata['user_gender']=="Male"){echo "checked";} ?> name="txt2" />
            Female<input type="radio" value="Female" <?php if( $editdata['user_gender']=="Female"){echo "checked";} ?> name="txt2"/><br/>
            Mobile: <input type="number" value="<?php echo $editdata['user_mobile']; ?>" name="txt3" /><br/>
            <input type="submit"/>
        </form>
    </body>
</html>

