<!-- 
    Student ID: B00139596
    Student Name: Johny Ramos
    Course: T054 - Computer System Management
    Module: Web Application
    Lecturer: Robert Smith
 -->
 <!-- CONFIG PHP File -->

<?php 
    $host = "localhost";
    $username = "root";
    $password = "Hakuna21@";
    $dbname = "test";
    $dsn = "mysql:host=$host;dbname=$dbname";
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
?>