//VIDEO SLIDER
(() => {
    const videoSlider = () => {
        const VIDEO_LIST = document.querySelectorAll('.header__slider-video');
        const BUTTON_VIDEO_LIST = document.querySelectorAll('.header__slider-button');

        VIDEO_LIST.forEach((videoElement, index) => {
            const buttonElement = BUTTON_VIDEO_LIST[index];

            videoElement.addEventListener('click', () => {
                if (videoElement.paused) {
                    buttonElement.style.display = 'none';
                    videoElement.play();
                } else {
                    buttonElement.style.display = 'block';
                    videoElement.pause();
                }
            });

            buttonElement.addEventListener('click', (e) => {
                e.stopPropagation();
                if (videoElement.paused) {
                    buttonElement.style.display = 'none';
                    videoElement.play();
                } else {
                    buttonElement.style.display = 'block';
                    videoElement.pause();
                }
            });
        });
    };
    videoSlider();
})()