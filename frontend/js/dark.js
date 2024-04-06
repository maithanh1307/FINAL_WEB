const body=document.body;
const switch_mode = document.querySelector('#switch-mode i');

switch_mode.addEventListener('click', () => {
    // alert('clicked');
    body.classList.toggle('dark');
    switch_mode.classList.toggle('fa-moon-stars');
    switch_mode.classList.toggle('fa-brightness');
    

});
