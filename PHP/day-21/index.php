<?php
echo '<pre>';
print_r($_POST);

print_r($_FILES);

$pictureName = $_FILES['picture']['name'];
$directory = 'images/';
$targetFile = $directory . $pictureName;

$fileType = pathinfo($pictureName, PATHINFO_EXTENSION);

$check = getimagesize($_FILES['picture']['tmp_name']);

if ($check) {
    if (!file_exists($targetFile)) {
        if ($fileType == 'jpg' || $fileType == 'png') {
            if ($_FILES['picture']['name'] < 520000) {
                move_uploaded_file($_FILES['picture']['tmp_name'], $targetFile);
                echo 'SUCCESS';
            } else {
                die('Your fle size is too large. Thanks!!!');
            }
        } else {
            die('Please use jpg or png extension images file. Thanks!!!');
        }
    } else {
        echo 'File is already exits.';
    }
} else {
    echo('Please use an images file.Thankes!!!');
}


//move_uploaded_file($_FILES['picture']['tmp_name'], $targetFile);
?>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="picture" accept="image/*"/>
    <input type="submit" name="btn" value="Submit"/>
</form>