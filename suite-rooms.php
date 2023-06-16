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
    <link rel="stylesheet" href="rooms.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/room-one.jpg" alt="">
                    <div class="swiper-text">

                        <h1>Suite Rooms</h1>


                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Our Room Type</li>
                            <li>Suite Rooms</li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include 'booking.php'; ?>

    <section>
        <div class="room-slide">
            <section>
                <div class="swiper mySwiper2 ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide rooms-swiper">
                            <img src="./images/room-one.jpg" alt="">
                        </div>
                        <div class="swiper-slide rooms-swiper">
                            <img src="./images/room-two.jpg" alt="">
                        </div>
                        <div class="swiper-slide rooms-swiper">
                            <img src="./images/room-three.jpg" alt="">
                        </div>
                        <div class="swiper-slide rooms-swiper">
                            <img src="./images/room-four.jpg" alt="">
                        </div>
                        <div class="swiper-slide rooms-swiper">
                            <img src="./images/room-five.jpg" alt="">
                        </div>
                    </div>
                    <div class="amount">
                        <h1>
                            START FROM
                            <span>GH₵ 400.00 </span>
                            <b> / PER NIGHT</b>
                        </h1>
                    </div>

                    <div class="books">
                        <button class="booking">
                            <a href="display.php" style="text-decoration: none; color:#fff;"> BOOK NOW</a>
                        </button>
                    </div>
                </div>

            </section>
        </div>



    </section>

    <section>
        <div class="description">
            <h1>Description</h1>
            <p>
                Welcome to the Suite at Glory Hills Hotel. This luxurious room features a comfortable king size bed, perfect for a restful night's sleep. Stay cool and comfortable with the air conditioner, ensuring a pleasant atmosphere throughout your stay.
                <br>
                The attached washroom provides convenience and privacy, equipped with essential amenities for your comfort. A spacious wardrobe is available to store your belongings and keep your room tidy.
                <br>
                For your convenience, a refrigerator is provided to store and preserve your food and beverages. A table and chair set are available, allowing you to work or enjoy meals comfortably.
                <br>
                Relax on the sofa and enjoy your favorite shows on the TV, offering a range of entertainment options.
                <br>
                Experience comfort and elegance in the Suite at Glory Hills Hotel.
            </p>
        </div>
    </section>

    <section>
        <div class="amenities">
            <h1>Amenities</h1>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-circle-check"></i> King size bed</li>
                            <li><i class="fa-solid fa-circle-check"></i> Air conditioner</li>
                            <li><i class="fa-solid fa-circle-check"></i> Washroom</li>
                            <li><i class="fa-solid fa-circle-check"></i> Wardrobe</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-circle-check"></i> Refrigerator</li>
                            <li><i class="fa-solid fa-circle-check"></i> Table &amp; chair</li>
                            <li><i class="fa-solid fa-circle-check"></i> Sofa</li>
                            <li><i class="fa-solid fa-circle-check"></i> TV</li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </section>

  <?php include 'testimony.php'; ?>

    <section>
        <?php include 'footer.php'; ?>
    </section>
    <!-- <script src="index.js"></script> -->
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
            altFormat: "J F Y",
            altInput: true,
            mode: 'range',
            disableMobile: false
        });

        calculateTotalPrice = (form_event) => {
            // console.log(form.reset());
            form_event.preventDefault();
            const form = form_event.target;
            const date_in = form.elements[1]
            console.log(date_in)
            if (date_in.value.length < 1) {
                date_in.style.border = '3px solid salmon'
                date_in.placeholder = 'Pick a Date'
            } else {
                form.submit()
            }
            // form.checkValidity()
        }
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
            speed: 8000,
            loop: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 4500,
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var zoomDiv = document.querySelector('.swiper-slide');

            zoomDiv.addEventListener('click', function() {
                this.classList.toggle('zoomed');
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>