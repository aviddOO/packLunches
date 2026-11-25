<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create conncetion
$conn=new PDO("mysql:host= $servername", "$username", "$password");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql= "CREATE DATABASE IF NOT EXISTS lunchesd126";
$conn->exec($sql);
echo("Database created successfull<br>");
$sql = "USE lunchesd126";
$conn->exec($sql);
echo("Database selected successfully<br>");
$stmt=$conn->prepare("DROP TABLE IF EXISTS Tblusers;
CREATE TABLE Tblusers
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Forename VARCHAR(30) NOT NULL,
Surname VARCHAR(30) NOT NULL,
House VARCHAR(30) NOT NULL,
Year INT(2) NOT NULL,
Balance DECIMAL(5, 2) NOT NULL,
Password VARCHAR(200) NOT NULL,
Role TINYINT(1) NOT NULL,
Username VARCHAR(30) NOT NULL);
");
$stmt->execute();
echo("Table Tblusers created successfully<br>");
?>