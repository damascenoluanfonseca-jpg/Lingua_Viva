'use strict';

const switcher = document.querySelector('.btn');

if (switcher) {
    switcher.addEventListener('click', function () {
        document.body.classList.toggle('dark-theme');
        document.body.classList.toggle('light-theme');

        if (document.body.classList.contains('dark-theme')) {
            this.textContent = 'Light';
        } else {
            this.textContent = 'Dark';
        }
    });
}
