<?php
	require_once("views/database.php");
	require_once("models/articles.php");

	$articles = articles_all();

	include("views/articles.php");
  ?>