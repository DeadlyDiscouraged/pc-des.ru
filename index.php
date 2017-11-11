<?php
include 'inc/db.php';

// Получаем первые 10 статей, которые будут видны изначально
$res = mysqli_query($db, "SELECT * FROM `articles` ORDER BY `article_id` DESC LIMIT 10");

// Формируем массив из 10 статей
$articles = array();
while($row = mysqli_fetch_assoc($res))
{
    $articles[] = $row;
}
?>

<!DOCTYPE HTML>
<html>

<head>
	<meta charset = "utf-8" />
	<title>Все статьи</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="/css/style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
    
</head>

<body>

<div class="container" id="articles">
<?php foreach ($articles as $article): ?>
		<h2><?php echo $article["title"];?></h2>
		<p><?php echo $article["text"];?></p>
		<p><?php echo $article["date"];?></p>
<?php endforeach; ?>
</div>
<div id="fountainG">
	<div id="fountainG_1" class="fountainG"></div>
	<div id="fountainG_2" class="fountainG"></div>
	<div id="fountainG_3" class="fountainG"></div>
	<div id="fountainG_4" class="fountainG"></div>
	<div id="fountainG_5" class="fountainG"></div>
	<div id="fountainG_6" class="fountainG"></div>
	<div id="fountainG_7" class="fountainG"></div>
	<div id="fountainG_8" class="fountainG"></div>
</div>

</body>
</html>