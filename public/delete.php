<?php
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->

    <!-- JavaScript -->
    <script src="https://www.gstatic.com/firebasejs/5.5.2/firebase.js"></script>
    <script src="index.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="indexcss.css">
    <link rel="stylesheet" href="logincss.css">
    <style>
        .color{
            color: white;    
        }
        .color:hover{
            color: #fff;
        }
    </style>

    <title>Admin Panel | Dell Pakistan</title>

</head>

<body>
    <!-- Header -->
    <header>
        <div>
            <a href="index.html"><img src="images/dellEmc_logo.png" alt="DellEmc_Logo" width="180" height="30"></a>
        </div>
        <h2 style='color:white; text-align:center; font-weight: bold;'>Admin Panel - Delete Data</h2>
    </header>

    <form action="delete.php" method="POST">
    <div style='margin-left:100px;'>
        <br/> <br>

    <!-- Form 1 -->
        <h3 style='color:red;'>Customer</h3>
        <br/>
        <input type="text" name="CustomerId" PlaceHolder="Customer Id" autocomplete="off"  style="font-size: 18pt; height: 30px;"/>
        <br/><br/>
        <input type="radio" name="Country" value="Pakistan"><span style='font-size:20px;'>Pakistan</span><br>
        <input type="radio" name="Country" value="Canada"><span style='font-size:20px;'>Canada</span><br>
        
        <input type="reset" value="Reset"/>
        <input type="Submit" value="Delete" name="Customer"/>
        <br><br><br><br><br><br>
    </div>
    <!-- Form 2 -->
    <div style='margin-left:520px; margin-top:-340px;'>
        <h3 style='color:red;'>Employee</h3>
        <br/>
        <input type="text" name="EmployeeId" PlaceHolder="Employee Id" autocomplete="off" style="font-size: 18pt; height: 30px;"/>
        <br><br>
        <input type="radio" name="CountryEmp" value="Pakistan"><span style='font-size:20px;'>Pakistan</span><br>
        <input type="radio" name="Country" value="Canada"><span style='font-size:20px;'>Canada</span><br>

        <input type="reset" value="Reset"/>
        <input type="Submit" value="Delete" name="Employee"/>
        <br><br><br><br><br>
    </div>

    <!-- Form 3 -->
    <div style='margin-left:990px; margin-top:-300px;'>
        <div style='margin-top:-46px;'>
        <h3 style='color:red;'>Product</h3>
        <br/>
        <input type="text" name="ProductId" PlaceHolder="Product Id" autocomplete="off"  style="font-size: 18pt; height: 30px;"/>
        <br/><br/>
        </div>

        <input type="radio" name="CountryPro" value="Pakistan"><span style='font-size:20px;'>Pakistan</span><br>    
        <input type="radio" name="CountryPro" value="Canada"><span style='font-size:20px;'>Canada</span><br>

        <input type="reset" value="Reset"/>
        <input type="Submit" value="Delete" name="Product"/>
    </div>
</form>
<br>
<!-- Poster -->
<p style="text-align: center;"><img src="images/dellEmc.jpg" alt="EMC" height="300" width="1200" class="poster" ></p>

<!-- Footer -->
<div class="container-fluid text-center footer" style="margin-bottom:0">
    <div class="row footer1">
        <li><a href="#" class="d-inline-block color1">About Dell</a></li>
        <li><a href="#" class="d-inline-block color1">Community</a></li>
        <li><a href="#" class="d-inline-block color1">Events</a></li>
        <li><a href="#" class="d-inline-block color1">Partner Program</a></li>
        <li><a href="#" class="d-inline-block color1">Premier</a></li>
        <li><a href="#" class="d-inline-block color1">Dell Technologies</a></li>
    </div>
    <div class="row footer2">
        <li><a href="#" class="d-inline-block color">&copy; 2018 DELL</a></li>
        <li><a href="#" class="d-inline-block color">Legal & Regulatory</a></li>
        <li><a href="#" class="d-inline-block color">Site Terms</a></li>
        <li><a href="#" class="d-inline-block color">Terms Of  Sale</a></li>
        <li><a href="#" class="d-inline-block color">Unresolved Issues</a></li>
        <li><a href="#" class="d-inline-block color">Privacy Statement</a></li>
        <li><a href="#" class="d-inline-block color">Contact a Reseller</a></li>
        <li><a href="#" class="d-inline-block color">Feedback</a></li>
    </div>
