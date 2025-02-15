<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./src/output.css" rel="stylesheet">
  <link href="./src/TOSAN_files/fontawesome.css" rel="stylesheet">
    <link href="./src/TOSAN_files/brands.css" rel="stylesheet">
    <link href="./src/TOSAN_files/solid.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="./TOSAN_files/style-rtl.css"> -->


    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./src/TOSAN_files/css2.css" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="TOSAN_files/all.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="TOSAN_files/bootstrap-icons.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="TOSAN_files/glightbox.css"> -->
    <link rel="stylesheet" type="text/css" href="./src/TOSAN_files/aos.css">
    <link rel="stylesheet" type="text/css" href="./src/TOSAN_files/swiper-bundle.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="TOSAN_files/style-rtl.css"> -->
<title>رسانه</title>
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
  height: 9px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: var(--color-sky-700);
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: var(--color-sky-900);
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
      <a href="./index.php" class="-m-1.5 p-1.5">
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
$select = $conn->prepare("SELECT * FROM majors");
$select->execute();
$majors = $select->fetchAll(PDO::FETCH_ASSOC);
?>

    <div class="p-4">
    <?php foreach($majors as $major): ?>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-blue-100 over:bg-sky-700">
              <div class="flex size-11 flex-none items-center justify-center rounded-md bg-gray-50 group-hover:bg-white">
              <img src="./<?= $major['major_image'] ?>" alt="">
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-gray-900 ext-gray-50">
                <?= $major['major_name'] ?>
                  <span class="absolute inset-0"></span>
                </a>
              </div>
            </div>
            <?php endforeach; ?>

           
       
          </div>

         
        </div>
      </div>
      <style>
  

#toggleButton:hover + #dropdown,
#dropdown:hover {
    display: block; /* هنگام هاور روی دکمه یا منو، نمایش داده می‌شود */
}
      </style>

<a href="#footer" class="headSub text-xl flex items-center justify-center gap-1 font-semibold transition-all ease-out 200ms text-black  hover:text-blue-500 ">
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
    <div id="modal" class="fixed inset-0 z-100  bgBO flex items-center justify-center hidden">
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
    <div id="hamberContent" dir="rtl" class="translate-x-full transition all ease-in-out 300ms  fixed inset-y-0 right-0 z-100 w-full overflow-y-auto bg-gray-100 g-gray-800  px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between ">
        <a href="#" class="-m-1.5 p-1.5">
         
          
  

        </a>
        <button id="closeButton" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 ext-gray-100">
          <span class="sr-only">بستن منو</span>
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
 
<?php 
include './database/db.php';

// دریافت سه مقاله آخر
$select = $conn->prepare("SELECT * FROM majors");
$select->execute();
$majors = $select->fetchAll(PDO::FETCH_ASSOC);
?>
<?php foreach ($majors as $major):  ?>
<div class="dropHamber mt-2 space-y-2 g-gray-700 bg-gray-300 rounded-lg overflow-x-hidden overflow-y-scroll  max-h-0 transition-all duration-300 ease-in-out" id="disclosure-1">
    <a href="dore.php?major_id=<?= $major['id'] ?>" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 ext-gray-300"><?= $major['major_name'] ?></a>
