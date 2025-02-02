//BUTTON MENU BURGER
(() => {
    //BUTTONS MENU
    const BURGER = document.querySelector('.burger')
    const CLOSE_MENU = document.querySelector('.menu__close')

    const buttonMenuClick = (button) => {
        const BACKGROUND_MENU = document.querySelector('.menu__background')
        const MENU = document.querySelector('.menu')

        if (BACKGROUND_MENU) {
            BACKGROUND_MENU.addEventListener('click', () => {
                MENU.classList.remove('menu__show')
                return document.body.style.overflow = '';
            })
        }

        button.addEventListener('click', () => {
            MENU.classList.toggle('menu__show')

            return MENU.classList.contains('menu__show') ?
                document.body.style.overflow = 'hidden'
                :
                document.body.style.overflow = '';
        })
    }
    buttonMenuClick(BURGER)
    buttonMenuClick(CLOSE_MENU)
})()