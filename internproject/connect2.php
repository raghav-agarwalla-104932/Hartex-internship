<?php

     if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $conn= mysqli_connect('localhost','root','','emplyee') or die ("co".mysqli_connect_error());
            $_firstname = $_POST['firstname'];
            $_lastname = $_POST['lastname'];
            $_cardcode = $_POST['cardcode'];
            $_aadhar = $_POST['aadhaar'];
            $_mobile = $_POST['mobile'];
            $_phone = $_POST['phone'];
            $_email = $_POST['email'];
            $_address = $_POST['address'];
            $_city = $_POST['city'];
            $_state = $_POST['state'];
            $_pincode = $_POST['pincode'];
            $_country = $_POST['country'];
            $_correspondencea = $_POST['correspondencea'];
            //$_entityt = $_POST['entityt'];
            $_grade = $_POST['grade'];
            $_production_job_id = $_POST['production_job_id'];
            //$_phonea = $_POST['phonea'];
            $_DOB = $_POST['DOB'];
            $_DOJ = $_POST['DOJ'];
            $_nominee = $_POST['nominee'];
            $_DOC = $_POST['DOC'];
            $_DOE = $_POST['DOE'];
            $_bank_acc = $_POST['bank_acc'];
            $_bank_acc = 'active';
            //$_banka = $_POST['banka'];
            $_bank_ifsc = $_POST['bank_ifsc'];
            $_holiday = $_POST['holiday'];
            $_gender = $_POST['gender'];
            $_marital = $_POST['marital'];
            $_religion = $_POST['religion'];
            /*if ($_banka == 'active' && $_phonea =='active'){
                $acc_a = 'active';
            }
            else{$acc_a='not active';}*/
            $dutyhrs = 12; 
            $probationdays = 240;
            $aquery= 'UPDATE `employee data` SET firstname=$_firstname,lastname=$_lastname,cardcode=$_cardcode,aadhar=$_aadhar,mobile=$_mobile,phone=$_phone,email=$_email,`address`=$_address,city=$_city,`state`=$_state,pincode=$_pincode,country=$_country,correspondencea=$_correspondencea,grade=$_grade,production_job_id=$_production_job_id,DOB=$_DOB,DOJ=$_DOJ,nominee=$_nominee,DOC=$_DOC,DOE=$_DOE,bank_acc=$_bank_acc,bank_ifsc,=$_bank_ifsc,holiday=$_holiday,gender=$_gender,marital=$_marital,religion=$_religion,dutyhrs=$dutyhrs,probationdays=$probationdays WHERE Employee_id=$empi';
            $result = mysqli_query($conn,$query);
            if ($result){ echo 'user updated';}
            else
            {echo mysqli_error($conn);}
        }
?>