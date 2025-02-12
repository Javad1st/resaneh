<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <link href="TOSAN_files/fontawesome.css" rel="stylesheet">
    <link href="TOSAN_files/brands.css" rel="stylesheet">
    <link href="TOSAN_files/solid.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="./TOSAN_files/style-rtl.css"> -->


    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="TOSAN_files/css2.css" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="TOSAN_files/all.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="TOSAN_files/bootstrap-icons.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="TOSAN_files/glightbox.css"> -->
    <link rel="stylesheet" type="text/css" href="TOSAN_files/aos.css">
    <link rel="stylesheet" type="text/css" href="TOSAN_files/swiper-bundle.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="TOSAN_files/style-rtl.css"> -->

</head>
<style>
  html{
    scroll-behavior: smooth;
  }
  @font-face {
    font-family: yekan;
    font-weight: 900;
    src: url(yekan/YekanBakh-ExtraBlack.woff2);
  }
  @font-face {
    font-family: yekan;
    font-weight: 800;
    src: url(yekan/YekanBakh-Black.woff2);
  }
  @font-face {
    font-family: yekan;
    font-weight: 700;
    src: url(yekan/YekanBakh-ExtraBold.woff2);
  }
  @font-face {
    font-family: yekan;
    font-weight: 600;
    src: url(yekan/YekanBakh-Bold.woff2);
  }
  @font-face {
    font-family: yekan;
    font-weight: 500;
    src: url(yekan/YekanBakh-SemiBold.woff2);
  }
  
  @font-face {
    font-family: yekan;
    font-weight: 300;
    src: url(yekan/YekanBakh-Regular.woff2);
  }
  @font-face {
    font-family: yekan;
    font-weight: 200;
    src: url(yekan/YekanBakh-Light.woff2);
  }
  @font-face {
    font-family: yekan;
    font-weight: 100;
    src: url(yekan/YekanBakh-Thin.woff2);
  }
  *{
    font-family: yekan
  }
  
  /* width */
::-webkit-scrollbar {
  transition: all ease-in 200ms;
  width: 7px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: var(--color-sky-500);
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: var(--color-sky-700);
}


  .image{
    width: 100%;
    height: 100%;
  }
  
    .back {
      transition: all ease-in-out 200ms;
    background-color: rgba(0, 0, 0, 0.5); 
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
    font-family: yekan;
    width: 290px;
  }
  .back a:hover p {
    color: #60a5fa; /* رنگ آبی 400 */
    scale: 1.1;

    
  }
  .back:hover{
    
      background-color: rgba(0, 0, 0, 0.7); 
    
  }
  
  .back a:hover svg {
    fill: #60a5fa; /* رنگ آبی 400 */
  }
  .reshte{
    width: 380px;
    height: auto;
  }
  
  @media  screen and (max-width : 800px) {
    .reshteHa{
      flex-direction: column;
      align-items: center;
    }
    
  }
  @media  screen and (max-width : 400px) {
    .reshte{
      width: 280px;
    }
    .reshte .back a{
    
    width: inherit;
    height: 100%;
    padding: 1.5rem 9rem;
    max-width: 160px;
  }

  }
  #dropdown{
    height: 510px
  }
  /* .headSub:hover{
  
   color: dodgerblue;
  
  
   
    
  } */
   .dropChild{
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
   }
  .headSub:hover svg{
    fill: dodgerblue;
   }


   .shoar{
    font-weight: 800;
   }

   .banerPlace{
    background-image: url(./images/baner.png);
    
   }
   footer{
    background-color: #184086;
   }
</style>
<body dir="rtl" class="bg-gray-200 transition-all ease-in 100ms flex flex-col items-center overflow-x-hidden">
  <div class="container flex flex-col w-screen  max-w-[1550px]">
