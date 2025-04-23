<?php
include 'views/header.php';
?>

<form id="loginform" action="models/login_user.php" method="POST">
    <div class="header">LOGIN</div>

    <?php
    // Check for registration success message
    if (isset($_GET['regsuccess']) && $_GET['regsuccess'] == 1) {
        echo "<div class='success_message'>Registration Successful! Please log in.</div>";
    }

    // Check for login error messages
    if (isset($_GET['error'])) {
        $error = htmlspecialchars($_GET['error']);
        if ($error == 'invalid_credentials') {
            echo "<div class='error_message'>Invalid username or password.</div>";
        } elseif ($error == 'db_connect') {
            echo "<div class='error_message'>Database connection error. Please try again later.</div>";
        } elseif ($error == 'stmt_prepare') {
            echo "<div class='error_message'>An application error occurred. Please try again.</div>";
        } elseif ($error == 'not_loggedin') {
             echo "<div class='error_message'>Please log in to access that page.</div>";
        } else {
            // Generic error for any other unexpected error parameter
            echo "<div class='error_message'>An unknown error occurred.</div>";
        }
    }
    ?>

    <label for="uname">Username or Email</label>
    <input type="text" name="uname" id="uname" placeholder="username or email" required>

    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass" placeholder="password" required>

    <div id="signedin">
        <input type="checkbox" name="signedin" id="signedin" value="0"/>
        <label for="signedin">keep me signed in</label>
    </div>

    <input type="submit" value="login">

    <a href="./registration.php">Register</a>
</form>

<?php
include 'views/footer.php';
?>