<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<body class="login-page">
    <?php include 'navi.php'; ?>
    
    <div class="login-wrapper">
        <div class="login-container">
            <form class="login-form" action="include/login.inc.php" method="POST">
                <h2>Welcome Back</h2>
                
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p class='error-message'>Fill in all fields!</p>";
                    }
                    else if ($_GET["error"] == "wronglogin") {
                        echo "<p class='error-message'>Incorrect login information!</p>";
                    }
                }
                ?>
                
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-remember">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <button name="submit" type="submit" class="login-button">Log In</button>
                <div class="form-footer">
                    <a href="#" class="forgot-password">Forgot Password?</a>
                    <a href="signup.php" class="create-account">Create Account</a>
                </div>                            
            </form>
        </div>   
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>