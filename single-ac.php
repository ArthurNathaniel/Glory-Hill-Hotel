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
                    <img src="./images/room-four.jpg" alt="">
                    <div class="swiper-text">

                        <h1>Single with A/C Rooms</h1>


                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Our Room Type</li>
                            <li>Single with A/C</li>
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
                <div class="swiper mySwiper ">
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
                            <span>GH₵ 160.00 </span>
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
                Welcome to our comfortable Single Bed room, perfect for solo travelers. This room offers a cozy and snug single bed, providing a peaceful and restful sleep experience.
                <br>
                Stay cool and comfortable with the provided air conditioner, allowing you to adjust the temperature to your liking and ensure a pleasant stay.
                <br>
                The attached washroom provides convenience and privacy, equipped with all the necessary amenities to meet your personal hygiene needs.
                <br>
                A wardrobe is available in the room, allowing you to store your belongings and keep your room organized during your stay.
                <br>
                For your convenience, a table and chair set is provided, creating a functional workspace or a comfortable spot for enjoying meals or working on your laptop.
                <br>
                Unwind and relax as you watch your favorite shows on the TV, offering a range of entertainment options for your leisure time.
                <br>
                Experience a cozy and convenient stay in our Single Bed room, where comfort and functionality blend harmoniously to ensure a delightful experience for our guests.
            </p>
        </div>
    </section>

    <section>
        <div class="amenities">
            <h1>Amenities</h1>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-circle-check"></i> Single Bed</li>
                            <li><i class="fa-solid fa-circle-check"></i> Air Conditioner</li>
                            <li><i class="fa-solid fa-circle-check"></i> Washroom</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><i class="fa-solid fa-circle-check"></i> Wardrobe</li>
                            <li><i class="fa-solid fa-circle-check"></i> Table &amp; chair</li>
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