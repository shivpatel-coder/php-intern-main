<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<html>
    <body>
    <center>
        <div id= header>
        Student Form
        </div>
        <form method = "post">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="txt1"/></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><select name="txt2">
                        <option>Male</option><!-- comment -->
                <option>Female</option>
                        </select></td>
                </tr><!-- comment -->
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="txt3"/></td>
                </tr><!-- comment -->
                <tr>
                    <td>Blood Group:</td>
                    <td><select name="txt4">
                <option>O+</option>
                <option>O-</option><!-- comment -->
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option><!-- comment -->
                <option>AB+</option><!-- comment -->
                <option>AB-</option>
            </select></td>
                </tr>
                <tr>
                    <td>Mobile No:</td>
                    <td><input type="number" name="txt5"/></td>
                </tr><!-- comment -->
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="txt6"/></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="txt7"/></td>
                </tr><!-- comment -->
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="txt8"/></td>
                </tr><!-- comment -->
                <tr>
                    <td>Pincode:</td>
                    <td><input type="number" name="txt9"/></td>
                </tr><!-- comment -->
                <tr>
                    <td><input type="submit"/></td>
                    <td><input type="reset"/></td>
                </tr>            
            </table>
        </form>
    </center>
    </body>
</html>
<a href='st_tables.php'>Display Records</a>

<?php

$conn = mysqli_connect("localhost", "root", "", "db_internship");


if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $email = $_POST['txt3'];
    $bg = $_POST['txt4'];
    $mobile = $_POST['txt5'];
    $address = $_POST['txt6'];
    $pass = $_POST['txt7'];
    $dob = $_POST['txt8'];
    $pin = $_POST['txt9'];

    $ql = mysqli_query($conn, "insert into tbl_student(st_name,st_gender,st_email,st_bloodgroup,st_mobile,st_address,st_password,st_dob,st_pincode)
             values('{$name}','{$gender}','{$email}','{$bg}','{$mobile}','{$address}','{$pass}','{$dob}','{$pin}')");
   
    if($ql){
    echo "<script>alert('Record added');</script>";
    }
}

