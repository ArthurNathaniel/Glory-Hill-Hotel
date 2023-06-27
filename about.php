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
    <link rel="stylesheet" href="about.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/hero.jpg" alt="">
                    <div class="swiper-text">
                        <h3>ABOUT US</h3>
                        <h1>A place to experience enjoy the life</h1>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php include './booking.php'; ?>

    <!-- <section id="form">
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
    </section> -->


    <section>
        <div class="about">
            <h1>About Us</h1>
            <p>
                Welcome to Glory Hills Hotel, your perfect destination for a luxurious and memorable stay.
                Situated in the heart of breathtaking natural landscapes, we offer a tranquil retreat for
                both business and leisure travelers.
                <br>
                At Glory Hills Hotel, we pride ourselves on providing exceptional service and ensuring utmost
                comfort for our guests. Our dedicated team of professionals is committed to creating an
                unforgettable experience during your stay with us.
                <br>
                Our hotel boasts a wide range of modern and elegantly furnished rooms, catering to the diverse
                needs of our guests. From spacious suites to cozy single rooms, each accommodation option is
                designed to provide a relaxing and rejuvenating ambiance.
                <br>
              
                At Glory Hills Hotel, we prioritize sustainability and eco-friendly practices. We are dedicated
                to reducing our environmental impact while ensuring the highest standards of comfort and luxury
                for our guests.
                <br>
                Experience our warm hospitality and immerse yourself in the beauty of Glory Hills. We look forward
                to welcoming you and creating cherished memories during your stay at our hotel.
                <br>
                Feel free to use this text as a starting point and make any necessary adjustments to fit the
                specific details and style of Glory Hills Hotel.
            </p>
        </div>
    </section>

    <section>
        <div class="fact-title text-center">
            <h3>Numbers Fact</h3>
        </div>
        <div class="fact-grid">
            <div class="fact" data-max="300">
                <h1></h1>
                <p>Clients</p>
            </div>

            <div class="fact" data-max="26">
                <h1></h1>
                <p>Rooms</p>
            </div>

            <div class="fact" data-max="50">
                <h1></h1>
                <p>Staffs</p>
            </div>

            <div class="fact" data-max="21">
                <h1></h1>
                <p>Awards</p>
            </div>

        </div>
    </section>

    <?php include 'testimony.php'; ?>

    <section>
        <?php include 'footer.php'; ?>
    </section>
    <script>
        const facts = document.querySelectorAll('.fact')

        facts.forEach((fact, i) => {
            sessionStorage.setItem(`val${i}`, 0)
            setInterval(() => {
                var maxList = parseInt(sessionStorage.getItem(`val${i}`))
                if (maxList < fact.dataset.max) {
                    var new_val = maxList + 1;
                    sessionStorage.setItem(`val${i}`, new_val)
                    fact.children[0].innerHTML = new_val + ' ' + '+'
                    console.log(new_val)
                }
            }, 50)
        })
    </script>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>