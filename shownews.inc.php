<div id="table_forum">
<h2 align="center">Latest Cooking News</h2><br>
<?php
$con = mysqli_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME) or die('Could not connect to server');
$newsid = $_GET['id'];
$query = "SELECT title,date,article from news WHERE newsid = $newsid";
$result = mysqli_query($con, $query) or die('Sorry, could not get news articles');
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$date = $row['date'];
$title = $row['title'];
$article = $row['article'];
echo "<br>$date - <b>$title</b><br>$article<br><br>";

?>
</div>