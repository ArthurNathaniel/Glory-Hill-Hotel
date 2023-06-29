const confirmBookingBtn = document.getElementById("confirm-booking");

confirmBookingBtn.addEventListener("click", function () {
  const checkIn = document.getElementById("check-in-result").textContent;
  const checkOut = document.getElementById("check-out-result").textContent;
  const name = document.getElementById("name-result").textContent;
  const number = document.getElementById("number-result").textContent;
  const guests = document.getElementById("guest-result").textContent;
  const roomType = document.getElementById("room-type-result").textContent;
  const totalPrice = document.getElementById("total-price").textContent;

  const bookingData = {
    checkIn,
    checkOut,
    name,
    number,
    guests,
    roomType,
    totalPrice,
  };

  fetch("https://tlgghana.hotelipad.com/api/sr", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(bookingData),
  })
    .then((response) => response.json())
    .then((result) => {
      // Handle the response from the server
      console.log(result);
    })
    .catch((error) => {
      // Handle any errors that occurred during the request
      console.error("Error:", error);
    });
});
