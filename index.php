<!-- 
    Student ID: B00139596
    Student Name: Johny Ramos
    Course: T054 - Computer System Management
    Module: Web Application
    Lecturer: Robert Smith
 -->
 <!-- Index PHP File -->

<?php include "templates/header.php"; ?>

<ul class="row m-4 text-center list-unstyled">
    <!-- Add User -->
    <div class="col">
        <li class="fs-5"><a href="#" class=" text-uppercase text-black-50 text-decoration-none"><strong>Create</strong></a></li>
    </div>
    <!-- Find a User -->
    <div class="col">
        <li class="fs-5"><a href="#" class=" text-uppercase text-black-50 text-decoration-none"><strong>Read</strong></a></li>
    </div>
</ul>

<?php include "create.php"; ?>
<?php include "read.php"; ?>
<?php include "templates/footer.php"; ?>