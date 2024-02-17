<?php include "templates/header.php"; ?>

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