</div>
<?php endforeach; ?>

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
            <p href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-600  ext-gray-300 hover:bg-gray-300 over:bg-gray-700 transition-all ease-in 200ms">ساعت کاری : از ساعت ۱۲ تا ۲۲ «به‌جز روزهای تعطیل»</p>
            <p href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-600  ext-gray-300 hover:bg-gray-300 over:bg-gray-700 transition-all ease-in 200ms">تلفن : 024534534</p>
            
          </div>
          <div class="py-6">
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-600  ext-gray-300 hover:bg-gray-300 over:bg-gray-700 transition-all ease-in 200ms"><span><svg class="mt-[-10px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--color-gray-600);"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg></span> میدان رسالت -ابتدای بلوار سمیه بعد از خیابان رجائی کوچه یک</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="banerPlace rounded-b-3xl relative flex items-center flex-wrap justify-around overflow-hidden">
  <div class="textes z-20 flex flex-col justify-center gap-10 items-center mt-20">
    <p class="shoar font-[900] max-[755px]:hidden max-lg:top-25 max-lg:text-6xl text-gray-50 [text-shadow:_4px_1px_0px_rgba(0,38,153,0.41)] shadow-gray-50 lg:text-7xl lg:top-28 xl:top-22 xl:text-7xl"> آموزشگاه فنی و حرفه ای</p>
    <p class="shoar shoar2 font-[900] top-25 max-lg:top-51 max-lg:text-7xl text-gray-50 [text-shadow:_4px_1px_0px_rgba(0,38,153,0.41)] shadow-gray-50 lg:text-8xl lg:top-62 xl:top-49  xl:text-8xl">رسانه</p>
    <div class="shoars flex flex-col mt-10 items-center justify-center">
      <p class="text-center text-gray-50">با مجوز رسمی سازمان فنی و حرفه ای کشور</p>
      
    </div>
    <div class="shoars flex flex-col mt-10 items-center justify-center">
      <p class="text-center text-gray-50">#بی رقیب در آموزش</p>
      <p class="text-center text-gray-50">#بی نظیر در خدمات و امکانات</p>
    </div>
  </div>
  <img class="text-center w-[600px] rounded-b-3xl" src="./src/images/people.png" alt="">
  <img class=" guy absolute w-45 lg:w-60 xl:w-80  top-2 right-3 xl:top-0 xl:right-3.5" src="./src/images/logo.png" alt="">
  
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
<div class="place flex flex-col justify-center items-center w-full relative gap-2.5 ">
  <!-- <h2 class="text-2xl scroll font-bold aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">شعار ما</h2> -->
  <div class="features scroll flex gap-26 justify-center items-center bg-gray-200 ">
    <div class="feature text-[#003366] rounded-xl ml-6 p-6 text-3xl">#رسانه بی رقیب در آموزش </div>
    <div class="feature text-[#003366] rounded-xl p-6 text-3xl">#بی نظیر در خدمات و امکانات</div>
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
  /* display: inline-block; نمایش به صورت خطی */
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



<?php 
include './database/db.php';

// دریافت سه مقاله آخر
$select = $conn->prepare("SELECT * FROM majors");
$select->execute();
$majors = $select->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="relative scroll mt-10 mr-3.5 flex justify-between items-center mb-10">
  <div class="title flex items-center justify-center">

    <!-- <svg class=" z-[-10] opacity-80 scale-105 lg:scale-150  p-1.5 rounded-full " xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" style="fill: #003366"><path d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm10 0h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zM4 21h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm13 0c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4z"></path></svg> -->
  <h2 class="lg:text-4xl text-2xl text-[#003366] ext-white font-bold aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">رشته ها
  </h2>
  </div>

</div>
<div class="flex gap-3 flex-wrap w-full mt-1.5 justify-center">
  <?php foreach($majors as $major): ?>
  <div class="reshte scroll relative transition-all ease-in-out 200ms hover:transform hover:scale-105 hover:shadow-md shadow-gray-400 hadow-gray-800 mt-3.5 flex flex-col gap-2.5 bg-sky-300 rounded-lg p-2 justify-center w-48 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
    <img class="image rounded-md" src="./<?= $major['major_image']  ?> " alt="">
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
include './database/db.php';

// دریافت سه مقاله آخر
$select = $conn->prepare("SELECT * FROM fields");
$select->execute();
$fields = $select->fetchAll(PDO::FETCH_ASSOC);
?>


<br><br>

<div class="relative scroll mt-10.5 mr-3.5 flex justify-between items-center">

  <div class="title flex items-center justify-center">

    <!-- <svg class=" z-[-10] opacity-80 scale-105 lg:scale-150  p-1.5 rounded-full " xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" style="fill: #003366"><path d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm10 0h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zM4 21h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm13 0c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4z"></path></svg> -->
  <h2 class="lg:text-4xl text-2xl text-[#003366] ext-white font-bold aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">رشته های فنی حرفه ای
  </h2>
  </div>

