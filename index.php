<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Glory Hills Hotel is a luxurious hotel situated in the heart of Cityville. With its stunning architecture, world-class amenities, and impeccable service, it offers a truly memorable experience for both leisure and business travelers.">
    <meta name="keywords" content="Glory Hills Hotel, hotel, luxury, accommodation, Cityville">
    <title>Glory Hills Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php include 'cdn.php' ?>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/hero.jpg" alt="">
                    <div class="swiper-text">
                        <h5>WELCOME TO</h5>
                        <h1>Glory Hills Hotel</h1>
                        <p>
                            A place to experience enjoy the life
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="./images/hero2.jpg" alt="">
                    <div class="swiper-text">
                        <h5>WELCOME TO</h5>
                        <h1>Glory Hills Hotel</h1>
                        <p>
                            A place to experience enjoy the life
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="form">
        <form action="" class="form">
            <div class="check">
                <label>CHECK IN</label>
                <input type="date" class="form-control" id="check-in" name="check-in" required>
            </div>
            <div class="check">
                <label>CHECK OUT</label>
                <input type="date" class="form-control" id="check-in" name="check-in" required>
            </div>
            <div class="check">
                <label>GUEST</label>
                <input type="number" min="0">
            </div>
            <div class="check">
                <label for="room-type">ROOM TYPE</label>
                <select id="room-type" name="room-type">
                    <option value="suite">Suite Rooms</option>
                    <option value="queen">Queen Size Rooms</option>
                    <option value="ac-standard">Standard with A/C Rooms</option>
                    <option value="ac-single">Single with A/C Rooms</option>
                    <option value="fan-standard">Standard with Fan Rooms</option>
                    <option value="fan-single">Single with Fan Rooms</option>
                    <option value="side-apartment">Side Apartment</option>
                </select>
            </div>

            <div class="ava">
                <button>
                    Check Avaliability
                </button>
            </div>


        </form>
    </section>


    <section>
        <div class="about-bg">
            <div class="about-title">
                <h5>LITTLE ABOUT US</h5>
            </div>
            <div class="about-grid">
                <div class="about-image">
                    <img src="https://placehold.jp/450x450.png" alt="">
                </div>
                <div class="about-text">
                    <h1>A best place to enjoy your life</h1>
                    <p>
                        Welcome to Glory Hills Hotel, a captivating sanctuary where every detail is designed to
                        elevate your senses and create cherished memories. Step into a world of opulence, where
                        luxurious accommodations, impeccable service, and breathtaking surroundings converge.
                        Indulge in the finest amenities, savor exquisite culinary delights, and immerse yourself
                        in an atmosphere of pure relaxation and serenity. Whether you're seeking a romantic
                        getaway, a family retreat, or a memorable event, our dedicated team is committed to
                        ensuring your experience at Glory Hills Hotel is nothing short of extraordinary. Unwind,
                        rejuvenate, and embrace the best moments of your life in this remarkable haven of
                        unparalleled elegance and timeless beauty.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="rooms-home">
            <div class="rooms-list" id="scrollable-div">
                <h4>DISCOVER OUR ROOMS</h4>
                <h1>Luxury interior</h1>
                <div class="rooms-detial">
                    <div class="room-img" style=" background-image: url(./images/room-one.jpg);">
                    </div>
                    <div class=" room-type">
                        <h3>Suite Rooms</h3>
                        GH₵ 400.00 per night
                    </div>
                </div>
                <div class="rooms-detial">
                    <div class="room-img" style=" background-image: url(./images/room-two.jpg);">
                    </div>
                    <div class="room-type">
                        <h3>Queen Size Rooms</h3>
                        GH₵ 300.00 per night
                    </div>
                </div>
                <div class="rooms-detial">
                    <div class="room-img" style=" background-image: url(./images/room-three.jpg);">
                    </div>
                    <div class="room-type">
                        <h3>Standard with A/C Rooms</h3>
                        GH₵ 230.00 per night
                    </div>
                </div>
                <div class="rooms-detial">
                    <div class="room-img" style=" background-image: url(./images/room-four.jpg);">
                    </div>
                    <div class="room-type">
                        <h3>Single bed with A/C Rooms</h3>
                        GH₵ 160.00 per night
                    </div>
                </div>
                <div class="rooms-detial">
                    <div class="room-img" style=" background-image: url(./images/room-five.jpg);">
                    </div>
                    <div class="room-type">
                        <h3>Standard with Fan Rooms</h3>
                        GH₵ 150.00 per night
                    </div>
                </div>
                <div class="rooms-detial">
                    <div class="room-img" style=" background-image: url(./images/room-six.jpg);">
                    </div>
                    <div class="room-type">
                        <h3>Single bed with Fan Rooms</h3>
                        GH₵ 120.00 per night
                    </div>
                </div>
                <div class="rooms-detial">
                    <div class="room-img" style=" background-image: url(./images/room-seven.jpg);">
                    </div>
                    <div class="room-type">
                        <h3>Side Apartment</h3>
                        GH₵ 120.00 per night
                    </div>
                </div>
            </div>
            <div class="rooms-display">

            </div>
        </div>
    </section>

    <section>
        <div class="testimony">
            <div class="test-bg">
                <div class="test-title">
                    <h5>TESTIMONIAL</h5>

                    <h1>What Client Say</h1>
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide ">
                                <div class="text">
                                    <div class="star text-center" style="color:#f5a608;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>
                                        <i class="fas fa-quote-left quote-icon"></i>
                                        A very serene hotel situated in the valley area of prime Kumasi. Very affordable
                                        accommodation with very responsive and interactive staff.
                                        Rooms are neat and wash rooms come with heater. The standard Air-conditioned rooms
                                        do not have refrigerators.
                                        They serve nice food too…Try their fried rice with grilled chicken
                                        <i class="fas fa-quote-left quote-icon"></i>
                                    </p>
                                    <div class="text-center review">
                                    </div>
                                    <div class="text-center">
                                        <h3>George Frimps <span>Review from Google review</span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide ">
                                <div class="text">
                                    <div class="star text-center" style="color:#f5a608;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>
                                        <i class="fas fa-quote-left quote-icon"></i>
                                        A home away from home. Very quiet environment with pleasant staff.
                                        Located in danyame kumasi and very assessible roads. Prices also
                                        very affordable.
                                        <i class="fas fa-quote-left quote-icon"></i>
                                    </p>
                                    <div class="text-center review">
                                    </div>
                                    <div class="text-center">
                                        <h3>Hesthalynna Ottou Osafo <span>Review from Google review</span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide ">
                                <div class="text">
                                    <div class="star text-center" style="color:#f5a608;">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>
                                        <i class="fas fa-quote-left quote-icon"></i>
                                        Beautiful rooms and very affordable prices. Very respectful and smiling receptionists.
                                        <i class="fas fa-quote-left quote-icon"></i>
                                    </p>
                                    <div class="text-center review">
                                    </div>
                                    <div class="text-center">
                                        <h3> Eugene Boakye Appianing <span>Review from Google review</span></h3>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="what-we-offer">
            <h5 class="text-center">EXPLORE</h5>
            <h1 class="text-center">What We Offer</h1>
            <div class="offer-grid">
                <div class="offer">
                    <h1><i class="fas fa-hotel"></i></h1>
                    <h3>Luxurious Accommodations</h3>
                </div>
                <div class="offer">
                    <h1> <i class="fas fa-utensils"></i></h1>
                    <h3>Exquisite Eateries</h3>
                </div>
                <div class="offer">
                    <h1><i class="fas fa-wifi"></i></h1>
                    <h3>Seamless Connectivity</h3>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="location">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.7791137971344!2d-1.6372378254033648!3d6.674267621393786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb9740ec9503db%3A0xb5c9da4102041bf!2sGlory%20Hill%20Hotel!5e0!3m2!1sen!2sgh!4v1686774425465!5m2!1sen!2sgh" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-info">
                <h5>INFORMATION</h5>
                <h1>Contact Us</h1>

                <div class="info">
                    <h2>Ashanti Region, <span>Ghana</span></h2>
                    <p>
                        Paul Adjei Duah Dr, Kumasi
                    </p>

                    <h6>Email: <span>
                            <a href="mailto:info@gloryhillshotel.com">info@gloryhillshotel.com</a>
                        </span></h6>
                    <br>
                    <h6>Call us directly</h6>
                    <h1>
                        <a href="0200111226">020 011 1226</a>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php include 'footer.php'; ?>
    </section>

    <script>
        const roomImgs = document.querySelectorAll('.room-img');
        const roomsDisplay = document.querySelector('.rooms-display');
        // Set the first room-img as the default background
        const defaultBackgroundImage = roomImgs[0].style.backgroundImage;
        roomsDisplay.style.backgroundImage = defaultBackgroundImage;

        roomImgs.forEach(roomImg => {
            roomImg.addEventListener('mouseover', () => {
                const backgroundImage = roomImg.style.backgroundImage;
                roomsDisplay.style.backgroundImage = backgroundImage;
            });
        });
    </script>

    <script>
        flatpickr("#check-in", {
            minDate: "today",
            dateFormat: "Y-m-d",
            disableMobile: true
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper2", {
            autoplay: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            }
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>