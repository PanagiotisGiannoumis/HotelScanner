<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web εφαρμογή αναζήτησης καταλυμάτων</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../../index.php"><img class="logo" src="../img/logo.png" alt="">Hotel Scanner</a></li>
            </ul>
            <ul>
                <li><a href="../../index.php"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="../views/login.php"><i class="fa-solid fa-user"></i>Login</a></li>
            </ul>
        </nav>
    </header>
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
    <footer>
        <div class="footer-wrapper">
            <a href="../index.php"><img class="logo" src="../img/logo.png" alt=""></a><p>© 2023 Hotel Scanner All rights reserved.</p>
        </div>     
    </footer>  
    <script src="../js/jquery-3.7.1.min.js"></script> 
    <script src="../js/login.js"></script>  
</body>
</html>