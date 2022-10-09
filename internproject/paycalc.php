<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php

        function paycalculation($days,$mdays){
        $basic=7500;
        $EB=round(($basic*$days)/$mdays);
        return $EB;
        }
        
        $conn= mysqli_connect('localhost','root','','emplyee') or die ("co".mysqli_connect_error());
        $empi= $_POST['employee_id'];
        $aquery = "SELECT * from `employee pay` WHERE Employee_id = $empi";
        $samaan = mysqli_query($conn,$aquery);
        $month = 23;
        $basicpay= paycalculation($samaan['attendence'],$month);
        $overtime= round(($samaan['ovetime_hrs']*$grosso)/208.0);
        $gross= $basicpay*4 + $overtime + 70;
        $ESI= round($basicpay*2)*0.12;
        $PF= $gross*0.0075;
        $PT=0;
        if ($overtime>21000){
            $PT = 200;

        }
        $deductions = $ESI+$PF+$PT;
        $net = $gross-$deductions;
        $grosso= 1;

        echo "basic pay: " + $basicpay;
        echo "earned DA: " + $basicpay;
        echo "earned CA: " + $basicpay;
        echo "earned others: " + $basicpay;
        echo "washing: 70";
        echo "overtime: " + $overtime;
        echo "gross: " + $gross;
        echo "ESI: " + $ESI;
        echo 'PF: ' + $PF;
        echo 'PT: ' + $PT;
        echo 'deuctions: ' + $deductions;
        echo 'net: ' + $net;
        ?>
    </body>
</html>