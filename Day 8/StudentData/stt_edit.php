<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<center>
<div id= header>
        Student Form
        </div>
    <body>

<?php

$connection = mysqli_connect("localhost", "root", "","db_internship");

if(!isset($_GET['id']) || empty($_GET['id']) ){
    header("location:st_tables.php");
}
$editid = $_GET['id'];

$editq = mysqli_query($connection, "select * from tbl_student where st_id='{$editid}'") or die("ERROR". mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);

if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $email = $_POST['txt3'];
    $bg = $_POST['txt4'];
    $mobile = $_POST['txt5'];
    $address = $_POST['txt6'];
    $pin = $_POST['txt7'];
    
    $uq = mysqli_query($connection, "update tbl_student set st_name='{$name}', st_gender='{$gender}',st_email='{$email}',st_bloodgroup='{$bg}', st_mobile='{$mobile}',st_address='{$address}',st_pincode='{$pin}' where st_id='{$editid}'") or die("ERROR". mysqli_error($connection));
    
    if($uq){
        echo "<script>alert('Record Updated');window.location='st_tables.php';</script>";
    }
}
?>
    </body>
   
<html>
    <body>
        <form method="post">
            Name: <input type="text" value="<?php echo $editdata['st_name']; ?>" name="txt1" /><br/>
            Gender: Male<input type="radio" value="Male" <?php if( $editdata['st_gender']=="Male"){echo "checked";} ?> name="txt2" />
            Female<input type="radio" value="Female" <?php if( $editdata['st_gender']=="Female"){echo "checked";} ?> name="txt2"/><br/>
            Email:<input type="email" value="<?php echo $editdata['st_email']; ?>"name="txt3"/><br/>
            Blood Group: O+<input type="radio" value="O+" <?php if( $editdata['st_bloodgroup']=="O+"){echo "checked";} ?> name="txt4" />
            O-<input type="radio" value="O-" <?php if( $editdata['st_bloodgroup']=="O-"){echo "checked";} ?> name="txt4"/>
             A+<input type="radio" value="A+" <?php if( $editdata['st_bloodgroup']=="A+"){echo "checked";} ?> name="txt4" />
            A-<input type="radio" value="A-" <?php if( $editdata['st_bloodgroup']=="A-"){echo "checked";} ?> name="txt4"/>
             B+<input type="radio" value="B+" <?php if( $editdata['st_bloodgroup']=="B+"){echo "checked";} ?> name="txt4" />
            B-<input type="radio" value="B-" <?php if( $editdata['st_bloodgroup']=="B-"){echo "checked";} ?> name="txt4"/>
             AB+<input type="radio" value="AB+" <?php if( $editdata['st_bloodgroup']=="AB+"){echo "checked";} ?> name="txt4" />
            AB-<input type="radio" value="AB-" <?php if( $editdata['st_bloodgroup']=="AB-"){echo "checked";} ?> name="txt4"/><br/>
            Mobile: <input type="number" value="<?php echo $editdata['st_mobile']; ?>" name="txt5" /><br/>
            Address: <input type="text" value="<?php echo $editdata['st_address']; ?>" name="txt6"/><br/>
            Pincode: <input type="number" value="<?php echo $editdata['st_pincode']; ?>" name="txt7"/><br/>
            <input type="submit"/>
        </form>
    </body>
</html>

</center>