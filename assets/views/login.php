<!DOCTYPE html>
<html lang="en">
<?php require '../views/layouts/head.php'; ?>
<body>
    <?php require '../views/layouts/header.php'; ?>
    <main class="login-page">
        <div class="login-page-wrapper">
            <div class="overlay">
                <h2>Sign in</h2>
                <form action="" method="">
                    <input type="input" name="LoginPage_Email" id="LoginPage_Email" placeholder="Your email">
                    <div class="text-danger email-error">
                        Must be a valid email address! Ex. example@example.com
                    </div>
                    <input type="password" name="LoginPage_Password" id="LoginPage_Password" placeholder="Your password">
                    <div class="text-danger password-error">
                        Password must be more than 5 characters!
                    </div>
                    <button type="submit">SIGN IN</button>
                </form>
                <p>New to Hotel Scanner? <a href="../views/register.php">Register here</a></p>
            </div>
        </div>     
    </main>
    <?php require '../views/layouts/footer.php'; ?>
    <?php require '../views/layouts/scripts.php'; ?>  
</body>
</html>