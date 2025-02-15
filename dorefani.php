<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./src/output.css" rel="stylesheet">
  <link href="./src/TOSAN_files/fontawesome.css" rel="stylesheet">
    <link href="./src/TOSAN_files/brands.css" rel="stylesheet">
    <link href="./src/TOSAN_files/solid.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="./src/TOSAN_files/style-rtl.css"> -->


    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./src/TOSAN_files/css2.css" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="TOSAN_files/all.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="TOSAN_files/bootstrap-icons.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="TOSAN_files/glightbox.css"> -->
    <link rel="stylesheet" type="text/css" href="./src/TOSAN_files/aos.css">
    <link rel="stylesheet" type="text/css" href="./src/TOSAN_files/swiper-bundle.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="TOSAN_files/style-rtl.css"> -->
<title>دوره های فنی حرفه ای</title>
</head>
<style>
  html{
    scroll-behavior: smooth;
  }
  @font-face {
    font-family: yekan;
    font-weight: 900;
    src: url(./src/yekan/YekanBakh-ExtraBlack.woff2);
  }
  @font-face {
    font-family: yekan;
    font-weight: 800;
    src: url(./src/yekan/YekanBakh-Black.woff2);
  }
  @font-face {
    font-family: yekan;
    font-weight: 700;
    src: url(./src/yekan/YekanBakh-ExtraBold.woff2);
  }
  @font-face {
    font-family: yekan;
    font-weight: 600;
    src: url(./src/yekan/YekanBakh-Bold.woff2);
  }
  @font-face {
    font-family: yekan;
    font-weight: 500;
    src: url(./src/yekan/YekanBakh-SemiBold.woff2);
  }
  
  @font-face {
    font-family: yekan;
    font-weight: 300;
    src: url(./src/yekan/YekanBakh-Regular.woff2);
  }
  @font-face {
    font-family: yekan;
    font-weight: 200;
    src: url(./src/yekan/YekanBakh-Light.woff2);
  }
  @font-face {
    font-family: yekan;
    font-weight: 100;
    src: url(./src/yekan/YekanBakh-Thin.woff2);
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
    background-image: url(./src/images/baner.png);
    
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
      <a href="./src/index.php" class="-m-1.5 p-1.5">
        <span class="sr-only text-6xl ">مجموعه ما</span>
        <img class="h-[65px] w-auto" src="./src/images/guy.png" alt="">
      </a>
    </div>
    <div class=" lg:flex-1 lg:justify-end lg:hidden">

    <div id="telBtn2" class="p-3.5 rounded-xl lg:hidden hover:bg-blue-100 transition-all ease-out 200ms cursor-pointer">
    <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--color-blue-500);" ><path d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z"></path></svg>
    </div>
    <div id="modal2" class="fixed inset-0 z-100  bgBO flex items-center justify-center hidden">
        <div dir="rtl" class="bg-white rounded-lg max-w-[300px] p-6 shadow-lg transition-transform transform 2-enter modal-leave">
            <button id="closeModal2" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--color-blue-500)"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg></button>
            <h2 class="text-lg font-bold mt-2 text-[#003366]"> تلفن آموزشگاه : </h2>
            <p class="mt-2 font-bold text-xl">025433456</p>
            <h2 class="text-lg font-bold mt-3 w-full py-4 border-t text-[#003366]"> آدرس آموزشگاه : </h2>
            <p class="font-bold text-xl">قم بلوار سمیه نبش کوچه یک</p>

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
        <img class="h-[65px] w-auto" src="./src/images/guy.png" alt="">
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
    <svg class="size-7 flex-none mt-[-10px] group-hover:text-blue-500 text-black" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
    </svg>
</button>

<!-- منوی پرتابل -->
<div id="dropdown" dir="rtl" class="absolute top-3.5  z-100 mt-3 w-screen max-w-md overflow-x-hidden overflow-y-scroll rounded-3xl bg-gray-200 ring-1 shadow-lg ring-gray-900/5 hidden">
    <!-- محتویات منو -->

  
<?php 
include './database/db.php';

// دریافت سه مقاله آخر
$select = $conn->prepare("SELECT * FROM courses");
$select->execute();
$courses = $select->fetchAll(PDO::FETCH_ASSOC);
?>

    <div class="p-4">
    <?php foreach($courses as $course): ?>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-blue-100 over:bg-sky-700">
              <div class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <svg class="size-6 text-gray-600 group-hover:text-sky-600" fill="currentColor" viewBox="0 0 24 24" stroke-width="0.2" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path d="M2 7v1l11 4 9-4V7L11 4z"></path><path d="M4 11v4.267c0 1.621 4.001 3.893 9 3.734 4-.126 6.586-1.972 7-3.467.024-.089.037-.178.037-.268V11L13 14l-5-1.667v3.213l-1-.364V12l-3-1z"></path>
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900 ext-gray-50">
                <?= $course['course_name'] ?>
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600 ext-gray-200"><?= $course['course_description']?></p>
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

