<?header('Refresh: 50; URL=http://parser/new_img.jpg');
//print_r ($_SERVER);
$headers =  getallheaders();
foreach($headers as $key=>$val){
  echo $key . ': ' . $val . '<br>';
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

    
</header>

<div class="menu">
    <a href="laba1.php">Task 1 </a>
    <a href="laba2.php">Task 2 </a>
    <a href="laba3.php">Task 3 </a>
    <a href="laba4.php">Task 4 </a>
    <a href="laba5.php">Task 5 </a>
    

</div>


<div class="content">
 
 <?

   /* $filename="newimg.jpg";
    $file_name="new_img.jpg";
    header("Cache-control: private");
    header("Content-type: application/jpg");
    header("Content-Length: ".filesize($filename));
    header("Content-Disposition: filename=".$file_name);
    readfile($filename);*/
    var_dump(headers_list());
 ?>   

</div>


    <div class="menu">
    <a href="laba1.php">Task 1 </a>
    <a href="laba2.php">Task 2 </a>
    <a href="laba3.php">Task 3 </a>
    <a href="laba4.php">Task 4 </a>
    <a href="laba5.php">Task 5 </a>
    

</div>
    <footer>

        2018&copy; <a href="/">Кіно портал</a>

    </footer>



</body>
</html>