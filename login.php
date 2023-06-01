<?php
    // Server-side code to handle the login process
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform authentication checks here (e.g., checking against a database)

    // Redirect to the appropriate page based on user type
    if ($username === 'student' && $password === 'studentpassword') {
        header('Location: student.php');
        exit();
    } elseif ($username === 'librarian' && $password === 'librarianpassword') {
        header('Location: librarian.php');
        exit();
    } else {
        header('Location: index.html');
        exit();
    }
?>