<a href="#telef" class="headSub text-xl flex items-center justify-center gap-1 font-semibold transition-all ease-out 200ms text-black  hover:text-blue-500 ">
      <svg class="mt-[-10px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: currentColor;"><path d="M12 2C6.486 2 2 6.486 2 12v4.143C2 17.167 2.897 18 4 18h1a1 1 0 0 0 1-1v-5.143a1 1 0 0 0-1-1h-.908C4.648 6.987 7.978 4 12 4s7.352 2.987 7.908 6.857H19a1 1 0 0 0-1 1V18c0 1.103-.897 2-2 2h-2v-1h-4v3h6c2.206 0 4-1.794 4-4 1.103 0 2-.833 2-1.857V12c0-5.514-4.486-10-10-10z"></path></svg>
      <p> پشتیبانی</p>
      </a>

      <a href="#footer" class="headSub text-xl flex items-center justify-center gap-1 font-semibold transition-all ease-out 200ms text-black  hover:text-blue-500 ">
      <svg class="mt-[-10px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: currentColor;"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>
      <p> آدرس</p>
      </a>

      <a href="#aboutUs" class="headSub text-xl flex items-center justify-center gap-1 font-semibold transition-all ease-out 200ms text-black  hover:text-blue-500 ">
      <svg class="mt-[-10px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: currentColor;"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm9-8.586 6 6V15l.001 5H6v-9.586l6-6z"></path><path d="M12 18c3.703 0 4.901-3.539 4.95-3.689l-1.9-.621c-.008.023-.781 2.31-3.05 2.31-2.238 0-3.02-2.221-3.051-2.316l-1.899.627C7.099 14.461 8.297 18 12 18z"></path></svg>
      <p>مجموعه ما</p>
      </a>

    </div>
    <div class=" lg:flex lg:flex-1 lg:justify-end max-lg:hidden">

    <div id="telBtn" class="p-3.5 rounded-xl max-lg:hidden hover:bg-blue-100 transition-all ease-out 200ms cursor-pointer">
    <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--color-blue-500);" ><path d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z"></path></svg>
    </div>
    <div id="modal3" class="fixed inset-0 z-100  bgBO flex items-center justify-center hidden">
        <div dir="rtl" class="bg-white rounded-lg p-6 shadow-lg transition-transform transform modal-enter modal-leave">
            <button id="closeModal" class="absolute top-2 right-2 max-w-[300px] text-gray-600 hover:text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--color-blue-500)"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg></button>
            <h2 class="text-lg font-bold mt-2 text-[#003366]"> تلفن آموزشگاه : </h2>
            <p class="mt-2 font-bold text-xl">025433456</p>
            <h2 class="text-lg font-bold mt-3 w-full py-4 border-t text-[#003366]"> آدرس آموزشگاه : </h2>
            <p class="font-bold text-xl">قم بلوار سمیه نبش کوچه یک</p>


        </div>
    </div>

    <script>
        const telBtn = document.getElementById('telBtn');
        const modal = document.getElementById('modal3');
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
    <div id="hamberContent" dir="rtl" class="translate-x-full transition all ease-in-out 300ms  fixed inset-y-0 right-0 z-100 w-full overflow-y-auto bg-gray-100 g-gray-800  px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between ">
        <a href="#" class="-m-1.5 p-1.5">
         
          
  

        </a>
        <button id="closeButton" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 ext-gray-100">
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
            <button id="reshteHamber" type="button" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 ext-gray-300 hover:bg-gray-300 over:bg-gray-700 transition-all ease-in 200ms" aria-controls="disclosure-1" aria-expanded="false">
    رشته ها
    <svg class="size-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
    </svg>
</button>