</div>
<div class="flex gap-3 flex-wrap w-full mt-1.5 justify-center">
  <?php foreach($fields as $field): ?>
  <div class="reshte scroll hover:scale-105 transition-all ease-in-out 200ms hover:shadow-md shadow-gray-400 relative mt-3.5 flex flex-col gap-2.5 bg-gradient-to-l from-sky-500 to-blue-500 rounded-lg p-2 justify-center w-48 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
    <img class="image rounded-md" src="./uploads2/<?= $field['field_image']  ?> " alt="">
    <div class="back absolute flex w-full justify-center items-center rounded-md ">
      <a href="./dorefani.php?field_id=<?= $field['id'] ?>" class="text-center absolute flex flex-col transition-all ease-in 200ms text-gray-50 justify-center items-center gap-2">
        <svg class="text-white fill-white transition-all ease-initial 200ms" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24">
          <path d="m7.375 16.781 1.25-1.562L4.601 12l4.024-3.219-1.25-1.562-5 4a1 1 0 0 0 0 1.562l5 4zm9.25-9.562-1.25 1.562L19.399 12l-4.024 3.219 1.25 1.562 5-4a1 1 0 0 0 0-1.562l-5-4zm-1.649-4.003-4 18-1.953-.434 4-18z"></path>
        </svg>
        <p id="aboutUs" class="text-xl font-bold transition-all ease-in-out 300ms"><?= $field['field_name'] ?> </p>
      </a>
    </div>
  </div>
  <?php endforeach; ?>
</div><br><br>
<div class="flex flex-col w-95% bg-gray-300">
<div class="place flex justify-center items-center mt-8 relative  aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
<div class="infoSec scroll relative overflow-hidden bg-[#003366] max-w-[1550px] rounded-2xl flex flex-col flex-wrap justify-center gap-0 px-10 py-4 w-[95%]">
  <p class="info z-20 font-light leading-12 text-gray-50 text-2xl mb-3.5 mt-20 max-[433px]:text-xl">آموزش مقدماتی و کاربردی کامپیوتر مهارت هفت گانه ICDL و فتوشاپ طبق استاندارد های مهارتی سازمان فنی و حرفه ای
 و ویژه کودکان ،نوجوانان ،جوانان ،کارمندان ، دانشجویان و طلاب توسط مربیان مجرب و برتر استانی دارای ابلاغ مربیگری رسمی از سازمان فنی و حرفه ای 
 با ارائه گواهینامه مهارت ۱۳۰ ساعته معتبر بین المللی از سازمان آموزش فنی و حرفه ای
شهریه نرخ مصوب دولتی وقانونی-نقدواقساط
بامدیریت مهندس علی بالایی مدیرنمونه سال با23سال سابقه آموزش</p>
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
   <div class="text-center mt-12 flex justify-center flex-col gap-x-14 w-full p-11 rounded-xl aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
        <div class="flex gap-4 mb-6 mt-12 flex-wrap  justify-center">
            <button id="button1" onclick="showText('text1', this)" class="bg-[#003366] hover:scale-105 cursor-pointer text-white px-4 py-2 rounded-md transition ease-in-out duration-300 flex gap-1"> <p>تخصص ها</p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;"><path d="M5 22h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2h-2a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2zM5 5h2v2h10V5h2v15H5V5z"></path><path d="m11 13.586-1.793-1.793-1.414 1.414L11 16.414l5.207-5.207-1.414-1.414z"></path></svg> </button>
            <button id="button2" onclick="showText('text2', this)" class="bg-[#003366] hover:scale-105 cursor-pointer text-white px-4 py-2 rounded-md transition ease-in-out duration-300 flex gap-1"> <p>ساعت کاری</p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path></svg> </button>
            <button id="button3" onclick="showText('text3', this)" class="bg-[#003366] hover:scale-105 cursor-pointer text-white px-4 py-2 rounded-md transition ease-in-out duration-300 flex gap-1"> <p> افتخارات رسانه </p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;"><path d="M12 22c3.859 0 7-3.141 7-7s-3.141-7-7-7c-3.86 0-7 3.141-7 7s3.14 7 7 7zm0-12c2.757 0 5 2.243 5 5s-2.243 5-5 5-5-2.243-5-5 2.243-5 5-5zm-1-8H7v5.518a8.957 8.957 0 0 1 4-1.459V2zm6 0h-4v4.059a8.957 8.957 0 0 1 4 1.459V2z"></path><path d="m10.019 15.811-.468 2.726L12 17.25l2.449 1.287-.468-2.726 1.982-1.932-2.738-.398L12 11l-1.225 2.481-2.738.398z"></path></svg> </button>
        </div>

        <div id="textDisplay" class="mt-4 transition-opacity duration-300"></div>

        <div id="slideo" class="w-full flex flex-col items-center justify-center mt-12 aos-init aos-animate  overflow-y-hidden hidden" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
  <div class="imageslide w-full flex justify-center items-center h-[200px] gap-3 overflow-y-hidden overflow-x-scroll">
    <img class="zoomable" src="./src/images/f1.jpg" alt="" width="170px" height="190px">
    <img class="zoomable" src="./src/images/f2.jpg" alt="" width="170px" height="190px">
    <img class="zoomable" src="./src/images/f3.jpg" alt="" width="170px" height="190px">
    <img class="zoomable" src="./src/images/f5.jpg" alt="" width="170px" height="190px">
    <img class="zoomable" src="./src/images/f6.jpg" alt="" width="170px" height="190px">
  </div>
