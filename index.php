<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 <?php
$servername = "localhost";
$username = "kay";
$password = "dtycts16";
$dbname = "kay";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $email = $_POST['email'];
  $cpassword = $_POST['cpassword'];


 $sql = 'INSERT INTO CUSTOMER ( email, cpassword)'. 'values (' . "\"$email\"" . ',' . "\"$cpassword\");";
$result = mysql_query($sql);

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




mysqli_close($conn);
?> 
    </body>
</html>