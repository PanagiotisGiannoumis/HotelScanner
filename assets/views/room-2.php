<!DOCTYPE html>
<html lang="en">
<?php require '../views/layouts/head.php'; ?>
<body>
    <?php require '../views/layouts/header.php'; ?>
    <main class="room-page">
        <div class="room-page-wrapper">
            <div class="room-title-container">
                <div class="room-title">
                    <p>Hilton Hotel - Athens, Evangelismos |</p>
                    <p>&nbsp;Reviews:</p>
                    <p>&nbsp;<img src="../img/stars-5.png" alt=""></p>
                    <p class="heart">&nbsp;&nbsp;|<i class="fa-regular fa-heart"></i></p>
                </div>
                <div class="room-price">
                    <p>Per Night: 350&euro;</p>
                </div>
            </div>
            <img src="../img/rooms/room-2.jpg" class="room-image" alt="">
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
                    <p>Located in the heart of Athens, the Hilton Athens features elegant rooms, 3 swimming pools, the popular rooftop Galaxy Bar and 4 restaurants. Evangelismos Metro Station is just a few steps away and connects to Syntagma Square within 5 minutes.</p>
                    <p>This upscale hotel offers spacious rooms and suites with marble bathrooms with walk-in shower and bathtub. LCD TVs with cable and satellite channels, and work desks with adjustable lamps are included. Floor-to-ceiling patio doors and balconies offer views of the Athenian landscape or the Acropolis.</p>
                    <p>Milos Restaurant, which serves Greek gourmet cuisine including fresh fish is a favorite of local celebrities. The Byzantino restaurant proposes a Mediterranean buffet or a la carte menu and the richest Sunday brunch in Athens. On the 11th floor, guests can access the Executive Lounge offering free breakfast and refreshments to Executive rooms residents.</p>
                    <p>The stylish rooftop Galaxy Bar serves signature cocktails, while offering Acropolis views from its open-air terrace. The Oasis Pool Bar Grill serves Mediterranean cuisine or snacks.</p>
                    <p>Located in the commercial district of the city, the hotel is just 1,650 feet from the National Art Gallery, the Athens Concert Hall and the Kolonaki shopping district. The famous Acropolis of Athens is 2.5 mi away and the historic Plaka area lies within 1.6 mi.</p>
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