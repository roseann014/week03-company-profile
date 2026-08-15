<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us | LUNÉA Pâtisserie & Bakehouse</title>

    <meta
        name="description"
        content="Discover the story, mission, vision, values, and people behind LUNÉA Pâtisserie & Bakehouse in Santa Rosa, Laguna."
    >

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="overflow-x-hidden bg-[#FFFDF9] font-['DM_Sans'] text-[#2D211C]">


    <!-- =====================================================
         NAVBAR
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
                    class="grid size-11 place-items-center rounded-full border border-white/40 font-['Playfair_Display'] text-2xl transition"
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
                        class="block text-[8px] tracking-[0.24em] opacity-80"
                    >
                        PÂTISSERIE & BAKEHOUSE
                    </span>

                </div>

            </a>


            <!-- DESKTOP NAV -->

            <nav class="hidden items-center gap-8 lg:flex">

                <a
                    href="{{ url('/') }}"
                    class="nav-link text-sm text-white transition hover:text-[#E8C992]"
                >
                    Home
                </a>

                <a
                    href="{{ url('/about') }}"
                    class="nav-link border-b border-[#D6A760] pb-1 text-sm text-[#E8C992]"
                >
                    About
                </a>

                <a
                    href="{{ url('/services') }}"
                    class="nav-link text-sm text-white transition hover:text-[#E8C992]"
                >
                    Services
                </a>

                <a
                    href="{{ url('/contact') }}"
                    class="nav-link text-sm text-white transition hover:text-[#E8C992]"
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
                class="relative z-[70] flex flex-col gap-1.5 lg:hidden"
                aria-label="Toggle navigation"
            >
                <span class="menu-line block h-0.5 w-7 bg-white transition-all"></span>
                <span class="menu-line block h-0.5 w-7 bg-white transition-all"></span>
                <span class="menu-line block h-0.5 w-7 bg-white transition-all"></span>
            </button>

        </div>


        <!-- MOBILE MENU -->

        <div
            id="mobileMenu"
            class="fixed right-[-100%] top-0 z-[60] flex h-screen w-[80%] max-w-sm flex-col justify-center gap-7 bg-[#F7F0E7] px-10 text-[#2D211C] shadow-2xl transition-all duration-500 lg:hidden"
        >

            <p
                class="mb-5 font-['Playfair_Display'] text-3xl tracking-[0.2em]"
            >
                LUNÉA
            </p>

            <a
                href="{{ url('/') }}"
                class="mobile-link text-xl font-medium"
            >
                Home
            </a>

            <a
                href="{{ url('/about') }}"
                class="mobile-link text-xl font-medium text-[#B96F52]"
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
             ABOUT HERO
        ====================================================== -->

        <section
            class="relative flex min-h-[82vh] items-end overflow-hidden pb-20 pt-32 text-white lg:pb-24"
        >

            <img
                id="heroImage"
                src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=1800&q=85"
                alt="Fresh pastries inside a bakery"
                class="absolute inset-0 h-full w-full scale-110 object-cover"
            >

            <div
                class="absolute inset-0 bg-gradient-to-r from-[#201510]/95 via-[#201510]/65 to-[#201510]/30"
            ></div>


            <div
                class="relative z-10 mx-auto w-[90%] max-w-7xl"
            >

                <div class="max-w-4xl">

                    <div
                        class="hero-item mb-6 flex translate-y-8 items-center gap-4 text-xs uppercase tracking-[0.3em] text-[#E8C992] opacity-0"
                    >
                        <span class="h-px w-10 bg-[#D6A760]"></span>
                        About LUNÉA
                    </div>


                    <h1
                        class="hero-item translate-y-8 font-['Playfair_Display'] text-6xl font-medium leading-[0.95] tracking-tight opacity-0 sm:text-7xl lg:text-[7rem]"
                    >
                        More than baking.

                        <span class="block italic text-[#E8C992]">
                            It is our story.
                        </span>
                    </h1>


                    <p
                        class="hero-item mt-8 max-w-2xl translate-y-8 text-base leading-8 text-white/75 opacity-0 md:text-lg"
                    >
                        From simple ingredients to meaningful moments,
                        LUNÉA was created to bring warmth, craftsmanship,
                        and a little joy to the community we call home.
                    </p>

                </div>

            </div>

        </section>



        <!-- =====================================================
             COMPANY HISTORY
        ====================================================== -->

        <section class="bg-[#F7F0E7] py-24 lg:py-32">

            <div
                class="mx-auto grid w-[90%] max-w-7xl items-center gap-16 lg:grid-cols-2 lg:gap-24"
            >


                <!-- CONTENT -->

                <div class="reveal-left opacity-0">

                    <div
                        class="mb-5 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#B96F52]"
                    >
                        <span class="h-px w-9 bg-[#D6A760]"></span>

                        Our Beginning
                    </div>


                    <h2
                        class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl lg:text-6xl"
                    >
                        Every bakehouse

                        <span class="block italic text-[#B96F52]">
                            begins with a story.
                        </span>
                    </h2>


                    <p class="mt-7 leading-8 text-[#766860]">
                        LUNÉA Pâtisserie & Bakehouse began in Santa Rosa,
                        Laguna from a love for baking and the belief that
                        good pastries do not have to be complicated.
                    </p>


                    <p class="mt-5 leading-8 text-[#766860]">
                        What started with small batches of breads and pastries
                        shared with family and friends slowly grew into a
                        neighborhood bakehouse focused on handcrafted products,
                        thoughtful presentation, and warm service.
                    </p>


                    <p class="mt-5 leading-8 text-[#766860]">
                        As LUNÉA grew, the menu expanded from everyday breads
                        and pastries to celebration cakes, pastry boxes,
                        seasonal collections, and customized orders.
                    </p>


                    <p class="mt-5 leading-8 text-[#766860]">
                        Today, we continue to follow the same simple approach:
                        bake in small batches, pay attention to the details,
                        and create food that people genuinely enjoy sharing.
                    </p>

                </div>


                <!-- IMAGE COMPOSITION -->

                <div class="reveal-right relative min-h-[610px] opacity-0">

                    <div
                        class="absolute left-0 top-0 h-[520px] w-[82%] overflow-hidden"
                    >

                        <img
                            src="https://images.unsplash.com/photo-1556740714-a8395b3bf30f?auto=format&fit=crop&w=1000&q=85"
                            alt="Warm bakery interior"
                            class="h-full w-full object-cover transition duration-700 hover:scale-105"
                        >

                    </div>


                    <div
                        class="absolute bottom-0 right-0 h-[290px] w-[55%] overflow-hidden border-[10px] border-[#F7F0E7]"
                    >

                        <img
                            src="https://images.unsplash.com/photo-1499636136210-6f4ee915583e?auto=format&fit=crop&w=800&q=85"
                            alt="Freshly baked pastries"
                            class="h-full w-full object-cover"
                        >

                    </div>


                    <div
                        class="absolute bottom-12 left-4 bg-[#2D211C] px-7 py-6 text-white"
                    >

                        <p
                            class="font-['Playfair_Display'] text-3xl text-[#E8C992]"
                        >
                            Santa Rosa
                        </p>

                        <p
                            class="mt-1 text-[10px] uppercase tracking-[0.2em]"
                        >
                            Laguna · Philippines
                        </p>

                    </div>

                </div>

            </div>

        </section>



        <!-- =====================================================
             MISSION & VISION
        ====================================================== -->

        <section class="bg-[#FFFDF9] py-24 lg:py-32">

            <div class="mx-auto w-[90%] max-w-7xl">

                <div class="reveal mb-16 max-w-3xl opacity-0">

                    <div
                        class="mb-5 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#B96F52]"
                    >
                        <span class="h-px w-9 bg-[#D6A760]"></span>

                        What Guides Us
                    </div>


                    <h2
                        class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl lg:text-6xl"
                    >
                        Built around

                        <span class="block italic text-[#B96F52]">
                            purpose and care.
                        </span>
                    </h2>

                </div>


                <div class="grid gap-8 lg:grid-cols-2">


                    <!-- MISSION -->

                    <article
                        class="reveal group relative overflow-hidden bg-[#2D211C] p-10 text-white opacity-0 sm:p-14 lg:p-16"
                    >

                        <span
                            class="absolute right-8 top-4 font-['Playfair_Display'] text-[8rem] leading-none text-white/[0.04]"
                        >
                            M
                        </span>


                        <div class="relative">

                            <span
                                class="text-[10px] uppercase tracking-[0.25em] text-[#D6A760]"
                            >
                                Our Mission
                            </span>


                            <h3
                                class="mt-8 max-w-xl font-['Playfair_Display'] text-3xl font-medium leading-snug sm:text-4xl"
                            >
                                To make everyday moments feel a little more
                                special through fresh and thoughtfully made pastries.
                            </h3>


                            <p class="mt-7 max-w-xl leading-8 text-white/60">
                                We aim to create pastries that bring comfort,
                                happiness, and memorable experiences to both
                                everyday moments and meaningful celebrations.
                            </p>


                            <div class="mt-10 h-px w-16 bg-[#D6A760]"></div>

                        </div>

                    </article>



                    <!-- VISION -->

                    <article
                        class="reveal group relative overflow-hidden bg-[#D6A760] p-10 opacity-0 sm:p-14 lg:p-16"
                    >

                        <span
                            class="absolute right-8 top-4 font-['Playfair_Display'] text-[8rem] leading-none text-[#2D211C]/[0.05]"
                        >
                            V
                        </span>


                        <div class="relative">

                            <span
                                class="text-[10px] uppercase tracking-[0.25em] text-[#2D211C]/70"
                            >
                                Our Vision
                            </span>


                            <h3
                                class="mt-8 max-w-xl font-['Playfair_Display'] text-3xl font-medium leading-snug sm:text-4xl"
                            >
                                To become a well-loved local bakehouse
                                known for quality, warmth, and creativity.
                            </h3>


                            <p class="mt-7 max-w-xl leading-8 text-[#2D211C]/70">
                                We envision LUNÉA becoming a familiar part of
                                Laguna's community — a place people remember
                                for good pastries, thoughtful service, and
                                moments worth sharing.
                            </p>


                            <div class="mt-10 h-px w-16 bg-[#2D211C]"></div>

                        </div>

                    </article>

                </div>

            </div>

        </section>



        <!-- =====================================================
             PHILOSOPHY IMAGE
        ====================================================== -->

        <section
            class="relative flex min-h-[600px] items-center overflow-hidden py-24"
        >

            <img
                src="https://images.unsplash.com/photo-1556911220-bff31c812dba?auto=format&fit=crop&w=1800&q=85"
                alt="Baker preparing fresh pastries"
                class="absolute inset-0 h-full w-full object-cover"
            >

            <div class="absolute inset-0 bg-[#211814]/65"></div>


            <div
                class="reveal relative z-10 mx-auto w-[90%] max-w-7xl opacity-0"
            >

                <div class="max-w-3xl text-white">

                    <span
                        class="font-['Playfair_Display'] text-8xl leading-none text-[#D6A760]"
                    >
                        “
                    </span>


                    <p
                        class="-mt-5 font-['Playfair_Display'] text-3xl leading-relaxed sm:text-4xl lg:text-5xl"
                    >
                        Good baking is not about rushing the result.
                        It is about giving every ingredient, every layer,
                        and every moment the attention it deserves.
                    </p>


                    <p
                        class="mt-8 text-xs uppercase tracking-[0.25em] text-[#E8C992]"
                    >
                        The LUNÉA Philosophy
                    </p>

                </div>

            </div>

        </section>



        <!-- =====================================================
             CORE VALUES
        ====================================================== -->

        <section class="bg-[#F7F0E7] py-24 lg:py-32">

            <div class="mx-auto w-[90%] max-w-7xl">


                <div
                    class="reveal mx-auto mb-16 max-w-3xl text-center opacity-0"
                >

                    <div
                        class="mb-5 flex items-center justify-center gap-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#B96F52]"
                    >
                        <span class="h-px w-9 bg-[#D6A760]"></span>

                        Our Values
                    </div>


                    <h2
                        class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl lg:text-6xl"
                    >
                        The values behind

                        <span class="block italic text-[#B96F52]">
                            everything we create.
                        </span>
                    </h2>

                </div>



                <div
                    class="grid gap-px overflow-hidden border border-[#2D211C]/10 bg-[#2D211C]/10 md:grid-cols-2 lg:grid-cols-5"
                >


                    <!-- VALUE 1 -->

                    <article
                        class="reveal group bg-[#FFFDF9] p-8 opacity-0 transition duration-300 hover:bg-[#2D211C] hover:text-white lg:min-h-[330px]"
                    >

                        <span
                            class="font-['Playfair_Display'] text-lg text-[#B96F52] group-hover:text-[#D6A760]"
                        >
                            01
                        </span>

                        <h3
                            class="mt-12 font-['Playfair_Display'] text-2xl font-medium"
                        >
                            Craftsmanship
                        </h3>

                        <p
                            class="mt-5 text-sm leading-7 text-[#766860] transition group-hover:text-white/60"
                        >
                            We give proper time, care, and attention to every
                            product that leaves our kitchen.
                        </p>

                    </article>



                    <!-- VALUE 2 -->

                    <article
                        class="reveal group bg-[#FFFDF9] p-8 opacity-0 transition duration-300 hover:bg-[#2D211C] hover:text-white lg:min-h-[330px]"
                    >

                        <span
                            class="font-['Playfair_Display'] text-lg text-[#B96F52] group-hover:text-[#D6A760]"
                        >
                            02
                        </span>

                        <h3
                            class="mt-12 font-['Playfair_Display'] text-2xl font-medium"
                        >
                            Quality
                        </h3>

                        <p
                            class="mt-5 text-sm leading-7 text-[#766860] transition group-hover:text-white/60"
                        >
                            We carefully choose our ingredients and aim for
                            consistency in every batch we bake.
                        </p>

                    </article>



                    <!-- VALUE 3 -->

                    <article
                        class="reveal group bg-[#FFFDF9] p-8 opacity-0 transition duration-300 hover:bg-[#2D211C] hover:text-white lg:min-h-[330px]"
                    >

                        <span
                            class="font-['Playfair_Display'] text-lg text-[#B96F52] group-hover:text-[#D6A760]"
                        >
                            03
                        </span>

                        <h3
                            class="mt-12 font-['Playfair_Display'] text-2xl font-medium"
                        >
                            Warmth
                        </h3>

                        <p
                            class="mt-5 text-sm leading-7 text-[#766860] transition group-hover:text-white/60"
                        >
                            We want every customer to feel welcome whether
                            they are visiting for the first time or returning again.
                        </p>

                    </article>



                    <!-- VALUE 4 -->

                    <article
                        class="reveal group bg-[#FFFDF9] p-8 opacity-0 transition duration-300 hover:bg-[#2D211C] hover:text-white lg:min-h-[330px]"
                    >

                        <span
                            class="font-['Playfair_Display'] text-lg text-[#B96F52] group-hover:text-[#D6A760]"
                        >
                            04
                        </span>

                        <h3
                            class="mt-12 font-['Playfair_Display'] text-2xl font-medium"
                        >
                            Creativity
                        </h3>

                        <p
                            class="mt-5 text-sm leading-7 text-[#766860] transition group-hover:text-white/60"
                        >
                            We explore new flavors and ideas while respecting
                            the traditions behind good baking.
                        </p>

                    </article>



                    <!-- VALUE 5 -->

                    <article
                        class="reveal group bg-[#FFFDF9] p-8 opacity-0 transition duration-300 hover:bg-[#2D211C] hover:text-white lg:min-h-[330px]"
                    >

                        <span
                            class="font-['Playfair_Display'] text-lg text-[#B96F52] group-hover:text-[#D6A760]"
                        >
                            05
                        </span>

                        <h3
                            class="mt-12 font-['Playfair_Display'] text-2xl font-medium"
                        >
                            Community
                        </h3>

                        <p
                            class="mt-5 text-sm leading-7 text-[#766860] transition group-hover:text-white/60"
                        >
                            We want LUNÉA to become part of the everyday
                            moments and celebrations of our local community.
                        </p>

                    </article>

                </div>

            </div>

        </section>



        <!-- =====================================================
             TEAM
        ====================================================== -->

        <section class="bg-[#FFFDF9] py-24 lg:py-32">

            <div class="mx-auto w-[90%] max-w-7xl">


                <div
                    class="reveal mb-16 flex flex-col justify-between gap-8 opacity-0 lg:flex-row lg:items-end"
                >

                    <div class="max-w-3xl">

                        <div
                            class="mb-5 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#B96F52]"
                        >
                            <span class="h-px w-9 bg-[#D6A760]"></span>

                            Meet the Team
                        </div>


                        <h2
                            class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl lg:text-6xl"
                        >
                            The people behind

                            <span class="block italic text-[#B96F52]">
                                the pastries.
                            </span>
                        </h2>

                    </div>


                    <p
                        class="max-w-md leading-7 text-[#766860]"
                    >
                        LUNÉA is built by a small team that shares a love
                        for good food, thoughtful presentation, and warm
                        customer experiences.
                    </p>

                </div>



                <div
                    class="grid gap-x-7 gap-y-12 sm:grid-cols-2 lg:grid-cols-4"
                >


                    <!-- TEAM 1 -->

                    <article class="reveal group opacity-0">

                        <div class="h-[430px] overflow-hidden bg-[#F7F0E7]">

                            <img
                                src="https://images.unsplash.com/photo-1583394293214-28ded15ee548?auto=format&fit=crop&w=800&q=85"
                                alt="Elena Villanueva"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                            >

                        </div>


                        <div class="pt-6">

                            <p
                                class="text-[10px] uppercase tracking-[0.2em] text-[#B96F52]"
                            >
                                Founder & Head Pastry Chef
                            </p>

                            <h3
                                class="mt-2 font-['Playfair_Display'] text-2xl font-medium"
                            >
                                Elena Villanueva
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-[#766860]">
                                Leads LUNÉA's pastry development and maintains
                                the quality and character of every creation.
                            </p>

                        </div>

                    </article>



                    <!-- TEAM 2 -->

                    <article class="reveal group opacity-0">

                        <div class="h-[430px] overflow-hidden bg-[#F7F0E7]">

                            <img
                                src="https://images.unsplash.com/photo-1595273670150-bd0c3c392e46?auto=format&fit=crop&w=800&q=85"
                                alt="Marco Reyes"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                            >

                        </div>


                        <div class="pt-6">

                            <p
                                class="text-[10px] uppercase tracking-[0.2em] text-[#B96F52]"
                            >
                                Bread & Viennoiserie Baker
                            </p>

                            <h3
                                class="mt-2 font-['Playfair_Display'] text-2xl font-medium"
                            >
                                Marco Reyes
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-[#766860]">
                                Focuses on artisan breads, croissants,
                                danishes, and other laminated pastries.
                            </p>

                        </div>

                    </article>



                    <!-- TEAM 3 -->

                    <article class="reveal group opacity-0">

                        <div class="h-[430px] overflow-hidden bg-[#F7F0E7]">

                            <img
                                src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=800&q=85"
                                alt="Sofia Lim"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                            >

                        </div>


                        <div class="pt-6">

                            <p
                                class="text-[10px] uppercase tracking-[0.2em] text-[#B96F52]"
                            >
                                Cake Designer
                            </p>

                            <h3
                                class="mt-2 font-['Playfair_Display'] text-2xl font-medium"
                            >
                                Sofia Lim
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-[#766860]">
                                Creates LUNÉA's celebration cakes and
                                personalized designs for special occasions.
                            </p>

                        </div>

                    </article>



                    <!-- TEAM 4 -->

                    <article class="reveal group opacity-0">

                        <div class="h-[430px] overflow-hidden bg-[#F7F0E7]">

                            <img
                                src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=800&q=85"
                                alt="Isabel Cruz"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                            >

                        </div>


                        <div class="pt-6">

                            <p
                                class="text-[10px] uppercase tracking-[0.2em] text-[#B96F52]"
                            >
                                Customer Experience & Operations
                            </p>

                            <h3
                                class="mt-2 font-['Playfair_Display'] text-2xl font-medium"
                            >
                                Isabel Cruz
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-[#766860]">
                                Handles customer inquiries, orders, events,
                                and the daily operations of the bakehouse.
                            </p>

                        </div>

                    </article>

                </div>

            </div>

        </section>



        <!-- =====================================================
             CTA
        ====================================================== -->

        <section
            class="relative overflow-hidden bg-[#D6A760] py-24 lg:py-32"
        >

            <div
                class="absolute -right-24 -top-24 size-80 rounded-full border border-[#2D211C]/10"
            ></div>

            <div
                class="absolute -right-8 -top-8 size-52 rounded-full border border-[#2D211C]/10"
            ></div>


            <div
                class="reveal relative mx-auto w-[90%] max-w-4xl text-center opacity-0"
            >

                <div
                    class="mb-5 flex items-center justify-center gap-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#2D211C]/70"
                >
                    <span class="h-px w-9 bg-[#2D211C]"></span>

                    From Our Kitchen to Yours
                </div>


                <h2
                    class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl lg:text-6xl"
                >
                    Come discover what

                    <span class="block italic">
                        we're baking today.
                    </span>
                </h2>


                <p
                    class="mx-auto mt-7 max-w-2xl leading-8 text-[#2D211C]/70"
                >
                    From freshly baked pastries to handcrafted celebration
                    cakes, every LUNÉA creation is made to be enjoyed and shared.
                </p>


                <div
                    class="mt-9 flex flex-col justify-center gap-4 sm:flex-row"
                >

                    <a
                        href="{{ url('/services') }}"
                        class="inline-flex items-center justify-center gap-3 bg-[#2D211C] px-7 py-4 text-sm font-semibold text-white transition duration-300 hover:-translate-y-1 hover:bg-[#B96F52]"
                    >
                        Explore Our Creations
                        <span>→</span>
                    </a>


                    <a
                        href="{{ url('/contact') }}"
                        class="inline-flex items-center justify-center border border-[#2D211C] px-7 py-4 text-sm font-semibold transition hover:bg-[#FFFDF9]"
                    >
                        Contact Us
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

            <div>

                <h2
                    class="font-['Playfair_Display'] text-3xl tracking-[0.2em] text-white"
                >
                    LUNÉA
                </h2>

                <p
                    class="mt-2 font-['Playfair_Display'] italic text-[#E8C992]"
                >
                    Made Slowly. Enjoyed Fully.
                </p>

                <p class="mt-5 max-w-sm text-sm leading-7">
                    Fresh pastries, artisan breads, and handcrafted cakes
                    made with care in Santa Rosa, Laguna.
                </p>

            </div>



            <div class="flex flex-col gap-3">

                <h3
                    class="mb-2 text-xs uppercase tracking-[0.2em] text-white"
                >
                    Explore
                </h3>

                <a
                    href="{{ url('/') }}"
                    class="transition hover:text-[#D6A760]"
                >
                    Home
                </a>

                <a
                    href="{{ url('/about') }}"
                    class="text-[#D6A760]"
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



            <div>

                <h3
                    class="mb-5 text-xs uppercase tracking-[0.2em] text-white"
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



            <div class="flex flex-col gap-3">

                <h3
                    class="mb-2 text-xs uppercase tracking-[0.2em] text-white"
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
            class="mx-auto flex w-[90%] max-w-7xl flex-col gap-2 py-7 text-[10px] uppercase tracking-[0.12em] md:flex-row md:justify-between"
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
         JAVASCRIPT
         INLINE - NO SEPARATE JS FILE
    ====================================================== -->

    <script>

        document.addEventListener("DOMContentLoaded", function () {

            const header = document.getElementById("header");

            const brand = document.getElementById("brand");

            const logoMark = document.getElementById("logoMark");

            const navLinks = document.querySelectorAll(".nav-link");

            const navButton = document.getElementById("navButton");

            const menuToggle = document.getElementById("menuToggle");

            const menuLines = document.querySelectorAll(".menu-line");

            const mobileMenu = document.getElementById("mobileMenu");

            const heroImage = document.getElementById("heroImage");



            /* =================================================
               NAVBAR
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

                        if (!link.classList.contains("text-[#E8C992]")) {

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

                        if (!link.classList.contains("text-[#E8C992]")) {

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


                    if (!mobileMenu.classList.contains("right-0")) {

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

                }, 250 + index * 170);

            });



            /* =================================================
               MOBILE MENU
            ================================================= */

            function closeMobileMenu() {

                mobileMenu.classList.remove("right-0");

                mobileMenu.classList.add(
                    "right-[-100%]"
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

                    }

                    else {

                        mobileMenu.classList.remove(
                            "right-[-100%]"
                        );

                        mobileMenu.classList.add(
                            "right-0"
                        );


                        const lines =
                            menuToggle.querySelectorAll(
                                "span"
                            );


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
                    "duration-700"
                );


                if (element.classList.contains("reveal")) {

                    element.classList.add(
                        "translate-y-10"
                    );

                }


                if (element.classList.contains("reveal-left")) {

                    element.classList.add(
                        "-translate-x-12"
                    );

                }


                if (element.classList.contains("reveal-right")) {

                    element.classList.add(
                        "translate-x-12"
                    );

                }

            });



            const observer =
                new IntersectionObserver(

                    function (entries) {

                        entries.forEach(
                            function (entry) {

                                if (entry.isIntersecting) {

                                    entry.target.classList.remove(
                                        "opacity-0",
                                        "translate-y-10",
                                        "-translate-x-12",
                                        "translate-x-12"
                                    );


                                    entry.target.classList.add(
                                        "opacity-100",
                                        "translate-x-0",
                                        "translate-y-0"
                                    );


                                    observer.unobserve(
                                        entry.target
                                    );

                                }

                            }
                        );

                    },

                    {
                        threshold: 0.12
                    }

                );


            revealElements.forEach(
                function (element) {

                    observer.observe(element);

                }
            );



            /* =================================================
               SUBTLE HERO PARALLAX
            ================================================= */

            window.addEventListener(
                "scroll",
                function () {

                    if (!heroImage) {
                        return;
                    }


                    const scroll =
                        window.scrollY;


                    if (scroll < window.innerHeight) {

                        heroImage.style.transform =
                            "scale(1.10) translateY(" +
                            scroll * 0.06 +
                            "px)";

                    }

                }
            );

        });

    </script>


</body>

</html>