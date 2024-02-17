<!-- 
    Student ID: B00139596
    Student Name: Johny Ramos
    Course: T054 - Computer System Management
    Module: Web Application
    Lecturer: Robert Smith
 -->

 <!-- Create PHP File -->

<?php include "templates/header.php"; ?>

<?php 
    if(isset($_POST['submit'])) {
        require "config.php";

        try {
            $connection = new PDO($dsn, $username, $password, $options);
            $new_user = array(
                "firstname" => $_POST['firstname'],
                "lastname" => $_POST['lastname'],
                "email" => $_POST['email'],
                "age" => $_POST['age'],
                "location" => $_POST['location']
            );

            $sql = sprintf( "INSERT INTO %s (%s) values (%s)", "users", implode(", ",
            array_keys($new_user)), ":" . implode(", :", array_keys($new_user)) );

            $statement = $connection -> prepare ($sql);
            $statement -> execute($new_user);

        } catch(PDOException $error) {
            echo $sql . "<br>" . $error -> getMessage();
        }
    }
?>

<div class="form-control p-5">
    <form method="POST" class="row">
        <h2 class="">Add a user</h2>
        <label for="firstname" class="">First Name</label>
        <input type="text" name="firstname" id="firstname" class="form-control mt-2" required />
        <label for="lastname" class="">Last Name</label>
        <input type="text" name="lastname" id="lastname" class="form-control mt-2" required />
        <label for="email" class="">Email Address</label>
        <input type="email" name="email" id="email" class="form-control mt-2" required />
        <label for="age" class="">Age</label>
        <input type="text" name="age" id="age" class="form-control mt-2" />
        <label for="location" class="">Location</label>
        <input type="text" name="location" id="location" class="form-control mt-2" />
        <input type="submit" name="submit" id="submit" value="Submit" class="btn form-control mt-2 btn-primary" />
        
    </form>
</div>

<a href="index.php" class="text-black-50 text-decoration-none">Back Home</a>

<?php include "templates/footer.php"; ?>
