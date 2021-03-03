openhamburger = document.querySelector('.openhamburger');

mainmenu = document.querySelector('.mainmenu');

closehamburger = document.querySelector('.closehamburger');


openhamburger.addEventListener('click',() => {
    mainmenu.style.display = 'flex';

    mainmenu.style.top = '0';
})


closehamburger.addEventListener('click',() => {
    mainmenu.style.top = '-100%';
})
