<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" lang="ru">
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Голландия, Нидерланды, новости, на русском, русская голландия, форум, объявления, имиграция, эмиграция, роттердам, амстердам, доска объявлений, жилье голландия, работа нидерланды" />
<meta name="description" content="Dutchnews.ru - Нидерланды: Новости на русском. Dutchnews.ru - Dutch news in russian. Nederlandse nieuws in Russisch" />

<title>Нидерланды: Новости на русском</title>
</head>
<body>
<div id="header">
	<?php include("header.inc.php"); ?>
</div>
<div id="navhor">
	<?php include("navhor.inc.php"); ?>
</div>
<div id="content">
<div id="nav">
	<?php include("nav.inc.php"); ?>
</div>
<div id="ads">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Dutchnews-forum1 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-9193385610386562"
     data-ad-slot="7593323739"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div id="main">
	<?php
		if (!isset($_REQUEST['content']))
			include("main.inc.php");
		else
		{
		$content = $_REQUEST['content'];
		$nextpage = $content . ".inc.php";
		include($nextpage);
		}
		?>
</div>
<div id="news">
	<?php include("news.inc.php"); ?>
</div>
</div>
<div id="footer">
<?php include("footer.inc.php"); ?>
</div>
</body>
</html>