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

    <title>Control Panel | Dell Pakistan</title>

</head>

<body>
    <!-- Header -->
    <header>
        <div>
            <img src="images/dellEmc_logo.png" alt="DellEmc_Logo" width="180" height="30">
        </div>
        <h2 style='color:white; text-align:center; font-weight: bold;'>Control Panel</h2>
    </header>

<form action="index.php" method="POST">
    <div style='margin-left:100px;'>
        <br/> <br>

        <!-- Form 1 -->
        <h3 style='color:red;'>Customer</h3>
        <br/>
        <input type="text" name="CustomerName" PlaceHolder="Customer Name" autocomplete="off"  style="font-size: 18pt; height: 30px;"/>
        <br/><br/>
        <input type="text" name="CustomerAddress" PlaceHolder="Customer Address" autocomplete="off" style="font-size: 18pt; height: 30px;"/>
        <br/><br/>
        <input type="text" name="CustomerPhone" PlaceHolder="Customer Phone" autocomplete="off" style="font-size: 18pt; height: 30px;"/>
        <br/><br/>


        <input type="radio" name="Country" value="Pakistan"><span style='font-size:20px;'>Pakistan</span><br>
        <input type="radio" name="Country" value="Canada"><span style='font-size:20px;'>Canada</span><br>


        <input type="reset" value="Reset"/>
        <input type="Submit" value="Submit" name="Customer"/>

    </div>
    <!-- Form 2 -->
    <div style='margin-left:520px; margin-top:-340px;'>
        <br/>
        <h3 style='color:red;'>Employee</h3>
        <br/>
        <input type="text" name="EmployeeName" PlaceHolder="Employee Name" autocomplete="off" style="font-size: 18pt; height: 30px;"/>
        <br/><br/>
        <input type="text" name="EmployeeDesignation" PlaceHolder="Employee Designation" autocomplete="off"  style="font-size: 18pt; height: 30px;"/>
        <br/><br/><br/><br/>
        
        <input type="radio" name="CountryEmp" value="Pakistan"><span style='font-size:20px;'>Pakistan</span><br>
        <input type="radio" name="Country" value="Canada"><span style='font-size:20px;'>Canada</span><br>

        <input type="reset" value="Reset"/>
        <input type="Submit" value="Submit" name="Employee"/>
    </div>

    <!-- Form 3 -->
    <div style='margin-left:990px; margin-top:-300px;'>
        <br/>
        <div style='margin-top:-46px;'>
        <h3 style='color:red;'>Product</h3>
        <br/>
        <input type="text" name="ProductName" PlaceHolder="Product Name" autocomplete="off"  style="font-size: 18pt; height: 30px;"/>
        <br/><br/>
        <input type="text" name="ProductQuantity" PlaceHolder="Product Quantity" autocomplete="off"  style="font-size: 18pt; height: 30px;">
        </div>

        <br/><br/><br/>

        <input type="radio" name="CountryPro" value="Pakistan"><span style='font-size:20px;'>Pakistan</span><br>    
        <input type="radio" name="Country" value="Canada"><span style='font-size:20px;'>Canada</span><br>

        <input type="reset" value="Reset"/>
        <input type="Submit" value="Submit" name="Product"/>
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

<?php
$countryVal = $_POST["Country"];
if(isset($_POST['Customer']) && $countryVal == "Pakistan")
{
//connection for site 1	
$servername = "192.168.1.133";
$username = "site1";
$password = "12345";
$dbname = "site 1";

$conn = new mysqli($servername, $username, $password, $dbname ,true);

$CustomerName=$_POST['CustomerName'];
$CustomerPhone=$_POST['CustomerPhone'];
$CustomerAddress=$_POST['CustomerAddress'];

$sql = "INSERT INTO Customer (Name,Phone,Address)
VALUES ('$CustomerName','$CustomerPhone','$CustomerAddress')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully in site 1  ";

}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


////second connection
//connection for head quarter	
$servername = "localhost";
$username = "root";
$password = "abcd1234";
$dbname = "headquarter";

$conn = new mysqli($servername, $username, $password, $dbname);

$CustomerName=$_POST['CustomerName'];
$CustomerPhone=$_POST['CustomerPhone'];
$CustomerAddress=$_POST['CustomerAddress'];

$sql = "INSERT INTO customer (Name,Phone,Address)
VALUES ('$CustomerName','$CustomerPhone','$CustomerAddress')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully in site head quarter  ";

}
}


