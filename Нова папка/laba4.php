
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Головна сторінка</title>
    <link href="./style/style.css" rel="stylesheet" type="text/css" >
    <script src="./js/js.js" ></script>
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
<div class="content"><br>
    <br>
    <form id="file_form" action="" method="get">
    <input type="text" id="name" name="name" size="40" placeholder="Фільм"  required
           pattern="{1,59}" title="Іванов"><input type="submit" value="Знайти фільм по назві" ><br>
    </form>
    <br>

        <?php
        if(isset($_REQUEST['name'])) {
            $surname =  $_REQUEST['name'];
            $fp = fopen("./data/lab2.txt", "r");
            $MyText = "";
            if ($fp) {
                while (!feof($fp)) {
                    $MyText = fgets($fp, 999);
                };
                $mas = explode("!", $MyText);
                foreach ($mas as $key => $value) {
                    $mas[$key] = explode("~", $value);
                }

                $table = "<table border='px'><tr>";
                foreach ($mas as $value) {
                    if (mb_strripos($value[0], $surname) !== false){
                        $table .= "</tr><tr>";
                    foreach ($value as $v) {

                        $table .= "<td>$v</td>";

                    }}
                }
                echo $table . "</tr> </table>";


    } else echo "Ошибка при открытии файла";
    fclose($fp);
    }?>

</div>


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