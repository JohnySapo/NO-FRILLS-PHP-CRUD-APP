<!-- 
    Student ID: B00139596
    Student Name: Johny Ramos
    Course: T054 - Computer System Management
    Module: Web Application
    Lecturer: Robert Smith
 -->
 <!-- INSTALL PHP File -->

<?php 
    require "config.php";

    // $connection = new PDO("mysql:host=$host", "$username", "$password", $options);
    // $sql = file_get_contents("data/init.sql");
    // $connection -> exec ($sql);
    // echo "DB Setup";

    try {
        $connection = new PDO("mysql:host=$host", "$username", "$password", $options);
        $sql = file_get_contents("data/init.sql");
        $connection -> exec ($sql);

        echo "Database and table users created successfully.";
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    } 
?>