
  function calculateTotalPrice() {
    // Get the selected room type and its price
    var roomTypeSelect = document.getElementById("room-type");
    var selectedOption = roomTypeSelect.options[roomTypeSelect.selectedIndex];
    var roomType = selectedOption.value.split(",")[0].trim();
    var price = parseInt(selectedOption.value.split(",")[1]);

    // Calculate the total price based on the number of nights
    var checkInDate = document.getElementById("check-in").value;
    var checkOutDate = document.getElementById("check-out").value;
    var oneDay = 24 * 60 * 60 * 1000; // hours * minutes * seconds * milliseconds
    var nights = Math.round(Math.abs((new Date(checkOutDate) - new Date(checkInDate)) / oneDay));
    var totalPrice = price * nights;

    // Update the form action URL with the calculated price
    var bookingForm = document.getElementById("booking-form");
    bookingForm.action = "result.html?roomType=" + encodeURIComponent(roomType) + "&totalPrice=" + totalPrice;
  }

