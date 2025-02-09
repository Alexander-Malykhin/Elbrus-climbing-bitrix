document.addEventListener("DOMContentLoaded", function () {

    const selectList = document.querySelector('.aside__list');
    const selectItems = document.querySelectorAll('.aside__list-item');
    const selectButton = document.querySelector('.aside__arrow');
    const currencyText = document.querySelector(".aside__text");
    const MENU = document.querySelector('.menu')

    if (!selectList || !selectItems.length || !selectButton) {
        console.warn('Language switcher: required elements not found');
        return;
    }


    selectButton.addEventListener('click', (e) => {
        selectList.classList.toggle('aside__list-active');
    });

    document.addEventListener('click', (e) => {
        if (!selectList.contains(e.target) && !selectButton.contains(e.target)) {
            selectList.classList.remove('aside__list-active');
        }
    });

    const setCurrency = (currency) => {
        localStorage.setItem("selectedCurrency", currency);
        currencyText.innerText = currency;
        document.dispatchEvent(new Event("currencyChanged")); // Оповещение других компонентов
        updateButtonState();
        MENU.classList.remove('menu__show')
        return document.body.style.overflow = '';
    }

    const getCurrency = () => {
        return localStorage.getItem("selectedCurrency") || "RUB";
    }

    const updateButtonState = () => {
        let currentCurrency = getCurrency();
        document.querySelectorAll(".aside-btn").forEach(btn => {
            btn.classList.toggle("active", btn.getAttribute("data-currency") === currentCurrency);
        });
    }

    document.querySelectorAll(".aside-btn").forEach(btn => {
        btn.addEventListener("click", function () {
            setCurrency(this.getAttribute("data-currency"));
        });
    });

    updateButtonState();
});


