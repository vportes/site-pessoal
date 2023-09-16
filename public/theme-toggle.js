document.addEventListener('DOMContentLoaded', function () {
    const themeButton = document.getElementById('theme-toggle-button');
    const body = document.body;
    const navbarLinks = document.querySelectorAll('.navbar a');
    const contentBox = document.getElementById('content-box');

    function setTheme(isDarkMode) {
        const image = themeButton.querySelector('img');

        if (isDarkMode) {
            setDarkTheme();
        } else {
            setLightTheme();
        }
    }

    function setDarkTheme() {
        const image = themeButton.querySelector('img');
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
    }

    function setLightTheme() {
        const image = themeButton.querySelector('img');
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
    if (storedTheme !== null) { // Checa se o botão de tema foi clicado
        setTheme(storedTheme === 'true');
    } else {
        detectSystemTheme(); // Se não, usa o tema padrão do sistema
    }

    body.classList.add('theme-loaded'); // Previne body de fazer transição
});
