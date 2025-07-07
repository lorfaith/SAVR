
<!-- GYA NA DI MAG SEARCH SA DATA BASE IF WHAT TYPE OF ACCOUNT ILA SUDLAN MAG LOG IN -->


<?php
session_start();
include '../config/db_connect.php'; // Adjust path to DB connection

$email = $_POST['email'];
$password = $_POST['password'];

// Fetch user from database
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];

        // Redirect based on role
        switch ($user['role']) {
            case 'customer':
                header("Location: ../customer/dashboard.php");
                break;
            case 'store':
                header("Location: ../store/dashboard.php");
                break;
            case 'fda':
                header("Location: ../fda/dashboard.php");
                break;
            case 'charity':
                header("Location: ../charity/dashboard.php");
                break;
            case 'qa':
                header("Location: ../qa/dashboard.php");
                break;
            default:
                header("Location: ../index.php");
                break;
        }
        exit;
    } else {
        // Invalid password
        echo "<script>alert('Incorrect password.'); window.history.back();</script>";
    }
} else {
    // Email not found
    echo "<script>alert('Account not found.'); window.history.back();</script>";
}
?>

