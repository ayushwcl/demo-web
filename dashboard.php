<?php
ob_start();
include 'includes/functions.php'; // Correct filename
include 'includes/header.php'; 
include 'includes/db.php';

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Your dashboard content
?>

<div class="container">
    <h2 class="my-4">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Here's your dashboard where you can manage your account and projects.</p>
    <!-- Add your dashboard features here -->
</div>

<?php include 'includes/footer.php'; 
ob_end_flush();
?>
