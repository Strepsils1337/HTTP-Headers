
<?php
function array_sort($array, $on)
{
$new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

                asort($sortable_array);



        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
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

            $mas=array_sort($mas, 4);


            $table="<table border='px'><tr>";
            foreach ($mas as $value){
                $table.="</tr><tr>";
                foreach ($value as $v) {

                    $table.="<td>$v</td>";

                }
            }
            echo $table."</tr> </table>";


        $count=0;
        $sumBudget=0;

            foreach ($mas as $value) {
                /*var_dump(strtolower (trim($value[1])));
                var_dump($count);
                var_dump($sumBudget);*/
                if(strtolower(trim($value[1]))=="Україна"){

                    $count++;
                    $sumBudget+=$value[4];
                }
            }
            if($count==0){
                echo "Нема фільмів сняті в Україні ";
            }
            else{
                $s=$sumBudget/$count;
                echo "Середній бюджет фільма в Україні= ".$s;
        }


        }
        else echo "Ошибка при открытии файла";
        fclose($fp);
        ?>

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