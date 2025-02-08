

<!doctype html>
<html class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./src/output.css" rel="stylesheet">
    <link href="./src/output.css" rel="stylesheet">

  
  <script>
      // On page load or when changing themes, best to add inline in `head` to avoid FOUC
      if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
          document.documentElement.classList.add('dark');
      } else {
          document.documentElement.classList.remove('dark')
      }
  </script>
</head>
<body dir="rtl" class="bg-gray-100 dark:bg-gray-900 transition-all ease-in 100ms">
    <style>
      @font-face {
    font-family: iransans;
    font-weight: 700;
    src: url(src/iranSans/IRANSansWeb_Bold.woff);
  }
  @font-face {
    font-family: iransans;
    font-weight: medium;
    src: url(src/iranSans/IRANSansWeb.woff);
  }
  @font-face {
    font-family: iransans;
    font-weight: 300;
    src: url(src/iranSans/IRANSansWeb_Light.woff);
  }
  @font-face {
    font-family: iransans;
    font-weight: lighter;
    src: url(src/iranSans/IRANSansWeb_UltraLight.woff);
  }
  *{
    font-family: iransans
  }
  
  .image{
    width: 100%;
    height: auto;
  }
  
    .back {
    background-color: rgba(0, 0, 0, 0.7); 
    height: 100%;
    width: 100%;
    right: 0px;
    top: 0px;
  
  
  }
  .reshte .back a{
    
    width: inherit;
    height: 100%;
    padding: 1.5rem 12rem;
    max-width: 160px;
  }
  .reshte .back a p{
    font-family: iransans;
  }
  .back a:hover p {
    color: #60a5fa; /* رنگ آبی 400 */
  }
  
  .back a:hover svg {
    fill: #60a5fa; /* رنگ آبی 400 */
  }
  .reshte{
    width: 33%;
    height: auto;
  }
    </style>

<header dir="ltr" class="bg-gray-100 dark:bg-gray-900 transition-all ease-in 100ms">
  <nav class="mx-auto flex max-w-7xl items-center justify-end lg:justify-between p-6 lg:px-8 bg-blue-400 dark:bg-sky-600 rounded-b-2xl transition-all ease-in 100ms" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only ">مجموعه ما</span>
        <img class="h-8 w-auto" src="#" alt="">
      </a>
    </div>
    <div class="flex lg:hidden ">
      <button id="hamber" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
        <span class="sr-only">Open main menu</span>
        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <div class="relative">
      <button dir="rtl" id="toggleButton" type="button" class="flex items-center gap-x-1 text-sm font-semibold lg:text-white text-black" aria-expanded="false">
    دوره ها
    <svg class="size-5 flex-none lg:text-white text-black" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
    </svg>
</button>

<!-- منوی پرتابل -->
<div id="dropdown" dir="rtl" class="absolute top-full -left-8 z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white dark:bg-gray-800 dark:text-gray-50 ring-1 shadow-lg ring-gray-900/5 hidden">
    <!-- محتویات منو -->
    <div class="p-4">
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-300 dark:hover:bg-gray-700">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg class="size-6 text-gray-600 group-hover:text-sky-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900 dark:text-gray-50">
                  Analytics
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600 dark:text-gray-200">Get a better understanding of your traffic</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-300 dark:hover:bg-gray-700">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg class="size-6 text-gray-600 group-hover:text-sky-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672ZM12 2.25V4.5m5.834.166-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243-1.59-1.59" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900 dark:text-gray-50">
                  Engagement
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600 dark:text-gray-200">Speak directly to your customers</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-300 dark:hover:bg-gray-700">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg class="size-6 text-gray-600 group-hover:text-sky-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900 dark:text-gray-50">
                  Security
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600 dark:text-gray-200">Your customers’ data will be safe and secure</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-300 dark:hover:bg-gray-700">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg class="size-6 text-gray-600 group-hover:text-sky-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900 dark:text-gray-50">
                  Integrations
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600 dark:text-gray-200">Connect with third-party tools</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-300 dark:hover:bg-gray-700">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg class="size-6 text-gray-600 group-hover:text-sky-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900 dark:text-gray-50">
                  Automations
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600 dark:text-gray-200">Build strategic funnels that will convert</p>
              </div>
            </div>
          </div>

          <div class="grid grid-cols-1 divide-x divide-gray-900/5 bg-gray-50 dark:bg-gray-900">
           
            <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 text-sm/6 font-semibold text-gray-900 dark:text-gray-50 hover:bg-gray-300 dark:hover:bg-gray-700">
              <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z" clip-rule="evenodd" />
              </svg>
              Contact sales
            </a>
          </div>
        </div>
      </div>

      <a href="#" class="text-sm/6 font-semibold text-black lg:text-white ">پشتیبانی</a>
      <a href="#" class="text-sm/6 font-semibold text-black lg:text-white ">آدرس</a>
      <a href="#" class="text-sm/6 font-semibold text-black lg:text-white ">مجموعه ما</a>
    </div>
    <div class=" lg:flex lg:flex-1 lg:justify-end">

    <button id="theme-toggle" type="button" class="text-white dark:text-white hidden lg:block bg-sky-600 dark:bg-blue-400 rounded-lg text-sm p-2.5">
    <svg id="theme-toggle-dark-icon" class="hidden  w-7 h-7" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
    <svg id="theme-toggle-light-icon" class="hidden w-7 h-7" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
