const button = document.getElementById('toggleButton');
const dropdown = document.getElementById('dropdown');


button.addEventListener('click', (event) => {
    
    event.stopPropagation();
    
   
    dropdown.classList.toggle('hidden');
    dropdown.classList.toggle('block');


    const isExpanded = dropdown.classList.contains('block');
    button.setAttribute('aria-expanded', isExpanded);
});


document.addEventListener('click', () => {
 
    if (!dropdown.classList.contains('hidden')) {
        dropdown.classList.add('hidden');
        dropdown.classList.remove('block');
        button.setAttribute('aria-expanded', 'false');
    }
});

///////////

const hamberButton = document.getElementById('hamber');
const hamberContent = document.getElementById('hamberContent');
const closeButton = document.getElementById('closeButton');


hamberButton.addEventListener('click', () => {
    hamberContent.classList.remove('translate-x-full'); 
    hamberContent.classList.add('translate-x-0'); 
});


closeButton.addEventListener('click', () => {
    hamberContent.classList.remove('translate-x-0'); 
    hamberContent.classList.add('translate-x-full'); 
});






