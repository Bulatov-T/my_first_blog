<?php
	require_once("database.php");
	require_once("models/articles.php");

	$article = articles_get('id');

	include("views/article.php");
?>