<!DOCTYPE html>
<html lang="en">
<?php require '../views/layouts/head.php'; ?>
<body>
    <?php require '../views/layouts/header.php'; ?>
    <main class="room-page">
        <div class="room-page-wrapper">
            <div class="room-title-container">
                <div class="room-title">
                    <p>Perianth Hotel - Athens, Monastiraki |</p>
                    <p>&nbsp;Reviews:</p>
                    <p>&nbsp;<img src="../img/stars-4.png" alt=""></p>
                    <p class="heart">&nbsp;&nbsp;|<i class="fa-regular fa-heart"></i></p>
                </div>
                <div class="room-price">
                    <p>Per Night: 560&euro;</p>
                </div>
            </div>
            <img src="../img/rooms/room-3.jpg" class="room-image" alt="">
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
                    <p>The curved balconies of this Bauhaus landmark overlook the lively café scene on Agia Irini Square, named after the domed church that anchors the plaza. Inside, it’s a paean to the 1930s—moody black marble, gray terrazzo floors, and tubular bronze lighting—with dusky-pink sofas, sage-green throws, and a dash of modern art to keep things fresh. Guests have free access to yoga, meditation, and martial arts classes at the deeply calming Zen Center on the first floor. Re-tox with sliders and a spritz at the all-day restaurant downstairs, a prime perch for people-watching. With a savvy concierge to help navigate the surrounding bars, markets, and galleries, and the Acropolis just overhead, this is a smart base for exploring both ancient and modern Athens.</p>
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