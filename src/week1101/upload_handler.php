<?php
// Simple file upload handler

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the file input exists and has no immediate upload error

    // if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {

    //     $fileTmpPath = $_FILES['file1']['tmp_name'];
    //     $fileName = $_FILES['file1']['name'];
    //     $fileSize = $_FILES['fileToUpload']['size'];
    //     $fileType = $_FILES['fileToUpload']['type'];

    // } else {
    //     echo "<p>No file uploaded or an upload error occurred.</p>";
    // }
        foreach ($_FILES as $file) {
            if ($file['error'] === UPLOAD_ERR_OK) {
                $tmp = $file['tmp_name'];
                $name = $file['name'];
                $uploadDir = __DIR__ . '/uploads/';

                // Create folder if it doesn't exist
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                if (move_uploaded_file($tmp, "./uploads/" . $name)) {
                    echo "<p>File uploaded successfully!</p>";
                    echo "<p>Original name: " . htmlspecialchars($name) . "</p>";
                    echo "<p>Type: " . htmlspecialchars($file['type']) . "</p>";
                    echo "<p>Size: " . $file['size'] . " bytes</p>";
                }

        }
    }
}
?>