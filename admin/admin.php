<?php
session_start();
include_once('../includes/connection.php');
if(isset($_SESSION['logged_in'])){
  //display index;

  //echo "hello";
  //session_destroy();
  //header('Location: index.php');
}else{
  //display login
  if(isset($_POST['username'],$_POST['password'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if(empty($username) or empty($password)){
      $error = "All fields are required";
    }else{
      $q = $pdo->prepare('SELECT * from users where user_name=? and password=?');
       $q->bindValue(1, $username);
       $q->bindValue(2, $password);
       $q->execute();
       $num = $q->rowCount();
       if($num == 1){
         $_SESSION['logged_in'] = true;
         $_SESSION['username'] = $username;
         header('Location: index.php');
       }else{
         $error='Wrong Details !';
       }
    }
  }
  ?>
  <html>
  	<head>
  		<title>CMS Tutorial</title>
  		<link rel="stylesheet" href="../css/style.css" />
  	</head>
  	<body>
  		<div class="container">
  <a href="admin.php" id="logo">CMS</a>

  <br><br>
      <?php if(isset($error)){?>
        <small style="color:#aa0000;"><?php echo $error; ?></small>
        <?php }  ?>
        <br><br>
        <form action="admin.php" method="post">
          <label for="username">Username</label>
            <input type="text" name="username" placeholder="username" />
          <label for="password">Password</label>
          <input type="password" name="password" placeholder="password"/>
          <input type="submit" name="Login" value="Login"/>
        </form>
  		</div>
  	</body>
  </html>
  <?php   }   ?>