</div>

<!-- Modal (for zoomed image) -->
<div id="zoomModal" class="zoom-modal fixed inset-0 bg-black bg-opacity-75 flex justify-center items-center hidden">
    <img id="zoomedImage" class="zoomed-img" src="" alt="" />
    <!-- Close button -->
<button id="closeBtn" class="close-btn absolute top-0 right-0 text-white text-3xl p-2">
    ×
</button>

</div>

<!-- CSS -->
<style>
  /* Close button styles */
.close-btn {
    background: transparent;
    border: none;
    cursor: pointer;
    font-size: 36px;
    font-weight: bold;
    color: #60a5fa;
    transition: color 0.3s;
}

.close-btn:hover {
    color: red;  /* Change color on hover */
}

    .zoomable {
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .zoomable:hover {
        transform: scale(1.1);
    }

    /* Modal styles */
    .zoom-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.8); /* Black background with opacity */
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .zoomed-img {
        width: 100%;
        height: 100%;
        object-fit: contain;  /* Ensures the image is scaled properly */
        transition: transform 0.3s ease;
    }
</style>

<!-- JavaScript -->
<script>
    // Get all zoomable images and modal
    const zoomableImages = document.querySelectorAll('.zoomable');
    const zoomModal = document.getElementById('zoomModal');
    const zoomedImage = document.getElementById('zoomedImage');
    
    // Add click event to each image
    zoomableImages.forEach(img => {
        img.addEventListener('click', function() {
            const imgSrc = this.src;
            zoomedImage.src = imgSrc;  // Set the source of the zoomed image
            zoomModal.style.display = 'flex';  // Show the modal
        });
    });

    // Close modal when clicked outside the image
    zoomModal.addEventListener('click', function(e) {
        if (e.target === zoomModal) {
            zoomModal.style.display = 'none';  // Hide the modal
        }
    });
</script>

    </div>
    </div>

    <script>
      // Get close button
const closeBtn = document.getElementById('closeBtn');

// Close modal when close button is clicked
closeBtn.addEventListener('click', function() {
    zoomModal.style.display = 'none';  // Hide the modal
});

        function showText(textId, button) {
            
            const buttons = document.querySelectorAll('button');
            buttons.forEach(btn => {
                btn.classList.remove('active');
            });

          
            button.classList.add('active');

           
            const textDisplay = document.getElementById('textDisplay');
            const slide = document.getElementById('slideo');
            if (textId === 'text1') {
              slide.classList.add('hidden');

                textDisplay.innerHTML = '<p>آموزش دوره های عمومی کامپیوتر، آموزش نرم افزارهای برنامه نویسی، آموزش نرم افزارهای حسابداری</p>';
            } else if (textId === 'text2') {
              slide.classList.add('hidden');

                textDisplay.innerHTML = '<p>از ساعت ۱۲ تا ۲۲ «به‌جز روزهای تعطیل»</p>';
            } else if (textId === 'text3') {
              textDisplay.innerHTML = ' ';

              slide.classList.remove('hidden');
            }
        }
    </script>
    
