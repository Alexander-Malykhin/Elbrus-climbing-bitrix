//INFORMATION LIST
(() => {
    const informationList = () => {
        const INFORMATION_ITEMS = document.querySelectorAll('.information__list-item')
        const INFORMATION_BUTTONS = document.querySelectorAll('.information__button-item')
        const INFORMATION_CONTENT = document.querySelectorAll('.information__list-content')


        INFORMATION_ITEMS.forEach((element, index) => {

            element.addEventListener('click', () => {
                if (element) {
                    INFORMATION_BUTTONS[index].classList.toggle('information__list-button')
                    INFORMATION_CONTENT[index].classList.toggle('information__show')
                }
            })
        })
    }
    informationList()
})()