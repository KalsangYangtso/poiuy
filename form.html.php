<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title></title>
        <meta http-equiv="content-type"
              content="text/html; charset=utf-8"/>
       
  
    </head>
    <body>
                
      <form action="welcome.php" method="post"> 
           <fieldset>
    
  
    <legend>SIGN UP</legend>
    <br>
 
Email:</br>
  <input type="text" name="email"/>
  <br>
 
 
  Password:<br>
  <input type="password" name="cpassword"/>
  </br>
  </fieldset>
    <br>
  <input type="submit" value="Register"/>
 </br>
 
</fieldset>
</form>
        <br></br>
        <p>Already have an account?</p>
        <a href="home.php">Click Here</a>
        <?php
      

        $link = mysqli_connect('localhost', 'kay', 'dtycts16');

        if (!$link) {
            $output = 'Unable to connect to the Database Server.';
            include'output.html.php';
            exit();
        }
        if (!mysqli_set_charset($link, 'utf8')) {
            $output = 'Unable to set database connection encoding.';
            include'output.html.php';
            exit();
        }
        if (!mysqli_select_db($link, 'kay')) {
        
            include'output.html.php';
            exit();
        }
       
        include'output.html.php';
        
       
        if(!mysqli_query($link, $sql))
        {
           
            include 'output.html.php';
            exit();
        }
        
    
        include 'output.html.php';
      

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

$sql = "INSERT INTO Customer (email , password)
VALUES ('john@example.com', *******) ";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
    </body>
</html>
