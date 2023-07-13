    <section id="form">
        <form action="show.php" method="get" id="bbb" class="form" onsubmit="calculateTotalPrice(event)">

            <div class="check">
                <label>CHECK IN & OUT</label>
                <input type="date" class="form-control" id="check-in" name="check-in" placeholder="Check In & Out " required>
            </div>
            <div class="check">
                <label>NAME</label>
                <input type="text" placeholder="Enter your name" id="name" name="name" required>
            </div>
            <div class="check">
                <label>PHONE NUMBER</label>
                <input type="number" min="0" id="number" name="number" placeholder="Enter your phone number" required>

            </div>
            <div class="check">
                <label for="guest">GUEST</label>
                <select id="guest" name="guest" required>
                    <option value="" disabled selected hidden>Number of Guest</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="check">
                <label for="room-type">ROOM TYPE</label>
                <select id="room-type" name="room-type" required>
                    <option value="" disabled selected hidden>Select Room Type</option>
                    <option value="Suite Rooms, 400">Suite Rooms</option>
                    <option value="Queen Size Rooms, 300">Queen Size Rooms</option>
                    <option value="Standard with A/C Rooms, 230">Standard with A/C Rooms</option>
                    <option value="Single with A/C Rooms, 160">Single with A/C Rooms</option>
                    <option value="Standard with Fan Rooms, 150">Standard with Fan Rooms</option>
                    <option value="Single with Fan Rooms, 120">Single with Fan Rooms</option>
                    <!-- <option value="Side Apartment, 120">Side Apartment</option> -->
                </select>
            </div>

            <div class="ava">
                <button type="submit"  value="Check Availability">
                    Book Now
                </button>
            </div>


        </form>
    </section>
    <!-- <style>
        .booking-display {
            display: block;
            transition: 5s;
        }
    </style>
    <script>
        // Get the button element with the ID "bookbtn"
        var bookbtn = document.getElementById("bookbtn");
        var display_text = document.querySelector(".display-text");

        // Add a click event listener to the button
        bookbtn.addEventListener("click", function() {
            // Add the CSS class "bookbtn" to the button
            display_text.classList.add("booking-display");
        });
    </script> -->