<?php

$con = mysqli_connect("http://cwp.9930i.com","website","website@1234","utkarsh_website");
You need to place value for your localhost username and password. Normally localhost MySQL database username is root and password blank or root. For example, the code is as below

$con = mysqli_connect('http://cwp.9930i.com', 'website', 'website@1234',"utkarsh_website");
The “db_contact” is our database name that we created before.
After connection database you need to take post variable from the form. See the below code
$your_name = $_POST['your_name'];
$your_email = $_POST['your_email'];
$your_subject = $_POST['your_sunject'];
$massage = $_POST['massage'];
When you will get the post variable then you need to write the following SQL command.

$sql = "INSERT INTO `utkarsh_website` (`fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('$your_name', '$your_email', '$your_subject', '$massage');"
For fire query over the database, you need to write the following line

$rs = mysqli_query($con, $sql);
Here is PHP code for inserting data into your database from a form.

<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('https://cwp.9930i.com', 'website', 'website@1234','utkarsh_webiste');

// get the post records
$your_name= $_POST['your_name'];
$your_email = $_POST['your_email'];
$your_subject = $_POST['your_subject'];
$massage = $_POST['massage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>