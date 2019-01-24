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
<title>index</title>

<style>
body { 
  background-image: url('');
  background-repeat: no-repeat;
  height:100%;
  
}
</style>

</head>

<body>

<form action="index.php" method="POST">

<br/>
<span style="color:black;"><b><h3>Customer</h3></b></span>
<br/>
<input type="text" name="CustomerName" PlaceHolder="Customer Name" autocomplete="off"/>
<br/><br/>
<input type="text" name="CustomerAddress" PlaceHolder="Customer Address" autocomplete="off"/>
<br/><br/>
<input type="text" name="CustomerPhone" PlaceHolder="Customer Phone" autocomplete="off"/>
<br/><br/>

<input type="radio" name="Country" value="Pakistan">Pakistan<br>
<input type="radio" name="Country" value="Canada">Canada<br><br>

<input type="reset" value="Reset"/>
<input type="Submit" value="Submit" name="Customer"/>

<div style='margin-left:220px;margin-top:-300px;'>
<br/>
<span style="color:black;"><b><h3>Employee</h3></b></span>
<br/>
<input type="text" name="EmployeeName" PlaceHolder="Employee Name" autocomplete="off"/>
<br/><br/>
<input type="text" name="EmployeeDesignation" PlaceHolder="Employee Designation" autocomplete="off"/>
<br/><br/>
<input type="radio" name="CountryEmp" value="Pakistan">Pakistan<br>
<input type="radio" name="CountryEmp" value="Canada">Canada<br><br>

<input type="reset" value="Reset"/>
<input type="Submit" value="Submit" name="Employee"/>
</div>

<div style='margin-left:440px;margin-top:-230px;'>
<br/>
<span style="color:black;"><b><h3>Product</h3></b></span>
<br/>
<input type="text" name="ProductName" PlaceHolder="Product Name" autocomplete="off"/>
<br/><br/>
<input type="text" name="ProductQuantity" PlaceHolder="Product Quantity" autocomplete="off">
<br/><br/>
<input type="radio" name="CountryPro" value="Pakistan">Pakistan<br>
<input type="radio" name="CountryPro" value="Canada">Canada<br><br>

<input type="reset" value="Reset"/>
<input type="Submit" value="Submit" name="Product"/>
</div>
</form>
<br><br><br><br><br><br><br><br><br><br>

<?php
$countryVal = $_POST["Country"];
if(isset($_POST['Customer']) && $countryVal == "Pakistan")
{
//connection for site 1	
$servername1 = "192.168.1.148";
$username1 = "root";
$password1 = " ";
$dbname1 = "site 1";

$conn1 = new mysqli($servername1, $username1, $password1, $dbname1 ,true);

$CustomerName=$_POST['CustomerName'];
$CustomerPhone=$_POST['CustomerPhone'];
$CustomerAddress=$_POST['CustomerAddress'];

$sql1 = "INSERT INTO Customer (Name,Phone,Address)
VALUES ('$CustomerName','$CustomerPhone','$CustomerAddress')";

if ($conn1->query($sql1) === TRUE) {
    echo "New record inserted successfully in site 1  ";

}
else {
    echo "Error: " . $sql1 . "<br>" . $conn1->error;
}


////second connection
//connection for head quarter	
$servername2 = "localhost";
$username2 = "root";
$password2 = "abcd1234";
$dbname2 = "headquarter";

$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

$CustomerName=$_POST['CustomerName'];
$CustomerPhone=$_POST['CustomerPhone'];
$CustomerAddress=$_POST['CustomerAddress'];

$sql2 = "INSERT INTO customer (Name,Phone,Address)
VALUES ('$CustomerName','$CustomerPhone','$CustomerAddress')";

if ($conn2->query($sql2) === TRUE) {
    echo "New record inserted successfully in site head quarter  ";

}
}


if(isset($_POST['Customer']) && $countryVal == "Canada")
{
//connection for site 2	
$servername1 = "localhost";
$username1 = "root";
$password1 = "abcd1234";
$dbname1 = "site 2";

$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);

$CustomerName=$_POST['CustomerName'];
$CustomerPhone=$_POST['CustomerPhone'];
$CustomerAddress=$_POST['CustomerAddress'];

$sql1 = "INSERT INTO customer (Name,Phone,Address)
VALUES ('$CustomerName','$CustomerPhone','$CustomerAddress')";

if ($conn1->query($sql1) === TRUE) {
    echo "New record inserted successfully in site 2  ";

}
else {
    echo "Error: " . $sql1 . "<br>" . $conn1->error;
}


////second connection
//connection for head quarter	
$servername2 = "localhost";
$username2 = "root";
$password2 = "abcd1234";
$dbname2 = "headquarter";

$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

$CustomerName=$_POST['CustomerName'];
$CustomerPhone=$_POST['CustomerPhone'];
$CustomerAddress=$_POST['CustomerAddress'];

$sql2 = "INSERT INTO customer (Name,Phone,Address)
VALUES ('$CustomerName','$CustomerPhone','$CustomerAddress')";

if ($conn2->query($sql2) === TRUE) {
    echo "New record inserted successfully in site head quarter  ";

}
}
?>