</div>
</div>




<div class="place flex scroll flex-col justify-center items-center mt-22 relative gap-2.5 ">
  <div class="counter flex gap-2.5 justify-center items-center rounded-2xl max-sm:flex-col p-6 max-w-[95%]">
    <img class="w-96 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500" src="./src/images/mini.png" alt="">
    <div class="textPlace flex flex-col items-center justify-center gap-9 p-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
      <h2 id="mohit" class="text-5xl text-center font-black">تعداد هنر جویان</h2>
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


<div id="mohit" class="w-full scroll flex flex-col items-center justify-center overflow-hidden mt-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
  <h2 class="text-3xl font-bold text-[#003366]">محیط آموزشگاه</h2>
<div class="w-[95%] mt-4 max-w-[1550px]">

	<div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
            <!-- Item 1 -->
            <div class="hidden w-full h-full duration-700 ease-in-out" data-carousel-item>
                
                <img src="./src/images/si2 (1).jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden w-full h-full duration-700 ease-in-out" data-carousel-item>
                <img src="./src/images/si2 (2).jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden w-full h-full duration-700 ease-in-out" data-carousel-item>
                <img src="./src/images/si2 (3).jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
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
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 g-gray-800/30 group-hover:bg-sky-400/50 roup-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white roup-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 ext-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 g-gray-800/30 group-hover:bg-sky-400/50 roup-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white roup-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 ext-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>

    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>

</div>



