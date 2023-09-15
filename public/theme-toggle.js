document.addEventListener('DOMContentLoaded', function () {
    const themeButton = document.getElementById('theme-toggle-button');
    const body = document.body;
    const navbarLinks = document.querySelectorAll('.navbar a');
    const contentBox = document.getElementById('content-box');

    function setThemeMode() {
        let isDarkMode = localStorage.getItem('isDarkMode') === 'true';

        const image = themeButton.querySelector('img');

        if (isDarkMode) {
            image.src = 'moon.png';
            body.style.background = 'linear-gradient(to right, #0f0c29, #302b63, #24243e)';
            body.style.color = 'white';
            if (contentBox) {
                contentBox.style.backgroundColor = '';
                contentBox.style.border = '';
            }
            for (const link of navbarLinks) {
                link.style.color = '';
            }
        } else {
            image.src = 'sun.png';
            body.style.background = 'linear-gradient(to right, #ece9e6, #efefef)';
            body.style.color = 'black';
            if (contentBox) {
                contentBox.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
                contentBox.style.border = '1px solid black';
            }
            for (const link of navbarLinks) {
                link.style.color = 'black';
            }
        }
    }

    setThemeMode();

    themeButton.addEventListener('click', function () {
        let isDarkMode = localStorage.getItem('isDarkMode') === 'true';

        isDarkMode = !isDarkMode;

        localStorage.setItem('isDarkMode', isDarkMode);

        setThemeMode();
    });
});