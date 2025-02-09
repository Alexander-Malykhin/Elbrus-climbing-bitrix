document.addEventListener('DOMContentLoaded', () => {
    const selectList = document.querySelector('.menu__select-list');
    const selectItems = document.querySelectorAll('.menu__select-item');
    const selectButton = document.querySelector('.menu__select-language');

    if (!selectList || !selectItems.length || !selectButton) {
        return;
    }


    selectButton.addEventListener('click', () => {
        selectList.classList.toggle('menu__select-active');
    });

    document.addEventListener('click', (e) => {
        if (!selectList.contains(e.target) && !selectButton.contains(e.target)) {
            selectList.classList.remove('menu__select-active');
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
