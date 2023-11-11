<!DOCTYPE html>
<html lang="en">
<?php require '../views/layouts/head.php'; ?>
<body>
    <?php require '../views/layouts/header.php'; ?>
    <main class="room-page">
        <div class="room-page-wrapper">
            <div class="room-title-container">
                <div class="room-title">
                    <p>Shila Hotel - Athens, Kolonaki |</p>
                    <p>&nbsp;Reviews:</p>
                    <p>&nbsp;<img src="../img/stars-3.png" alt=""></p>
                    <p class="heart">&nbsp;&nbsp;|<i class="fa-regular fa-heart"></i></p>
                </div>
                <div class="room-price">
                    <p>Per Night: 400&euro;</p>
                </div>
            </div>
            <img src="../img/rooms/room-4.jpg" class="room-image" alt="">
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
                    <p>You could walk past this residence on a pedestrian street in upmarket Kolonaki and never know it was the city’s most soulful guesthouse. Step inside and it’s like wandering into the bohemian home of an art collector: a softly lit salon with a Strauss piano, antiques upholstered in vintage fabrics and a library of wonderful books. Two ethereal ground-floor suites have verandas shaded by a loquat tree. Up the marble staircase are four more enormous suites with velvet divans, floating beds, intriguing artworks, and sultry bathrooms with rough-hewn marble sinks—one even has a swing. Local chocolatiers, parfumiers, and coffee shops create delicious treats and toiletries for every room. The greatest surprise is the roof garden: an urban jungle of plants, day beds, and outdoor showers. Wonderfully idiosyncratic, this is a rare treasure that feels genuinely lived-in.</p>
                </div>
                <button class="booked">Already Booked</button>
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
                    <textarea required placeholder="Review" name="FormPage_AddReview" name="FormPage_AddReview" id="FormPage_AddReview"></textarea>
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
    <?php require '../views/layouts/scripts.php'; ?> 
</body>
</html>