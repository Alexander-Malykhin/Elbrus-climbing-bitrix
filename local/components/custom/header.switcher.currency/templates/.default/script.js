document.addEventListener("DOMContentLoaded", function () {

    const selectList = document.querySelector('.select__list');
    const selectItems = document.querySelectorAll('.select__list-item');
    const selectButton = document.querySelector('.select__arrow');
    const currencyText = document.querySelector(".currency-text");

    if (!selectList || !selectItems.length || !selectButton) {
        console.warn('Language switcher: required elements not found');
        return;
    }


    selectButton.addEventListener('click', (e) => {
        selectList.classList.toggle('select__list-active');
    });

    document.addEventListener('click', (e) => {
        if (!selectList.contains(e.target) && !selectButton.contains(e.target)) {
            selectList.classList.remove('select__list-active');
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
        document.querySelectorAll(".currency-btn").forEach(btn => {
            btn.classList.toggle("active", btn.getAttribute("data-currency") === currentCurrency);
        });
    }

    document.querySelectorAll(".currency-btn").forEach(btn => {
        btn.addEventListener("click", function () {
            setCurrency(this.getAttribute("data-currency"));
        });
    });

    updateButtonState();
});


