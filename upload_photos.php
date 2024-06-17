<?php

$uploadedFiles = $_FILES["photo"];

$uploadedFilesCount = count($uploadedFiles['name']);

$allowed_ext = ["jpg", "jpeg", "png", "gif"];
$success = true;
$errors = [];

for ($i = 0; $i < $uploadedFilesCount; $i++) {
    $photo_name = basename($uploadedFiles["name"][$i]);
    $photo_size = $uploadedFiles['size'][$i];

    $photo_path = "public/images/" . $photo_name;
    $ext = pathinfo($photo_name, PATHINFO_EXTENSION);

    if (in_array($ext, $allowed_ext) && $photo_size < 2000000) {
        if (!move_uploaded_file($uploadedFiles["tmp_name"][$i], $photo_path)) {
            $success = false;
            $errors[] = "Failed to move file: " . $photo_name;
        }
    } else {
        $success = false;
        $errors[] = "Invalid file: " . $photo_name;
    }
}

if ($success) {
    echo json_encode(["success" => true, "photo_paths" => $uploadedFiles["name"]]);
} else {
    echo json_encode(["success" => false, "errors" => $errors]);
}
?>
