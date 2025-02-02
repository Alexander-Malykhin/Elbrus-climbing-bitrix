//VIDEO-BACKGROUND
(() => {
    const videoBackground = () => {
        const VIDEO = document.querySelector('#video')
        const BUTTON_VIDEO = document.querySelector('.header__banner-button')
        const BUTTON_SHOW = document.querySelector('#button_video')


        BUTTON_VIDEO.addEventListener('click', () => {
            if (VIDEO.paused) {
                BUTTON_SHOW.src = BUTTON_SHOW.dataset.pauseIcon;
                VIDEO.play()
            } else {
                BUTTON_SHOW.src = BUTTON_SHOW.dataset.playIcon;
                VIDEO.pause()
            }
        })
    }
    videoBackground()
})()