<?php
$countryValPro = $_POST["CountryPro"];
if(isset($_POST['Product']) && $countryValPro === "Pakistan")
{
//connection for site 1	
$servername1 = "localhost";
$username1 = "root";
$password1 = "abcd1234";
$dbname1 = "site 1";

$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);

$ProductName=$_POST['ProductName'];
$ProductQuantity=$_POST['ProductQuantity'];


$sql1 = "INSERT INTO products (Name,Quantity)
VALUES ('$ProductName','$ProductQuantity')";

if ($conn1->query($sql1) === TRUE) {
    echo "New record inserted successfully in site 1 for product  ";

}
else {
    echo "Error: " . $sql1 . "<br>" . $conn1->error;
}


////second connection
//connection for head quarter	
$servername2 = "localhost";
$username2 = "root";
$password2 = "abcd1234";
$dbname2 = "headquarter";

$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

$ProductName=$_POST['ProductName'];
$ProductQuantity=$_POST['ProductQuantity'];


$sql2 = "INSERT INTO products (Name,Quantity)
VALUES ('$ProductName','$ProductQuantity')";

if ($conn2->query($sql2) === TRUE) {
    echo "New record inserted successfully in head quarter for product  ";

}
}
?>


<?php
$countryValPro = $_POST["CountryPro"];
if(isset($_POST['Product']) && $countryValPro == "Canada")
{
//connection for site 2	
$servername1 = "localhost";
$username1 = "root";
$password1 = "abcd1234";
$dbname1 = "site 2";

$conn = new mysqli($servername1, $username1, $password1, $dbname1);

$ProductName=$_POST['ProductName'];
$ProductQuantity=$_POST['ProductQuantity'];


$sql1 = "INSERT INTO products (Name,Quantity)
VALUES ('$ProductName','$ProductQuantity')";

if ($conn1->query($sql1) === TRUE) {
    echo "New record inserted successfully in site 2 for product  ";

}
else {
    echo "Error: " . $sql1 . "<br>" . $conn1->error;
}


////second connection
//connection for head quarter	
$servername2 = "localhost";
$username2 = "root";
$password2 = "abcd1234";
$dbname2 = "headquarter";

$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

$ProductName=$_POST['ProductName'];
$ProductQuantity=$_POST['ProductQuantity'];


$sql2 = "INSERT INTO products (Name,Quantity)
VALUES ('$ProductName','$ProductQuantity')";

if ($conn2->query($sql2) === TRUE) {
    echo "New record inserted successfully in head quarter for product  ";

}
}
?>

<?php
$countryValEmp = $_POST["CountryEmp"];
if(isset($_POST['Employee']) && $countryValEmp == "Pakistan")
{
//connection for site 1	
$servername1 = "localhost";
$username1 = "root";
$password1 = "abcd1234";
$dbname1 = "site 1";

$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);

$EmpName=$_POST['EmployeeName'];
$EmpDesignation=$_POST['EmpDesignation'];


$sql1 = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignation')";

if ($conn1->query($sql1) === TRUE) {
    echo "New record inserted successfully in site 1 for employee ";

}
else {
    echo "Error: " . $sql1 . "<br>" . $conn1->error;
}


////second connection
//connection for head quarter	
$servername2 = "localhost";
$username2 = "root";
$password2 = "abcd1234";
$dbname2 = "headquarter";

$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

$EmpName=$_POST['EmployeeName'];
$EmpDesignation=$_POST['EmpDesignation'];


$sql2 = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignation')";

if ($conn2->query($sql2) === TRUE) {
    echo "New record inserted successfully in head quarter for employee ";

}


////third connection
//connection for head quarter	
$servername2 = "localhost";
$username2 = "root";
$password2 = "abcd1234";
$dbname2 = "site 2";

$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);

$EmpName=$_POST['EmployeeName'];
$EmpDesignation=$_POST['EmpDesignation'];


$sql2 = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignation')";

if ($conn2->query($sql2) === TRUE) {
    echo "New record inserted successfully in site 2 for employee";

}

}
?>

<?php
$countryValEmp = $_POST["CountryEmp"];
if(isset($_POST['Employee']) && $countryValEmp == "Canada")
{
//connection for site 1	
$servername1 = "localhost";
$username1 = "root";
$password1 = "abcd1234";
$dbname1 = "site 2";

$conn1 = new mysqli($servername1, $username1, $password1, $dbname1);

$EmpName=$_POST['EmployeeName'];
$EmpDesignation=$_POST['EmpDesignation'];


$sql1 = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignation')";

if ($conn1->query($sql1) === TRUE) {
    echo "New record inserted successfully in site 2 for employee";

}
else {
    echo "Error: " . $sql1 . "<br>" . $conn1->error;
}

//connection for head quarter	
$servername2 = "localhost";
$username2 = "root";
$password2 = "abcd1234";
$dbname2 = "headquarter";

$conn2 = new mysqli($servername, $username, $password, $dbname);

$EmpName=$_POST['EmployeeName'];
$EmpDesignation=$_POST['EmpDesignation'];


$sql2 = "INSERT INTO employee (name,Designition)
VALUES ('$EmpName','$EmpDesignation')";

if ($conn2->query($sql2) === TRUE) {
    echo "New record inserted successfully in head quarter for employee";

}
}
?>

</body>	
</html>