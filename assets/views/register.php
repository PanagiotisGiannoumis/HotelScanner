<!DOCTYPE html>
<html lang="en">
<?php require '../views/layouts/head.php'; ?>
<body>
    <?php require '../views/layouts/header.php'; ?>
    <main class="register-page">
        <div class="register-page-wrapper">
            <div class="overlay">
                <h2>Create Account</h2>
                <form action="" method="">
                    <input type="text" name="RegisterPage_Name" id="RegisterPage_Name" required placeholder="Your name">
                    <input type="input" name="RegisterPage_Email" id="RegisterPage_Email" required placeholder="Your email">
                    <div class="text-danger email-error">
                        Must be a valid email address! Ex. example@example.com
                    </div>
                    <input type="input" name="RegisterPage_EmailRepeat" id="RegisterPage_EmailRepeat" required placeholder="Repeat your email">
                    <div class="text-danger email-error email-error-repeat">
                        The two emails don't match.
                    </div>
                    <input type="password" name="RegisterPage_Password" id="RegisterPage_Password" required placeholder="Your password">
                    <div class="text-danger password-error">
                        Password must be more than 5 characters!
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" required id="RegisterPage_Checkbox">
                        <label for="RegisterPage_Checkbox">I Agree all statemetns in Terms of service</label>   
                    </div>  
                    <button type="submit">SIGN UP</button>
                </form>
                <p>Have already an account? <a href="../views/login.php">Login here</a></p>
            </div>
        </div>
    </main>
    <?php require '../views/layouts/footer.php'; ?>
    <?php require '../views/layouts/scripts.php'; ?>
</body>
</html>