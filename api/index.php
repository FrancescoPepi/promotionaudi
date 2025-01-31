<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js" defer></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4" defer></script>


    <script type="text/javascript" src="main.js" defer></script>
    <script type="text/javascript" src="jsComponent/nav.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <title>Sesto Autoveicoli</title>
    <link rel="icon" type="image/x-icon"
        href="https://cdnwp.dealerk.com/920e35d2/uploads/sites/4/2021/07/logo-sede-carrozzeria-0x60.png">
</head>

<body class="scroll-smooth">
    <section id="header-hero" class="h-dvh mx-auto relative">
        <!-- CAROUSEL -->
        <div id="default-carousel" class="fixed z-0 top-0 left-0 h-full w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="top-0 bottom-0 left-0 right-0 h-full overflow-hidden absolute">
                <?php
                $json_url = 'api/carousel.json';
                $json = file_get_contents($json_url);
                $source = json_decode($json, true);
                ?>
                <?php foreach($source['data'] as $key=>$value): ?>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/<?php echo $value['path']; ?>"
                        class="absolute block w-full h-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="<?php echo $value['path']; ?>">
                    <!-- <h2 class=" text-7xl font-bold absolute top-5 right-5"><?php echo $value['title']; ?></h2> -->
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- LOGO -->
        <div class="h-[125px] fixed top-0 right-0 left-0 flex items-center z-20">
            <h1 class="text-3xl mx-4 px-3 py-2 font-bold bg-white/40 rounded-full  backdrop-blur-xs">
                <img src="https://cdnwp.dealerk.com/920e35d2/uploads/sites/4/2021/04/logo_sesto-bigger-0x50.png"
                    alt="Service Sesto Autoveicoli, Torna all'Homepage" class="image__img" fetchpriority="high"
                    style="height: 50px">
            </h1>
        </div>

        <!-- MINI CAROUSEL TEXT -->
        <section class="flex h-[80vh] mt-[100px] relative z-10 px-15 w-[75%] py-60">
            <div class="flex-2">
                <div id="default-carousel" class="h-full w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="h-full overflow-hidden relative">
                        <?php
                        $json_url = 'carousel.json';
                        $json = file_get_contents($json_url);
                        $source = json_decode($json, true);
                        ?>
                        <?php foreach($source['data'] as $key=>$value): ?>
                        <div class="hidden duration-700 ease-in-out absolute bg-gray-800/40 backdrop-blur-xs text-[rgb(222_222_222)] p-10 rounded-[40px]"
                            data-carousel-item>
                            <h2 class=" text-7xl font-bold"><?php echo $value['title']; ?></h2>
                            <h2 class=" text-3xl font-bold mt-5"><?php echo $value['subTitle']; ?></h2>
                            <p class="text-xl mt-2"><?php echo $value['content']; ?></p>
                        </div>
                        <?php ?>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
            <div class="flex-3"></div>
        </section>


        <div class="absolute bottom-80 w-full z-10 text-2xl text-center text-white">Prenota un test drive</div>
        <div id="nav-bar-container" class="sticky top-0 right-0 left-0 flex items-center transition-all z-50">
            <?php include 'component/nav.html'; ?>
        </div>

        <div class="absolute bottom-0 w-full h-full z-10 test">
        </div>
    </section>
    <section id="design" class="bg-black relative p-5">
        <?php include 'component/mainBody.html'; ?>
    </section>
    <section id="statistics" class="h-dvh w-full bg-black relative p-5">
        <!-- STATISTICHE -->
        <div
            class="w-[70%] mx-auto my-30 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <!-- Tabs -->
            <ul
                class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400 rtl:divide-x-reverse">
                <li class="w-full">
                    <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats"
                        aria-selected="true"
                        class="inline-block w-full p-4 rounded-ss-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">
                        Statistics
                    </button>
                </li>
            </ul>

            <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                <!-- STATISTICHE AUDI -->
                <div class="p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel"
                    aria-labelledby="stats-tab">
                    <dl
                        class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-3 dark:text-white sm:p-8">
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold counter" data-target="100">100/100</dt>
                            <dd class="text-gray-500 dark:text-gray-400">Affidabilità</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold">200M+</dt>
                            <dd class="text-gray-500 dark:text-gray-400">La consigliano</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="mb-2 text-3xl font-extrabold " data-target="900000">2M+</dt>
                            <dd class="text-gray-500 dark:text-gray-400">Vendite nell'ultimo anno</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        <!-- TESTIMONIALI -->


        <div
            class="w-[70%] mx-auto grid mb-8 border border-gray-200 rounded-lg shadow-xs dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800">
            <?php
            $json_url = 'testimonial.json';
            $json = file_get_contents($json_url);
            $source = json_decode($json, true);
            ?>
            <?php foreach($source['data'] as $key=>$value): ?>
            <figure
                class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white"><?php echo $value['title']; ?></h3>
                    <p class="my-4"><?php echo $value['content']; ?>"</p>
                </blockquote>
                <figcaption class="flex items-center justify-center ">
                    <img class="rounded-full w-9 h-9" src="<?php echo $value['imgProfile']; ?>" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                        <div><?php echo $value['name']; ?></div>
                    </div>
                </figcaption>
            </figure>

            <?php endforeach; ?>


        </div>





    </section>
    <div class="fixed bottom-0 right-0 z-50 p-1 my-5 bg-green-300/70 rounded-l-full cursor-pointer">
        <div class="pr-3 m-3 hover:pr-50 group transition-all duration-700 ease-in-out flex items-center relative">
            <img src="img/whatsapp-128.png" alt="" class="size-12">
            <span
                class="text-2xl text-white ml-2 opacity-0 group-hover:right-0 group-hover:opacity-100 absolute right-[-100%] transition-all duration-500 ease-in-out whitespace-nowrap">
                Whatsapp
            </span>
        </div>
    </div>

    <footer class="relative">
        <div class="bg-black text-white text-center p-5">
            <p>Powered by Francesco Pepi</p>
        </div>
        <footer class="bg-gray-900 text-white py-10">
            <div class="container mx-auto px-6">
                <!-- Logo e Contatti -->
                <div class="flex flex-wrap justify-between items-center border-b border-gray-700 pb-6">
                    <div class="flex flex-col">
                        <a href="#" title="Torna all'Homepage">
                            <img src="https://cdnwp.dealerk.com/920e35d2/uploads/sites/4/2021/04/logo_sesto-white-0x50.png"
                                alt="Service Sesto Autoveicoli" class="h-12">
                        </a>
                        <p class="text-sm mt-2">Partita IVA 00693650962</p>
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M5 4.5a.5.5 0 00-.5.5V16a.5.5 0 00.5.5h10a.5.5 0 00.5-.5V5a.5.5 0 00-.5-.5H5z" />
                            </svg>
                            <a href="#" class="hover:text-gray-300">+39 02 262831</a>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2.94 6.94a.5.5 0 01.707 0l6.365 6.364a.5.5 0 01-.707.707L2.94 7.646a.5.5 0 010-.707z" />
                            </svg>
                            <a href="#" class="hover:text-gray-300">bdc-assistenza@sestoautoveicoli.it</a>
                        </div>
                    </div>
                </div>

                <!-- Accordion Concessionarie -->
                <div class="mt-6 space-y-4">
                    <!-- Volkswagen e Skoda -->


                    <!-- Audi -->
                    <div class="border-b border-gray-700 pb-4">
                        <button
                            class="w-full flex justify-between items-center py-3 text-left text-lg font-semibold hover:text-gray-300 accordion-toggle">
                            Audi
                            <span class="accordion-icon">+</span>
                        </button>
                        <div class="accordion-content hidden mt-2 space-y-2">
                            <img src="https://cdn.dealerk.it/cars/make/brand/60/white/audi.png" alt="Audi"
                                class="h-10">
                            <p><a href="#" class="hover:text-gray-300">Viale Edison, 130 - 20099 Sesto San
                                    Giovanni (MI)</a>
                            </p>
                            <a href="#" class="text-blue-400 hover:text-blue-300">Scopri di più</a>
                        </div>
                    </div>

                    <!-- Audi Prima Scelta Plus -->
                    <div class="border-b border-gray-700 pb-4">
                        <button
                            class="w-full flex justify-between items-center py-3 text-left text-lg font-semibold hover:text-gray-300 accordion-toggle">
                            Audi Prima Scelta Plus e Das WeltAuto
                            <span class="accordion-icon">+</span>
                        </button>
                        <div class="accordion-content hidden mt-2 space-y-2">
                            <img src="https://cdnwp.dealerk.com/920e35d2/uploads/sites/4/2021/04/audi-psp-0x60.png"
                                alt="Audi PSP" class="h-10">
                            <p><a href="#" class="hover:text-gray-300">Viale Edison, 126 - 20099 Sesto San
                                    Giovanni (MI)</a>
                            </p>
                            <a href="#" class="text-blue-400 hover:text-blue-300">Scopri di più</a>
                        </div>
                    </div>

                    <!-- Carrozzeria -->
                    <div class="pb-4">
                        <button
                            class="w-full flex justify-between items-center py-3 text-left text-lg font-semibold hover:text-gray-300 accordion-toggle">
                            Carrozzeria
                            <span class="accordion-icon">+</span>
                        </button>
                        <div class="accordion-content hidden mt-2 space-y-2">
                            <p><a href="#" class="hover:text-gray-300">Viale Rimembranze, 93 - 20099 Sesto San
                                    Giovanni
                                    (MI)</a></p>
                            <a href="#" class="text-blue-400 hover:text-blue-300">Scopri di più</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    </footer>
    <script>
        document.querySelectorAll('.accordion-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                content.classList.toggle('hidden');

                const icon = button.querySelector('.accordion-icon');
                icon.textContent = content.classList.contains('hidden') ? '+' : '-';
            });
        });
    </script>

</body>

</html>
