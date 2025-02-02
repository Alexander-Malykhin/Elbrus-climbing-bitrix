//SCHEDULE SLIDER
(() => {
    const scheduleList = () => {
        const SLIDERS = document.querySelectorAll('.schedule__mobile-item')
        const BUTTON_LEFT = document.querySelectorAll('.schedule__left')
        const BUTTON_RIGHT = document.querySelectorAll('.schedule__right')
        const BUTTON = document.querySelector('.schedule__mobile-list')

        let offset = SLIDERS[0].clientWidth
        let count = 0

        BUTTON_RIGHT.forEach((element, index) => {
            BUTTON_RIGHT[index].addEventListener('click', () => {
                count++
                console.log(count)
                if (count !== SLIDERS.length) {
                    BUTTON.style.transform = `translateX(-${offset * count}px`;
                } else {
                    count = 0
                    BUTTON.style.transform = `translateX(0px)`
                }
            })
        })

        if (count === 0) {
            BUTTON_LEFT[0].style.display = 'none'
        }

        BUTTON_LEFT.forEach((element, index) => {
            BUTTON_LEFT[index].addEventListener('click', () => {
                count--
                BUTTON.style.transform = `translateX(-${offset * count}px`;
            })
        })
    }
    scheduleList()
})()