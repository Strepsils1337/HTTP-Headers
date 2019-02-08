<?php


$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "test") or die("Error:" . mysqli_error($link));


$query = "SELECT  * FROM `php.tasks`";
$resul = mysqli_query($link, $query) or die(mysqli_error($link));

$n = mysqli_num_rows($resul);
for ($i = 0; $i < $n; $i++) {
    $v = mysqli_fetch_assoc($resul);
    $mas[] = $v;
}
if (isset($_REQUEST['name'])) {
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "test") or die("Error:" . mysqli_error($link));
    $country = $_REQUEST['surname'];
    $name = $_REQUEST['name'];
    $gеnre = $_REQUEST['gеnre'];
    $dateCreate = $_REQUEST['dateCreate'];
    $budget = $_REQUEST['budget'];
    $directorName = $_REQUEST['directorName'];
    $directorLast = $_REQUEST['directorLast'];
    if ((empty($country) || empty($name) || empty($gеnre) || empty($dateCreate) || empty($budget) || empty($directorName) || empty($directorLast))) {
        echo "Error";
        exit();
    } else {
        $query = "INSERT INTO `php.tasks` VALUES (
                                               '$name',
                                          '$country',  
                                            '$gеnre',
                                            '$dateCreate',
                                            '$budget ',
                                            '$directorName',
                                            '$directorLast')";
        $resul = mysqli_query($link, $query);

    }

    header('Location: laba5.php');

}

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