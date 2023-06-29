const confirmButton = document.getElementById("confirm-booking");

confirmButton.addEventListener("click", () => {
  const params = new URLSearchParams(window.location.search);
  const total_price_element = document.getElementById("total-price");
  const totalPrice = total_price_element
    ? parseFloat(total_price_element.textContent.replace(/\D/g, ""))
    : 0;

  const data = {
    check_in:params.get('check-in'),
    name: params.get("name"),
    number: params.get("number"),
    guest: params.get("guest"),
    room_type: params.get("room-type"),
    total_price: totalPrice,
  };

  fetch("https://tlgghana.hotelipad.com/api/sr", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data),
  })
    .then((response) => {
      if (response.status === 200) {
        alert(
          "Reservation request made successfully...our customer service personnel would contact you shortly."
        );
        window.location.href = "./";
      } else {
        alert(
          "There was an error confirming the booking. Please try again later."
        );
      }
    })
    .catch((error) => {
      console.error("Error confirming booking:", error);
      alert(
        "There was an error confirming the booking. Please try again later."
      );
      console.error(error);
    });
});
