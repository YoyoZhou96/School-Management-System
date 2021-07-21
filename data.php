<?php

// create connection

$connection = new mysqli("localhost", "root", "");

// test connection

if (!$connection){
    die("Connection Failed: " . !$connection);
}

// create database if not exist

$db_sql = "CREATE DATABASE IF NOT EXISTS SchoolManagement";
if ($connection->query($db_sql) === TRUE){
    echo "Database Created Successfully\n";
}
else{
    echo "Error Creating Database:" . $connection->error;

}


// create table if not exist

$st_table_sql = "CREATE  TABLE IF NOT EXISTS `SchoolManagement`.`Enrollment` (
    `ID` INT AUTO_INCREMENT ,
    `Name` VARCHAR(50) ,
    `Father_Name` VARCHAR(50) ,
    `PhoneNumber` VARCHAR(75) ,
    `Address` VARCHAR(255) ,
    `Date_of_Birth` VARCHAR(255) ,
    `Date_of_Admission` VARCHAR(255) ,
    PRIMARY KEY (`ID`) )
  ENGINE = InnoDB;";

if ($connection->query($st_table_sql) === TRUE){
    echo "TABLE Enrollment Created Successfully";
} 
else {
    echo "Error Creating TABLE: " . $connection->error;
}


$cl_table_sql = "CREATE  TABLE IF NOT EXISTS `SchoolManagement`.`Class` (
    `ID` INT AUTO_INCREMENT ,
    `Name` VARCHAR(50) ,
    `Section` VARCHAR(50) ,
    `Teacher` VARCHAR(75) ,
    PRIMARY KEY (`ID`) )
  ENGINE = InnoDB;";

if ($connection->query($cl_table_sql) === TRUE){
    echo "TABLE Class Created Successfully";
} 
else {
    echo "Error Creating TABLE: " . $connection->error;
}


$cs_table_sql = "CREATE  TABLE IF NOT EXISTS `SchoolManagement`.`Student` (
    `ID` INT AUTO_INCREMENT ,
    `Student_Name` VARCHAR(50) ,
    `Class_Name` VARCHAR(50) ,
    PRIMARY KEY (`ID`))
  ENGINE = InnoDB;";


if ($connection->query($cs_table_sql) === TRUE){
    echo "TABLE Student Created Successfully";
} 
else {
    echo "Error Creating TABLE: " . $connection->error;
}


// Insert form data into database

if(isset($_POST['studentSubmit']))
{
    $Name = $_POST['studentname'];
    $Father_Name = $_POST['fathername'];
    $Number = $_POST['phonenumber'];
    $Address = $_POST['address'];
    $Date_of_Birth = $_POST['birth'];
    $Date_of_Admission = $_POST['admission'];

    $insert_stu_sql = "INSERT INTO `SchoolManagement`.`Enrollment` (`Name`, `Father_Name`, `PhoneNumber`, `Address`, `Date_of_Birth`, `Date_of_Admission`)
    values ('$Name','$Father_Name','$Number','$Address', '$Date_of_Birth', '$Date_of_Admission')";

    if ($connection->query($insert_stu_sql) === TRUE){
        header('Location: success.php');
    } 
    else {
        echo "Error Updating TABLE: " . $connection->error;
    }
}


if(isset($_POST['classSubmit'])){

    $Name = $_POST['classname'];
    $Section = $_POST['section'];
    $Teacher = $_POST['teacher'];

    $insert_class_sql = "INSERT INTO `SchoolManagement`.`Class` (`Name`, `Section`, `Teacher`)
    values ('$Name','$Section','$Teacher')";

    
    if ($connection->query($insert_class_sql) === TRUE){
        header('Location: success.php');
        
    } 
    else {
        echo "Error Updating TABLE: " . $connection->error;
    }
}


if(isset($_POST['studentClassSubmit'])){

    $Name = $_POST['studentName'];
    $Class = $_POST['className'];

    $insert_cs_sql = "INSERT INTO `SchoolManagement`.`Student` (`Student_Name`, `Class_Name`)
    values ('$Name','$Class')";

    
    if ($connection->query($insert_cs_sql) === TRUE){
        header('Location: success.php');
        
    } 
    else {
        echo "Error Updating TABLE: " . $connection->error;
    }
}


$connection->close();

?>
