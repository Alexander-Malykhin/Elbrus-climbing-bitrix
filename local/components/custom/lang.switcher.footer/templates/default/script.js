document.addEventListener('DOMContentLoaded', () => {
    const selectList = document.querySelector('.footer__select-list');
    const selectItems = document.querySelectorAll('.footer__select-item');
    const selectButton = document.querySelector('.footer__select-arrow');

    if (!selectList || !selectItems.length || !selectButton) {
        console.warn('Language switcher: required elements not found');
        return;
    }

    selectButton.addEventListener('click', (e) => {
        selectList.classList.toggle('footer__select-active');
    });

    document.addEventListener('click', (e) => {
        if (!selectList.contains(e.target) && !selectButton.contains(e.target)) {
            selectList.classList.remove('footer__select-active');
        }
    });

    selectItems.forEach((item) => {
        item.addEventListener('click', (e) => {
            const languageCode = e.target.dataset.lang || e.target.innerText.trim().toLowerCase();
            if (!languageCode) return;

            const currentUrl = new URL(window.location.href);
            const pathParts = currentUrl.pathname.split('/').filter(Boolean);
            const firstSegment = pathParts[0];

            const availableLanguages = ['ru', 'en'];

            if (availableLanguages.includes(firstSegment)) {
                pathParts.shift();
            }

            pathParts.unshift(languageCode);
            const newPath = '/' + pathParts.join('/');

            window.location.href = currentUrl.origin + newPath;
        });
    });
});
