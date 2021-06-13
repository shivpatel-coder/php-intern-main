<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <form action="process.php" method="post">
            <table
            <tr>
                <td>Name : </td> 
                <td><input type="text" name="txt1"/></td>
            </tr>
            <tr>
                <td>Age : </td><!-- Age -->    
                <td><input type="number" min="0" max="100" name="txt2"/></td>
            </tr>
            <tr>
                <td>Mobile No : </td><!-- comment -->
                <td><input type="number" min="1000000000" max="9999999999" name="txt3"/></td>
            </tr>
            <tr>
                <td>City : </td><!-- comment -->
                <td><input type="text" name="txt4"</td>
            </tr>
            <tr>
                <td><input type="submit"/></td>
                <td><input type="reset"/></td><!-- comment -->
            </tr>
            </table>
        </form>
        
    </body>
</html>
