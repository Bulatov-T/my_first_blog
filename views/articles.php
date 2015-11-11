<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" lang="ru">
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >
</head>
<body>
	<div class="container">
		<h1>Мой первый блог!</h1>
		<?php foreach($articles as $a):?>
		<div class="article">
			<h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></h3>
		<em>Опубликовано:<?=$a['date']?></em>
				<p><?=$a['content']?></p>
		</div>
		<?php endforeach?>
	</div>
			<footer>Мой первый блог<br>Copyright &copy;</footer>
		</div>
</body>
	</html>