<header dir="ltr" class="bg-gray-200 transition-all ease-in 100ms">
  <nav class="lg:mx-auto flex max-w-[1750px] items-center justify-between p-6 lg:px-8 bg-white transition-all ease-in 100ms" aria-label="Global">
    <div class="flex lg:flex-1 justify-self-center max-lg:hidden">
      <a href="./index.php" class="-m-1.5 p-1.5">
        <span class="sr-only text-6xl ">مجموعه ما</span>
        <img class="h-[65px] w-auto" src="./images/guy.png" alt="">
      </a>
    </div>
    <div class=" lg:flex-1 lg:justify-end lg:hidden">

    <div id="telBtn2" class="p-3.5 rounded-xl lg:hidden hover:bg-blue-100 transition-all ease-out 200ms cursor-pointer">
    <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--color-blue-500);" ><path d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z"></path></svg>
    </div>
    <div id="modal2" class="fixed inset-0 z-100  bgBO flex items-center justify-center hidden">
        <div dir="rtl" class="bg-white rounded-lg p-6 shadow-lg transition-transform transform 2-enter modal-leave">
            <button id="closeModal2" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--color-blue-500)"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg></button>
            <h2 class="text-lg font-bold mt-2"> تلفن آموزشگاه : </h2>
            <p class="mt-2 font-bold text-xl">025433456</p>
        </div>
    </div>

    <script>
        const telBtn2 = document.getElementById('telBtn2');
        const modal2 = document.getElementById('modal2');
        const closeModal2 = document.getElementById('closeModal2');

        telBtn2.addEventListener('click', () => {
            modal2.classList.remove('hidden');
            const modalContent2 = modal2.firstElementChild;
            modalContent2.classList.remove('modal-leave-active');
            modalContent2.classList.add('modal-enter');
            setTimeout(() => {
                modalContent2.classList.add('modal-enter-active');
            }, 10);
        });

        closeModal2.addEventListener('click', () => {
            const modalContent2 = modal2.firstElementChild;
            modalContent2.classList.remove('modal-enter-active');
            modalContent2.classList.add('modal-leave-active');
            setTimeout(() => {
                modal2.classList.add('hidden');
                modalContent2.classList.remove('modal-leave-active');
            }, 300);
        });
    </script>
    </div>
    <style>
        .modal-enter {
            opacity: 0;
            transform: translateY(-20px);
        }
        .modal-enter-active {
            opacity: 1;
            transform: translateY(0);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        .modal-leave {
            opacity: 1;
            transform: translateY(0);
        }
        .modal-leave-active {
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
            
        }
        .bgBO{
          backdrop-filter: blur(6px);
          background-color: rgba(0, 0, 0, 0.6);
        }
    </style>
     <div class="flex lg:flex-1 justify-self-center lg:hidden">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only text-6xl ">مجموعه ما</span>
        <img class="h-[65px] w-auto" src="./images/guy.png" alt="">
      </a>
    </div>
    <div class="flex lg:hidden ">
      <button id="hamber" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-black">
        <span class="sr-only">منو</span>
        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
   
    <div class="hidden lg:flex lg:gap-x-12">
      <div class="relative">
      <button dir="rtl" id="toggleButton" type="button" class="headSub flex items-center gap-x-1 text-xl font-semibold hover:text-blue-500 transition-all ease-out 200ms text-black cursor-pointer" aria-expanded="false">
 دوره ها 
    <svg class="size-7 flex-none group-hover:text-blue-500 text-black" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
    </svg>
</button>

<!-- منوی پرتابل -->
<div id="dropdown" dir="rtl" class="absolute top-3.5  z-100 mt-3 w-screen max-w-md overflow-x-hidden overflow-y-scroll rounded-3xl bg-gray-200 ring-1 shadow-lg ring-gray-900/5 hidden">
    <!-- محتویات منو -->

  
<?php 
include '../database/db.php';

// دریافت سه مقاله آخر
$select = $conn->prepare("SELECT * FROM courses");
$select->execute();
$courses = $select->fetchAll(PDO::FETCH_ASSOC);
?>

    <div class="p-4">
    <?php foreach($courses as $course): ?>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-blue-100 dark:hover:bg-sky-700">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg class="size-6 text-gray-600 group-hover:text-sky-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900 dark:text-gray-50">
                <?= $course['course_name'] ?>
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600 dark:text-gray-200"><?= $course['course_description']?></p>
              </div>
            </div>
            <?php endforeach; ?>

           
       
          </div>

          <div class="grid grid-cols-1 divide-x divide-gray-900/5  border-t-1">
          
          </div>
        </div>
      </div>
      <style>
  

#toggleButton:hover + #dropdown,
#dropdown:hover {
    display: block; /* هنگام هاور روی دکمه یا منو، نمایش داده می‌شود */
}
      </style>

      <a href="#" class="headSub text-xl font-semibold transition-all ease-out 200ms text-black hover:text-blue-500  ">پشتیبانی</a>
      <a href="#" class="headSub text-xl font-semibold transition-all ease-out 200ms text-black  hover:text-blue-500 ">آدرس</a>
      <a href="#aboutUs" class="headSub text-xl font-semibold transition-all ease-out 200ms text-black  hover:text-blue-500 ">مجموعه ما</a>
    </div>
    <div class=" lg:flex lg:flex-1 lg:justify-end max-lg:hidden">

    <div id="telBtn" class="p-3.5 rounded-xl max-lg:hidden hover:bg-blue-100 transition-all ease-out 200ms cursor-pointer">
    <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--color-blue-500);" ><path d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z"></path></svg>
    </div>
    <div id="modal" class="fixed inset-0 z-100  bgBO flex items-center justify-center hidden">
        <div dir="rtl" class="bg-white rounded-lg p-6 shadow-lg transition-transform transform modal-enter modal-leave">
            <button id="closeModal" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--color-blue-500)"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg></button>
            <h2 class="text-lg font-bold mt-2"> تلفن آموزشگاه : </h2>
            <p class="mt-2 font-bold text-xl">025433456</p>
        </div>
    </div>

    <script>
        const telBtn = document.getElementById('telBtn');
        const modal = document.getElementById('modal');
        const closeModal = document.getElementById('closeModal');

        telBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
            const modalContent = modal.firstElementChild;
            modalContent.classList.remove('modal-leave-active');
            modalContent.classList.add('modal-enter');
            setTimeout(() => {
                modalContent.classList.add('modal-enter-active');
            }, 10);
        });

        closeModal.addEventListener('click', () => {
            const modalContent = modal.firstElementChild;
            modalContent.classList.remove('modal-enter-active');
            modalContent.classList.add('modal-leave-active');
            setTimeout(() => {
                modal.classList.add('hidden');
                modalContent.classList.remove('modal-leave-active');
            }, 300);
        });
    </script>
    </div>
    <style>
        .modal-enter {
            opacity: 0;
            transform: translateY(-20px);
        }
        .modal-enter-active {
            opacity: 1;
            transform: translateY(0);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        .modal-leave {
            opacity: 1;
            transform: translateY(0);
        }
        .modal-leave-active {
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
            
        }
        .bgBO{
          backdrop-filter: blur(6px);
          background-color: rgba(0, 0, 0, 0.6);
        }
    </style>
  </nav>
  
  <div role="dialog" aria-modal="true">
    
  <div class="fixed z-100 "></div>
    <div id="hamberContent" dir="rtl" class="translate-x-full transition all ease-in-out 300ms  fixed inset-y-0 right-0 z-100 w-full overflow-y-auto bg-gray-100 dark:bg-gray-800  px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between ">
        <a href="#" class="-m-1.5 p-1.5">
         
          
  

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

<div class="dropHamber mt-2 space-y-2 dark:bg-gray-700 bg-gray-300 rounded-lg overflow-x-hidden overflow-y-scroll  max-h-0 transition-all duration-300 ease-in-out" id="disclosure-1">
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
.
<div class="banerPlace rounded-b-3xl relative flex items-center flex-wrap justify-around overflow-hidden">
  <div class="textes z-20 flex flex-col justify-center gap-10 items-center mt-20">
    <p class="shoar font-[900] max-[755px]:hidden max-lg:top-25 max-lg:text-6xl text-gray-50 [text-shadow:_4px_1px_0px_rgba(0,38,153,0.41)] shadow-gray-50 lg:text-7xl lg:top-28 xl:top-22 xl:text-7xl"> آموزشگاه فنی و حرفه ای</p>
    <p class="shoar shoar2 font-[900] top-25 max-lg:top-51 max-lg:text-7xl text-gray-50 [text-shadow:_4px_1px_0px_rgba(0,38,153,0.41)] shadow-gray-50 lg:text-8xl lg:top-62 xl:top-49  xl:text-8xl">رسانه</p>
    <div class="shoars flex flex-col mt-10 items-center justify-center">
      <p class="text-center text-gray-50">#بی رقیب در آموزش</p>
      <p class="text-center text-gray-50">#بی نظیر در خدمات و امکانات</p>
    </div>
  </div>
  <img class="text-center w-[600px] rounded-b-3xl" src="./images/people.png" alt="">
  <img class=" guy absolute w-45 lg:w-60 xl:w-80  top-2 right-3 xl:top-0 xl:right-3.5" src="./images/logo.png" alt="">
  
</div>
<style>
  @keyframes bounce {
    0%, 100% {
        transform: translateY(0); /* موقعیت اولیه */
    }
    50% {
        transform: translateY(-30px); /* حرکت به بالا */
    }
}

.guy {
    animation: bounce 2.5s infinite ease-in-out; /* انیمیشن با نام bounce، مدت 1 ثانیه و تکرار بی‌نهایت */
}
  @media  screen and (min-width:1700px) {
    .guy{
      right: 70px

}
  }
  @media  screen and (min-width:1900px) {
    .guy{
      right: 210px

}
  }
  
  @media  screen and (max-width:700px) {
    .guy{
      width: 150px;
      right: -20px

}
  }
  @media  screen and (max-width:750px) {
  .shoar2{
    top: auto;
    font-size: 5rem;
  }
  }
  
  @media  screen and (max-width:400px) {
    .guy{
      width: 120px;
      right: -20px

}
.shoar{
  font-size: 3rem
}
  }
  
</style>

<div class="w-full scroll flex flex-col items-center justify-center overflow-hidden mt-12">
  <h2 class="text-3xl font-bold text-[#003366] mb-24 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500"> دوره های اخیر</h2>
<div class="w-full 2xl:w-full mt-10 ">

	<div id="default-carousel" class="relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-sky-400/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-sky-400/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>

    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>

</div>
<?php 
include '../database/db.php';

// دریافت سه مقاله آخر
$select = $conn->prepare("SELECT * FROM majors");
$select->execute();
$majors = $select->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="relative scroll mt-10 mr-3.5 flex justify-between items-center mb-10">
  <div class="title flex items-center justify-center">

    <!-- <svg class=" z-[-10] opacity-80 scale-105 lg:scale-150  p-1.5 rounded-full " xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" style="fill: #003366"><path d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm10 0h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zM4 21h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm13 0c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4z"></path></svg> -->
  <h2 class="lg:text-4xl text-2xl dark:text-white font-bold aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">رشته ها
  </h2>
  </div>

</div>
<div class="flex gap-3 flex-wrap w-full mt-1.5 justify-center">
  <?php foreach($majors as $major): ?>
  <div class="reshte scroll relative transition-all ease-in-out 200ms hover:transform hover:scale-105 hover:shadow-md shadow-gray-400 dark:shadow-gray-800 mt-3.5 flex flex-col gap-2.5 bg-sky-300 rounded-lg p-2 justify-center w-48 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
    <img class="image rounded-md" src="../<?= $major['major_image']  ?> " alt="">
    <div class="back absolute flex w-full justify-center items-center rounded-md ">
      <a href="dore.php?major_id=<?= $major['id'] ?>" class="text-center absolute w-full flex flex-col transition-all ease-in 200ms text-gray-50 justify-center items-center gap-2">
        <svg class="text-white fill-white transition-all ease-initial 200ms" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24">
          <path d="m7.375 16.781 1.25-1.562L4.601 12l4.024-3.219-1.25-1.562-5 4a1 1 0 0 0 0 1.562l5 4zm9.25-9.562-1.25 1.562L19.399 12l-4.024 3.219 1.25 1.562 5-4a1 1 0 0 0 0-1.562l-5-4zm-1.649-4.003-4 18-1.953-.434 4-18z"></path>
        </svg>
        <p class="text-xl font-bold transition-all ease-in-out 300ms"><?= $major['major_name'] ?> </p>
      </a>
    </div>
  </div>
  <?php endforeach; ?>
</div>


<?php 
include '../database/db.php';

// دریافت سه مقاله آخر
$select = $conn->prepare("SELECT * FROM fields");
$select->execute();
$fields = $select->fetchAll(PDO::FETCH_ASSOC);
?>


<br><br>

<div class="relative scroll mt-10.5 mr-3.5 flex justify-between items-center">

  <div class="title flex items-center justify-center">

    <!-- <svg class=" z-[-10] opacity-80 scale-105 lg:scale-150  p-1.5 rounded-full " xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" style="fill: #003366"><path d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm10 0h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zM4 21h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm13 0c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4z"></path></svg> -->
  <h2 class="lg:text-4xl text-2xl dark:text-white font-bold aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">رشته های فنی حرفه ای
  </h2>
  </div>

</div>
<div class="flex gap-3 flex-wrap w-full mt-1.5 justify-center">
  <?php foreach($fields as $field): ?>
  <div class="reshte scroll hover:scale-105 transition-all ease-in-out 200ms hover:shadow-md shadow-gray-400 relative mt-3.5 flex flex-col gap-2.5 bg-gradient-to-l from-sky-500 to-blue-500 rounded-lg p-2 justify-center w-48 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
    <img class="image rounded-md" src="../uploads2/<?= $field['field_image']  ?> " alt="">
    <div class="back absolute flex w-full justify-center items-center rounded-md ">
      <a href="../dorefani.php?field_id=<?= $field['id'] ?>" class="text-center absolute flex flex-col transition-all ease-in 200ms text-gray-50 justify-center items-center gap-2">
        <svg class="text-white fill-white transition-all ease-initial 200ms" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24">
          <path d="m7.375 16.781 1.25-1.562L4.601 12l4.024-3.219-1.25-1.562-5 4a1 1 0 0 0 0 1.562l5 4zm9.25-9.562-1.25 1.562L19.399 12l-4.024 3.219 1.25 1.562 5-4a1 1 0 0 0 0-1.562l-5-4zm-1.649-4.003-4 18-1.953-.434 4-18z"></path>
        </svg>
        <p id="aboutUs" class="text-xl font-bold transition-all ease-in-out 300ms"><?= $field['field_name'] ?> </p>
      </a>
    </div>
  </div>
  <?php endforeach; ?>
</div><br><br>

<div class="place flex justify-center items-center mt-8 relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
<div class="infoSec scroll relative overflow-hidden bg-[#003366] max-w-[1550px] rounded-2xl flex flex-col flex-wrap justify-center gap-0 px-10 py-4 w-[95%]">
  <p class="info z-20 font-light text-gray-50 text-2xl mb-3.5 mt-20 max-[433px]:text-xl">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
  <div class="shape max-2xl:w-xl max-xl:w-lg max-lg:w-md max-md:w-sm max-md:max-h-90 absolute z-10 w-3xl h-78 bg-sky-600 opacity-35 rounded-b-full top-0 left-[-200px]"></div>
</div>
<h2 class="info z-20 scroll text-white font-black text-7xl max-[433px]:text-6xl max-[377px]:text-[54px] sm:text-8xl md:text-9xl [text-shadow:_6px_0px_0px_#003366] absolute top-[-40px] max-[433px]:top-[-36px] max-[433px]:right-[22px] max-[377px]:top-[-28px] sm:top-[-60px] right-[60px]" style="text-shadow: -2px -2px 0 #003366, 2px -2px 0 #003366,
          -2px 2px 0 #003366, 1px 1px 0 #003366; color: white;">درباره رسانه</h2>
</div>

<style>
        .fade-enter {
            opacity: 0;
            transform: translateY(-10px);
        }
        .fade-enter-active {
            opacity: 1;
            transform: translateY(0);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        .fade-exit {
            opacity: 1;
            transform: translateY(0);
        }
        .fade-exit-active {
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
         .active {
            background-color: #1a2944; /* رنگ جدید */
            transform: translateY(-3px); /* حرکت به سمت بالا */
            transition: background-color 0.3s ease, transform 0.3s ease; /* انیمیشن */
        }
        .active:hover{
          scale: 1;
        }
    </style>
    <div class="place w-full flex justify-center">
   <div class="text-center mt-12 flex  justify-center flex-col gap-x-14 w-[95%] p-11 rounded-xl bg-gray-300 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
        <div class="flex gap-4 mb-6 mt-12 flex-wrap  justify-center">
            <button id="button1" onclick="showText('text1', this)" class="bg-[#003366] hover:scale-105 cursor-pointer text-white px-4 py-2 rounded-md transition ease-in-out duration-300"> ماموریت و اهداف</button>
            <button id="button2" onclick="showText('text2', this)" class="bg-[#003366] hover:scale-105 cursor-pointer text-white px-4 py-2 rounded-md transition ease-in-out duration-300"> مسِعولیت های اجتماعی</button>
            <button id="button3" onclick="showText('text3', this)" class="bg-[#003366] hover:scale-105 cursor-pointer text-white px-4 py-2 rounded-md transition ease-in-out duration-300"> افتخارات رسانه</button>
        </div>

        <div id="textDisplay" class="mt-4 transition-opacity duration-300"></div>

        <div id="slide" class="w-full scroll flex flex-col items-center justify-center overflow-hidden mt-12 aos-init aos-animate hidden" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
  <h2 class="text-3xl font-bold text-blue-500"></h2>
<div class="w-[600px] 2xl:w-[700px]">

	<div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                <img src="./images/si2 (1).jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./images/si2 (2).jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./images/si2 (3).jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-sky-400/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-sky-400/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>

    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>

</div>
    </div>
    </div>

    <script>
        function showText(textId, button) {
            
            const buttons = document.querySelectorAll('button');
            buttons.forEach(btn => {
                btn.classList.remove('active');
            });

          
            button.classList.add('active');

           
            const textDisplay = document.getElementById('textDisplay');
            const slide = document.getElementById('slide');
            if (textId === 'text1') {
              slide.classList.add('hidden');

                textDisplay.innerHTML = '<p>این متن مربوط به دکمه ۱ است.</p>';
            } else if (textId === 'text2') {
              slide.classList.add('hidden');

                textDisplay.innerHTML = '<p>این متن مربوط به دکمه ۲ است.</p>';
            } else if (textId === 'text3') {
              textDisplay.innerHTML = ' ';

              slide.classList.remove('hidden');
            }
        }
    </script>
    
</div>




<div class="place flex scroll flex-col justify-center items-center mt-22 relative gap-2.5 ">
  <div class="counter flex gap-2.5 justify-center items-center rounded-2xl max-sm:flex-col p-6 max-w-[95%]">
    <img class="w-96 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500" src="images/mini.png" alt="">
    <div class="textPlace flex flex-col items-center justify-center gap-9 p-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
      <h2 class="text-5xl text-center font-black">تعداد هنر جویان</h2>
      <p id="counter" class="text-5xl text-center flex flex-wrap items-center justify-center">00000 <span> نفر</span><span class="flex mr-8">...</span></p>
    </div>
  </div>
</div>

<script>
  let hasAnimated = false; 

window.addEventListener('scroll', function() {
    const counterElement = document.getElementById('counter');
    const targetNumber = 23413; 
    const startNumber = 0; 
    const duration = 1500; 
    const startTime = performance.now();

    
    const rect = counterElement.getBoundingClientRect();
    const isVisible = rect.top >= 0 && rect.bottom <= window.innerHeight;

    if (isVisible && !hasAnimated) {
        hasAnimated = true; 

        function animateCounter(currentTime) {
            const elapsedTime = currentTime - startTime;
            const progress = Math.min(elapsedTime / duration, 1); 

           
            const currentNumber = Math.floor(startNumber + (targetNumber - startNumber) * progress);
            counterElement.innerHTML = currentNumber.toString().padStart(5, '0') + ' <span> نفر</span>';

            if (progress < 1) {
                requestAnimationFrame(animateCounter); 
            }
        }

        requestAnimationFrame(animateCounter); 
    }
});

</script>


<div class="w-full scroll flex flex-col items-center justify-center overflow-hidden mt-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
  <h2 class="text-3xl font-bold text-blue-500"></h2>
<div class="w-[600px] 2xl:w-[700px]">

	<div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                <img src="./images/si2 (1).jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./images/si2 (2).jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="./images/si2 (3).jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-sky-400/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-sky-400/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>

    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>

</div>

<div class="place flex flex-col justify-center items-center mt-26 w-full relative gap-2.5 ">
  <!-- <h2 class="text-2xl scroll font-bold aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">شعار ما</h2> -->
  <div class="features scroll flex gap-10 justify-center items-center bg-gray-200 mt-2">
    <div class="feature  text-[#003366] rounded-xl p-6 text-3xl aos-init aos-animate">#بی رقیب در آموزش</div>
    <div class="feature  text-[#003366] rounded-xl p-6 text-3xl aos-init aos-animate">#بی نظیر در امکانات</div>
  </div>
</div>

<style>
 .features {
  overflow: hidden; /* جلوگیری از نمایش عناصر خارج از محدوده */
  position: relative;
  width: 100%; /* عرض کامل */
  white-space: nowrap; /* جلوگیری از شکستن خط */
}

.feature {
  display: inline-block; /* نمایش به صورت خطی */
  animation: moveLeft 10s linear infinite; /* انیمیشن حرکت به سمت چپ */
}
@media screen and (max-width: 1500px) {
  

@keyframes moveLeft {
  0% {
    transform: translateX(350%); /* شروع از سمت راست */
  }
  100% {
    transform: translateX(-350%); /* حرکت به سمت چپ */
  }
}
}
@media screen and (max-width: 2000px) {
  

@keyframes moveLeft {
  0% {
    transform: translateX(450%); /* شروع از سمت راست */
  }
  100% {
    transform: translateX(-450%); /* حرکت به سمت چپ */
  }
}
}
@media screen and (max-width: 1200px) {
  

@keyframes moveLeft {
  0% {
    transform: translateX(300%); /* شروع از سمت راست */
  }
  100% {
    transform: translateX(-300%); /* حرکت به سمت چپ */
  }
}
}
@media screen and (max-width: 700px) {
  

@keyframes moveLeft {
  0% {
    transform: translateX(220%); /* شروع از سمت راست */
  }
  100% {
    transform: translateX(-220%); /* حرکت به سمت چپ */
  }
}
}
</style>


<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <img class="p-4 mb-6 w-36 ml-6 fill-white" src="./images/guy.png" alt="Logo">
        </div>
        <div class="footer-links flex gap-24 items-center justify-center mt-14 mb-6">
            <ul class="flex flex-col gap-7 text-center">
             
                <li><a href="#">خانه</a></li>
                <li><a href="#">درباره ما</a></li>
            </ul>
            <ul class="flex flex-col gap-7 text-center">
                <li><a href="#">تماس با ما</a></li>
                <li><a href="#">فرصت‌های شغلی</a></li>
           
            </ul>
        </div>
        <div class="footer-info mt-14">
            <p>شرکت توسعه سامانه‌های نرم‌افزاری نگین - توسون یک شرکت پیشرو در حوزه فناوری‌های مالی است که با هدف توسعه پایدار در صنعت...</p>
        </div>
    </div>
    <div class="footer-bottom text-center mt-14 p-4.5 flex justify-center items-center">
        <p>© 2023 تمام حقوق برای شرکت توسعه سامانه‌های نرم‌افزاری نگین محفوظ است.</p>
        <div class="footer-badge">
          
        </div>
    </div>
</footer>
<style>
  footer {
    background-color: #003DA5;
    color: white;
    padding: 20px;
    width: 95%;
    border-radius: 24px;
}

.footer-container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.footer-links {
    margin: 10px 0;
}

.footer-links ul {
    list-style: none;
    padding: 0;
    display: flex;
    gap: 15px;
}

.footer-links a {
    color: white;
    text-decoration: none;
}

.footer-info {
    text-align: center;
    margin: 10px 0;
    margin-top: 30px;
}

.footer-bottom {
    display: flex;
  justify-content: center;
    align-items: center;
    border-top: 1px solid #fff;
    padding-top: 10px;
}

.footer-badge img {
    height: 30px; /* Adjust size as needed */
}

@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
    }

    .footer-links ul {
        flex-direction: column;
    }

    .footer-bottom {
        flex-direction: column;
        text-align: center;
    }
}
</style>
<div class="back-top back-top-show"></div>
</div>


<script src="./script.js"></script>
<script src="./aos.js"></script>
<script src="./bootstrap.bundle.min.js"></script>
<script src="./functions.js"></script>
<div class="back-top back-top-show"></div>

<script src="TOSAN_files/bootstrap.bundle.min.js"></script>
<script src="TOSAN_files/purecounter_vanilla.js"></script>
<script src="TOSAN_files/swiper-bundle.min.js"></script>
<script src="TOSAN_files/sticky.min.js"></script>
<script src="TOSAN_files/glightbox.js"></script>
<script src="TOSAN_files/aos.js"></script>
<script src="TOSAN_files/jarallax.min.js"></script>
<script src="TOSAN_files/jarallax-video.min.js"></script>
<script src="TOSAN_files/functions.js"></script>

<script>
    AOS.init();
</script>


</body>
</html>