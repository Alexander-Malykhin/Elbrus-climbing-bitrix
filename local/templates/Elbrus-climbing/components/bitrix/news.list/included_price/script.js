//PRICE LIST
(() => {
    const priceList = () => {
        const BLOCK_PRICE = document.querySelectorAll('.price__lists-top')
        const BUTTON_PRICE = document.querySelectorAll('.price__lists-button')
        const PRICE_LIST = document.querySelectorAll('.price__lists-item')

        BLOCK_PRICE[0].addEventListener('click', () => {
            BUTTON_PRICE[0].classList.toggle('information__list-button')
            return PRICE_LIST[0].classList.toggle('price__show')
        })
    }
    priceList()
})();
