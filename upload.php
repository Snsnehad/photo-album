<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $file = $_FILES['image'];
    $allowed = ['jpg', 'jpeg', 'png'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if (!in_array($ext, $allowed)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid file type']);
        exit;
    }

    if ($file['size'] > 2 * 1024 * 1024) {
        echo json_encode(['status' => 'error', 'message' => 'File too large (max 2MB)']);
        exit;
    }

    $name = uniqid() . '.' . $ext;
    move_uploaded_file($file['tmp_name'], 'images/' . $name);

    echo json_encode(['status' => 'success', 'message' => 'Uploaded successfully']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
