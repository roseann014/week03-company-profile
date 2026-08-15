<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LUNÉA Pâtisserie & Bakehouse</title>

    <meta
        name="description"
        content="LUNÉA Pâtisserie & Bakehouse - artisan pastries, breads, and handcrafted cakes in Santa Rosa, Laguna."
    >

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500;1,600&display=swap"
        rel="stylesheet"
    >

    <script src="https://cdn.tailwindcss.com"></script>


<body class="overflow-x-hidden bg-[#FFFDF9] font-['DM_Sans'] text-[#2D211C]">


    <!-- =====================================================
         NAVIGATION
    ====================================================== -->

    <header
        id="header"
        class="fixed left-0 top-0 z-50 w-full transition-all duration-300"
    >

        <div
            class="mx-auto flex h-24 w-[90%] max-w-7xl items-center justify-between"
        >

            <!-- BRAND -->

            <a
                href="{{ url('/') }}"
                id="brand"
                class="flex items-center gap-3 text-white"
            >

                <div
                    id="logoMark"
                    class="grid size-11 place-items-center rounded-full border border-white/40 font-['Playfair_Display'] text-2xl transition duration-300"
                >
                    ☾
                </div>

                <div>
                    <span
                        class="block font-['Playfair_Display'] text-2xl tracking-[0.25em]"
                    >
                        LUNÉA
                    </span>

                    <span
                        class="block text-[8px] uppercase tracking-[0.24em] opacity-80"
                    >
                        Pâtisserie & Bakehouse
                    </span>
                </div>

            </a>


            <!-- DESKTOP NAV -->

            <nav class="hidden items-center gap-8 lg:flex">

                <a
                    href="{{ url('/') }}"
                    class="nav-link border-b border-[#D6A760] pb-1 text-sm text-[#E8C992]"
                >
                    Home
                </a>

                <a
                    href="{{ url('/about') }}"
                    class="nav-link text-sm text-white transition duration-300 hover:text-[#E8C992]"
                >
                    About
                </a>

                <a
                    href="{{ url('/services') }}"
                    class="nav-link text-sm text-white transition duration-300 hover:text-[#E8C992]"
                >
                    Services
                </a>

                <a
                    href="{{ url('/contact') }}"
                    class="nav-link text-sm text-white transition duration-300 hover:text-[#E8C992]"
                >
                    Contact
                </a>

                <a
                    id="navButton"
                    href="{{ url('/contact') }}"
                    class="rounded-full border border-white/50 px-5 py-3 text-xs font-semibold text-white transition duration-300 hover:border-[#D6A760] hover:bg-[#D6A760] hover:text-[#2D211C]"
                >
                    Order Inquiry
                </a>

            </nav>


            <!-- MOBILE BUTTON -->

            <button
                id="menuToggle"
                type="button"
                aria-label="Toggle navigation"
                aria-expanded="false"
                class="relative z-[70] flex flex-col gap-1.5 lg:hidden"
            >
                <span class="menu-line block h-0.5 w-7 bg-white transition-all"></span>
                <span class="menu-line block h-0.5 w-7 bg-white transition-all"></span>
                <span class="menu-line block h-0.5 w-7 bg-white transition-all"></span>
            </button>

        </div>


        <!-- MOBILE NAV -->

        <div
            id="mobileMenu"
            class="fixed right-[-100%] top-0 z-[60] flex h-screen w-[82%] max-w-sm flex-col justify-center gap-7 bg-[#F7F0E7] px-10 text-[#2D211C] shadow-2xl transition-all duration-500 lg:hidden"
        >

            <div class="mb-6">
                <span
                    class="block font-['Playfair_Display'] text-3xl tracking-[0.2em]"
                >
                    LUNÉA
                </span>

                <span
                    class="mt-2 block text-[9px] uppercase tracking-[0.2em] text-[#766860]"
                >
                    Pâtisserie & Bakehouse
                </span>
            </div>

            <a
                href="{{ url('/') }}"
                class="mobile-link text-xl font-medium text-[#B96F52]"
            >
                Home
            </a>

            <a
                href="{{ url('/about') }}"
                class="mobile-link text-xl font-medium"
            >
                About
            </a>

            <a
                href="{{ url('/services') }}"
                class="mobile-link text-xl font-medium"
            >
                Services
            </a>

            <a
                href="{{ url('/contact') }}"
                class="mobile-link text-xl font-medium"
            >
                Contact
            </a>

            <a
                href="{{ url('/contact') }}"
                class="mobile-link mt-3 inline-flex w-fit bg-[#2D211C] px-6 py-3 text-sm font-semibold text-white"
            >
                Order Inquiry
            </a>

        </div>

    </header>



    <main>


        <!-- =====================================================
             HERO
        ====================================================== -->

        <section
            class="relative flex min-h-screen items-center overflow-hidden"
        >

            <!-- BACKGROUND -->

            <div class="absolute inset-0">

                <img
                    id="heroImage"
                    src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=2000&q=85"
                    alt="Fresh artisan croissants"
                    class="h-full w-full scale-110 object-cover"
                >

                <div
                    class="absolute inset-0 bg-gradient-to-r from-[#211611]/95 via-[#211611]/70 to-[#211611]/25"
                ></div>

                <div
                    class="absolute inset-0 bg-gradient-to-t from-[#211611]/35 via-transparent to-transparent"
                ></div>

            </div>


            <!-- CONTENT -->

            <div
                class="relative z-10 mx-auto w-[90%] max-w-7xl pt-24 text-white"
            >

                <div class="max-w-4xl">

                    <div
                        class="hero-item mb-6 flex translate-y-8 items-center gap-4 text-[11px] font-semibold uppercase tracking-[0.3em] text-[#E8C992] opacity-0"
                    >
                        <span class="h-px w-10 bg-[#D6A760]"></span>

                        Artisan Pastries · Santa Rosa, Laguna
                    </div>


                    <h1
                        class="hero-item translate-y-8 font-['Playfair_Display'] text-6xl font-medium leading-[0.94] tracking-[-0.03em] opacity-0 sm:text-7xl lg:text-[7.2rem]"
                    >
                        A Little Joy,

                        <span class="block italic text-[#E8C992]">
                            Baked Daily.
                        </span>
                    </h1>


                    <p
                        class="hero-item mt-8 max-w-xl translate-y-8 text-base leading-8 text-white/75 opacity-0 md:text-lg"
                    >
                        Fresh pastries, artisan breads, and handcrafted cakes
                        made with patience and care in the heart of Santa Rosa.
                    </p>


                    <div
                        class="hero-item mt-10 flex translate-y-8 flex-wrap gap-4 opacity-0"
                    >

                        <a
                            href="{{ url('/services') }}"
                            class="inline-flex items-center gap-3 bg-[#D6A760] px-7 py-4 text-sm font-semibold text-[#2D211C] transition duration-300 hover:-translate-y-1 hover:bg-[#E8C992]"
                        >
                            Explore Our Creations
                            <span>→</span>
                        </a>


                        <a
                            href="{{ url('/about') }}"
                            class="inline-flex items-center border border-white/50 px-7 py-4 text-sm font-semibold transition duration-300 hover:bg-white hover:text-[#2D211C]"
                        >
                            Discover Our Story
                        </a>

                    </div>

                </div>

            </div>


            <!-- SCROLL INDICATOR -->

            <div
                class="absolute bottom-10 right-[5%] z-10 hidden items-center gap-4 text-[9px] uppercase tracking-[0.3em] text-white/60 md:flex"
            >
                Scroll
                <span class="h-px w-16 bg-white/40"></span>
            </div>

        </section>



        <!-- =====================================================
             INTRODUCTION
        ====================================================== -->

        <section class="bg-[#F7F0E7] py-24 lg:py-32">

            <div
                class="mx-auto grid w-[90%] max-w-7xl items-center gap-20 lg:grid-cols-2 lg:gap-24"
            >

                <!-- IMAGE -->

                <div class="reveal-left relative opacity-0">

                    <div class="overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=1100&q=85"
                            alt="Fresh artisan bread"
                            class="h-[470px] w-full object-cover transition duration-700 hover:scale-105 md:h-[610px]"
                        >

                    </div>


                    <div
                        class="absolute -bottom-8 right-4 flex h-36 w-44 flex-col items-center justify-center bg-[#2D211C] px-4 text-center text-white md:-right-8 md:bottom-12"
                    >

                        <span
                            class="font-['Playfair_Display'] text-3xl italic text-[#E8C992]"
                        >
                            Fresh
                        </span>

                        <span
                            class="mt-2 text-[9px] uppercase tracking-[0.22em] text-white/70"
                        >
                            Baked Every Day
                        </span>

                    </div>

                </div>


                <!-- CONTENT -->

                <div class="reveal-right opacity-0">

                    <div
                        class="mb-5 flex items-center gap-3 text-[11px] font-semibold uppercase tracking-[0.28em] text-[#B96F52]"
                    >
                        <span class="h-px w-9 bg-[#D6A760]"></span>

                        Our Bakehouse
                    </div>


                    <h2
                        class="font-['Playfair_Display'] text-4xl font-medium leading-[1.08] sm:text-5xl lg:text-6xl"
                    >
                        Made with patience.

                        <span class="block italic text-[#B96F52]">
                            Shared with joy.
                        </span>
                    </h2>


                    <p class="mt-7 leading-8 text-[#766860]">
                        LUNÉA Pâtisserie & Bakehouse is a neighborhood pastry
                        shop inspired by the simple joy of freshly baked food.
                        We create artisan pastries, breads, cakes, and desserts
                        in small batches using carefully selected ingredients.
                    </p>


                    <p class="mt-5 leading-8 text-[#766860]">
                        From a morning croissant to a cake shared during an
                        important celebration, every LUNÉA creation is made
                        to turn ordinary moments into something worth remembering.
                    </p>


                    <a
                        href="{{ url('/about') }}"
                        class="group mt-8 inline-flex items-center gap-3 border-b border-[#2D211C] pb-1 text-sm font-semibold"
                    >
                        Discover our story

                        <span class="transition group-hover:translate-x-1">
                            →
                        </span>
                    </a>

                </div>

            </div>

        </section>



        <!-- =====================================================
             FEATURED CREATIONS
        ====================================================== -->

        <section class="bg-[#FFFDF9] py-24 lg:py-32">

            <div class="mx-auto w-[90%] max-w-7xl">


                <div
                    class="reveal mb-16 flex flex-col justify-between gap-8 opacity-0 lg:flex-row lg:items-end"
                >

                    <div>

                        <div
                            class="mb-5 flex items-center gap-3 text-[11px] font-semibold uppercase tracking-[0.28em] text-[#B96F52]"
                        >
                            <span class="h-px w-9 bg-[#D6A760]"></span>

                            From Our Kitchen
                        </div>


                        <h2
                            class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl lg:text-6xl"
                        >
                            Freshly made,

                            <span class="block italic text-[#B96F52]">
                                beautifully simple.
                            </span>
                        </h2>

                    </div>


                    <a
                        href="{{ url('/services') }}"
                        class="group inline-flex w-fit items-center gap-3 border-b border-[#2D211C] pb-1 text-sm font-semibold"
                    >
                        View all creations

                        <span class="transition group-hover:translate-x-1">
                            →
                        </span>
                    </a>

                </div>



                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">


                    <!-- CARD 1 -->

                    <article class="reveal group opacity-0">

                        <div class="relative h-[440px] overflow-hidden">

                            <img
                                src="https://images.unsplash.com/photo-1623334044303-241021148842?auto=format&fit=crop&w=900&q=85"
                                alt="Butter croissants"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                            >

                            <span
                                class="absolute right-4 top-4 grid size-11 place-items-center rounded-full bg-[#FFFDF9]/95 font-['Playfair_Display'] text-sm"
                            >
                                01
                            </span>

                        </div>


                        <div class="pt-6">

                            <span
                                class="text-[10px] font-semibold uppercase tracking-[0.22em] text-[#B96F52]"
                            >
                                Viennoiserie
                            </span>

                            <h3
                                class="mt-2 font-['Playfair_Display'] text-3xl font-medium"
                            >
                                Butter Croissants
                            </h3>

                            <p class="mt-3 leading-7 text-[#766860]">
                                Light, flaky, and baked until golden with
                                delicate layers and rich buttery flavor.
                            </p>

                        </div>

                    </article>



                    <!-- CARD 2 -->

                    <article class="reveal group opacity-0">

                        <div class="relative h-[440px] overflow-hidden">

                            <img
                                src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=900&q=85"
                                alt="Signature celebration cake"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                            >

                            <span
                                class="absolute right-4 top-4 grid size-11 place-items-center rounded-full bg-[#FFFDF9]/95 font-['Playfair_Display'] text-sm"
                            >
                                02
                            </span>

                        </div>


                        <div class="pt-6">

                            <span
                                class="text-[10px] font-semibold uppercase tracking-[0.22em] text-[#B96F52]"
                            >
                                Celebrations
                            </span>

                            <h3
                                class="mt-2 font-['Playfair_Display'] text-3xl font-medium"
                            >
                                Signature Cakes
                            </h3>

                            <p class="mt-3 leading-7 text-[#766860]">
                                Handcrafted cakes made for birthdays,
                                milestones, gatherings, and meaningful celebrations.
                            </p>

                        </div>

                    </article>



                    <!-- CARD 3 -->

                    <article
                        class="reveal group opacity-0 md:col-span-2 lg:col-span-1"
                    >

                        <div class="relative h-[440px] overflow-hidden">

                            <img
                                src="https://images.unsplash.com/photo-1549931319-a545dcf3bc73?auto=format&fit=crop&w=900&q=85"
                                alt="Artisan breads"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                            >

                            <span
                                class="absolute right-4 top-4 grid size-11 place-items-center rounded-full bg-[#FFFDF9]/95 font-['Playfair_Display'] text-sm"
                            >
                                03
                            </span>

                        </div>


                        <div class="pt-6">

                            <span
                                class="text-[10px] font-semibold uppercase tracking-[0.22em] text-[#B96F52]"
                            >
                                Daily Bakes
                            </span>

                            <h3
                                class="mt-2 font-['Playfair_Display'] text-3xl font-medium"
                            >
                                Artisan Breads
                            </h3>

                            <p class="mt-3 leading-7 text-[#766860]">
                                Small-batch breads with comforting flavors,
                                soft interiors, and beautifully baked crusts.
                            </p>

                        </div>

                    </article>

                </div>

            </div>

        </section>



        <!-- =====================================================
             LUNÉA EXPERIENCE
        ====================================================== -->

        <section class="bg-[#2D211C] py-24 text-white lg:py-32">

            <div class="mx-auto w-[90%] max-w-7xl">


                <div class="reveal mb-16 max-w-3xl opacity-0">

                    <div
                        class="mb-5 flex items-center gap-3 text-[11px] font-semibold uppercase tracking-[0.28em] text-[#E8C992]"
                    >
                        <span class="h-px w-9 bg-[#D6A760]"></span>

                        The LUNÉA Experience
                    </div>


                    <h2
                        class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl lg:text-6xl"
                    >
                        Thoughtful baking from

                        <span class="block italic text-[#E8C992]">
                            our kitchen to your table.
                        </span>
                    </h2>

                </div>



                <div
                    class="grid border-t border-white/15 md:grid-cols-3"
                >


                    <article
                        class="reveal py-10 pr-8 opacity-0"
                    >

                        <span
                            class="font-['Playfair_Display'] text-xl text-[#D6A760]"
                        >
                            01
                        </span>

                        <h3
                            class="mt-7 font-['Playfair_Display'] text-3xl font-medium"
                        >
                            Freshly Baked
                        </h3>

                        <p class="mt-4 max-w-sm leading-7 text-white/60">
                            Our pastries and breads are prepared in small batches
                            so every visit feels fresh.
                        </p>

                    </article>



                    <article
                        class="reveal border-white/15 py-10 opacity-0 md:border-l md:px-8"
                    >

                        <span
                            class="font-['Playfair_Display'] text-xl text-[#D6A760]"
                        >
                            02
                        </span>

                        <h3
                            class="mt-7 font-['Playfair_Display'] text-3xl font-medium"
                        >
                            Thoughtfully Made
                        </h3>

                        <p class="mt-4 max-w-sm leading-7 text-white/60">
                            We focus on flavor, texture, and presentation
                            without rushing the baking process.
                        </p>

                    </article>



                    <article
                        class="reveal border-white/15 py-10 opacity-0 md:border-l md:pl-8"
                    >

                        <span
                            class="font-['Playfair_Display'] text-xl text-[#D6A760]"
                        >
                            03
                        </span>

                        <h3
                            class="mt-7 font-['Playfair_Display'] text-3xl font-medium"
                        >
                            Made for Sharing
                        </h3>

                        <p class="mt-4 max-w-sm leading-7 text-white/60">
                            From quiet mornings to celebrations, our creations
                            are designed for moments shared with others.
                        </p>

                    </article>

                </div>

            </div>

        </section>



        <!-- =====================================================
             STATS
             UPDATED FROM GOLD TO CREAM
        ====================================================== -->

        <section
            id="statsSection"
            class="border-b border-[#2D211C]/10 bg-[#F7F0E7] py-16 lg:py-20"
        >

            <div
                class="mx-auto grid w-[90%] max-w-7xl grid-cols-2 md:grid-cols-4"
            >


                <!-- STAT 1 -->

                <div
                    class="reveal px-4 py-6 text-center opacity-0 md:px-8"
                >

                    <strong
                        class="counter block font-['Playfair_Display'] text-4xl font-medium text-[#2D211C] lg:text-5xl"
                        data-target="6"
                    >
                        0
                    </strong>

                    <span
                        class="mt-2 block text-[9px] font-semibold uppercase tracking-[0.25em] text-[#766860]"
                    >
                        Signature Services
                    </span>

                </div>



                <!-- STAT 2 -->

                <div
                    class="reveal border-l border-[#2D211C]/10 px-4 py-6 text-center opacity-0 md:px-8"
                >

                    <strong
                        class="counter block font-['Playfair_Display'] text-4xl font-medium text-[#B96F52] lg:text-5xl"
                        data-target="100"
                    >
                        0
                    </strong>

                    <span
                        class="mt-2 block text-[9px] font-semibold uppercase tracking-[0.25em] text-[#766860]"
                    >
                        % Baked With Care
                    </span>

                </div>



                <!-- STAT 3 -->

                <div
                    class="reveal border-t border-[#2D211C]/10 px-4 py-6 text-center opacity-0 md:border-l md:border-t-0 md:px-8"
                >

                    <strong
                        class="counter block font-['Playfair_Display'] text-4xl font-medium text-[#2D211C] lg:text-5xl"
                        data-target="7"
                    >
                        0
                    </strong>

                    <span
                        class="mt-2 block text-[9px] font-semibold uppercase tracking-[0.25em] text-[#766860]"
                    >
                        Days of Fresh Bakes
                    </span>

                </div>



                <!-- STAT 4 -->

                <div
                    class="reveal border-l border-t border-[#2D211C]/10 px-4 py-6 text-center opacity-0 md:border-t-0 md:px-8"
                >

                    <strong
                        class="block font-['Playfair_Display'] text-3xl font-medium italic text-[#B96F52] lg:text-4xl"
                    >
                        Laguna
                    </strong>

                    <span
                        class="mt-2 block text-[9px] font-semibold uppercase tracking-[0.25em] text-[#766860]"
                    >
                        Proudly Local
                    </span>

                </div>

            </div>

        </section>



        <!-- =====================================================
             PHILOSOPHY
        ====================================================== -->

        <section
            class="relative min-h-[680px] overflow-hidden"
        >

            <img
                src="https://images.unsplash.com/photo-1519915028121-7d3463d20b13?auto=format&fit=crop&w=1800&q=85"
                alt="Pastry preparation"
                class="absolute inset-0 h-full w-full object-cover"
            >


            <div
                class="absolute inset-0 bg-gradient-to-r from-transparent via-transparent to-[#211814]/10"
            ></div>


            <div
                class="reveal absolute bottom-8 right-[5%] w-[90%] max-w-lg bg-[#FFFDF9]/95 p-9 opacity-0 shadow-2xl backdrop-blur-sm md:bottom-auto md:top-1/2 md:-translate-y-1/2 md:p-14"
            >

                <span
                    class="font-['Playfair_Display'] text-7xl leading-none text-[#B96F52]"
                >
                    “
                </span>

                <p
                    class="mt-1 font-['Playfair_Display'] text-2xl leading-relaxed md:text-3xl"
                >
                    The best things are rarely rushed. We believe good baking
                    starts with patience, care, and simple ingredients.
                </p>

                <div class="mt-7 h-px w-12 bg-[#D6A760]"></div>

                <span
                    class="mt-5 block text-[9px] font-semibold uppercase tracking-[0.25em] text-[#766860]"
                >
                    The LUNÉA Philosophy
                </span>

            </div>

        </section>



        <!-- =====================================================
             CTA
        ====================================================== -->

        <section class="relative overflow-hidden bg-[#F7F0E7] py-24 lg:py-32">


            <!-- DECORATIVE CIRCLES -->

            <div
                class="pointer-events-none absolute -right-28 -top-28 size-80 rounded-full border border-[#B96F52]/10"
            ></div>

            <div
                class="pointer-events-none absolute -right-8 top-0 size-52 rounded-full border border-[#D6A760]/20"
            ></div>


            <div
                class="reveal relative mx-auto w-[90%] max-w-4xl text-center opacity-0"
            >

                <div
                    class="mb-5 flex items-center justify-center gap-3 text-[11px] font-semibold uppercase tracking-[0.28em] text-[#B96F52]"
                >
                    <span class="h-px w-9 bg-[#D6A760]"></span>

                    Visit · Order · Celebrate
                </div>


                <h2
                    class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl lg:text-6xl"
                >
                    Something special deserves

                    <span class="block italic text-[#B96F52]">
                        something freshly made.
                    </span>
                </h2>


                <p
                    class="mx-auto mt-7 max-w-2xl leading-8 text-[#766860]"
                >
                    Whether you're celebrating an occasion or simply craving
                    something sweet, there's always something waiting for you
                    at LUNÉA.
                </p>


                <div
                    class="mt-10 flex flex-col justify-center gap-4 sm:flex-row"
                >

                    <a
                        href="{{ url('/contact') }}"
                        class="inline-flex items-center justify-center gap-3 bg-[#2D211C] px-7 py-4 text-sm font-semibold text-white transition duration-300 hover:-translate-y-1 hover:bg-[#B96F52]"
                    >
                        Send an Inquiry
                        <span>→</span>
                    </a>


                    <a
                        href="{{ url('/services') }}"
                        class="inline-flex items-center justify-center border border-[#2D211C] px-7 py-4 text-sm font-semibold transition duration-300 hover:bg-[#FFFDF9]"
                    >
                        Browse Our Creations
                    </a>

                </div>

            </div>

        </section>

    </main>



    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <footer class="bg-[#211814] pt-20 text-white/65">

        <div
            class="mx-auto grid w-[90%] max-w-7xl gap-12 border-b border-white/10 pb-16 md:grid-cols-2 lg:grid-cols-4"
        >


            <!-- BRAND -->

            <div>

                <h2
                    class="font-['Playfair_Display'] text-3xl tracking-[0.2em] text-white"
                >
                    LUNÉA
                </h2>

                <p
                    class="mt-2 font-['Playfair_Display'] text-lg italic text-[#E8C992]"
                >
                    Made Slowly. Enjoyed Fully.
                </p>

                <p class="mt-5 max-w-sm text-sm leading-7">
                    Fresh pastries, artisan breads, and handcrafted cakes
                    made with care in Santa Rosa, Laguna.
                </p>

            </div>



            <!-- LINKS -->

            <div class="flex flex-col gap-3">

                <h3
                    class="mb-2 text-[10px] font-semibold uppercase tracking-[0.25em] text-white"
                >
                    Explore
                </h3>

                <a
                    href="{{ url('/') }}"
                    class="text-[#D6A760]"
                >
                    Home
                </a>

                <a
                    href="{{ url('/about') }}"
                    class="transition hover:text-[#D6A760]"
                >
                    About
                </a>

                <a
                    href="{{ url('/services') }}"
                    class="transition hover:text-[#D6A760]"
                >
                    Services
                </a>

                <a
                    href="{{ url('/contact') }}"
                    class="transition hover:text-[#D6A760]"
                >
                    Contact
                </a>

            </div>



            <!-- VISIT -->

            <div>

                <h3
                    class="mb-5 text-[10px] font-semibold uppercase tracking-[0.25em] text-white"
                >
                    Visit
                </h3>

                <p class="leading-7">
                    Santa Rosa, Laguna<br>
                    Philippines
                </p>

                <p class="mt-4 leading-7">
                    hello@luneapatisserie.ph<br>
                    +63 917 583 2746
                </p>

            </div>



            <!-- SOCIAL -->

            <div class="flex flex-col gap-3">

                <h3
                    class="mb-2 text-[10px] font-semibold uppercase tracking-[0.25em] text-white"
                >
                    Follow
                </h3>

                <a
                    href="#"
                    class="transition hover:text-[#D6A760]"
                >
                    Instagram
                </a>

                <a
                    href="#"
                    class="transition hover:text-[#D6A760]"
                >
                    Facebook
                </a>

                <a
                    href="#"
                    class="transition hover:text-[#D6A760]"
                >
                    TikTok
                </a>

            </div>

        </div>


        <div
            class="mx-auto flex w-[90%] max-w-7xl flex-col gap-2 py-7 text-[9px] uppercase tracking-[0.14em] md:flex-row md:justify-between"
        >

            <p>
                © {{ date('Y') }} LUNÉA Pâtisserie & Bakehouse.
                All rights reserved.
            </p>

            <p>
                Santa Rosa · Laguna · Philippines
            </p>

        </div>

    </footer>



    <!-- =====================================================
         INLINE JAVASCRIPT
    ====================================================== -->

    <script>

        document.addEventListener("DOMContentLoaded", function () {

            const header = document.getElementById("header");
            const brand = document.getElementById("brand");
            const logoMark = document.getElementById("logoMark");

            const navLinks =
                document.querySelectorAll(".nav-link");

            const navButton =
                document.getElementById("navButton");

            const menuToggle =
                document.getElementById("menuToggle");

            const menuLines =
                document.querySelectorAll(".menu-line");

            const mobileMenu =
                document.getElementById("mobileMenu");

            const heroImage =
                document.getElementById("heroImage");


            /* =================================================
               NAVBAR SCROLL
            ================================================= */

            function updateNavbar() {

                const scrolled = window.scrollY > 60;

                if (scrolled) {

                    header.classList.add(
                        "bg-[#FFFDF9]/95",
                        "backdrop-blur-xl",
                        "shadow-lg"
                    );


                    brand.classList.remove("text-white");
                    brand.classList.add("text-[#2D211C]");


                    logoMark.classList.remove(
                        "border-white/40"
                    );

                    logoMark.classList.add(
                        "border-[#2D211C]/20"
                    );


                    navLinks.forEach(function (link) {

                        const active =
                            link.classList.contains(
                                "text-[#E8C992]"
                            );

                        if (!active) {

                            link.classList.remove(
                                "text-white"
                            );

                            link.classList.add(
                                "text-[#2D211C]"
                            );

                        }

                    });


                    navButton.classList.remove(
                        "border-white/50",
                        "text-white"
                    );

                    navButton.classList.add(
                        "border-[#2D211C]",
                        "text-[#2D211C]"
                    );


                    menuLines.forEach(function (line) {

                        line.classList.remove(
                            "bg-white"
                        );

                        line.classList.add(
                            "bg-[#2D211C]"
                        );

                    });

                }

                else {

                    header.classList.remove(
                        "bg-[#FFFDF9]/95",
                        "backdrop-blur-xl",
                        "shadow-lg"
                    );


                    brand.classList.add("text-white");

                    brand.classList.remove(
                        "text-[#2D211C]"
                    );


                    logoMark.classList.add(
                        "border-white/40"
                    );

                    logoMark.classList.remove(
                        "border-[#2D211C]/20"
                    );


                    navLinks.forEach(function (link) {

                        const active =
                            link.classList.contains(
                                "text-[#E8C992]"
                            );

                        if (!active) {

                            link.classList.add(
                                "text-white"
                            );

                            link.classList.remove(
                                "text-[#2D211C]"
                            );

                        }

                    });


                    navButton.classList.add(
                        "border-white/50",
                        "text-white"
                    );

                    navButton.classList.remove(
                        "border-[#2D211C]",
                        "text-[#2D211C]"
                    );


                    const menuOpen =
                        mobileMenu.classList.contains(
                            "right-0"
                        );


                    if (!menuOpen) {

                        menuLines.forEach(function (line) {

                            line.classList.add(
                                "bg-white"
                            );

                            line.classList.remove(
                                "bg-[#2D211C]"
                            );

                        });

                    }

                }

            }


            window.addEventListener(
                "scroll",
                updateNavbar
            );


            updateNavbar();



            /* =================================================
               HERO ENTRANCE
            ================================================= */

            const heroItems =
                document.querySelectorAll(".hero-item");


            heroItems.forEach(function (item, index) {

                setTimeout(function () {

                    item.classList.remove(
                        "opacity-0",
                        "translate-y-8"
                    );


                    item.classList.add(
                        "opacity-100",
                        "translate-y-0",
                        "transition-all",
                        "duration-700"
                    );

                }, 220 + index * 160);

            });



            /* =================================================
               MOBILE MENU
            ================================================= */

            function closeMobileMenu() {

                mobileMenu.classList.remove(
                    "right-0"
                );

                mobileMenu.classList.add(
                    "right-[-100%]"
                );


                menuToggle.setAttribute(
                    "aria-expanded",
                    "false"
                );


                const lines =
                    menuToggle.querySelectorAll("span");


                lines[0].style.transform = "";

                lines[1].style.opacity = "";

                lines[2].style.transform = "";


                updateNavbar();

            }



            menuToggle.addEventListener(
                "click",
                function () {

                    const isOpen =
                        mobileMenu.classList.contains(
                            "right-0"
                        );


                    if (isOpen) {

                        closeMobileMenu();

                        return;

                    }


                    mobileMenu.classList.remove(
                        "right-[-100%]"
                    );

                    mobileMenu.classList.add(
                        "right-0"
                    );


                    menuToggle.setAttribute(
                        "aria-expanded",
                        "true"
                    );


                    const lines =
                        menuToggle.querySelectorAll("span");


                    lines[0].style.transform =
                        "translateY(8px) rotate(45deg)";


                    lines[1].style.opacity = "0";


                    lines[2].style.transform =
                        "translateY(-8px) rotate(-45deg)";


                    lines.forEach(function (line) {

                        line.classList.remove(
                            "bg-white"
                        );

                        line.classList.add(
                            "bg-[#2D211C]"
                        );

                    });

                }
            );



            document
                .querySelectorAll(".mobile-link")
                .forEach(function (link) {

                    link.addEventListener(
                        "click",
                        closeMobileMenu
                    );

                });



            /* =================================================
               SCROLL REVEAL
            ================================================= */

            const revealElements =
                document.querySelectorAll(
                    ".reveal, .reveal-left, .reveal-right"
                );


            revealElements.forEach(function (element) {

                element.classList.add(
                    "transition-all",
                    "duration-700",
                    "ease-out"
                );


                if (
                    element.classList.contains(
                        "reveal"
                    )
                ) {

                    element.classList.add(
                        "translate-y-10"
                    );

                }


                if (
                    element.classList.contains(
                        "reveal-left"
                    )
                ) {

                    element.classList.add(
                        "-translate-x-10"
                    );

                }


                if (
                    element.classList.contains(
                        "reveal-right"
                    )
                ) {

                    element.classList.add(
                        "translate-x-10"
                    );

                }

            });



            const revealObserver =
                new IntersectionObserver(

                    function (entries) {

                        entries.forEach(function (entry) {

                            if (entry.isIntersecting) {

                                entry.target.classList.remove(
                                    "opacity-0",
                                    "translate-y-10",
                                    "-translate-x-10",
                                    "translate-x-10"
                                );


                                entry.target.classList.add(
                                    "opacity-100",
                                    "translate-x-0",
                                    "translate-y-0"
                                );


                                revealObserver.unobserve(
                                    entry.target
                                );

                            }

                        });

                    },

                    {
                        threshold: 0.12
                    }

                );


            revealElements.forEach(function (element) {

                revealObserver.observe(element);

            });



            /* =================================================
               COUNTERS
            ================================================= */

            const counters =
                document.querySelectorAll(".counter");


            const statsSection =
                document.getElementById(
                    "statsSection"
                );


            let countersStarted = false;


            function animateCounter(counter) {

                const target =
                    Number(counter.dataset.target);


                const duration = 1200;

                const startTime =
                    performance.now();


                function update(currentTime) {

                    const elapsed =
                        currentTime - startTime;


                    const progress =
                        Math.min(
                            elapsed / duration,
                            1
                        );


                    counter.textContent =
                        Math.floor(
                            target * progress
                        );


                    if (progress < 1) {

                        requestAnimationFrame(
                            update
                        );

                    }

                    else {

                        counter.textContent =
                            target;

                    }

                }


                requestAnimationFrame(update);

            }



            if (statsSection) {

                const counterObserver =
                    new IntersectionObserver(

                        function (entries) {

                            if (
                                entries[0].isIntersecting &&
                                !countersStarted
                            ) {

                                countersStarted = true;


                                counters.forEach(
                                    animateCounter
                                );


                                counterObserver.disconnect();

                            }

                        },

                        {
                            threshold: 0.35
                        }

                    );


                counterObserver.observe(
                    statsSection
                );

            }



            /* =================================================
               SUBTLE HERO PARALLAX
            ================================================= */

            let ticking = false;


            function updateParallax() {

                if (!heroImage) {
                    return;
                }


                const scroll =
                    window.scrollY;


                if (
                    scroll <
                    window.innerHeight
                ) {

                    heroImage.style.transform =
                        "scale(1.10) translateY(" +
                        scroll * 0.045 +
                        "px)";

                }


                ticking = false;

            }


            window.addEventListener(
                "scroll",
                function () {

                    if (!ticking) {

                        requestAnimationFrame(
                            updateParallax
                        );

                        ticking = true;

                    }

                }
            );

        });

    </script>


</body>

</html>