<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>


        <form action="welcome.php"method="post">
            <fieldset>
                <legend>Login</legend>
                <div><label for="firstname">Username:
                        <input type="text" name="username" id="username"/></label>
                </div>
                <br>
                <div><label for="password">Password:
                        <input type="password" name="password" id="password"/></label></div>
                        <br>
                        <div>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="submit" value="Login"/></div>
         
              
            <p>Don't have an account?</p>
        <a href="form.html.php">Click Here</a>
           </fieldset>
        </form>
        <?php
if (!isset($_REQUEST['firstname']))
{
include 'form.html.php';
}
else
{
  $firstname = $_REQUEST['firstname'];
  $lastname = $_REQUEST['lastname'];
  if ($firstname == 'Kevin' and $lastname == 'Yank')
  {
$output =
 'Welcome, oh glorious leader!';
  }
  else
  {
$output =
 'Welcome to our web site, ' .
        htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8') . ' ' .
        htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8') . '!';
  }
include 'welcome.html.php';
}
?>
    </body>
</html>

</body>
</html>
