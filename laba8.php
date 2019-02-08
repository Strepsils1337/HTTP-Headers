<?php
date_default_timezone_set('Europe/Moscow');
$date_all = array('9:40','11:10','12:50','23:30');
$date_now = new DateTime();
$i = 0;
$date = new DateTime($date_now->format('Y-m-d').' '. $date_all[$i]);
while ($i < count($date_all) && $date < $date_now){
    ++$i;
    $date = new DateTime($date_now->format('Y-m-d').' '. $date_all[$i]);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Головна сторінка</title>
    <link href="./style/style.css" rel="stylesheet" type="text/css" >
</head>
<body>
        <header>

                <img src="http://year.pp.ua/wp-content/uploads/2017/10/05ff1214e09478347e221ef2723b472e.jpg">

        </header>
        <div class="menu" >
            <a href="laba1.php">laba 1  </a>
            <a href="laba2.php">laba 2  </a>
            <a href="laba3.php">laba 3  </a>
            <a href="laba4.php">laba 4  </a>
            <a href="laba5.php">laba 5  </a>
            <a href="laba6.php">laba 6  </a>
            <a href="laba7.php">laba 7  </a>
            <a href="laba8.php">laba 8  </a>
            <a href="laba9.php">laba 9  </a>

        </div>
        <div class="content">
            <form id="file_form" action="" method="post">
                <label>
                    Дата і час народження<br>
                    <input type="datetime-local" class="data" name="data" placeholder="Дата народження!">
                </label>
                <input type="submit" class="but" value="Скільки прожили хвилин">
            </form >
            <br>

<?php
if(isset($_REQUEST['data'])) {
    $xv = time() - strtotime($_REQUEST['data']);
    echo 'ви прожили хвилин  ' . $xv . '  хвилин';

}
?>
        </div >
        <div class="menu" >
            <a href="laba1.php">laba 1  </a>
            <a href="laba2.php">laba 2  </a>
            <a href="laba3.php">laba 3  </a>
            <a href="laba4.php">laba 4  </a>
            <a href="laba5.php">laba 5  </a>
            <a href="laba6.php">laba 6  </a>
            <a href="laba7.php">laba 7  </a>
            <a href="laba8.php">laba 8  </a>
            <a href="laba9.php">laba 9  </a>

        </div>
        <footer>
2018&copy; <a href="/">Кіно портал</a>

        </footer>



</body>
</html>