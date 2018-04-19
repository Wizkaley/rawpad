<?php
include_once("includes/connection.php");
include_once("includes/article.php");

$article = new Article;

  if(isset($_GET['id'])){
    //display data
    $id = $_GET['id'];
    $data = $article->fetch_data($id);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CMS Tutorial</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container">
<a href="index.php" id="logo">CMS</a>
  <h4><?php echo $data['article_title']; ?></h4>
  <small><?php echo date('l jS', $data['article_date']); ?></small>
    <p><?php echo $data['article_content']; ?></p>
    -------------------------------------------<br/>
    <a href="index.php">&larr; BACK</a>
    </div>

  </body>
</html>

<?php


  }else{
    header("Location: index.php");
    exit();
  }
 ?>
