<?php
if(isset($_REQUEST['directorName'])){
    $fp = fopen("./data/lab2.txt", 'a');
    if(!$fp)
    {
        echo("Помилка відкриття файлу");
        exit();
    }
    else {

        $name =  $_REQUEST['name'];
        $country =  $_REQUEST['country'];
        $gеnre =  $_REQUEST['gеnre'];
        $dateCreate =  $_REQUEST['dateCreate'];
        $budget = $_REQUEST['budget'];
        $directorName = $_REQUEST['directorName'];
        $directorLast = $_REQUEST['directorLast'];
        if ((empty($name) || empty($country) || empty($gеnre) || empty($dateCreate) || empty($budget) || empty($directorName)|| empty($directorLast) )) {
            echo "Error";
            exit();
        } else {
            fwrite($fp, "!" .$name . "~" . $country . '~' . $gеnre . '~' . $dateCreate . "~" . $budget . "~" . $directorName . "~" . $directorLast );
        }
    }
    fclose ( $fp );


}
?>
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
<div class="content">
    <div class="inf">
        <?php
        $fp = fopen("./data/lab2.txt", "r");
        $MyText="";
        if ($fp)
        {
            while (!feof($fp))
            {
                $MyText = fgets($fp, 999);
            };
            $mas = explode("!", $MyText);
            foreach ($mas as $key => $value){
                $mas[$key]=explode("~", $value);
            }

            $table="<table border='px'><tr>";
            foreach ($mas as $value){
                $table.="</tr><tr>";
            foreach ($value as $v) {

                $table.="<td>$v</td>";

            }
            }
            echo $table."</tr> </table>";

        }
        else echo "Ошибка при открытии файла";
        fclose($fp);
        ?>

    </div>
<script>clean()</script>
    <form id="file_form" action="" method="post">
        <input type="text" id="name" name="name" size="40" placeholder="Фільм"  required
               pattern="{1,59}" title="Люсі"><br>
        <input type="text" id="country" name="country"  placeholder="Країна"  required
               pattern="{1,59}" title="США"><br>
        <input type="text" id="gеnre" name="gеnre"  placeholder="жанр" required pattern="{1,59}"
              title="Драма/Милодрама"><br>
        <input type="date" id="dateCreate" name="dateCreate"  placeholder="Дата випуску" required
               pattern="[А-ЯЇІа-яії0-9\s.№-]{1,59}" title="12.12.2012"><br>
        <input type="number" id="budget" name="budget"  placeholder="Бюджет"  required
               pattern="[0-9.,]{1,59}"  step="1000" title="500000"><br>
        <input type="text" id="directorName" name="directorName"  placeholder="Імя режисера"  required
               pattern="[А-ЯІЇ][а-яії]{1,59}" title="Фредрік"><br>
        <input type="text" id="directorLast" name="directorLast"  placeholder="Фамілія режисера"  required
               pattern="[А-ЯІЇ][а-яії]{1,59}"  title="Берент"><br>
        <input type="submit" class="but" value="добавити"> <input type="reset" class="but" onclick="clean();" value="Очистити">
    </form >

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

    2018&copy; <a href="/"></a>

</footer>



</body>
</html>