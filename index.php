<?php
	include_once("includes/connection.php");
	include_once("includes/article.php");

	$article = new Article;
	$articles = $article->fetch_all();
?>

<html>
	<head>
		<title>CMS Tutorial</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div class="container">
<a href="index.php" id="logo">CMS</a>
		<ol>
			<?php foreach ($articles as $article) { ?>
			<li>
				<a href="article.php?id=<?php echo $article['article_id']?>">
					<?php echo $article['article_title'] ?>
				</a>
				-<small>posted : <?php echo date('l jS', $article['article_time']); ?></small>
			</li>
			<?php }?>
			<br><br>
			<small> <a href="admin/admin.php">Admin</a> </small>
		</ol>
		</div>
	</body>
</html>
