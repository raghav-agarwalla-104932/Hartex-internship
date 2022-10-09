<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <style><?php include 'style.css'?></style>
    <title class='segment'>registration form</title>
</head>
<body>
    <div class='segment'><h2>Registration Form Hartex Employees</h2></div>
    <form action='connect.php' method='POST'>
        <label for="firstname">First name</label>
        <input type='text' name='firstname' id="firstname" > <br> <br>

        <label for="lastname">Last name</label>
        <input type='text' name='lastname' id="lastname" > <br> <br>

        <label for="cardcode">Card code</label>
        <input type='text' name='cardcode' id="cardcode"> <br> <br>

        <label for="aadhaar">aadhar number</label>
        <input type='text' name='aadhaar' id="aadhaar" > <br> <br>

        <label for="mobile">mobile number</label>
        <input type='text' name='mobile' id="mobile" >
        <input type="checkbox" name='phonea' id="phonea" value="active"/> <br> <br>

        <label for="phone">phone number</label><br>
        <input type='text' name='phone' id="phone"> <br> <br>

        <label for="email">email address</label><br>
        <input type='text' name='email' id="email"> <br> <br>

        <label for="address">address</label><br>
        <input type='text' name='address' id="address" /> <br> <br>

        <label for="city">city</label><br>
        <input type='text' name='city' id="city"/> <br> <br>

        <label for="state">state </label><br>
        <input type='text' name='state' id="state" > <br> <br>

        <label for="pincode">pincode</label><br>
        <input type='text' name='pincode' id="pincode"/> <br> <br>

        <label for="country">country</label><br>
        <input type='text' name='country' id="country"/> <br> <br>

        <label for="correspondencea">entity type</label><br>
        <input type='text' name='correspondencea' id="correspondencea" > <br> <br>

        <label for="entityt">entity type</label><br>
        <select id="entityt" name="entityt" value = "1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select><br>
        <label for="grade">grade</label><br>
        <select id="grade" name="grade" value=10>
            <option value=10>10</option>
            <option value=20>20</option>
            <option value=30>30</option>
        </select><br>
        <label for="production_job_id">production job id</label><br>
        <input type='number' name='production_job_id' id="production_job_id" > <br> <br>

        <label for="DOB">date of birth</label><br>
        <input type='date' name='DOB' id="DOB" > <br> <br>

        <label for="DOJ">date of joining</label><br>
        <input type='date' name="DOJ" id="DOJ"><br><br> 

        <label for="nominee">nominee</label><br>
        <input type='text' name='nominee' id="nominee" ><br><br>

        <label for="DOC">date of confirmation</label><br>
        <input type="date" name="DOC" id="DOC"><br><br>

        <label for="DOE">date of exit</label><br>
        <input type="date" name="DOE" id="DOE"><br><br>

        <label for="bank_acc">bank account number</label><br>
        <input type='text' name="bank_acc">
        <input type="checkbox" name='banka' id="banka" value="active"/> <br><br>

        <label for="bank_ifsc">bank ifsc</label><br>
        <input type='text' name='bank_ifsc' id="bank_ifsc" > <br> <br>
        
        <label for="holiday">holiday days</label><br>
        <input type='text' name='holiday' id="holiday" > <br> <br>

        <label for="gender">gender</label><br>
        <select id="gender" name="gender">
            <option value=1>M</option>
            <option value=2>F</option>
            <option value=3>O</option>
        </select><br><br>

        <label for="marital">marital status</label><br>
        <select id="marital" name="marital">
            <option value=1>unmarried</option>
            <option value=2>married</option>
            <option value=3>other</option>
        </select><br><br>

        <label for="religion">religion</label><br>
        <input type="text" name="religion" id="religion"><br><br>

        <input type='submit' value='submit' class='butto'>
    </form>
</body>

</html>