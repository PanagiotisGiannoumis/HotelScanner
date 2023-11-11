<!DOCTYPE html>
<html lang="en">
<?php require 'assets/views/layouts/head.php'; ?>
<body>
    <?php require 'assets/views/layouts/header.php'; ?>
    <main class="home-page">
        <section class="main-section">
            <form action="" method="">
                <select name="HomePageForm_City" id="HomePageForm_City" required>
                    <option value="">City</option>
                    <option value="athens">Athens</option>
                    <option value="thessaloniki">Thessaloniki</option>
                </select>
                <select name="HomePageForm_RoomType" id="HomePageForm_RoomType">
                    <option value="">Room Type</option>
                    <option value="single">Single</option>
                    <option value="double">Double</option>
                    <option value="triple">Triple</option>
                </select>
                <input type="date" id="HomePageForm_CheckInDate" name="HomePageForm_CheckInDate" required>
                <input type="date" id="HomePageForm_CheckOutDate" name="HomePageForm_CheckOutDate" required>
                <a href="assets/views/list.php"><input type="button" value="Search"></a>
            </form>
        </section>
    </main>
    <?php require 'assets/views/layouts/footer.php'; ?>
    <?php require 'assets/views/layouts/scripts.php'; ?>
</body>
</html>