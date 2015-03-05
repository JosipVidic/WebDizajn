<?php
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
if ($_FILES['fileToUpload']['error'] > 0) {
    echo "Error: " . $_FILES['fileToUpload']['error'] . "<br />";
} else {
    $validExtensions = array('.jpg','.JPG', '.jpeg', '.gif', '.png');
    $fileExtension = strrchr($_FILES['fileToUpload']['name'], ".");
    if (in_array($fileExtension, $validExtensions)) {
        $newName = $_FILES['fileToUpload']['name'];
        $destination = 'images/upload/' . $newName;
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $destination)) {
            echo 'Slika ' .$newName. ' je uspješno sačuvana u galeriju slika!';
        }
    }
    else {
        echo 'Format nije podržan!';
    }
}