<?php
function inputFields($type, $name, $value, $placeholder)
{
    $ele = "<div class=\"form-group my-4\">
             <input type='$type' name='$name' class=\"form-control\" placeholder='$placeholder' value= '$value' autocomplete=\"off\">
            </div>";

    echo $ele;
}

function uploadImage($tempname, $folder)
{
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
