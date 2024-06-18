<?php
$uploadedFiles = $_FILES["photo"];
$uploadedFilesCount = count($uploadedFiles['name']);

$allowed_ext = ["jpg", "jpeg", "png", "gif"];
$success = true;
$errors = [];
$photo_paths = []; // Array to store successfully uploaded photo paths

for ($i = 0; $i < $uploadedFilesCount; $i++) {
    $photo_name = basename($uploadedFiles["name"][$i]);
    $photo_size = $uploadedFiles['size'][$i];

    $photo_path = "public/images/" . $photo_name; // Ovo je relativna putanja, proverite da li je ispravna na vašem serveru
    $ext = pathinfo($photo_name, PATHINFO_EXTENSION);

    if (in_array($ext, $allowed_ext) && $photo_size < 2000000) {
        if (move_uploaded_file($uploadedFiles["tmp_name"][$i], $photo_path)) {
            $photo_paths[] = $photo_path; // Dodajte putanju u niz ako je upload uspešan
        } else {
            $success = false;
            $errors[] = "Failed to move file: " . $photo_name;
        }
    } else {
        $success = false;
        $errors[] = "Invalid file: " . $photo_name;
    }
}

if ($success) {
    echo json_encode(["success" => true, "photo_paths" => $photo_paths]); // Vratite putanje slika u JSON formatu
} else {
    echo json_encode(["success" => false, "errors" => $errors]);
}
?>
