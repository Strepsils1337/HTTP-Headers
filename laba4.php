<?
/*header('location: http://parser/new_img.jpg')*/
header('Refresh: 5; URL=http://www.google.com.ua/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Головна сторінка</title>
    <link href="./style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>

</header>
<div class="menu">
    <a href="laba1.php">Task 1 </a>
    <a href="laba2.php">Task 2 </a>
    <a href="laba3.php">Task 3 </a>
    <a href="laba4.php">Task 4 </a>
    <a href="laba5.php">Task 5 </a>
    

</div>
<div class="content">

    <table>
  <tr>
    <img src="/new_img.jpg">
    <?
/*header("Location: http://www.google.com.ua/");
/*header("Refresh: 5; URL=http://www.google.com.ua/");
  echo 'Через 5 секунд Вы будете автоматически перенаправлены на другую страницу.';
  exit;*/
?>
  </tr>
</table>

</div>    
<div class="menu">

    <a href="laba1.php">Task 1 </a>
    <a href="laba2.php">Task 2 </a>
    <a href="laba3.php">Task 3 </a>
    <a href="laba4.php">Task 4 </a>
    <a href="laba5.php">Task 5 </a>

</div>
<footer>
    2018&copy; 

</footer>


</body>
</html>