<footer id="footer" class="mt-14 max-w-[1550px]">
    <div class="footer-container">
        <div class="footer-logo flex flex-wrap justify-center items-center">
            <img class="p-4 mb-6 w-36 ml-6 fill-white" src="./src/images/guy.png" alt="Logo">
            <div class="flex gap-3.5 items-center justify-center">
            <img class="p-4 mb-6 w-36 ml-6 fill-white" src="./src/images/4f.png" alt="">
            <!-- <img class="p-4 mb-6 w-36 ml-6 fill-white" src="./images/10f.png" alt=""> -->
        </div>
        </div>
        
        <div class="footer-links flex gap-24 items-center text-center justify-center mt-14 mb-6">
            <ul class="flex flex-col gap-7 text-center">
             
                <li><a href="#">خانه</a></li>
                <li><a href="#aboutUs">درباره ما</a></li>
            </ul>
        
            <ul class="flex flex-col gap-7 text-center">
                <li> شماره تماس : 0256549333</li>
                <li><a href="#mohit"> محیط آموزشگاه</a></li>
           
            </ul>
        </div>
       
        <div class="footer-info mt-14">
            <p>آموزشگاه رسانه قم با مجوز رسمی سازمان فنی و حرفه ای کشور کوشا و پیشرو در حوزه آموزش حرفه های رایانه ای و رسانه است</p>
        </div>
        <div class="footer-info mt-14 flex gap-4 flex-wrap">
            <a href="https://maps.app.goo.gl/AHRHdij1KDQNXLPU7"><svg class="mt-[-10px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg></a>
            <a href="#"><svg class="mt-[-10px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: white;"><path d="M5.968 23.942a6.624 6.624 0 0 1-2.332-.83c-1.62-.929-2.829-2.593-3.217-4.426-.151-.717-.17-1.623-.15-7.207C.288 5.47.274 5.78.56 4.79c.142-.493.537-1.34.823-1.767C2.438 1.453 3.99.445 5.913.08c.384-.073.94-.08 6.056-.08 6.251 0 6.045-.009 7.066.314a6.807 6.807 0 0 1 4.314 4.184c.33.937.346 1.087.369 3.555l.02 2.23-.391.268c-.558.381-1.29 1.06-2.316 2.15-1.182 1.256-2.376 2.42-2.982 2.907-1.309 1.051-2.508 1.651-3.726 1.864-.634.11-1.682.067-2.302-.095-.553-.144-.517-.168-.726.464a6.355 6.355 0 0 0-.318 1.546l-.031.407-.146-.03c-1.215-.241-2.419-1.285-2.884-2.5a3.583 3.583 0 0 1-.26-1.219l-.016-.34-.309-.284c-.644-.59-1.063-1.312-1.195-2.061-.212-1.193.34-2.542 1.538-3.756 1.264-1.283 3.127-2.29 4.953-2.68.658-.14 1.818-.177 2.403-.075 1.138.198 2.067.773 2.645 1.639.182.271.195.31.177.555a.812.812 0 0 1-.183.493c-.465.651-1.848 1.348-3.336 1.68-2.625.585-4.294-.142-4.033-1.759.026-.163.04-.304.031-.313-.032-.032-.293.104-.575.3-.479.334-.903.984-1.05 1.607-.036.156-.05.406-.034.65.02.331.053.454.192.736.092.186.275.45.408.589l.24.251-.096.122a4.845 4.845 0 0 0-.677 1.217 3.635 3.635 0 0 0-.105 1.815c.103.461.421 1.095.739 1.468.242.285.797.764.886.764.024 0 .044-.048.044-.106.001-.23.184-.973.326-1.327.423-1.058 1.351-1.96 2.82-2.74.245-.13.952-.47 1.572-.757 1.36-.63 2.103-1.015 2.511-1.305 1.176-.833 1.903-2.065 2.14-3.625.086-.57.086-1.634 0-2.207-.368-2.438-2.195-4.096-4.818-4.37-2.925-.307-6.648 1.953-8.942 5.427-1.116 1.69-1.87 3.565-2.187 5.443-.123.728-.169 2.08-.093 2.75.193 1.704.822 3.078 1.903 4.156a6.531 6.531 0 0 0 1.87 1.313c2.368 1.13 4.99 1.155 7.295.071.996-.469 1.974-1.196 3.023-2.25 1.02-1.025 1.71-1.88 3.592-4.458 1.04-1.423 1.864-2.368 2.272-2.605l.15-.086-.019 3.091c-.018 2.993-.022 3.107-.123 3.561-.6 2.678-2.54 4.636-5.195 5.242l-.468.107-5.775.01c-4.734.008-5.85-.002-6.19-.056z"/></svg></a>
            
        </div>
    </div>
    <div class="footer-bottom text-center mt-14 p-4.5 flex justify-center items-center">
        <p>© 2025 تمام حقوق این سایت مطعلق به مجتمع آموزشی رسانه است.</p>
        <div class="footer-badge">
          
        </div>
    </div>
</footer>
<div class="bg-white w-full text-center max-w-[1550px] p-1.5 flex justify-center items-center"><p>طراحی سایت توسط</p><a class="h-fit" href="https://myitland.ir/"><img class="mb-2" width="110px" src="./src/images/Untitled-2.png" alt=""></a></div>
<style>
  .imageslide{
    overflow-x: scroll;
  }
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


<script src="./src/script.js"></script>
<script src="./src/aos.js"></script>
<script src="./src/bootstrap.bundle.min.js"></script>
<script src="./src/functions.js"></script>
<div class="back-top back-top-show"></div>

<script src="./src/TOSAN_files/bootstrap.bundle.min.js"></script>
<script src="./src/TOSAN_files/purecounter_vanilla.js"></script>
<script src="./src/TOSAN_files/swiper-bundle.min.js"></script>
<script src="./src/TOSAN_files/sticky.min.js"></script>
<script src="./src/TOSAN_files/glightbox.js"></script>
<script src="./src/TOSAN_files/aos.js"></script>
<script src="./src/TOSAN_files/jarallax.min.js"></script>
<script src="./src/TOSAN_files/jarallax-video.min.js"></script>
<script src="./src/TOSAN_files/functions.js"></script>

<script>
    AOS.init();
</script>


</body>
</html>