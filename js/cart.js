document.addEventListener("DOMContentLoaded", function () {
  const removeLinks = document.querySelectorAll(".remove-link");

  removeLinks.forEach(function (link) {
    link.addEventListener("click", function (event) {
      event.preventDefault();
      const productRow = event.target.closest("tr");
      productRow.remove();
      updateTotalPrice();
    });
  });

  function updateTotalPrice() {
    const initialprice = document.querySelectorAll(".cart_price table td:nth-child(3)");
    const totalPriceElements = document.querySelectorAll(".cart_price table td:nth-child(4)");
    const quantity1 = document.querySelectorAll(".cart_price table td:nth-child(2) input");
    
    let subtotal = 0,i=0;
    console.log("mukul");
    totalPriceElements.forEach(function (element) {
      const price= parseFloat(element.textContent.replace("$", ""));
      console.log(price)
      // const quantity = parseInt(element.querySelector("td:nth-child(2) input").value);
      const quantity=parseInt(quantity1[i].value);
      // console.log(quantity);
      subtotal+=parseFloat(initialprice[i].textContent.replace("$",""))*quantity;
      element.textContent="$"+parseFloat(initialprice[i].textContent.replace("$",""))*quantity;
      i++;

      console.log(element);
    });

    const tax = subtotal * 0.25; // Example tax rate of 25%
    const total = subtotal + tax;

    document.querySelector(".total-price table tr:nth-child(1) td:nth-child(2)").textContent = "$" + subtotal.toFixed(2);
    document.querySelector(".total-price table tr:nth-child(2) td:nth-child(2)").textContent = "$" + tax.toFixed(2);
    document.querySelector(".total-price table tr:nth-child(3) td:nth-child(2)").textContent = "$" + total.toFixed(2);
  }
  const quantityInputs = document.querySelectorAll(".cart_price table td:nth-child(2) input");
  quantityInputs.forEach(function (input) {
    input.addEventListener("change", function () {
      updateTotalPrice();
    });
  });

});
