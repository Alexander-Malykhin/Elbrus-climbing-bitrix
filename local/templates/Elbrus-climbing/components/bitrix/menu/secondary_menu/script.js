document.addEventListener("DOMContentLoaded", function () {
    let bookingBtn = document.getElementById("secondary-btn");
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
});
