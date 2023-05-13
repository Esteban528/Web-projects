document.addEventListener('DOMContentLoaded', function () {
    eventListeners();

    darkMode();
});

function darkMode () {
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme:dark)');

    if(prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');
    }else {
        document.body.classList.remove('dark-mode');

    }

    prefiereDarkMode.addEventListener('change', function () {
        if(prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
        }else {
            document.body.classList.remove('dark-mode');
    
        }
    })

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
    });
}

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navResponsive);
}

function navResponsive () {
    const nav = document.querySelector('.navegacion');

    if(nav.classList.contains('mostrar')) {
        nav.classList.remove('mostrar')
    }else {
        nav.classList.add('mostrar')
    };
}