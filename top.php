<?php
if(!empty($_POST['btn_submit'])){
    $name = $_POST["view_name"];
    $hobby = $_POST["hobby"];
    $food = $_POST["food"];
    $goal = $_POST["goal"];
}else{
    $name = null;
    $hobby = null;
    $food = null;
    $goal = null;
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>Zoom背景出力</title>
  </head>
  <body class="body_main">
      <div class="top-wrapper">
        <a href="index.html">⬅️</a>
      </div>
      <div class="card">
        <h2>#名前:<?=$name;?></h2>
        <hr>
        <h2>#趣味:<?=$hobby;?></h2>
        <h2>#好きな食べ物:<?=$food;?></h2>
        <h2>#目標:<?=$goal;?></h2>
      </div>
  </body>
</html>