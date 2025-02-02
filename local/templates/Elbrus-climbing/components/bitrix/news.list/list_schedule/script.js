//SCHEDULE LIST
(() => {
    const scheduleList = () => {
        const SCHEDULE_BUTTONS = document.querySelectorAll('.schedule__button-item')
        const SCHEDULE_ITEMS = document.querySelectorAll('.schedule__list-item')
        const SCHEDULE_CONTENT = document.querySelectorAll('.schedule__list-text')
        const SCHEDULE_BUTTON = document.querySelector('.schedule__button-list')

        SCHEDULE_ITEMS.forEach((element, index) => {

            element.addEventListener('click', () => {
                if (element) {
                    SCHEDULE_BUTTONS[index].classList.toggle('information__list-button')
                    SCHEDULE_CONTENT[index].classList.toggle('information__show')
                }
            })
        })

        SCHEDULE_BUTTON.addEventListener('click', () => {
            const BUTTON_CONTENT = SCHEDULE_BUTTON.innerText

            switch (BUTTON_CONTENT) {
                case 'Раскрыть все дни' :
                    SCHEDULE_BUTTON.innerText = 'Закрыть все дни'

                    SCHEDULE_ITEMS.forEach((element, index) => {
                        SCHEDULE_BUTTONS[index].classList.add('information__list-button')
                        SCHEDULE_CONTENT[index].classList.add('information__show')
                    })
                    break;
                case 'Закрыть все дни' :
                    SCHEDULE_BUTTON.innerText = 'Раскрыть все дни'

                    SCHEDULE_ITEMS.forEach((element, index) => {
                        SCHEDULE_BUTTONS[index].classList.remove('information__list-button')
                        SCHEDULE_CONTENT[index].classList.remove('information__show')
                    })
                    break;
            }
        })
    }

    scheduleList()
})()