<div class="dropHamber mt-2 space-y-2 g-gray-700 bg-gray-300 rounded-lg overflow-x-hidden overflow-y-scroll  max-h-0 transition-all duration-300 ease-in-out" id="disclosure-1">
    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 ext-gray-300">Analytics</a>
    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 ext-gray-300">Engagement</a>
    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 ext-gray-300">Security</a>
    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 ext-gray-300">Integrations</a>
    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 ext-gray-300">Automations</a>
    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 ext-gray-300">Watch demo</a>
    <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 ext-gray-300">Contact sales</a>
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
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900  ext-gray-300 hover:bg-gray-300 over:bg-gray-700 transition-all ease-in 200ms">Features</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900  ext-gray-300 hover:bg-gray-300 over:bg-gray-700 transition-all ease-in 200ms">Marketplace</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900  ext-gray-300 hover:bg-gray-300 over:bg-gray-700 transition-all ease-in 200ms">Company</a>
          </div>
          <div class="py-6">
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900  ext-gray-300 hover:bg-gray-300 over:bg-gray-700 transition-all ease-in 200ms">Log in</a>
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
<h2 class="lg:text-3xl text-2xl m-4.5 ext-white">رشته‌ها</h2>
<div class="reshteHa mt-1.5 p-2.5 flex gap-3 flex-wrap justify-center w-full">
    <?php if (!empty($programs)): ?>
        <?php foreach($programs as $program): ?>
        <div class="mx-auto bg-gray-300 g-gray-800 rounded-lg shadow-md overflow-hidden h-fit mt-3.5 max-w-[350px] min-w-[350px]">
            <img class="w-full h-48 object-cover" src="<?= $program['program_image'] ?>" alt="عنوان تصویر">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2 mt-2.5 ext-gray-50"><?= htmlspecialchars($program['program_name']) ?></h2>
                <p class="text-gray-700 ext-gray-300 mb-4"><?= htmlspecialchars($program['program_description']) ?></p>
                <button class="toggleDetails inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-200" data-course-code="<?= $program['program_code'] ?>" data-course-name="<?= $program['program_name'] ?>">جزئیات بیشتر</button>

                <div id="details-<?= $program['program_code'] ?>" class="details hidden mt-4 p-4 bg-gray-200 g-gray-900 rounded-lg flex flex-col gap-1.5">
                    <h3 class="text-lg font-bold mb-2 ext-gray-100">آموزش</h3>
                    <p class="text-gray-700 mb-2 ext-gray-400"><?= htmlspecialchars($program['learning_objectives']) ?></p>
                    <p class="text-gray-600 mb-2 ext-gray-300">قیمت: <span class="font-semibold"><?= number_format($program['program_price']) ?> تومان</span></p>
                    <p class="text-gray-600 mb-2 ext-gray-300">زمان برگزاری: <span class="font-semibold"><?= htmlspecialchars($program['program_hours']) ?></span></p>
                    <p class="text-gray-600 mb-2 ext-gray-300">مدت دوره (ماه): <span class="font-semibold"><?= htmlspecialchars($program['program_duration']) ?> ماه</span></p>
                    <p class="text-gray-600 ext-gray-300">کد دوره: <span class="font-semibold"><?= htmlspecialchars($program['program_code']) ?></span></p>

                    <!-- نمایش PDF داخل iframe -->
                    <?php if (!empty($program['course_pdf'])): ?>
                        <div class="mt-3">
                            <h4 class="text-lg font-bold mb-2 ext-gray-100">مشاهده PDF</h4>
                            <iframe src="<?= $program['course_pdf'] ?>" width="100%" height="400px"></iframe>
                        </div>
                    <?php endif; ?>
                    <style>
  .offLine{
    color: var(--color-red-500);
    position: relative;
    opacity: 70%;
  }
</style>
</style>

<script>
   document.querySelectorAll('.toggleDetails').forEach(button => {
    button.addEventListener('click', function() {
        const details = this.nextElementSibling; 
        details.classList.toggle('hidden');
        
        // به‌روزرسانی ورودی‌های فرم با اطلاعات دوره کلیک شده
        const courseCode = this.getAttribute('data-course-code');
        const courseName = this.getAttribute('data-course-name');
        
        const courseCodeInput = document.querySelector('input[name="course_code"]');
        const courseNameInput = document.querySelector('input[name="course_name"]');
        
        if (courseCodeInput) {
            courseCodeInput.value = courseCode;
        }
        if (courseNameInput) {
            courseNameInput.value = courseName; // حالا این خط به درستی نام دوره را هم به‌روزرسانی می‌کند
        }
    });
});


    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById("modal");
        const closeModal = document.getElementById("closeModal");
        const registerButtons = document.querySelectorAll(".open-modal");

        registerButtons.forEach(button => {
            button.addEventListener("click", () => {
                modal.classList.remove("hidden");
                setTimeout(() => {
                    modal.classList.add("opacity-100");
                    modal.querySelector("div").classList.add("scale-100");
                }, 10);
            });
        });

        function closeModalFunc() {
            modal.classList.remove("opacity-100");
            modal.querySelector("div").classList.remove("scale-100");
            setTimeout(() => modal.classList.add("hidden"), 200);
        }

        closeModal.addEventListener("click", closeModalFunc);

        window.addEventListener("click", (e) => {
            if (e.target === modal) closeModalFunc();
        });
    });
</script>

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
            <button type="submit" class="submit-btn bg-sky-600">ارسال درخواست</button>
        </form>
    </div>
</div>

<script>
    document.getElementById('registration-form').addEventListener('submit', function(event) {
        event.preventDefault();

        var formData = new FormData(this);

        // ارسال درخواست به سرور با AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', './submit2.php', true);
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
                // پس از نمایش پیغام موفقیت، می‌توانید فیلدها را پاک کنید یا عملیات دیگر انجام دهید
                document.getElementById('registration-form').reset();
            }
        };

        xhr.send(formData);
    });

    // بستن مودال و پاک کردن مقادیر ورودی‌ها و پیام خطا
    document.querySelector(".close-modal").addEventListener("click", function() {
        const modal = document.getElementById("modal");
        modal.classList.add("hidden");

        // غیرفعال کردن فرم هنگام بسته شدن مودال
        const form = document.getElementById('registration-form');
        form.reset(); 
        document.getElementById('error-message').textContent = '';  
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
            top: 0px;
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
            background-color: var(--color-sky-700);
        }
    </style>
    <script src="./src/script.js"></script>

</body>
</html>