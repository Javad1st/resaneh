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

////////////

// انتخاب عناصر
const hamberButton = document.getElementById('hamber');
const hamberContent = document.getElementById('hamberContent');
const closeButton = document.getElementById('closeButton');

// رویداد کلیک برای دکمه همبرگر
hamberButton.addEventListener('click', () => {
    hamberContent.classList.remove('translate-x-full'); // حذف کلاس برای نمایش منو
    hamberContent.classList.add('translate-x-0'); // اضافه کردن کلاس برای نمایش منو
});

// رویداد کلیک برای دکمه بستن منو
closeButton.addEventListener('click', () => {
    hamberContent.classList.remove('translate-x-0'); // حذف کلاس برای پنهان کردن منو
    hamberContent.classList.add('translate-x-full'); // اضافه کردن کلاس برای پنهان کردن منو
});