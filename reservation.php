<!doctype html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Glory Hills Hotel is a luxurious hotel situated in the heart of Cityville. 
    With its stunning architecture, world-class amenities, and impeccable service, it offers a truly memorable 
    experience for both leisure and business travelers.">
    <meta name="keywords" content="Glory Hills Hotel, hotel, luxury, accommodation, Cityville">
    <title>Glory Hills Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php include 'cdn.php' ?>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reservation.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/building-3.jpg" alt="">
                    <div class="swiper-text">
                        <h1>RESERVATION</h1>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include './booking.php'; ?>
    <section>
        <div class="reservation-bg">
            <div class="title-reservation">
                <h1 class="text-center">Make a Reservation</h1>
            </div>

            <div class="reservation-grid">
                <div class="reservation-suite" style="background-image:url(./images/suit_4.jpg);">
                </div>
                <div class="reservation-suite-title">
                    <h2>Suite Rooms</h2>
                    <p> <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </p>
                    <p class="price">
                        Starting from <span>
                            GH₵ 400.00
                        </span>
                        / per night
                    </p>
                </div>

                <div class="reservation-button">
                    <button type="submit">
                        <a href="display.php" style="text-decoration: none; color:#fff;"> BOOK NOW </a>
                    </button>
                </div>
            </div>

            <div class="reservation-grid">
                <div class="reservation-suite" style="background-image:url(./images/queen_5.jpg);">
                </div>
                <div class="reservation-suite-title">
                    <h2>Queen Size Rooms</h2>
                    <p> <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </p>
                    <p class="price">
                        Starting from <span>
                            GH₵ 300.00
                        </span>
                        / per night
                    </p>
                </div>

                <div class="reservation-button">
                    <button type="submit">
                        <a href="display.php" style="text-decoration: none; color:#fff;"> BOOK NOW </a>
                    </button>
                </div>
            </div>

            <div class="reservation-grid">
                <div class="reservation-suite" style="background-image:url(./images/standard-with-ac5.jpg);">
                </div>
                <div class="reservation-suite-title">
                    <h2>Standard with A/C Rooms</h2>
                    <p> <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </p>
                    <p class="price">
                        Starting from <span>
                            GH₵ 230.00
                        </span>
                        / per night
                    </p>
                </div>

                <div class="reservation-button">
                    <button type="submit">
                        <a href="display.php" style="text-decoration: none; color:#fff;"> BOOK NOW </a>
                    </button>
                </div>
            </div>

            <div class="reservation-grid">
                <div class="reservation-suite" style="background-image:url(./images/single-bed-with-ac.jpg);">
                </div>
                <div class="reservation-suite-title">
                    <h2>Single with A/C Rooms</h2>
                    <p> <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </p>
                    <p class="price">
                        Starting from <span>
                            GH₵ 160.00
                        </span>
                        / per night
                    </p>
                </div>

                <div class="reservation-button">
                    <button type="submit">
                        <a href="display.php" style="text-decoration: none; color:#fff;"> BOOK NOW </a>
                    </button>
                </div>
            </div>

            <div class="reservation-grid">
                <div class="reservation-suite" style="background-image:url(./images/standard3.jpg);">
                </div>
                <div class="reservation-suite-title">
                    <h2>Standard with Fan Rooms</h2>
                    <p> <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </p>
                    <p class="price">
                        Starting from <span>
                            GH₵ 150.00
                        </span>
                        / per night
                    </p>
                </div>

                <div class="reservation-button">
                    <button type="submit">
                        <a href="display.php" style="text-decoration: none; color:#fff;"> BOOK NOW </a>
                    </button>
                </div>
            </div>


            <div class="reservation-grid">
                <div class="reservation-suite" style="background-image:url(./images/single-bed-with-fan.jpg);">
                </div>
                <div class="reservation-suite-title">
                    <h2>Single with Fan Rooms</h2>
                    <p> <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </p>
                    <p class="price">
                        Starting from <span>
                            GH₵ 120.00
                        </span>
                        / per night
                    </p>
                </div>

                <div class="reservation-button">
                    <button type="submit">
                        <a href="display.php" style="text-decoration: none; color:#fff;"> BOOK NOW </a>
                    </button>
                </div>
            </div>

            <!-- <div class="reservation-grid">
                <div class="reservation-suite" style="background-image:url(./images/room-seven.jpg);">
                </div>
                <div class="reservation-suite-title">
                    <h2>Side Apartment</h2>
                    <p> <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </p>
                    <p class="price">
                        Starting from <span>
                            GH₵ 120.00
                        </span>
                        / per night
                    </p>
                </div>

                <div class="reservation-button">
                    <button type="submit">
                        <a href="display.php" style="text-decoration: none; color:#fff;"> BOOK NOW </a>
                    </button>
                </div>
            </div> -->

        </div>
    </section>



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