<?php
session_start();
include "includes/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Check if user exists before accessing its data
    if ($user && $password === $user['password']) {  
        $_SESSION['username'] = $username;
        header("Location: orion.php"); // Redirect after login
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<?php include "includes/header.php"; ?>

<div class="d-flex flex-column min-vh-100">
    <div class="container d-flex justify-content-center align-items-center flex-grow-1">
        <div class="card p-4 shadow-lg" style="width: 400px;">
            <h2 class="text-center">Login</h2>
            <?php if (isset($error)) {
                echo "<p class='text-danger text-center'>$error</p>";
            } ?>
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Username:</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>
