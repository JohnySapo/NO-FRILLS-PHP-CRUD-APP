<!-- 
    Student ID: B00139596
    Student Name: Johny Ramos
    Course: T054 - Computer System Management
    Module: Web Application
    Lecturer: Robert Smith
 -->
 <!-- READ PHP File -->
<?php 
    if(isset($_POST['submit'])) {
        try {
            require "common.php";
            require_once "src/DBconnect.php";

            $sql = "SELECT * FROM users WHERE location = :location";

            $location = $_POST['location'];

            $statement = $connection -> prepare($sql);
            $statement -> bindParam(':location', $location, PDO::PARAM_STR);
            $statement -> execute();
            $result = $statement -> fetchAll();
        } catch (PDOException $pdoex) {
            echo $sql . "<br>" . $pdoex->getMessage();
        }
    }
?>

<?php include "templates/header.php";?>
<?php 
    if(isset($_POST['submit'])) {
        if($result && $statement -> rowCount() > 0) {
?>
    <h2 class="">Results</h2>
    <table class="table table-striped table-hover">
        <thead class="">
            <tr class="">
                <th class="">#</th>
                <th class="">First name</th>
                <th class="">Last Name</th>
                <th class="">Email address</th>
                <th class="">Age</th>
                <th class="">Location</th>
                <th class="">Date</th>
            </tr>
        </thead>
        <tbody class="">
            <?php 
                foreach($result as $row) {
            ?>
            <tr class="">
                <td class=""><?php echo escape($row["ID"]); ?></td>
                <td class=""><?php echo escape($row["firstname"]); ?></td>
                <td class=""><?php echo escape($row["lastname"]); ?></td>
                <td class=""><?php echo escape($row["email"]); ?></td>
                <td class=""><?php echo escape($row["age"]); ?></td>
                <td class=""><?php echo escape($row["location"]); ?></td>
                <td class=""><?php echo escape($row["date"]); ?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <div class="container">
        <div class="row">
            <?php foreach ($result as $cutePet) { ?>
            <div class="col-md-4 pet-list-item">
                <h2><?php echo $cutePet['firstname']; ?></h2>
                <blockquote class="pet-details">
                    <span class="btn btn-primary">
                        <?php echo $cutePet['email']; ?>
                    </span>
                    <?php echo 'Age: '. $cutePet['age']; ?>
                </blockquote>
                <p class="btntext-dark-50"><?php echo 'Location: '. $cutePet['location']; ?></p>
            </div>
        <?php } ?>
        </div>
    <?php } else { ?>
        > No restuls found for
        <?php echo escape($_POST['location']); ?>.
    <?php 
            } 
        } 
    ?>

<div class="form-control p-5">
    <form method="POST" class="row">
        <h2>Find user based on location</h2>
        <label for="location" class="">Location</label>
        <input type="text" id="location" name="location" class="form-control mt-2" />
        <input type="submit" name="submit" value="View Results" class="btn btn-primary form-control mt-2" />
    </form>
</div>

<a href="index.php" class="text-black-50 text-decoration-none">Back Home</a>

<?php include "templates/footer.php"; ?>