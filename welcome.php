<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
                
<?php
        $username = $_REQUEST['username'];

        if ($username == 'Kevin Yank' )
        {
        echo 'Welcome, oh glorious leader!';
        }
        else
        {
        echo 'Welcome to our web site, ' .
        
        htmlspecialchars($username, ENT_QUOTES, 'UTF-8') . '!';
        }
      
if (!isset($_REQUEST['firstname']))
{
include 'form.html.php';
}
else
{
  $username = $_REQUEST['username'];

  if ($username == 'Kevin' and $lastname == 'Yank')
  {
$output =
 'Welcome, oh glorious leader!';
  }
  else
  {
$output =
 'Welcome to our web site, ' .
        htmlspecialchars($username, ENT_QUOTES, 'UTF-8') . ' ' .
 
  
include 'welcome.html.php';
}

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

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>

        <a href="cart.html.php">Shopping Cart</a>
          <a href="index.php">Home</a>
          

    </body>
</html>