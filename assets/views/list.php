<!DOCTYPE html>
<html lang="en">
<?php require '../views/layouts/head.php'; ?>
<body>
    <?php require '../views/layouts/header.php'; ?>
    <main class="list-page">
        <div class="main-wrapper">
            <aside>
                <h2>Find the perfect hotel</h2>
                <form action="" method="">
                    <select name="ListPageForm_CountOfGuests" id="ListPageForm_CountOfGuests" required>
                        <option value="">Count of Guests</option>
                        <option value="one">1</option>
                        <option value="two">2</option>
                        <option value="three">3</option>
                    </select>
                    <select name="ListPageForm_RoomType" id="ListPageForm_RoomType">
                        <option value="">Room Type</option>
                        <option value="single">Single</option>
                        <option value="double">Double</option>
                        <option value="triple">Triple</option>
                    </select>
                    <select class="select-city" name="ListPageForm_City" id="ListPageForm_City" required>
                        <option value="">City</option>
                        <option value="athens">Athens</option>
                        <option value="thessaloniki">Thessaloniki</option>
                        <option value="patra">Patra</option>
                    </select>
                    <!-- Price Slider -->
                    <div class="price-input">
                        <div class="field">
                            <span>Min &euro;</span>
                            <input type="number" class="input-min" value="0" name="input-min">
                        </div>
                        <div class="separator">-</div>
                        <div class="field">
                            <span>Max &euro;</span>
                            <input type="number" class="input-max" value="5000" name="input-max">
                        </div>
                    </div>
                    <div class="slider">
                    <div class="progress"></div>
                    </div>
                    <div class="range-input">
                        <input type="range" class="range-min" min="0" max="5000" value="0" step="50">
                        <input type="range" class="range-max" min="0" max="5000" value="5000" step="50">
                    </div>
                    <!-- Price Slider -->
                    <input type="date" id="ListPageForm_CheckInDate" name="ListPageForm_CheckInDate" required>
                    <input type="date" id="ListPageForm_CheckOutDate" name="ListPageForm_CheckOutDate" required>
                    <input type="submit" value="Find Hotel">
                </form>
            </aside>
            <section class="search-results">
                <h2>Search Results</h2>
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
                <article>
                    <div class="article-description">
                        <img src="../img/rooms/room-3.jpg" alt="">
                        <div>
                            <h2>Perianth Hotel<br><span>Athens, Monastiraki</span></h2>
                            <p>The curved balconies of this Bauhaus landmark overlook the lively café scene on Agia Irini Square, named after the domed church that anchors the plaza.</p>
                            <a href="../views/room-3.php">Go to Room Page</a>
                        </div>
                    </div>
                    <div class="article-details">
                        <div>
                            <p>Per Night: 560&euro;</p>
                        </div>
                        <div>
                            <p>Count of Guests: 1</p>
                            <p>Type of Room: Single Room</p>
                        </div>
                    </div>  
                </article>
                <article>
                    <div class="article-description">
                        <img src="../img/rooms/room-4.jpg" alt="">
                        <div>
                            <h2>Shila Hotel<br><span>Athens, Kolonaki</span></h2>
                            <p>You could walk past this residence on a pedestrian street in upmarket Kolonaki and never know it was the city’s most soulful guesthouse. </p>
                            <a href="../views/room-4.php">Go to Room Page</a>
                        </div>
                    </div>
                    <div class="article-details">
                        <div>
                            <p>Per Night: 400&euro;</p>
                        </div>
                        <div>
                            <p>Count of Guests: 1</p>
                            <p>Type of Room: Single Room</p>
                        </div>
                    </div>  
                </article>
                <article>
                    <div class="article-description">
                        <img src="../img/rooms/room-5.jpg" alt="">
                        <div>
                            <h2>Four Seasons Astir Palace<br><span>Athens, Vouliagmeni</span></h2>
                            <p>The Astir Palace put the Athens Riviera on the map in the 1960s. After a recent glossy makeover courtesy of the Four Seasons, it’s back—and exactly what this up-and-coming coastline needed: a full-blown seaside hotel that isn’t stuck in the past. </p>
                            <a href="../views/room-5.php">Go to Room Page</a>
                        </div>
                    </div>
                    <div class="article-details">
                        <div>
                            <p>Per Night: 850&euro;</p>
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