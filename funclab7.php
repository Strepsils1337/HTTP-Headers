<?php
class entrants
{
    protected $surname;
    protected $name;
    protected $date;
    protected $school;
    protected $faculty;
    protected $specialty;
    protected $gap;


    function __entrants($surname, $name,$date,$school,$faculty, $specialty, $gap) {
        $this->$surname = $surname;
        $this->$name = $name;
        $this->$date = $date;
        $this->$school = $school;
        $this->$faculty = $faculty;
        $this->$specialty = $specialty;
        $this->$gap = $gap;
    }

    function setSurname($surname) {
        $this->$surname = $surname;
    }
    function setName($name) {
        $this->$name = $name;
    }
    function setDate($date) {
        $this->$date = $date;
    }

    function setSchool($school) {
        $this->$school = $school;
    }

    function setFculty($faculty) {
        $this->$faculty = $faculty;
    }

    function setSpecialty($specialty) {
        $this->$specialty = $specialty;
    }

    function setGap($gap) {
        $this->$gap = $gap;
    }

    function getSurname() {
        return $this->surname;
    }
    function getName() {
        return $this->name;
    }
    function getDate() {
        return $this->date;
    }

    function getSchool() {
        return $this->school;
    }

    function getFculty() {
        return $this->faculty;
    }

    function getSpecialty() {
        return $this->specialty;
    }
    function getGap() {
        return $this->gap;
    }
    function insertDB($link) {


            echo "add";
            $query = "INSERT INTO `person`(`surname`,`name`,`date`) VALUES ('$this->surname',
                                            '$this->name',
                                            '$this->date')";
            mysqli_query($link, $query);
            $id=mysqli_insert_id($link);
            echo $id;

            $query = "INSERT INTO `school`(`person_id`,`school`) VALUES ('$id',
                                            '$this->school')";
            mysqli_query($link, $query);

            $query = "INSERT INTO `university`(`person_id`,`faculty`,`specialty`) 
                                           VALUES ('$id',
                                            '$this->faculty ',
                                            '$this->specialty')";
            mysqli_query($link, $query);

            $query = "INSERT INTO `gap`(`person_id`,`gap`) VALUES ('$id',
                                            '$this->gap')";
            mysqli_query($link, $query);


        }
    }

    function select_order_by_number($link){
        $query = "SELECT * FROM `table1` ORDER BY `number`";
        $result = mysqli_query($link, $query);
        echo "Відсортовано по кількості студентів<br><br><table><tr><th>Назва факультету</th><th>Рік заснування</th><th>Кількість</th><th>Декан</th><th>Адреса</th></tr>";
        $row = mysqli_fetch_row($result);
        while ($row){
            echo "<tr>";
            foreach($row as $key => $value){
                if($key != "id"){
                    echo "<td>{$value}</td>";
                }
            }
            echo "</tr>";
            $row = mysqli_fetch_row($result);
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    function select_where_surname($link,$surneme_temp){
        $query = "SELECT * FROM `table1` WHERE `surname` LIKE '%$surneme_temp%'";
        $result = mysqli_query($link, $query);


        echo "<table width=100%><tr><th>Назва факультету</th><th>Рік заснування</th><th>Кількість</th><th>Декан</th><th>Адреса</th></tr>";

        $row = mysqli_fetch_row($result);
        while ($row){
            echo "<tr>";
            foreach($row as $key => $value){
                if($key != "id"){
                    echo "<td>{$value}</td>";
                }
            }
            echo "</tr>";
            $row = mysqli_fetch_row($result);
        }
        echo "</table>";
    }
    function select_sum_number($link){

        $query = "SELECT SUM(`number`) AS OrderTotal FROM `table1`";
        $sum_student = mysqli_query($link, $query);
        $row = mysqli_fetch_row($sum_student);
        if ($row){
            echo "<br>Загальна кількість студентів - ".$row['0']."<br><br><br>";
            mysqli_free_result($sum_student);
        }
    }

}
function conect(){
    $link = mysqli_connect("localhost", "root","");
    mysqli_select_db($link,"test") or die("Error:" . mysqli_error($link));
    mysqli_query($link, "SET NAMES 'utf8'");
    return $link;
}


$dep = new entrants("YASA", "1999-12-12", 1234, "ASGF K.L.", "WEGG");
$dep->select_order_by_number($link);
$dep->select_sum_number($link);
echo "У прізвищі є _ев_";
$dep->select_where_surname($link,"ев");


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
