<?php
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email']; 
            $password = $_POST['password'];

            if (!empty($email) && !empty($password)) {
                header('Location: ./../dashboard.html');
                exit();
            } else {
                echo "<p style='color:red;'>Please enter both email and password</p>";
            }
        }
    ?>