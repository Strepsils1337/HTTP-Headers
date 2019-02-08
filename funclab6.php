<?php
function conect(){
$link = mysqli_connect("localhost", "root","");
mysqli_select_db($link,"test") or die("Error:" . mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");
return $link;
}
function show(){
    $link =conect();
    $mas=[];
$query = "SELECT  `name`,`surname`,`date`,`school`,`faculty`,`specialty`,`gap`
FROM `person` as p 
INNER JOIN `university` as u ON p.`id`= u.`person_id`
INNER JOIN `school` as s ON p.`id`= s.`person_id`
INNER JOIN `gap` as g  ON p.`id`= g.`person_id`";
$resul = mysqli_query($link, $query) or die(mysqli_error($link));

$n = mysqli_num_rows($resul);
for ($i = 0; $i < $n; $i++) {
    $v = mysqli_fetch_assoc($resul);
    $mas[] = $v;
}
return  $mas;
}
function add($surname ,$name,$date,$school,$faculty,$specialty,$gap){
    $link =conect();
    if ((empty($surname) || empty($name) || empty($date) || empty($school) || empty($faculty) || empty($specialty) || empty($gap))) {
        echo "Error";
        exit();
    } else {
        echo "add";
        $query = "INSERT INTO `person`(`surname`,`name`,`date`) VALUES ('$surname',
                                            '$name',
                                            '$date')";
        mysqli_query($link, $query);
        $id=mysqli_insert_id($link);
        echo $id;

        $query = "INSERT INTO `school`(`person_id`,`school`) VALUES ('$id',
                                            '$school')";
        mysqli_query($link, $query);

        $query = "INSERT INTO `university`(`person_id`,`faculty`,`specialty`) 
                                           VALUES ('$id',
                                            '$faculty ',
                                            '$specialty')";
        mysqli_query($link, $query);

        $query = "INSERT INTO `gap`(`person_id`,`gap`) VALUES ('$id',
                                            '$gap')";
        mysqli_query($link, $query);


}
}


function sorts (){
    $link =conect();
    $mas=[];
    $query = "SELECT  `name`,`surname`,`date`,`school`,`faculty`,`specialty`,`gap`
FROM `person` as p 
INNER JOIN `university` as u ON p.`id`=u.`person_id`
INNER JOIN `school` as s ON p.`id`=s.`person_id`
INNER JOIN `gap` as g  ON p.`id`=g.`person_id`
order by g.`gap` DESC";
    $resul = mysqli_query($link, $query) or die(mysqli_error($link));

    $n = mysqli_num_rows($resul);
    for ($i = 0; $i < $n; $i++) {
        $v = mysqli_fetch_assoc($resul);
        $mas[] = $v;
    }
    return $mas ;
}
function fine($surname){
    $link =conect();
    $mas=[];
    $query = "SELECT  `name`,`surname`,`date`,`school`,`faculty`,`specialty`,`gap`
               FROM `person` as p 
               INNER JOIN `university` as u ON p.`id`=u.`person_id`
               INNER JOIN `school` as s ON p.`id`=s.`person_id`
               INNER JOIN `gap` as g  ON p.`id`=g.`person_id`
               where p.`surname` like '%$surname%'";
    $resul = mysqli_query($link, $query) or die(mysqli_error($link));

    $n = mysqli_num_rows($resul);
    for ($i = 0; $i < $n; $i++) {
        $v = mysqli_fetch_assoc($resul);
        $mas[] = $v;
    }
    return $mas ;

}


