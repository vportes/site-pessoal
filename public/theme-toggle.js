document.addEventListener('DOMContentLoaded', function () {
    const themeButton = document.getElementById('theme-toggle-button');
    const body = document.body;
    const navbarLinks = document.querySelectorAll('.navbar a');
    const contentBox = document.getElementById('content-box');

    function setTheme(isDarkMode) {
        if (themeButton) {
            const image = themeButton.querySelector('img');
            if (isDarkMode) {
                if (image) { image.src = 'moon.png'; }
            } else {
                if (image) { image.src = 'sun.png'; }
            }
        }
        if (isDarkMode) {
            setDarkTheme();
        } else {
            setLightTheme();
        }
        localStorage.setItem('isDarkMode', isDarkMode);
    }

    function setDarkTheme() {
        body.style.background = 'linear-gradient(to right, #0f0c29, #302b63, #24243e)';
        body.style.color = 'white';
        if (themeButton) {
            const image = themeButton.querySelector('img');
            if (image) {
                image.src = 'moon.png';
            }
        }
        if (contentBox) {
            contentBox.style.backgroundColor = '';
            contentBox.style.border = '';
        }
        if (navbarLinks) {
            for (const link of navbarLinks) {
                link.style.color = '';
            }
        }
    }

    function setLightTheme() {
        body.style.background = 'linear-gradient(to right, #ece9e6, #efefef)';
        body.style.color = 'black';
        if (themeButton) {
            const image = themeButton.querySelector('img');
            if (image) {
                image.src = 'sun.png';
            }
        }
        if (contentBox) {
            contentBox.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
            contentBox.style.border = '1px solid black';
        }
        if (navbarLinks) {
            for (const link of navbarLinks) {
                link.style.color = 'black';
            }
        }
    }

    // Detecta preferencia de sistema para o tema
    function detectSystemTheme() {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            setTheme(true);
        } else {
            setTheme(false);
        }
    }

    // Troca tema quando o botão é clicado
    themeButton.addEventListener('click', function () {
        let isDarkMode = localStorage.getItem('isDarkMode') === 'true';
        isDarkMode = !isDarkMode;
        localStorage.setItem('isDarkMode', isDarkMode);
        setTheme(isDarkMode);
    });

    const storedTheme = localStorage.getItem('isDarkMode');
    if (storedTheme !== null) { // checa se existe algum tema no localStorage
        setTheme(storedTheme === 'true');
    } else {
        detectSystemTheme(); // detecta o tema do sistema se localStorage vazio
    }
});
