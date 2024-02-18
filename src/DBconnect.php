<!-- 
    Student ID: B00139596
    Student Name: Johny Ramos
    Course: T054 - Computer System Management
    Module: Web Application
    Lecturer: Robert Smith
 -->
 <!-- DBCONNECT PHP File -->

<?php 
    require_once "config.php";

    try {
        $connection = new PDO($dsn, $username, $password, $options);
        echo 'DB Connected';
    } catch (PDOException $pex) {
        throw new \PDOException($pex -> getMessage(), (int)$pex->getCode());
    }
?>