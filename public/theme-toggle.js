document.addEventListener('DOMContentLoaded', function () {
    const themeButton = document.getElementById('theme-toggle-button');
    const body = document.body;
    let isDarkMode = true;
    const navbarLinks = document.querySelectorAll('.navbar a');

    themeButton.addEventListener('click', function () {
        const image = themeButton.querySelector('img');

        if (image.src.endsWith('sun.png')) {
            image.src = 'moon.png';
            image.alt = 'moon';
        } else {
            image.src = 'sun.png';
            image.alt = 'sun';
        }

        isDarkMode = !isDarkMode;

        if (isDarkMode) {
            body.style.background = 'linear-gradient(to right, #0f0c29, #302b63, #24243e)';
            body.style.color = 'white';
            for (const link of navbarLinks) {
                link.style.color = 'lightgray';
            }
        } else {
            body.style.background = 'linear-gradient(to right, #ece9e6, #ffffff)';
            body.style.color = 'black';
            for (const link of navbarLinks) {
                link.style.color = 'black';
            }
        }
    });
});