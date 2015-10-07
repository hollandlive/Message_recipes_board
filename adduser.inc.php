<?php
/*Trying to play with
* PDO
*/
include_once('dbconfig.php');
if (!$db_con)
{
    echo "sorry, there is no connection with the DB";
    echo "<a href=\"index.php?content=register\">Try again</a><br>\n";
    echo "<a href=\"index.php\">Return to Home</a>\n";
    exit;
}

    echo "connectedss";
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$baduser = 0;
if (trim($username) == '')
{

   echo "<h2>Sorry, you must enter a user name.</h2><br>\n";
   echo "<a href=\"index.php?content=register\">Try again</a><br>\n";
   echo "<a href=\"index.php\">Return to Home</a>\n";
   $baduser = 1;
}
if (trim($password) == '')
{
   echo "<h2>Sorry, you must enter a password</h2><br>\n";
   echo "<a href=\"index.php?content=register\">Try again</a><br>\n";
   echo "<a href=\"index.php\">Return to Home</a>\n";
   $baduser = 1;
}
if ($password != $password2)
{
   echo "<h2>Sorry, you must enter a password</h2><br>\n";
   echo "<a href=\"index.php?content=register\">Try again</a><br>\n";
   echo "<a href=\"index.php\">Return to Home</a>\n";
   $baduser = 1;
} 
try
{
    $query = $db_con->prepare("SELECT username FROM user WHERE username == '$username'");
    $row = $query->fetch(PDO::FETCH_ASSOC);
    //check if there are registered users with $username OR $email
        if (
            //Returns the number of rows affected by the last SQL (PDO::rowCount)
            $query->rowCount() > 0 )
       {
        echo "username $username is taken";
        echo "<a href=\"index.php?content=register\">Try again</a><br>\n";
        echo "<a href=\"index.php\">Return to Home</a>\n";
        $baduser = 1;
    }
}
    catch(PDOException $e)
        {
            echo $e->getMessage();
        }

if ($baduser!=1)
    try
{
    $query1 = "INSERT INTO user (firstname, lastname, email, username, password) VALUES ('$firstname', '$lastname', '$email', '$username', PASSWORD('$password'))";
    // use exec() because no results are returned
    $db_con->exec($query1);  
    echo "New record created successfully";                                  
}
    catch(PDOException $e)
        {
            echo $e->getMessage();
        }
?>
<h3>Join the fun!!</h3>


<p>Register at Recipe Center to share your recipes and comments with others</p>


<h3>Please enter the following information</h3>


<form action="index.php" method="post">


<b>User Name:</b><br><input type="text" name="userid"><br>


<br />


<b>Password:</b><br><input type="password" name="password"><br>


<br />


<font size="1">Confirm Password:</font><br /> 


<input type="password" name="password2"><br>


<br />


<b>Full name:</b><br><input type="text" size="40" name="fullname"><br>


<br />


<b>E-mail address:</b><br><input type="text" size="50" name="email">


<p>Privacy Policy: we do not share e-mail addresses with others</p>


<input type="submit" value="Submit">


<input type="hidden" name="content" value="adduser">


<hr size="1" noshade="noshade">


</form>
