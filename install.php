<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create conncetion
$conn=new PDO("mysql:host=$servername", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql= "CREATE DATABASE IF NOT EXISTS lunchesd126";
$conn->exec($sql);
echo("Database created successfull<br>");
$sql = "USE lunchesd126";
£conn->exec($sql);
echo("Database selected successfully<br>");
$stmt=$conn->prepare("DROP TABLE IF EXISTS Tblusers;
CREATE TABLE Tblusers(
(UserID IN(4) UNSIGNED AUTO_INCREMEN PRIMARY KEY,
Forename VARCHAR(30) NOT NULL,
Surname VARCHAR(30) NO NULL,
House VARCHAR(30) NO NULL,
Year INT(2) NO NULL,
Balance DECIMAL(5, 2) NO NULL,
Password VARCHAR(200) NO NULL,
Role TINYINT(1) NO NULL,
Username VARCHAR(30) NO NULL)

");
?>