//SLIDER MORE
(() => {
    let bookingBtn = document.querySelector(".more__button-order");
    let modal = document.getElementById("booking-modal");
    let spinner = document.querySelector(".spinner");
    let successMessage = document.querySelector(".success-message");

    bookingBtn.addEventListener("click", function () {
        modal.classList.add("modal__show"); // Показываем окно
        successMessage.style.opacity = "0"; // Скрываем галочку перед началом

        setTimeout(() => {
            spinner.style.display = "none"; // Скрываем спиннер
            successMessage.style.display = "block"; // Показываем контейнер
            setTimeout(() => {
                successMessage.style.opacity = "1"; // Запускаем анимацию галочки
            }, 100);
        }, 2000);

        setTimeout(() => {
            modal.classList.remove("modal__show"); // Закрываем окно
            spinner.style.display = "block"; // Возвращаем спиннер для следующего раза
            successMessage.style.display = "none"; // Скрываем галочку
            successMessage.style.opacity = "0"; // Сбрасываем анимацию
        }, 4000);
    });

    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".current").forEach(priceElement => {
            let priceText = priceElement.textContent.trim();
            let priceNumber = priceText.replace(/\D/g, ""); // Убираем всё, кроме цифр

            if (priceNumber) {
                let formattedPrice = Number(priceNumber).toLocaleString("ru-RU"); // Форматируем число с пробелами
                let currency = priceText.replace(/[0-9\s]/g, ""); // Оставляем только символ валюты
                priceElement.textContent = formattedPrice + " " + currency.trim(); // Собираем обратно
            }
        });
    });

    const sliderMore = () => {
        const carousel = document.querySelector('.more__slider-list')
        const nextButton = document.querySelector('.next')
        const prevButton = document.querySelector('.prev')

        nextButton.addEventListener('click', () => {
            const firstCard = carousel.children[0]
            carousel.appendChild(firstCard)
            carousel.style.transition = 'none'
            carousel.style.transform = 'translateX(-288px)'
            setTimeout(() => {
                carousel.style.transition = 'transform 0.3s ease-in-out'
                carousel.style.transform = 'translateX(0)'
            }, 50)
        })

        prevButton.addEventListener('click', () => {
            const lastCard = carousel.children[carousel.children.length - 1]
            carousel.insertBefore(lastCard, carousel.children[0])
            carousel.style.transition = 'none'
            carousel.style.transform = 'translateX(-288px)'
            setTimeout(() => {
                carousel.style.transition = 'transform 0.3s ease-in-out'
                carousel.style.transform = 'translateX(0)'
            }, 50)
        })
    }
    sliderMore()
})()

