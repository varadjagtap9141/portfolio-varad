<?php
session_start();
include 'master/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone_no = trim($_POST['phone_no']);
    $password = trim($_POST['password']);

    if (!empty($phone_no) && !empty($password)) {
        $stmt = $conn->prepare("SELECT admin_id, phone_no, password FROM admin WHERE phone_no = ?");
        $stmt->bind_param("s", $phone_no);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (md5($password) === $row['password']) {
                // ✅ Set session variable
                $_SESSION['admin_id'] = $row['admin_id'];
                $_SESSION['phone_no'] = $row['phone_no'];

                header("Location: master/dashboard.php"); // Redirect to dashboard
                exit();
            } else {
                $_SESSION['error'] = "Invalid credentials!";
            }
        } else {
            $_SESSION['error'] = "User not found!";
        }
    } else {
        $_SESSION['error'] = "All fields are required!";
    }
    header("Location: index.php"); // Redirect back to login page
    exit();
}
?>
