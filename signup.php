<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<body class="signup-page">
    <?php include 'navi.php'; ?>
    
    <div class="login-wrapper">
        <div class="login-container">
            <form class="login-form signup-form" action="include/signup.inc.php" method="POST">
                <h2>Create Account</h2>
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" required>
                </div>                
                <div class="form-remember">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">I agree to the Terms and Conditions</label>
                </div>
                <button type="submit" name="submit" class="login-button">Sign Up</button>
                <div class="form-footer">
                    <span>Already have an account?</span>
                    <a href="login.php" class="create-account">Log In</a>
                </div>
            </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>