</div>

                                                               <!-- FOR PAKISTANI CUSTOMER -->
<?php
    $countryVal = $_POST["Country"];
    if(isset($_POST['Customer']) && $countryVal == "Pakistan")
    {
    //connection for site 1	
    $servername1 = "192.168.1.105";
    $username1 = "Suha";
    $password1 = "1234";
    $dbname1 = "site 1";

    $conn1 = new mysqli($servername1, $username1, $password1, $dbname1);

    $CustomerId=$_POST['CustomerId'];

    $sql1 = "DELETE FROM customer
    WHERE  id = $CustomerId";

    if ($conn1->query($sql1) === TRUE) {
        echo "Record deleted successfully in site 1  ";

    }
    else {
        echo "Error: " . $sql1 . "<br>" . $conn1->error;
    }


    ////second connection
    //connection for head quarter	
    $servername2 = "localhost";
    $username2 = "root";
    $password2 = "";
    $dbname2 = "headquarter";

    $conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

    $CustomerId=$_POST['CustomerId'];

    $sql2 = "DELETE FROM customer
    WHERE  id = $CustomerId";

    if ($conn2->query($sql2) === TRUE) {
        echo "Record deleted successfully in site head quarter  ";

    }
    }

    //                                                       <!-- FOR CANADIAN CUSTOMER -->

    if(isset($_POST['Customer']) && $countryVal == "Canada")
    {
    //connection for site 2	
    $servername3 = "192.168.1.116";
    $username3 = "Mehwish";
    $password3 = "12345";
    $dbname3 = "site 2";

    $conn3 = new mysqli($servername3, $username3, $password3, $dbname3);
    $CustomerId=$_POST['CustomerId'];

    $sql3 = "DELETE FROM customer
    WHERE  id = $CustomerId";

    if ($conn3->query($sql3) === TRUE) {
        echo "Record deleted successfully in site 2  ";

    }
    else {
        echo "Error: " . $sql3 . "<br>" . $conn3->error;
    }


    ////second connection
    //connection for head quarter	
    $servername2 = "localhost";
    $username2 = "root";
    $password2 = "";
    $dbname2 = "headquarter";

    $conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

    $CustomerId=$_POST['CustomerId'];

    $sql2 = "DELETE FROM customer
    WHERE  id = $CustomerId";

    if ($conn2->query($sql2) === TRUE) {
        echo "Record deleted successfully in site head quarter  ";

    }
    }
?>


                                                               <!-- FOR PAKISTANI PRODUCT -->
<?php
    $countryValPro = $_POST["CountryPro"];
    if(isset($_POST['Product']) && $countryValPro == "Pakistan")
    {
    //connection for site 1	
    $servername1 = "192.168.1.105";
    $username1 = "Suha";
    $password1 = "1234";
    $dbname1 = "site 1";

    $conn1 = new mysqli($servername1, $username1, $password1, $dbname1);

    $ProductId=$_POST['ProductId'];

    $sql1 = "DELETE FROM products
    WHERE  id = $ProductId";

    if ($conn1->query($sql1) === TRUE) {
        echo "Record deleted successfully in site 1 for product";

    }
    else {
        echo "Error: " . $sql1 . "<br>" . $conn1->error;
    }


    ////second connection
    //connection for head quarter	
    $servername2 = "localhost";
    $username2 = "root";
    $password2 = "";
    $dbname2 = "headquarter";

    $conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

    $ProductId=$_POST['ProductId'];


    $sql2 = "DELETE FROM products
    WHERE  id = $ProductId";

    if ($conn2->query($sql2) === TRUE) {
        echo "Record deleted successfully in head quarter for product";

    }
    }
?>
                                                               <!-- FOR CANADIAN PRODUCT -->
