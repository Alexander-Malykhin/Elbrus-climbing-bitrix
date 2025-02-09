document.addEventListener("DOMContentLoaded", function () {

    const selectList = document.querySelector('.footer__currency-list');
    const selectItems = document.querySelectorAll('.footer__currency-item');
    const selectButton = document.querySelector('.footer__currency-arrow');
    const currencyText = document.querySelector(".footer__currency-text");

    if (!selectList || !selectItems.length || !selectButton) {
        console.warn('Language switcher: required elements not found');
        return;
    }


    selectButton.addEventListener('click', (e) => {
        selectList.classList.toggle('footer__currency-active');
    });

    document.addEventListener('click', (e) => {
        if (!selectList.contains(e.target) && !selectButton.contains(e.target)) {
            selectList.classList.remove('footer__currency-active');
        }
    });

    const setCurrency = (currency) => {
        localStorage.setItem("selectedCurrency", currency);
        currencyText.innerText = currency;
        document.dispatchEvent(new Event("currencyChanged")); // Оповещение других компонентов
        updateButtonState();
    }

    const getCurrency = () => {
        return localStorage.getItem("selectedCurrency") || "RUB";
    }

    const updateButtonState = () => {
        let currentCurrency = getCurrency();
        document.querySelectorAll(".footer-btn").forEach(btn => {
            btn.classList.toggle("active", btn.getAttribute("data-currency") === currentCurrency);
        });
    }

    document.querySelectorAll(".footer-btn").forEach(btn => {
        btn.addEventListener("click", function () {
            setCurrency(this.getAttribute("data-currency"));
        });
    });

    updateButtonState();
});


