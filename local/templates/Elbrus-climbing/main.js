//BUTTONS ANIMATIONS
const BUTTON_ORDER = document.querySelector('.header__button');
const BUTTON__PHOTO = document.querySelector('.program__conditions-button')
const BUTTON_ORDER_ROUTE = document.querySelector('.choice__table-button')
//BUTTONS ANIMATIONS
const buttonOrderClick = (button) => {
    button.addEventListener('mousedown', () => {
        button.style.opacity = '0.7';
    })

    button.addEventListener('mouseup', () => {
        button.style.opacity = '1';
    })
}
buttonOrderClick(BUTTON_ORDER)
buttonOrderClick(BUTTON__PHOTO)
buttonOrderClick(BUTTON_ORDER_ROUTE)

//BUTTON SELECT
const SELECT_BUTTON_CURRENCY = document.querySelector('.menu__select-currency')
const SELECT_BUTTON_LANGUAGE = document.querySelector('.menu__select-language')
const buttonSelectClick = (button, toggleClass, field) => {
    const ITEMS = document.querySelector(toggleClass)
    const SELECT_FIELD = document.querySelector(field)

    button.addEventListener('click', () => {
        document.querySelector(toggleClass).classList.toggle('menu__select-show')
    })

    ITEMS.addEventListener('click', (e) => {
        SELECT_FIELD.innerHTML = e.target.textContent
        return document.querySelector(toggleClass).classList.toggle('menu__select-show')
    })
}

buttonSelectClick(SELECT_BUTTON_CURRENCY, '.currency__list', '.field__currency')
buttonSelectClick(SELECT_BUTTON_LANGUAGE, '.language__list', '.field__language')

