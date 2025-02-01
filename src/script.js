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


///////

var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});