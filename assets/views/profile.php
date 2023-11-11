<!DOCTYPE html>
<html lang="en">
<?php require '../views/layouts/head.php'; ?>
<body>
    <?php require '../views/layouts/header.php'; ?>
    <main class="profile-page">
        <div class="main-wrapper">
            <aside>
                <h2>Favorites</h2>
                <ol>
                    <li>Megali Vretania Hotel</li>
                </ol>
                <h2>Reviews</h2>
                <ol>
                    <li>Hilton Hotel</li>
                    <img src="../img/stars-4.png" alt="">
                    <li>Megali Vretania Hotel</li>
                    <img src="../img/stars-5.png" alt="">

                </ol>
            </aside>
            <section class="search-results">
                <h2>My bookings</h2>
                <article>
                    <div class="article-description">
                        <img src="../img/rooms/room-1.jpg" alt="">
                        <div>
                            <h2>Megali Vretania Hotel<br><span> Athens, Syntagma</span></h2>
                            <p>With a prime location, opposite Constitution Square and the House of Parliament, the Grande Bretagne features luxurious rooms and stunning city views from its magnificent rooftop terrace. WiFi is offered in all rooms and areas.</p>
                            <a href="../views/room-1.php">Go to Room Page</a>
                        </div>
                    </div>
                    <div class="article-details">
                        <div>
                            <p>Per Night: 750&euro;</p>
                        </div>
                        <div>
                            <p>Count of Guests: 1</p>
                            <p>Type of Room: Single Room</p>
                        </div>
                    </div>  
                </article>
                <article>
                    <div class="article-description">
                        <img src="../img/rooms/room-2.jpg" alt="">
                        <div>
                            <h2>Hilton Hotel<br><span>Athens, Evangelismos</span></h2>
                            <p>Located in the heart of Athens, the Hilton Athens features elegant rooms, 3 swimming pools, the popular rooftop Galaxy Bar and 4 restaurants. Evangelismos Metro Station is just a few steps away and connects to Syntagma Square within 5 minutes.</p>
                            <a href="../views/room-2.php">Go to Room Page</a>
                        </div>
                    </div>
                    <div class="article-details">
                        <div>
                            <p>Per Night: 350&euro;</p>
                        </div>
                        <div>
                            <p>Count of Guests: 1</p>
                            <p>Type of Room: Single Room</p>
                        </div>
                    </div>  
                </article>
                <hr>
            </section>
        </div>
    </main>
    <?php require '../views/layouts/footer.php'; ?>
    <?php require '../views/layouts/scripts.php'; ?>
</body>
</html>