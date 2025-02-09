document.addEventListener('DOMContentLoaded', () => {
    const selectList = document.querySelector('.language__list');
    const selectItems = document.querySelectorAll('.language__list-item');
    const selectButton = document.querySelector('.language__text');

    if (!selectList || !selectItems.length || !selectButton) {
        console.warn('Language switcher: required elements not found');
        return;
    }


    selectButton.addEventListener('click', (e) => {
        console.log(1)
        selectList.classList.toggle('language__list-active');
    });

    document.addEventListener('click', (e) => {
        if (!selectList.contains(e.target) && !selectButton.contains(e.target)) {
            selectList.classList.remove('language__list-active');
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
