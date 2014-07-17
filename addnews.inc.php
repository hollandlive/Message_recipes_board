<?php
$date = date("Y-m-d");
$title = $_POST['title'];
$poster = $_POST['poster'];
$article = $_POST['article'];
if (trim($title == ""))
{
echo "<h2>Please enter the title of the news</h2>\n";
}
else
$con = mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD,) or  die('Sorry, could not connect to server');
mysql_select_db(DATABASE_NAME) or die('Sorry, could not connect to database');
$query = "INSERT INTO news (date, poster, title, article)" .
          " VALUES ('$date', '$poster', '$title', '$article')";
$result = mysql_query($query);
if ($result)
{ 
echo "<h2>News posted</h2>\n";
}
else
{
echo "<h2>Sorry, there was a problem posting your news</h2>\n";
}
echo "$poster posted $title on $date<br>\n";
echo "<br><br>\n";
echo "$article<br><br>\n";
echo "<br><br>\n";
?>

