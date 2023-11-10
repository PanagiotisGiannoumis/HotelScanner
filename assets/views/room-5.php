<!DOCTYPE html>
<html lang="en">
<?php require '../views/layouts/head.php'; ?>
<body>
    <?php require '../views/layouts/header.php'; ?>
    <main class="room-page">
        <div class="room-page-wrapper">
            <div class="room-title-container">
                <div class="room-title">
                    <p>Four Seasons Astir Palace - Athens, Vouliagmeni |</p>
                    <p>&nbsp;Reviews:</p>
                    <p>&nbsp;<img src="../img/stars-4.png" alt=""></p>
                    <p class="heart">&nbsp;&nbsp;|<i class="fa-regular fa-heart"></i></p>
                </div>
                <div class="room-price">
                    <p>Per Night: 850&euro;</p>
                </div>
            </div>
            <img src="../img/rooms/room-5.jpg" class="room-image" alt="">
            <div class="room-info-container">
                <p>Count of Guests<br><i class="fa-solid fa-user"></i>2</p>
                <p>Type of room<br><i class="fa-solid fa-bed"></i>2</p>
                <p>Parking<br><i class="fa-solid fa-square-parking"></i>1</p>
                <p>Wifi<br><i class="fa-solid fa-wifi"></i>Yes</p>
                <p>Pet Friendly<br>No</p>
            </div>
            <div class="room-description-container">
                <div class="room-description">
                    <h2>Hotel Description</h2>
                    <p>The Astir Palace put the Athens Riviera on the map in the 1960s. After a recent glossy makeover courtesy of the Four Seasons, it’s back—and exactly what this up-and-coming coastline needed: a full-blown seaside hotel that isn’t stuck in the past. Subdued bedrooms epitomize stealth wealth (pay the premium for a sea view) and high-rollers quaff champagne cocktails in Martin Brudnizki’s trio of sexy restaurants or are cosseted in the waterfront spa. The young and restless can whizz across the bay on water-skis, or you could easily while away day after day on a floating sunbed, watching a parade of super yachts drift by under dazzling sunsets over the Saronic isles. And for dinner there's Michelin-starred Pelagos, tricked out like an Art Deco ocean liner—and the best of the four sensational, sea-view restaurants.</p>
                </div>
                <button>Already Booked</button>
            </div>
            <iframe class="google-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3145.040583380918!2d23.73273737691023!3d37.976182200530836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd4b45322381%3A0xb126665c4705d54b!2sHotel%20Grande%20Bretagne%2C%20a%20Luxury%20Collection%20Hotel%2C%20Athens!5e0!3m2!1sen!2sgr!4v1695993417285!5m2!1sen!2sgr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <hr> -->
            <section class="reviews">
                
                <div class='review'>

                </div>
            </section>
            <section class="add-review">
                <h2>Add review</h2>
                <form id="review-form" action="" method="">
                    <div class="form-group">
                        <input required class="form-control" type="text" placeholder="Name" name="name" id="name" value="">
                    </div>
                    <textarea required placeholder="Review" name="FormPage_AddReview" name="FormPage_AddReview" id="FormPage_AddReview" cols="141" rows="5"></textarea>
                    <div class="review-container">
                        <div class="star"><span class="stararea">★</span></div>
                        <div class="star"><span class="stararea">★</span></div>
                        <div class="star"><span class="stararea">★</span></div>
                        <div class="star"><span class="stararea">★</span></div>
                        <div class="star"><span class="stararea">★</span></div>
                        <div class="review-container2">
                            <img src="../img/stars-0.png" alt="">
                        </div>
                    </div>
                   
                    <div class="submit-container">
                        <button type="submit" id="submit">Submit</button>
                    </div>
                </form>
            </section>
        </div>   
    </main>
    <?php require '../views/layouts/footer.php'; ?>
    <script src="../js/jquery-3.7.1.min.js"></script> 
    <script src="../js/room.js"></script>  
</body>
</html>