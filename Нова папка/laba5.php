<?php
$mas=[];

include "funclab5.php";?>
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
<hr>
<div class="content" id="lab2">
    <div class="inf">
        <?php
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
<hr>
<div class="content" id="lab3">

        <?php

            $mas=array_sort($mas, 'budget');
            $table="<table border='px'><tr>";
            foreach ($mas as $value){
                $table.="</tr><tr>";
                foreach ($value as $v) {

                    $table.="<td>$v</td>";

                }
            }
            echo $table."</tr> </table>";

            $a=[];
        $count=0;
        $sumBudget=0;
        foreach ($mas as $value) {
            if(strtolower(trim($value['country']))=="Україна"){

                $count++;
                $sumBudget+=$value['budget'];
            }
        }
        if($count==0){
            echo "Нема фільмів сняті в Україні ";
        }
        else{
            $s=$sumBudget/$count;
            echo "Середній бюджет фільма в Україні= ".$s;
        }

        ?>

    </div>
    <hr>

<div class="content" id="lab4"><br>
    <br>
    <form id="file_form" action="" method="get">
        <input type="text" id="name" name="name" size="40" placeholder="Фільм"  required
               pattern="{1,59}" title="Іванов"><input type="submit" value="Знайти фільм по назві" ><br>
    </form>
    <br>

        <?php

        if(isset($_REQUEST['name'])) {
            $name =  $_REQUEST['name'];



                $table = "<table border='px'><tr>";

                foreach ($mas as $value) {
                    if (mb_strripos($value['name'], $name) !== false){
                        $table .= "</tr><tr>";
                        foreach ($value as $v) {

                            $table .= "<td>$v</td>";

                        }}
                }
                echo $table . "</tr> </table>";


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