/*if(isset($_POST['Customer']) && $countryVal == "Canada")
{
//connection for site 1	
$servername = "192.168.1.133";
$username = "MC_project";
$password = "123";
$dbname = "site 1";

$conn = new mysqli($servername, $username, $password, $dbname);

$CustomerName=$_POST['CustomerName'];
$CustomerPhone=$_POST['CustomerPhone'];
$CustomerAddress=$_POST['CustomerAddress'];

$sql = "INSERT INTO customer (Name,Phone,Address)
VALUES ('$CustomerName','$CustomerPhone','$CustomerAddress')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully in site 2  ";

}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


////second connection
//connection for head quarter	
$servername = "localhost";
$username = "root";
$password = "abcd1234";
$dbname = "headquarter";

$conn = new mysqli($servername, $username, $password, $dbname);

$CustomerName=$_POST['CustomerName'];
$CustomerPhone=$_POST['CustomerPhone'];
$CustomerAddress=$_POST['CustomerAddress'];

$sql = "INSERT INTO customer (Name,Phone,Address)
VALUES ('$CustomerName','$CustomerPhone','$CustomerAddress')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully in site head quarter  ";

}
}*/
?>


<?php
$countryValPro = $_POST["CountryPro"];
if(isset($_POST['Product']) && $countryValPro == "Pakistan")
{
//connection for site 1	
$servername = "localhost";
$username = "root";
$password = "abcd1234";
$dbname = "site 1";

$conn = new mysqli($servername, $username, $password, $dbname);

$ProductName=$_POST['ProductName'];
$ProductQuantity=$_POST['ProductQuantity'];


$sql = "INSERT INTO products (Name,Quantity)
VALUES ('$ProductName','$ProductQuantity')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully in site 1 for product  ";

}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


////second connection
//connection for head quarter	
$servername = "localhost";
$username = "root";
$password = "abcd1234";
$dbname = "headquarter";

$conn = new mysqli($servername, $username, $password, $dbname);

$ProductName=$_POST['ProductName'];
$ProductQuantity=$_POST['ProductQuantity'];


$sql = "INSERT INTO products (Name,Quantity)
VALUES ('$ProductName','$ProductQuantity')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully in head quarter for product  ";

}
}
?>


<?php
$countryValPro = $_POST["CountryPro"];
if(isset($_POST['Product']) && $countryValPro == "Canada")
{
//connection for site 1	
$servername = "localhost";
$username = "root";
$password = "abcd1234";
$dbname = "site 2";

$conn = new mysqli($servername, $username, $password, $dbname);

$ProductName=$_POST['ProductName'];
$ProductQuantity=$_POST['ProductQuantity'];


$sql = "INSERT INTO products (Name,Quantity)
VALUES ('$ProductName','$ProductQuantity')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully in site 2 for product  ";

}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


////second connection
//connection for head quarter	
$servername = "localhost";
$username = "root";
$password = "abcd1234";
$dbname = "headquarter";

$conn = new mysqli($servername, $username, $password, $dbname);

$ProductName=$_POST['ProductName'];
$ProductQuantity=$_POST['ProductQuantity'];


$sql = "INSERT INTO products (Name,Quantity)
VALUES ('$ProductName','$ProductQuantity')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully in head quarter for product  ";

}
}
?>

<?php
$countryValEmp = $_POST["CountryEmp"];
if(isset($_POST['Employee']) && $countryValEmp == "Pakistan")
{
//connection for site 1	
$servername = "localhost";
$username = "root";
$password = "abcd1234";
$dbname = "site 1";

$conn = new mysqli($servername, $username, $password, $dbname);

$EmpName=$_POST['EmployeeName'];
$EmpDesignation=$_POST['EmpDesignation'];


$sql = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignation')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully in site 1 for employee ";

}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


////second connection
//connection for head quarter	
$servername = "localhost";
$username = "root";
$password = "abcd1234";
$dbname = "headquarter";

$conn = new mysqli($servername, $username, $password, $dbname);

$EmpName=$_POST['EmployeeName'];
$EmpDesignation=$_POST['EmpDesignation'];


$sql = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignation')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully in head quarter for employee ";

}


////third connection
//connection for head quarter	
$servername = "localhost";
$username = "root";
$password = "abcd1234";
$dbname = "site 2";

$conn = new mysqli($servername, $username, $password, $dbname);

$EmpName=$_POST['EmployeeName'];
$EmpDesignation=$_POST['EmpDesignation'];


$sql = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignation')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully in site 2 for employee";

}

}
?>

<?php
$countryValEmp = $_POST["CountryEmp"];
if(isset($_POST['Employee']) && $countryValEmp == "Canada")
{
//connection for site 1	
$servername = "localhost";
$username = "root";
$password = "abcd1234";
$dbname = "site 2";

$conn = new mysqli($servername, $username, $password, $dbname);

$EmpName=$_POST['EmployeeName'];
$EmpDesignation=$_POST['EmpDesignation'];


$sql = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignation')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully in site 2 for employee";

}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//connection for head quarter	
$servername = "localhost";
$username = "root";
$password = "abcd1234";
$dbname = "headquarter";

$conn = new mysqli($servername, $username, $password, $dbname);

$EmpName=$_POST['EmployeeName'];
$EmpDesignation=$_POST['EmpDesignation'];


$sql = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignation')";

if ($conn->query($sql) == TRUE) {
    echo "New record inserted successfully in head quarter for employee";

}
}
?>

</body>	
</html>