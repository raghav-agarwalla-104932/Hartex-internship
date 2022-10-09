<?php
    $conn= mysqli_connect('localhost','root','','emplyee') or die ("co".mysqli_connect_error());
    $empi= $_REQUEST['employee_id'];
    $aquery = "SELECT * from `employee data` WHERE Employee_id = $empi";
    $result = mysqli_query($conn,$aquery);
    $samaan = $result->fetch_assoc();

?>
<html>
    <link rel="stylesheet" href="style.css">
    <style><?php include 'style.css'?></style>
    <form action='connect2.php' method='POST' style="color:#43464B">
        <label for='employee_id'>placeholder don't change</label>
        <input type="number" name='employee_id'><br><br>

        <label for="firstname">First name</label>
        <input type='text' name='firstname' id="firstname" value="<?=$samaan['firstname']?>"> <br> <br>

        <label for="lastname">Last name</label>
        <input type='text' name='lastname' id="lastname" value="<?=$samaan['lastname']?>"> <br> <br>

        <label for="cardcode">Card code</label>
        <input type='text' name='cardcode' id="cardcode" value="<?=$samaan['cardcode']?>"> <br> <br>

        <label for="aadhaar">aadhar number</label>
        <input type='text' name='aadhaar' id="aadhaar" value="<?=$samaan['aadhar']?>"> <br> <br>

        <label for="mobile">mobile number</label>
        <input type='text' name='mobile' id="mobile" value="<?=$samaan['mobile'] ?>">
        <input type="checkbox" name='phonea' id="phonea" value="active"/> <br> <br>

        <label for="phone">phone number</label><br>
        <input type='text' name='phone' id="phone" value="<?=$samaan['phone']?>"> <br> <br>

        <label for="email">email address</label><br>
        <input type='text' name='email' id="email" value="<?=$samaan['email']?>"> <br> <br>

        <label for="address">address</label><br>
        <input type='text' name='address' id="address" value="<?=$samaan['address']?>"> <br> <br>

        <label for="city">city</label><br>
        <input type='text' name='city' id="city" value="<?=$samaan['city']?>"/> <br> <br>

        <label for="state">state </label><br>
        <input type='text' name='state' id="state" value="<?=$samaan['state']?>" > <br> <br>

        <label for="pincode">pincode</label><br>
        <input type='text' name='pincode' id="pincode" value="<?=$samaan['pincode']?>"/> <br> <br>

        <label for="country">country</label><br>
        <input type='text' name='country' id="country" value="<?=$samaan['country']?>"/> <br> <br>

        <label for="correspondencea">entity type</label><br>
        <input type='text' name='correspondencea' id="correspondencea" value="<?=$samaan['correspondecea'] ?>"> <br> <br>

        <label for="entityt">entity type</label><br>
        <select id="entityt" name="entityt" value="<?=$samaan['entityt']?>">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
        </select><br>
        <label for="grade">grade</label><br>
        <select id="grade" name="grade" value="<?=$samaan['grade']?>">
            <option value=10>10</option>
            <option value=20>20</option>
            <option value=30>30</option>
        </select><br>
        <label for="production_job_id">production job id</label><br>
        <input type='text' name='production_job_id' id="production_job_id" value="<?=$samaan['production_job_id']?>" > <br> <br>

        <label for="DOB">date of birth</label><br>
        <input type='date' name='DOB' id="DOB" value="<?=$samaan['DOB']?>"> <br> <br>

        <label for="DOJ">date of joining</label><br>
        <input type='date' name="DOJ" id="DOJ" value="<?=$samaan['DOJ']?>"><br><br> 

        <label for="nominee">nominee</label><br>
        <input type='text' name='nominee' id="nominee" value="<?=$samaan['nominee']?>" ><br><br>

        <label for="DOC">date of confirmation</label><br>
        <input type="date" name="DOC" id="DOC" value="<?=$samaan['DOC']?>"><br><br>

        <label for="DOE">date of exit</label><br>
        <input type="date" name="DOE" id="DOE" value="<?=$samaan['DOE']?>"><br><br>

        <label for="bank_acc">bank account number</label><br>
        <input type='text' name="bank_acc" value="<?=$samaan['bank_acc']?>">


        <label for="bank_ifsc">bank ifsc</label><br>
        <input type='text' name='bank_ifsc' id="bank_ifsc" value="<?=$samaan['bank_ifsc']?>"> <br> <br>
        
        <label for="holiday">holiday days</label><br>
        <input type='text' name='holiday' id="holiday" value="<?=$samaan['holiday']?>" > <br> <br>

        <label for="gender">gender</label><br>
        <select id="gender" name="gender" value="<?=$samaan['gender']?>">
            <option value=1>M</option>
            <option value=2>F</option>
            <option value=3>O</option>
        </select><br><br>

        <label for="marital">marital status</label><br>
        <select id="marital" name="marital" value="<?=$samaan['marital']?>">
            <option value=1>unmarried</option>
            <option value=2>married</option>
            <option value=3>other</option>
        </select><br><br>

        <label for="religion">religion</label><br>
        <input type="text" name="religion" id="religion" value="<?=$samaan['religion']?>"><br><br>

        <input type='submit' value='submit'>
    </form>
</body>

</html>