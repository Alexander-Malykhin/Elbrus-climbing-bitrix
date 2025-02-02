//SLIDER MORE
(() => {
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