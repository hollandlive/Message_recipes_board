<h2 align="center">A simple Message Board</h2><br>


<?php


$con = mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD) or die('Could not connect to server');


mysql_select_db(DATABASE_NAME) or die('Could not connect to database');

$query = "SELECT recipedid,title,poster,shortdesc from recipes order by recipedid desc limit 0,5";


$result = mysql_query($query) or die('Sorry, could not get recipes at this time ');


if (mysql_num_rows($result) == 0)


{


   echo "<h3>Sorry, there are no recipes posted at this time, please try back later.</h3>";


} else


{


   while($row=mysql_fetch_array($result, MYSQL_ASSOC))


   {


       $recipedid = $row['recipedid'];


       $title = $row['title'];


       $poster = $row['poster'];


       $shortdesc = $row['shortdesc'];


       echo "<a href=\"index.php?content=showrecipe&id=$recipedid\">$title</a> submitted by $poster<br>\n";


       echo"$shortdesc<br><br>\n";


   }


}


?>