<?php
    $countryValPro = $_POST["CountryPro"];
    if(isset($_POST['Product']) && $countryValPro == "Canada")
    {
    //connection for site 2
    $servername3 = "192.168.1.116";
    $username3 = "Mehwish";
    $password3 = "12345";
    $dbname3 = "site 2";

    $conn3 = new mysqli($servername3, $username3, $password3, $dbname3);

    $ProductId=$_POST['ProductId'];


    $sql3 = "DELETE FROM products
    WHERE  id = $ProductId";

    if ($conn3->query($sql3) == TRUE) {
        echo "Record deleted successfully in site 2 for product  ";

    }
    else {
        echo "Error: " . $sql3 . "<br>" . $conn3->error;
    }


    ////second connection
    //connection for head quarter	
    $servername2 = "localhost";
    $username2 = "root";
    $password2 = "";
    $dbname2 = "headquarter";

    $conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

    $ProductId=$_POST['ProductId'];


    $sql2 = "DELETE FROM products
    WHERE  id = $ProductId";

    if ($conn2->query($sql2) == TRUE) {
        echo "Record deleted successfully in head quarter for product";

    }
    }
?>

                                                               <!-- FOR PAKISTANI EMPLOYEE -->
<?php
    $countryValEmp = $_POST["CountryEmp"];
    if(isset($_POST['Employee']) && $countryValEmp == "Pakistan")
    {
    //connection for site 1	
    $servername1 = "192.168.1.105";
    $username1 = "Suha";
    $password1 = "1234";
    $dbname1 = "site 1";

    $conn1 = new mysqli($servername1, $username1, $password1, $dbname1);

    $EmpId=$_POST['EmployeeId'];

    $sql1 = "DELETE FROM employee
    WHERE  id = $EmpId";

    if ($conn1->query($sql1) === TRUE) {
        echo "Record deleted successfully from site 1 for employee";

    }
    else {
        echo "Error: " . $sql1 . "<br>" . $conn1->error;
    }


    ////second connection
    //connection for head quarter	
    $servername2 = "localhost";
    $username2 = "root";
    $password2 = "";
    $dbname2 = "headquarter";

    $conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

    $EmpId=$_POST['EmployeeId'];

    $sql2 = "DELETE FROM employee
    WHERE  id = $EmpId";

    if ($conn2->query($sql2) === TRUE) {
        echo "Record deleted successfully from head quarter for employee ";

    }


    ////third connection
    //connection for site2	
    $servername3 = "192.168.1.116";
    $username3 = "Mehwish";
    $password3 = "12345";
    $dbname3 = "site 2";

    $conn3 = new mysqli($servername3, $username3, $password3, $dbname3);

    $EmpId=$_POST['EmployeeId'];

    $sql3 = "DELETE FROM employee
    WHERE  id = $EmpId";

    if ($conn3->query($sql3) === TRUE) {
        echo "Record deleted successfully from site 2 for employee ";

    }

    }
?>
                                                       <!-- FOR CANADIAN EMPLOYEE -->
<?php
    $countryValEmp = $_POST["Country"];
    if(isset($_POST['Employee']) && $countryValEmp == "Canada")
    {
    //connection for site 2	
    $servername3 = "192.168.1.116";
    $username3 = "Mehwish";
    $password3 = "12345";
    $dbname3 = "site 2";

    $conn3 = new mysqli($servername3, $username3, $password3, $dbname3);

    $EmpId=$_POST['EmployeeId'];

    $sql3 = "DELETE FROM employee
    WHERE  id = $EmpId";

    if ($conn3->query($sql3) === TRUE) {
        echo "New record inserted successfully in site 2 for employee";

    }
    else {
        echo "Error: " . $sql3 . "<br>" . $conn3->error;
    }

    //connection for head quarter	
    $servername2 = "localhost";
    $username2 = "root";
    $password2 = "";
    $dbname2 = "headquarter";

    $conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

    $EmpId=$_POST['EmployeeId'];

    $sql2 = "DELETE FROM employee
    WHERE  id = $EmpId";

    if ($conn2->query($sql2) === TRUE) {
        echo "Record deleted successfully from head quarter for employee ";

    }
    }
?>

</body>	
</html>