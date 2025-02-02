//SLIDER GALLERY MOBILE
(() => {
    const sliderGalleryMobile = () => {
        const GALLERY = document.querySelector('.gallery__mobile')
        const BUTTON = document.querySelector('.program__conditions-button')
        const CLOSE = document.querySelector('.gallery__mobile-close')
        const BACKGROUND = document.querySelector('.gallery__mobile-background')

        if(BACKGROUND) {
            BACKGROUND.addEventListener('click', (e) => {
                if(e.target === BACKGROUND) {
                    GALLERY.classList.remove('gallery__mobile-show');
                    document.body.style.overflow = '';
                }
            })
        }

        BUTTON.addEventListener('click', () => {
            GALLERY.classList.add('gallery__mobile-show')
            document.body.style.overflow = 'hidden'
        })

        CLOSE.addEventListener('click', () => {
            GALLERY.classList.remove('gallery__mobile-show')
            document.body.style.overflow = ''
        })
    }
    sliderGalleryMobile()
})()