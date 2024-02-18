<!-- 
    Student ID: B00139596
    Student Name: Johny Ramos
    Course: T054 - Computer System Management
    Module: Web Application
    Lecturer: Robert Smith
 -->
 <!-- COMMON PHP File -->

<?php 
    function escape($data) {

        if (is_null($data)) {
            return ''; 
        }
        
        $data = htmlspecialchars($data, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
        $data = trim($data);
        $data = stripslashes($data);

        return ($data);
    } 
?>