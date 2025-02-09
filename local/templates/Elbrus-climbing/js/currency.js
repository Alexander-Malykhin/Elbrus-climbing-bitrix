document.addEventListener("DOMContentLoaded", function () {
    function updatePrices() {
        let currency = localStorage.getItem("selectedCurrency") || "RUB";
        document.querySelectorAll(".current").forEach(priceElement => {
            let priceRub = priceElement.getAttribute("data-rub");
            let priceUsd = priceElement.getAttribute("data-usd");
            priceElement.textContent = (currency === "USD") ? priceUsd + " $" : priceRub + " ₽";
        });
    }

    updatePrices();
    document.addEventListener("currencyChanged", updatePrices);
});