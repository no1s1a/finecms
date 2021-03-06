<!DOCTYPE html>
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="/finecms/finecms/views/style.css">

	<meta charset="utf-8">
	<title>FineCMS</title>
</head>
<body>
<header></header>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1>Fine CMS</h1>
			</div>
		<?php foreach($articles as $a): ?>
			<div class="col-lg-4 text-center article">
				<h2><a href="article.php?id=<?=$a['id']?>"><?=$a['title'] ?></a></h2>
				<em>Опубликовано: <?=$a['date']?></em>
				<p><?=$a['content']?></p>
			</div>
		<?php endforeach ?>
		</div>
	</div>
</section>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<small>Copyright by no1s1a 2017.</small>
			</div>
		</div>
	</div>
</footer>
</body>
</html>