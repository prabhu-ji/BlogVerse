<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Initialize an array to store errors
    $errors = [];

    // Retrieve and sanitize input data
    $title = trim($_POST['title']);
    $content = $_POST['content'];
    $category_id = $_POST['category_id'];
    
    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Example: validate and move uploaded file
        $image = $_FILES['image'];
        $imagePath = 'path/to/uploads/' . basename($image['name']); // Specify your upload directory
        
        if (!move_uploaded_file($image['tmp_name'], $imagePath)) {
            $errors['image'] = 'Failed to upload image.';
        }
    } else {
        $errors['image'] = 'Image is required.';
    }

    // Validate input fields
    if (empty($title)) {
        $errors['title'] = 'Title is required.';
    }

    if (empty($content)) {
        $errors['content'] = 'Content is required.';
    }

    if (empty($category_id)) {
        $errors['category'] = 'Category is required.';
    }

    // If there are no errors, save to the database
    if (empty($errors)) {
        // Example: Insert the post into the database
        $query = "INSERT INTO posts (title, content, category_id, image) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$title, $content, $category_id, $imagePath]);

        // After successful processing, redirect to the home page
        header('Location: http://localhost/blog/public/home'); // Update with your actual home page URL
        exit();
    }
}
?>
