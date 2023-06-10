<?php
require_once('./operations.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Your Image</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center my-6">Register and Upload your Image</h1>
    <div class="container a-flex justify-content-center">
        <form action="display.php" method="POST" enctype="multipart/form-data" class="w-50">
            <?php
            inputFields("text", "fullname", "", "Full Name");
            inputFields("text", "username", "", "User Name");
            inputFields("text", "password", "", "Password");
            inputFields("file", "file", "", "");
            ?>
            <button class="btn btn-dark" type="submit" name="submit"> Submit</button>
        </form>
    </div>
</body>

</html>