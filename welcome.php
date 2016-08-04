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
      
        ?><br>
        

        <a href="cart.html.php">Shopping Cart</a>
        <br>
          <a href="index.php">Home</a>
          <br>

    </body>
</html>