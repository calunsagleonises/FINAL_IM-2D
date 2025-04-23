<?php
include 'views/header.php';
?>

<?php
// The introductory section is now displayed for everyone visiting the index page
?>
<div class="intro-section">
    <h2>Welcome to Campus-Connect!</h2>
    <p>Connect with your fellow students, share updates, and stay informed about campus life.</p>
    <p>This is a simple platform to help you stay in touch.</p>
    <?php
    // Display different content within the intro based on login status
    if (!isset($_SESSION['uid'])) {
        ?>
        <h3>Get Started</h3>
        <p>If you are new here you can <a href="./registration.php">Register</a> to create an account. If you already have an account, <a href="./login.php">Log In</a> to join the conversation.</p>
        <?php
    } else {
        // Content shown to logged-in users within the intro section
        ?>
        <h3>Welcome Back, <?php echo htmlspecialchars($_SESSION['firstname']); ?>!</h3>
        <p>Scroll down to see the latest posts or share your thoughts above.</p>
        <?php
    }
    ?>
</div>

<?php
// The post creation form and posts are displayed only if the user is logged in
if (isset($_SESSION['uid'])) {
    include 'views/view_posts.php';
}
?>

<?php
include 'views/footer.php';
?>              