<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel scanner</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php"><img class="logo" src="assets/img/logo.png" alt="">Hotel Scanner</a></li>
            </ul>
            <ul>
                <li><a href="index.php"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="assets/views/login.php"><i class="fa-solid fa-user"></i>Login</a></li>
            </ul>
        </nav>
    </header>
    <main class="home-page">
        <section class="main-section">
            <form action="" method="">
                <select name="HomePageForm_City" id="HomePageForm_City" required>
                    <option value="">City</option>
                    <option value="athens">Athens</option>
                    <option value="thessaloniki">Thessaloniki</option>
                    <option value="patra">Patra</option>
                    <option value="piraeus">Piraeus</option>
                    <option value="heraklion">Heraklion</option>
                    <option value="larissa">Larissa</option>
                    <option value="volos">Volos</option>
                    <option value="ioannina">Ioannina</option>
                    <option value="chalkida">Chalkida</option>
                    <option value="trikala">Trikala</option>
                </select>
                <select name="HomePageForm_RoomType" id="HomePageForm_RoomType">
                    <option value="">Room Type</option>
                    <option value="single">Single</option>
                    <option value="double">Double</option>
                    <option value="triple">Triple</option>
                    <option value="quad">Quad</option>
                    <option value="queen">Queen</option>
                    <option value="king">King</option>
                    <option value="twin">Twin</option>
                    <option value="suite">Suite</option>
                </select>
                <input type="date" id="HomePageForm_CheckInDate" name="HomePageForm_CheckInDate" required>
                <input type="date" id="HomePageForm_CheckOutDate" name="HomePageForm_CheckOutDate" required>
                <a href="assets/views/list.php"><input type="button" value="Search"></a>
            </form>
        </section>
    </main>
    <footer>
        <div class="footer-wrapper">
            <a href="index.php"><img class="logo" src="assets/img/logo.png" alt=""></a><p>© 2023 Hotel Scanner All rights reserved.</p>
        </div> 
    </footer>
</body>
</html>