</button>

    </div>
  </nav>
  
  <div role="dialog" aria-modal="true">
    
    <div class="fixed z-100 "></div>
    <div id="hamberContent" dir="rtl" class="translate-x-full transition all ease-in-out 300ms  fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-gray-100 dark:bg-gray-800  px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
         
          
    <button id="theme-toggle1" type="button" class="text-white dark:text-white  bg-sky-600 dark:bg-blue-400 rounded-lg text-sm p-2.5">
    <svg id="theme-toggle-dark-icon1" class="hidden  w-7 h-7" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
    <svg id="theme-toggle-light-icon1" class="hidden w-7 h-7" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
    </button>
    <script>
      var themeToggleDarkIcon1 = document.getElementById('theme-toggle-dark-icon1');
var themeToggleLightIcon1 = document.getElementById('theme-toggle-light-icon1');


if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon1.classList.remove('hidden');
} else {
    themeToggleDarkIcon1.classList.remove('hidden');
}

var themeToggleBtn1 = document.getElementById('theme-toggle1');

themeToggleBtn1.addEventListener('click', function() {

    
    themeToggleDarkIcon1.classList.toggle('hidden');
    themeToggleLightIcon1.classList.toggle('hidden');

    
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    
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

    </script>

        </a>
        <button id="closeButton" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 dark:text-gray-100">
          <span class="sr-only">Close menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <div class="-mx-3">
            <button id="reshteHamber" type="button" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-700 transition-all ease-in 200ms" aria-controls="disclosure-1" aria-expanded="false">
    رشته ها
    <svg class="size-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
    </svg>
</button>

<div class="dropHamber mt-2 space-y-2 dark:bg-gray-700 bg-gray-300 rounded-lg overflow-y-scroll-scroll overflow-x-hiiden max-h-0 transition-all duration-300 ease-in-out" id="disclosure-1">
    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 dark:text-gray-300">Analytics</a>
    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 dark:text-gray-300">Engagement</a>
    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 dark:text-gray-300">Security</a>
    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 dark:text-gray-300">Integrations</a>
    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 dark:text-gray-300">Automations</a>
    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 dark:text-gray-300">Watch demo</a>
    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 dark:text-gray-300">Contact sales</a>
</div>

<script>
document.getElementById('reshteHamber').addEventListener('click', function() {
    var disclosure = document.getElementById('disclosure-1');
    var isExpanded = this.getAttribute('aria-expanded') === 'true';

    
    disclosure.classList.toggle('max-h-0');
    disclosure.classList.toggle('max-h-50'); 
    disclosure.classList.toggle('opacity-0');
    disclosure.classList.toggle('opacity-100');

    
    this.setAttribute('aria-expanded', !isExpanded);
});
</script>
            </div>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900  dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-700 transition-all ease-in 200ms">Features</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900  dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-700 transition-all ease-in 200ms">Marketplace</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900  dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-700 transition-all ease-in 200ms">Company</a>
          </div>
          <div class="py-6">
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900  dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-700 transition-all ease-in 200ms">Log in</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<?php
// اتصال به پایگاه داده
include('./database/db.php');

$programs = []; // تعریف متغیر پیش‌فرض برای جلوگیری از خطا

try {
    // گرفتن رشته‌ای که کاربر انتخاب کرده است
    if (isset($_GET['field_id'])) {
        $field_id = $_GET['field_id']; // تغییر major_id به field_id

        // گرفتن دوره‌های مربوط به رشته انتخابی
        $stmt = $conn->prepare("SELECT * FROM programs WHERE field_id = :field_id");
        $stmt->bindParam(':field_id', $field_id, PDO::PARAM_INT);
        $stmt->execute();
        $programs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if (empty($programs)) {
            echo "هیچ دوره‌ای برای این رشته یافت نشد.";
        }
    } else {
        echo "رشته‌ای انتخاب نشده است.";
    }
} catch (PDOException $e) {
    echo "خطا در خواندن داده‌ها: " . $e->getMessage();
}
?>
<h2 class="lg:text-3xl text-2xl m-4.5 dark:text-white">رشته‌ها</h2>
<div class="reshteHa mt-1.5 p-2.5 flex gap-3 flex-wrap justify-center w-full">
    <?php if (!empty($programs)): ?>
        <?php foreach($programs as $program): ?>
        <div class="mx-auto bg-gray-300 dark:bg-gray-800 rounded-lg shadow-md overflow-hidden h-fit mt-3.5 max-w-[350px] min-w-[350px]">
            <img class="w-full h-48 object-cover" src="<?= $program['program_image'] ?>" alt="عنوان تصویر">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2 mt-2.5 dark:text-gray-50"><?= htmlspecialchars($program['program_name']) ?></h2>
                <p class="text-gray-700 dark:text-gray-300 mb-4"><?= htmlspecialchars($program['program_description']) ?></p>
                <button class="toggleDetails inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-200" data-course-code="<?= $program['program_code'] ?>" data-course-name="<?= $program['program_name'] ?>">جزئیات بیشتر</button>

                <div id="details-<?= $program['program_code'] ?>" class="details hidden mt-4 p-4 bg-gray-200 dark:bg-gray-900 rounded-lg flex flex-col gap-1.5">
                    <h3 class="text-lg font-bold mb-2 dark:text-gray-100">آموزش</h3>
                    <p class="text-gray-700 mb-2 dark:text-gray-400"><?= htmlspecialchars($program['learning_objectives']) ?></p>
                    <p class="text-gray-600 mb-2 dark:text-gray-300">قیمت: <span class="font-semibold"><?= number_format($program['program_price']) ?> تومان</span></p>
                    <p class="text-gray-600 mb-2 dark:text-gray-300">زمان برگزاری: <span class="font-semibold"><?= htmlspecialchars($program['program_hours']) ?></span></p>
                    <p class="text-gray-600 mb-2 dark:text-gray-300">مدت دوره (ماه): <span class="font-semibold"><?= htmlspecialchars($program['program_duration']) ?> ماه</span></p>
                    <p class="text-gray-600 dark:text-gray-300">کد دوره: <span class="font-semibold"><?= htmlspecialchars($program['program_code']) ?></span></p>

                    <!-- نمایش PDF داخل iframe -->
                    <?php if (!empty($program['course_pdf'])): ?>
                        <div class="mt-3">
                            <h4 class="text-lg font-bold mb-2 dark:text-gray-100">مشاهده PDF</h4>
                            <iframe src="<?= $program['course_pdf'] ?>" width="100%" height="400px"></iframe>
                        </div>
                    <?php endif; ?>

                    <!-- ارسال اطلاعات کد و نام دوره به فرم پیش ثبت نام -->
                    <a href="#modal" class="open-modal" data-course-name="<?= htmlspecialchars($program['program_name']) ?>" data-course-code="<?= htmlspecialchars($program['program_code']) ?>">پیش ثبت نام</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>هیچ دوره‌ای برای نمایش وجود ندارد.</p>
    <?php endif; ?>
</div>

<!-- مودال -->
<div dir="rtl" id="modal" class="modal hidden">
    <div class="modal-content">
        <a href="#" class="close-modal">&times;</a>
        <h2>فرم پیش ثبت نام</h2>

        <!-- نمایش پیام خطا یا موفقیت -->
        <div id="error-message" style="color: red; font-weight: bold; text-align: center; margin-bottom: 10px;"></div>

        <form id="registration-form">
            <input type="text" name="name" placeholder="نام" required>
            <input type="text" name="family" placeholder="نام خانوادگی" required>
            <input type="tel" name="phone" placeholder="شماره تماس" required>
            <input type="text" name="national_id" placeholder="کد ملی (اختیاری)">
            
            <!-- فیلدهای پنهان برای کد و نام دوره -->
            <input type="text" name="course_code" value="" hidden>
            <input type="text" name="course_name" value="<?= $program['program_name'] ?>" hidden>

            <button type="submit" class="submit-btn">ارسال درخواست</button>
        </form>
    </div>
</div>

<script>
    // نمایش جزئیات و بروز رسانی کد دوره
    document.querySelectorAll('.toggleDetails').forEach(button => {
        button.addEventListener('click', function() {
            const details = document.getElementById('details-' + this.getAttribute('data-course-code'));
            details.classList.toggle('hidden');
        });
    });

    // نمایش و بروز رسانی مودال پیش ثبت نام
    document.querySelectorAll('.open-modal').forEach(button => {
        button.addEventListener('click', function() {
            const courseName = this.getAttribute('data-course-name');
            const courseCode = this.getAttribute('data-course-code');
            
            // بروز رسانی فیلدهای پنهان فرم پیش ثبت نام
            document.querySelector('input[name="course_code"]').value = courseCode;
            document.querySelector('input[name="course"]').value = courseName;

            const modal = document.getElementById("modal");
            modal.classList.remove("hidden");
            setTimeout(() => {
                modal.classList.add("opacity-100");
                modal.querySelector("div").classList.add("scale-100");
            }, 10);
        });
    });

    // بستن مودال
    document.querySelector(".close-modal").addEventListener("click", function() {
        const modal = document.getElementById("modal");
        modal.classList.add("hidden");

        // پاک کردن فیلدهای فرم از جمله کد دوره هنگام بسته شدن مودال
        const form = document.getElementById('registration-form');
        form.reset(); // پاک کردن مقادیر ورودی‌ها

        document.getElementById('error-message').textContent = '';  // پاک کردن پیام خطا
    });

    // ارسال فرم با AJAX
    document.getElementById('registration-form').addEventListener('submit', function(event) {
        event.preventDefault();  // جلوگیری از ارسال فرم به صورت معمول

        var formData = new FormData(this);

        // ارسال درخواست به سرور با AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'submit.php', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

        xhr.onload = function() {
            var response = JSON.parse(xhr.responseText);

            // نمایش پیغام خطا یا موفقیت
            var errorMessageDiv = document.getElementById('error-message');
            if (response.status === 'error') {
                errorMessageDiv.textContent = response.message;
                errorMessageDiv.style.color = "red";
            } else {
                errorMessageDiv.textContent = response.message;
                errorMessageDiv.style.color = "green";
                // پس از ارسال موفقیت آمیز، فیلدها دست نخورده باقی می‌مانند
            }
        };

        xhr.send(formData);
    });
</script>



        </div>
  

    <style>
        .open-modal {
            background-color: #007bff;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
            text-align: center;
        }

        .open-modal:hover {
            background-color: #0056b3;
        }

        /* استایل پس‌زمینه مودال */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            display: none;
            justify-content: center;
            align-items: center;
        }

        #modal:target {
            display: flex;
        }

        /* استایل پنجره مودال */
        .modal-content {
            background: white;
            padding: 25px;
            border-radius: 12px;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            text-align: right;
            position: relative;
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        /* دکمه بستن */
        .close-modal {
            position: absolute;
            top: 15px;
            right: 15px;
            text-decoration: none;
            font-size: 24px;
            color: #555;
            font-weight: bold;
            transition: 0.3s;
        }

        .close-modal:hover {
            color: red;
        }

        /* استایل فیلدهای ورودی */
        .modal-content input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            text-align: right;
        }

        /* دکمه ارسال فرم */
        .submit-btn {
            background-color: #28a745;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background-color: #218838;
        }
    </style>

</body>
</html>

