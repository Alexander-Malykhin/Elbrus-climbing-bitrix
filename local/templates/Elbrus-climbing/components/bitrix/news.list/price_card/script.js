//PRICE SLIDER
(()=> {
    const priceSlider = () => {
        const BUTTON_RIGHT = document.querySelector('#right')
        const BUTTON_LEFT = document.querySelector('#left')
        const CARD = document.querySelector('.card')
        const CARD__LIST = document.querySelector('.price__cards')


        let offset = CARD.clientWidth + 20

        BUTTON_RIGHT.addEventListener('click', () => {
            CARD__LIST.style.transform = `translateX(-${offset}px`;
        });

        BUTTON_LEFT.addEventListener('click', () => {
            CARD__LIST.style.transform = `translateX(0px)`;
        });
    }
    priceSlider()
})()