<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit();
}
?>
<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="dashboard">
        <h2>Welcome, <?= htmlspecialchars($_SESSION["username"]) ?>!</h2>
        <div class="dashboard-content">
            <p>You are successfully logged in to your dashboard.</p>
            <div class="dashboard-actions">
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
