<?php
$mas=[];

include "funclab6.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Головна сторінка</title>
    <link href="../style/style.css" rel="stylesheet" type="text/css" >
    <script src="../js/js.js" ></script>
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
<hr>
<div class="content" id="lab2">
    <div class="inf">

        <?php
        $mas =show();
        $table="<table border='px'><tr>";
        foreach ($mas as $value){
            $table.="</tr><tr>";
            foreach ($value as $v) {
                $table.="<td>$v</td>";
            }
        }
        echo $table."</tr> </table>";


        ?>

    </div>
    <script>clean()</script>
    <form id="file_form" action="" method="get">
        <input type="text" id="surname" name="surname" size="40" placeholder="Прізвище"  required
               pattern="[А-ЯІЇ][а-яії]{1,59}" title="Іванов"><br>
        <input type="text" id="name" name="name"  placeholder="Ім'я"  required
               pattern="[А-ЯІЇ][а-яії]{1,59}" title="Іван"><br>
        <input type="date" id="date" name="date"  placeholder="Дата народження"  required
               title="Дата народження"><br>
        <input type="text" id="school" name="school"  placeholder="Навчальний заклад, який закінчили "  required
               pattern="[А-ЯЇІа-яії0-9\s.№-]{1,59}" title="ЗОШ №12"><br>
        <input type="text" id="faculty" name="faculty"  placeholder="Факультет"  required
               pattern="[А-ЯІЇа-яії\s]{1,59}" title="математики та інформатики"><br>
        <input type="text" id="specialty" name="specialty"  placeholder="Спеціальність"  required
               pattern="[А-ЯІЇа-яії\s.]{1,59}" title="прикладна математика"><br>
        <input type="number" id="gap" name="gap"  placeholder="середній бал"  required
               pattern="[0-9.]{1,59}" min="0" max="12" step="0.01" title="11.9"><br>
        <input type="submit" class="but" value="добавити абітуріента"><input type="reset" class="but" onclick="clean();" value="очистити">

    </form >
    <?php

    if(isset($_REQUEST['name'])) {
        $surname =  $_REQUEST['surname'];
        $name =  $_REQUEST['name'];
        $date =  $_REQUEST['date'];
        $school =  $_REQUEST['school'];
        $faculty = $_REQUEST['faculty'];
        $specialty = $_REQUEST['specialty'];
        $gap =  $_REQUEST['gap'];
        add($surname, $name, $date, $school, $faculty, $specialty, $gap);
    }
    ?>


</div >
<hr>
<div class="content" id="lab3">

    <?php
    $mas=sorts();
    $table="<table border='px'><tr>";
    foreach ($mas as $value){
        $table.="</tr><tr>";
        foreach ($value as $v) {

            $table.="<td>$v</td>";

        }
    }
    echo $table."</tr> </table>";

    $a=[];
    foreach ($mas as $value){
        $f=true;
        foreach ($a as $item){
            if($item==$value['school']) {$f=false; break;}
        }
        if($f) $a[]=$value['school'];
    }

    echo "кількість шкіл = ".count($a);

    ?>

</div>
<hr>

<div class="content" id="lab4"><br>
    <br>
    <form id="file_form" action="" method="get">
        <input type="text" id="surname1" name="surnam1" size="40" placeholder="Прізвище"  required
               pattern="[А-ЯІЇа-яії]{1,59}" title="Іванов"><input type="submit" value="знайти студентів" ><br>
    </form>
    <br>

    <?php
    if(isset($_REQUEST['surname1'])) {
        $surname1 =  $_REQUEST['surname1'];
        $mas=fine($surname1);

        $table="<table border='px'><tr>";
        foreach ($mas as $value){
            $table.="</tr><tr>";
            foreach ($value as $v) {
                $table.="<td>$v</td>";
            }
        }
        echo $table."</tr> </table>";


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