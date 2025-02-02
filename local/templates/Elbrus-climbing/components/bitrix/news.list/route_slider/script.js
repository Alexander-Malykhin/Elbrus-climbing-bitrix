//SLIDER GALLERY
(() => {
    const sliderGallery = () => {
        const MAIN_GALLERY_LIST = document.querySelectorAll('.gallery__list-item');
        const GALLERY_LIST = document.querySelectorAll('.gallery__slider-item');
        const GALLERY = document.querySelector('.gallery__slider');
        const CLOSE = document.querySelector('.gallery__slider-close');
        const BUTTON_LEFT = document.querySelector('.gallery__slider-left');
        const BUTTON_RIGHT = document.querySelector('.gallery__slider-right');


        let currentIndex = 0;

        if (GALLERY) {
            GALLERY.addEventListener('click', (e) => {
                if (e.target === GALLERY) {
                    GALLERY.classList.remove('gallery__slider-show');
                    document.body.style.overflow = '';
                }
            })
        }

        MAIN_GALLERY_LIST.forEach((element, index) => {
            element.addEventListener('click', () => {
                currentIndex = index;
                GALLERY.classList.add('gallery__slider-show');
                document.body.style.overflow = 'hidden';
                GALLERY_LIST.forEach((item) => item.classList.remove('gallery__slider-show'));
                GALLERY_LIST[currentIndex].classList.add('gallery__slider-show');
            });
        });

        CLOSE.addEventListener('click', () => {
            GALLERY.classList.remove('gallery__slider-show');
            document.body.style.overflow = '';
            GALLERY_LIST.forEach((item) => item.classList.remove('gallery__slider-show'));
        });

        BUTTON_RIGHT.addEventListener('click', () => {

            GALLERY_LIST[currentIndex].classList.remove('gallery__slider-show');
            currentIndex = (currentIndex + 1) % GALLERY_LIST.length;
            GALLERY_LIST[currentIndex].classList.add('gallery__slider-show');
        });

        BUTTON_LEFT.addEventListener('click', () => {
            GALLERY_LIST[currentIndex].classList.remove('gallery__slider-show');
            currentIndex = (currentIndex - 1 + GALLERY_LIST.length) % GALLERY_LIST.length;
            GALLERY_LIST[currentIndex].classList.add('gallery__slider-show');
        });
    };
    sliderGallery();
})();