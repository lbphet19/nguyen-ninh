<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/assets/font-awesome/css/style.css">
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/@glidejs/glide/dist/css/glide.core.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/@glidejs/glide/dist/glide.min.js"></script>
    
    <?php wp_head(); ?>
    <style>
    /* fonts */
    @font-face {
        font-family: prata;
        src: url(<?php echo get_template_directory_uri();
        ?>/src/assets/fonts/Prata-Regular.ttf);
    }

    @font-face {
        font-family: raleway;
        src: url(<?php echo get_template_directory_uri();
        ?>/src/assets/fonts/RALEWAY-MEDIUM.ttf);
    }

    @font-face {
        font-family: raleway-bold;
        src: url(<?php echo get_template_directory_uri();
        ?>/src/assets/fonts/RALEWAY-BOLD.ttf);
    }

    body {
        font-family: 'Raleway'
    }

    @media (min-width:320px) {
        body {
            font-size: 14px
        }
    }

    /* resposive */
    @media (min-width:1280px) {
        body {
            font-size: 16px
        }
    }
    </style>
</head>

<body <?php body_class(); ?>>
    <div class="flex items-center justify-between px-14 py-5 w-full mobile:hidden">
        <p class="text-4xl leading-10 text-gray-900 font-prata">
        <a id="home" href = "<?php echo get_permalink( get_page_by_path( 'home' ) );?>">Nguyên Ninh</a>
        </p>
        <div class="flex items-center justify-center">
            <div
                class="flex flex-col items-center gap-1 mr-16 last:mr-0 text-[#383A36] tracking-widest uppercase font-raleway">
                <a id="product" href = "<?php echo get_permalink( get_page_by_path( 'product' ) );?>">Sản phẩm</a>
            </div>
            <div
                class="flex flex-col items-center gap-1 mr-16 last:mr-0 text-[#383A36] tracking-widest uppercase font-raleway">
                <a id="about" href = "<?php echo get_permalink( get_page_by_path( 'about' ) );?>">Về Nguyên Ninh</a>
                </div>
            <div
                class="flex flex-col items-center gap-1 mr-16 last:mr-0 text-[#383A36] tracking-widest uppercase font-raleway">
                <a id="story" href = "<?php echo get_permalink( get_page_by_path( 'our-story' ) );?>">Câu chuyện</a>
                </div>
            <div class="flex space-x-1 items-center  gap-1 mr-16 last:mr-0 rounded-full">
                <div class="relative bg-[#306701] rounded-full w-[11rem] h-12" id="phone">
                    <p
                        class="absolute text-xs font-medium tracking-widest leading-none text-center text-white left-[2.5rem] top-4 font-raleway">
                        0243 828 3573</p>
                </div>
            </div>

            <!-- <div class = "flex flex-col items-center gap-1 mr-16 last:mr-0 px-8 py-4">0243 828 3573</div> -->

        </div>
    </div>
    <nav class="bg-white shadow-lg mobile:!block desktop:hidden ">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- Website Logo -->
                        <a href="#" class="flex items-center py-4 px-2">
                            <img src="logo.png" alt="Logo" class="h-8 w-8 mr-2">
                            <span class="font-semibold text-gray-500 text-lg font-prata">Nguyên Ninh</span>
                        </a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="" class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold ">Home</a>
                        <a href=""
                            class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Services</a>
                        <a href=""
                            class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">About</a>
                        <a href=""
                            class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Contact
                            Us</a>
                    </div>
                </div>
                <!-- Secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-3 ">
                    <a href=""
                        class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300">Log
                        In</a>
                    <a href=""
                        class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign
                        Up</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 " x-show="!showMenu" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden mobile-menu">
            <ul class="">
                <li class="active"><a href="index.html"
                        class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
                <li><a href="#services"
                        class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Services</a>
                </li>
                <li><a href="#about"
                        class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">About</a>
                </li>
                <li><a href="#contact"
                        class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact
                        Us</a></li>
            </ul>
        </div>
    </nav>
    <script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
    </script>