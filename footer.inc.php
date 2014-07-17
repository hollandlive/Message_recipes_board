<html>
<head>
<script type="text/javascript">
<!-->
var image1=new Image()
image1.src="images/001.png"
var image2=new Image()
image2.src="images/002.png"
var image3=new Image()
image3.src="images/003.png"
//-->
</script>
</head>
<body>
<div id="footer">
<a href="index.php"><strong>Главная</strong>
<a href="http://dutchnews.ru" target="_blank"><strong>Новости</strong></a>
<a href="index.php?content=register"><strong>Регистрация</strong></a>
<a href="index.php?content=register"><strong>Логин</strong></a>
<a href="index.php?content=register"><strong>Password</strong></a>
<a href="mailto:dutchnewsru@gmail.com"><font size="1">Feedback</font></a><font size="1"> |  &copy; ArAx <?php echo "2012- " . date("Y"); ?></font>
</div>
<a href="http://fotosarp.esy.es" target="_blank"><img src="images/001.png" name="slide" width="468px" height="100px" align="center"></a>
<script type="text/javascript">
<!--
var step=1
function slideit(){
document.images.slide.src=eval("image"+step+".src")
if(step<3)
step++
else
step=1
setTimeout("slideit()",2500)
}
slideit()
//-->
</script>
</body>
</html>