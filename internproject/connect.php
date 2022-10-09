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

            $query = "INSERT INTO `employee data`(firstname,lastname,cardcode,aadhar,mobile,phone,email,`address`,city,`state`,pincode,country,correspondencea,grade,production_job_id,DOB,DOJ,nominee,DOC,DOE,bank_acc,bank_ifsc,holiday,gender,marital,religion,dutyhrs,probationdays) VALUES ('$_firstname','$_lastname','$_cardcode','$_aadhar','$_mobile','$_phone','$_email','$_address','$_city','$_state','$_pincode','$_country','$_correspondencea','$_grade','$_production_job_id','$_DOB','$_DOJ','$_nominee','$_DOC','$_DOE','$_bank_acc','$_bank_ifsc','$_holiday','$_gender','$_marital','$_religion','$dutyhrs','$probationdays')";

            $result = mysqli_query($conn,$query);

            if ($result){ echo 'user registred';}
            else
            {echo mysqli_error($conn);}
        }
?>