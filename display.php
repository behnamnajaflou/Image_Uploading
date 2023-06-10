<?php
require('./database.php');
require_once('./operations.php');

if (isset($_POST['submit'])) {
    $user_name = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "./images/" . $filename;

    $sql = "INSERT INTO user (name, userName, password, image) VALUES ('$fullname', '$user_name', '$password', '$filename')";

    mysqli_query($conn, $sql);

    uploadImage($tempname, $folder);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <h1>It is time to see</h1>
    <div id="display-image">
        <?php
        $query = " select * from user ";
        $result = mysqli_query($conn, $query);

        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <img src="./images/<?php echo $data['image']; ?>">

        <?php
        }
        ?>
    </div>
</body>

</html>