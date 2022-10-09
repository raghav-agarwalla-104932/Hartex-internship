<!DOCTYPE html>
<html>
    <body>
        <?php
        $employee_id= $_POST['employee_id'];
        $start_date= $_POST['sdate'];
        $end_date= $_POST['rdate'];
        $reason = $_POST['reason'];
        $type_leave= $_POST['type_leave'];
        $number_days= $_POST['number_days'];
        $address= $_POST['address'];
        $recommendor= $_POST['reccommendor'];
        $conn= mysqli_connect('localhost','root','','emplyee') or die ("co".mysqli_connect_error());
        $query = "INSERT INTO `employee_leave`(employee_id,sdate,rdate,reason,type_leave,number_days,`address`,reccommendor) VALUES ('$employee_id,$start_date,$end_date,$reason,$type_leave,$number_days,$address,$recommendor')";
        ?>
    </body>
</html>