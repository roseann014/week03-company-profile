<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Our Services | LUNÉA Pâtisserie & Bakehouse</title>

    <meta
        name="description"
        content="Explore artisan pastries, breads, celebration cakes, custom orders, pastry boxes, and event services from LUNÉA Pâtisserie & Bakehouse."
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


            <nav class="hidden items-center gap-8 lg:flex">

                <a
                    href="{{ url('/') }}"
                    class="nav-link text-sm text-white transition hover:text-[#E8C992]"
                >
                    Home
                </a>

                <a
                    href="{{ url('/about') }}"
                    class="nav-link text-sm text-white transition hover:text-[#E8C992]"
                >
                    About
                </a>

                <a
                    href="{{ url('/services') }}"
                    class="nav-link border-b border-[#D6A760] pb-1 text-sm text-[#E8C992]"
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

            <p class="mb-5 font-['Playfair_Display'] text-3xl tracking-[0.2em]">
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
                class="mobile-link text-xl font-medium"
            >
                About
            </a>

            <a
                href="{{ url('/services') }}"
                class="mobile-link text-xl font-medium text-[#B96F52]"
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
            class="relative flex min-h-[82vh] items-end overflow-hidden pb-20 pt-32 text-white lg:pb-24"
        >

            <img
                id="heroImage"
                src="https://images.unsplash.com/photo-1558326567-98ae2405596b?auto=format&fit=crop&w=1800&q=85"
                alt="Fresh pastries displayed in a bakery"
                class="absolute inset-0 h-full w-full scale-110 object-cover"
            >

            <div
                class="absolute inset-0 bg-gradient-to-r from-[#201510]/95 via-[#201510]/68 to-[#201510]/30"
            ></div>


            <div
                class="relative z-10 mx-auto w-[90%] max-w-7xl"
            >

                <div class="max-w-4xl">

                    <div
                        class="hero-item mb-6 flex translate-y-8 items-center gap-4 text-xs uppercase tracking-[0.3em] text-[#E8C992] opacity-0"
                    >
                        <span class="h-px w-10 bg-[#D6A760]"></span>
                        From Our Kitchen
                    </div>


                    <h1
                        class="hero-item translate-y-8 font-['Playfair_Display'] text-6xl font-medium leading-[0.95] tracking-tight opacity-0 sm:text-7xl lg:text-[7rem]"
                    >
                        Made for everyday.

                        <span class="block italic text-[#E8C992]">
                            Made for moments.
                        </span>
                    </h1>


                    <p
                        class="hero-item mt-8 max-w-2xl translate-y-8 text-base leading-8 text-white/75 opacity-0 md:text-lg"
                    >
                        From morning pastries to celebration cakes,
                        every LUNÉA creation is prepared with care,
                        patience, and attention to detail.
                    </p>

                </div>

            </div>

        </section>



        <!-- =====================================================
             INTRO
        ====================================================== -->

        <section class="bg-[#F7F0E7] py-24 lg:py-32">

            <div
                class="mx-auto grid w-[90%] max-w-7xl items-end gap-12 lg:grid-cols-[1.1fr_0.9fr] lg:gap-20"
            >

                <div class="reveal-left opacity-0">

                    <div
                        class="mb-5 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#B96F52]"
                    >
                        <span class="h-px w-9 bg-[#D6A760]"></span>
                        What We Make
                    </div>


                    <h2
                        class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl lg:text-6xl"
                    >
                        Thoughtful creations for

                        <span class="block italic text-[#B96F52]">
                            every kind of occasion.
                        </span>
                    </h2>

                </div>


                <div class="reveal-right opacity-0">

                    <p class="leading-8 text-[#766860]">
                        LUNÉA offers a carefully selected range of pastries,
                        breads, cakes, gift boxes, and custom orders.
                        Whether you're visiting for a simple treat or preparing
                        for an important celebration, we aim to make every order
                        feel personal and well made.
                    </p>

                </div>

            </div>

        </section>



        <!-- =====================================================
             SERVICE 01
        ====================================================== -->

        <section class="bg-[#FFFDF9] py-24">

            <div
                class="mx-auto grid w-[90%] max-w-7xl items-center gap-14 lg:grid-cols-2 lg:gap-24"
            >

                <div class="reveal-left group overflow-hidden opacity-0">

                    <img
                        src="https://images.unsplash.com/photo-1623334044303-241021148842?auto=format&fit=crop&w=1200&q=85"
                        alt="Fresh artisan croissants and pastries"
                        class="h-[470px] w-full object-cover transition duration-700 group-hover:scale-105 lg:h-[580px]"
                    >

                </div>


                <div class="reveal-right opacity-0">

                    <span
                        class="font-['Playfair_Display'] text-lg text-[#B96F52]"
                    >
                        01
                    </span>

                    <p
                        class="mt-4 text-[10px] uppercase tracking-[0.25em] text-[#B96F52]"
                    >
                        Artisan Pastries
                    </p>

                    <h2
                        class="mt-4 font-['Playfair_Display'] text-4xl font-medium sm:text-5xl"
                    >
                        Flaky, golden,
                        <span class="block italic text-[#B96F52]">
                            freshly baked.
                        </span>
                    </h2>

                    <p class="mt-7 leading-8 text-[#766860]">
                        Our pastry selection includes croissants, danishes,
                        tarts, and other small-batch creations prepared fresh
                        throughout the day.
                    </p>

                    <p class="mt-5 leading-8 text-[#766860]">
                        We focus on balanced flavors, delicate textures, and
                        simple presentation that lets each pastry speak for itself.
                    </p>


                    <div
                        class="mt-8 grid gap-3 text-sm text-[#2D211C] sm:grid-cols-2"
                    >
                        <span>— Classic Butter Croissant</span>
                        <span>— Almond Croissant</span>
                        <span>— Chocolate Croissant</span>
                        <span>— Seasonal Fruit Danish</span>
                        <span>— Custard Tart</span>
                    </div>

                </div>

            </div>

        </section>



        <!-- =====================================================
             SERVICE 02
        ====================================================== -->

        <section class="bg-[#2D211C] py-24 text-white">

            <div
                class="mx-auto grid w-[90%] max-w-7xl items-center gap-14 lg:grid-cols-2 lg:gap-24"
            >

                <div class="reveal-left order-2 opacity-0 lg:order-1">

                    <span class="font-['Playfair_Display'] text-lg text-[#D6A760]">
                        02
                    </span>

                    <p
                        class="mt-4 text-[10px] uppercase tracking-[0.25em] text-[#D6A760]"
                    >
                        Artisan Breads
                    </p>

                    <h2
                        class="mt-4 font-['Playfair_Display'] text-4xl font-medium sm:text-5xl"
                    >
                        Simple ingredients.

                        <span class="block italic text-[#E8C992]">
                            Properly made.
                        </span>
                    </h2>

                    <p class="mt-7 leading-8 text-white/60">
                        Our artisan breads are made with a focus on texture,
                        flavor, and careful fermentation.
                    </p>

                    <p class="mt-5 leading-8 text-white/60">
                        Each batch is prepared in small quantities so we can
                        maintain freshness and consistency throughout the day.
                    </p>

                    <div
                        class="mt-8 grid gap-3 text-sm text-white/80 sm:grid-cols-2"
                    >
                        <span>— Sourdough Loaf</span>
                        <span>— Milk Bread</span>
                        <span>— Focaccia</span>
                        <span>— Baguette</span>
                        <span>— Brioche</span>
                    </div>

                </div>


                <div class="reveal-right order-1 group overflow-hidden opacity-0 lg:order-2">

                    <img
                        src="https://images.unsplash.com/photo-1549931319-a545dcf3bc73?auto=format&fit=crop&w=1200&q=85"
                        alt="Fresh artisan bread"
                        class="h-[470px] w-full object-cover transition duration-700 group-hover:scale-105 lg:h-[580px]"
                    >

                </div>

            </div>

        </section>



        <!-- =====================================================
             SERVICES 03 & 04
        ====================================================== -->

        <section class="bg-[#F7F0E7] py-24 lg:py-32">

            <div class="mx-auto w-[90%] max-w-7xl">

                <div class="grid gap-8 lg:grid-cols-2">


                    <!-- CELEBRATION CAKES -->

                    <article
                        class="reveal group overflow-hidden bg-[#FFFDF9] opacity-0"
                    >

                        <div class="h-[430px] overflow-hidden">

                            <img
                                src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=1000&q=85"
                                alt="Celebration cake"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                            >

                        </div>


                        <div class="p-8 sm:p-10">

                            <span
                                class="font-['Playfair_Display'] text-lg text-[#B96F52]"
                            >
                                03
                            </span>

                            <p
                                class="mt-4 text-[10px] uppercase tracking-[0.25em] text-[#B96F52]"
                            >
                                Celebration Cakes
                            </p>

                            <h3
                                class="mt-3 font-['Playfair_Display'] text-3xl font-medium sm:text-4xl"
                            >
                                Cakes made for the moments that matter.
                            </h3>

                            <p class="mt-5 leading-8 text-[#766860]">
                                Handcrafted cakes for birthdays, anniversaries,
                                graduations, gatherings, and other special occasions.
                            </p>

                            <p class="mt-4 leading-8 text-[#766860]">
                                Customers can choose from different flavors,
                                sizes, and simple design options depending on
                                the occasion.
                            </p>

                        </div>

                    </article>



                    <!-- CUSTOM CAKE ORDERS -->

                    <article
                        class="reveal group overflow-hidden bg-[#2D211C] text-white opacity-0"
                    >

                        <div class="h-[430px] overflow-hidden">

                            <img
                                src="https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?auto=format&fit=crop&w=1000&q=85"
                                alt="Decorated custom cake"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                            >

                        </div>


                        <div class="p-8 sm:p-10">

                            <span
                                class="font-['Playfair_Display'] text-lg text-[#D6A760]"
                            >
                                04
                            </span>

                            <p
                                class="mt-4 text-[10px] uppercase tracking-[0.25em] text-[#D6A760]"
                            >
                                Custom Cake Orders
                            </p>

                            <h3
                                class="mt-3 font-['Playfair_Display'] text-3xl font-medium sm:text-4xl"
                            >
                                Created around your celebration.
                            </h3>

                            <p class="mt-5 leading-8 text-white/60">
                                Personalized cakes can be prepared based on the
                                preferred theme, flavor, size, and occasion.
                            </p>

                            <p class="mt-4 leading-8 text-white/60">
                                Customers can discuss their ideas with our team
                                before finalizing the design and order details.
                            </p>

                        </div>

                    </article>

                </div>

            </div>

        </section>



        <!-- =====================================================
             SERVICE 05
        ====================================================== -->

        <section class="bg-[#FFFDF9] py-24 lg:py-32">

            <div
                class="mx-auto grid w-[90%] max-w-7xl items-center gap-16 lg:grid-cols-[0.9fr_1.1fr] lg:gap-24"
            >

                <div class="reveal-left relative opacity-0">

                    <div class="overflow-hidden">

                        <img
                            src="https://images.unsplash.com/photo-1551024506-0bccd828d307?auto=format&fit=crop&w=1200&q=85"
                            alt="Pastry and dessert gift selection"
                            class="h-[570px] w-full object-cover"
                        >

                    </div>


                    <div
                        class="absolute -bottom-8 right-5 bg-[#D6A760] px-8 py-7 text-[#2D211C] md:-right-8 md:bottom-12"
                    >

                        <span
                            class="font-['Playfair_Display'] text-3xl"
                        >
                            Made to Share
                        </span>

                        <p
                            class="mt-1 text-[9px] uppercase tracking-[0.2em]"
                        >
                            Curated Pastry Boxes
                        </p>

                    </div>

                </div>


                <div class="reveal-right opacity-0">

                    <span
                        class="font-['Playfair_Display'] text-lg text-[#B96F52]"
                    >
                        05
                    </span>

                    <p
                        class="mt-4 text-[10px] uppercase tracking-[0.25em] text-[#B96F52]"
                    >
                        Pastry & Gift Boxes
                    </p>

                    <h2
                        class="mt-4 font-['Playfair_Display'] text-4xl font-medium sm:text-5xl"
                    >
                        A little box of

                        <span class="block italic text-[#B96F52]">
                            something special.
                        </span>
                    </h2>

                    <p class="mt-7 leading-8 text-[#766860]">
                        Our pastry and gift boxes combine selected LUNÉA
                        favorites in a presentation made for sharing,
                        gifting, and celebrating.
                    </p>

                    <p class="mt-5 leading-8 text-[#766860]">
                        They are available for personal gifts, meetings,
                        family gatherings, and seasonal occasions.
                    </p>

                    <div class="mt-8 space-y-4">

                        <div class="flex items-center gap-4 border-b border-[#2D211C]/10 pb-4">
                            <span class="text-[#B96F52]">01</span>
                            <span>Assorted pastry boxes</span>
                        </div>

                        <div class="flex items-center gap-4 border-b border-[#2D211C]/10 pb-4">
                            <span class="text-[#B96F52]">02</span>
                            <span>Seasonal collections</span>
                        </div>

                        <div class="flex items-center gap-4 border-b border-[#2D211C]/10 pb-4">
                            <span class="text-[#B96F52]">03</span>
                            <span>Gift-ready packaging</span>
                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- =====================================================
             SERVICE 06
        ====================================================== -->

        <section
            class="relative flex min-h-[700px] items-center overflow-hidden py-24 text-white"
        >

            <img
                src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?auto=format&fit=crop&w=1800&q=85"
                alt="Elegant event table"
                class="absolute inset-0 h-full w-full object-cover"
            >

            <div class="absolute inset-0 bg-[#211814]/75"></div>


            <div
                class="reveal relative z-10 mx-auto w-[90%] max-w-7xl opacity-0"
            >

                <div class="max-w-3xl">

                    <span
                        class="font-['Playfair_Display'] text-lg text-[#D6A760]"
                    >
                        06
                    </span>

                    <p
                        class="mt-4 text-[10px] uppercase tracking-[0.25em] text-[#E8C992]"
                    >
                        Events & Corporate Orders
                    </p>

                    <h2
                        class="mt-4 font-['Playfair_Display'] text-4xl font-medium sm:text-5xl lg:text-6xl"
                    >
                        From small meetings to

                        <span class="block italic text-[#E8C992]">
                            meaningful celebrations.
                        </span>
                    </h2>

                    <p class="mt-7 max-w-2xl leading-8 text-white/65">
                        LUNÉA can prepare pastry trays, cakes, gift boxes,
                        and baked goods for meetings, corporate events,
                        weddings, celebrations, and other gatherings.
                    </p>

                    <p class="mt-5 max-w-2xl leading-8 text-white/65">
                        Advance ordering is recommended for larger quantities
                        so our team can prepare each item carefully and
                        coordinate the order properly.
                    </p>


                    <a
                        href="{{ url('/contact') }}"
                        class="mt-9 inline-flex items-center gap-3 bg-[#D6A760] px-7 py-4 text-sm font-semibold text-[#2D211C] transition duration-300 hover:-translate-y-1 hover:bg-[#E8C992]"
                    >
                        Ask About Event Orders
                        <span>→</span>
                    </a>

                </div>

            </div>

        </section>



        <!-- =====================================================
             QUICK SERVICE SUMMARY
        ====================================================== -->

        <section class="bg-[#F7F0E7] py-24 lg:py-32">

            <div class="mx-auto w-[90%] max-w-7xl">


                <div class="reveal mx-auto mb-16 max-w-3xl text-center opacity-0">

                    <div
                        class="mb-5 flex items-center justify-center gap-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#B96F52]"
                    >
                        <span class="h-px w-9 bg-[#D6A760]"></span>
                        At a Glance
                    </div>

                    <h2
                        class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl lg:text-6xl"
                    >
                        Six ways to enjoy

                        <span class="block italic text-[#B96F52]">
                            something from LUNÉA.
                        </span>
                    </h2>

                </div>


                <div
                    class="grid gap-px overflow-hidden border border-[#2D211C]/10 bg-[#2D211C]/10 sm:grid-cols-2 lg:grid-cols-3"
                >


                    <div
                        class="reveal bg-[#FFFDF9] p-8 opacity-0 transition hover:bg-[#2D211C] hover:text-white"
                    >
                        <span class="text-[#B96F52]">01</span>

                        <h3 class="mt-10 font-['Playfair_Display'] text-2xl">
                            Artisan Pastries
                        </h3>

                        <p class="mt-4 text-sm leading-7 text-[#766860]">
                            Croissants, danishes, tarts, and daily baked favorites.
                        </p>
                    </div>


                    <div
                        class="reveal bg-[#FFFDF9] p-8 opacity-0 transition hover:bg-[#2D211C] hover:text-white"
                    >
                        <span class="text-[#B96F52]">02</span>

                        <h3 class="mt-10 font-['Playfair_Display'] text-2xl">
                            Artisan Breads
                        </h3>

                        <p class="mt-4 text-sm leading-7 text-[#766860]">
                            Small-batch breads made with care and proper fermentation.
                        </p>
                    </div>


                    <div
                        class="reveal bg-[#FFFDF9] p-8 opacity-0 transition hover:bg-[#2D211C] hover:text-white"
                    >
                        <span class="text-[#B96F52]">03</span>

                        <h3 class="mt-10 font-['Playfair_Display'] text-2xl">
                            Celebration Cakes
                        </h3>

                        <p class="mt-4 text-sm leading-7 text-[#766860]">
                            Cakes created for birthdays, milestones, and gatherings.
                        </p>
                    </div>


                    <div
                        class="reveal bg-[#FFFDF9] p-8 opacity-0 transition hover:bg-[#2D211C] hover:text-white"
                    >
                        <span class="text-[#B96F52]">04</span>

                        <h3 class="mt-10 font-['Playfair_Display'] text-2xl">
                            Custom Cake Orders
                        </h3>

                        <p class="mt-4 text-sm leading-7 text-[#766860]">
                            Personalized cakes based on your preferred design and occasion.
                        </p>
                    </div>


                    <div
                        class="reveal bg-[#FFFDF9] p-8 opacity-0 transition hover:bg-[#2D211C] hover:text-white"
                    >
                        <span class="text-[#B96F52]">05</span>

                        <h3 class="mt-10 font-['Playfair_Display'] text-2xl">
                            Pastry & Gift Boxes
                        </h3>

                        <p class="mt-4 text-sm leading-7 text-[#766860]">
                            Curated selections for gifts, meetings, and sharing.
                        </p>
                    </div>


                    <div
                        class="reveal bg-[#FFFDF9] p-8 opacity-0 transition hover:bg-[#2D211C] hover:text-white"
                    >
                        <span class="text-[#B96F52]">06</span>

                        <h3 class="mt-10 font-['Playfair_Display'] text-2xl">
                            Events & Corporate Orders
                        </h3>

                        <p class="mt-4 text-sm leading-7 text-[#766860]">
                            Larger pastry and cake orders for events and organizations.
                        </p>
                    </div>


                </div>

            </div>

        </section>



        <!-- =====================================================
             CTA
        ====================================================== -->

        <section class="bg-[#D6A760] py-24 lg:py-32">

            <div
                class="reveal mx-auto w-[90%] max-w-4xl text-center opacity-0"
            >

                <div
                    class="mb-5 flex items-center justify-center gap-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#2D211C]/70"
                >
                    <span class="h-px w-9 bg-[#2D211C]"></span>
                    Something in Mind?
                </div>


                <h2
                    class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl lg:text-6xl"
                >
                    Tell us what you're

                    <span class="block italic">
                        planning.
                    </span>
                </h2>


                <p
                    class="mx-auto mt-7 max-w-2xl leading-8 text-[#2D211C]/70"
                >
                    Whether you need a cake for a celebration, a pastry box
                    for someone special, or a larger order for an event,
                    our team would be happy to hear from you.
                </p>


                <a
                    href="{{ url('/contact') }}"
                    class="mt-9 inline-flex items-center gap-3 bg-[#2D211C] px-7 py-4 text-sm font-semibold text-white transition duration-300 hover:-translate-y-1 hover:bg-[#B96F52]"
                >
                    Send an Inquiry
                    <span>→</span>
                </a>

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
                    class="transition hover:text-[#D6A760]"
                >
                    About
                </a>

                <a
                    href="{{ url('/services') }}"
                    class="text-[#D6A760]"
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

                <a href="#" class="transition hover:text-[#D6A760]">
                    Instagram
                </a>

                <a href="#" class="transition hover:text-[#D6A760]">
                    Facebook
                </a>

                <a href="#" class="transition hover:text-[#D6A760]">
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
         INLINE JAVASCRIPT
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


            /* ==============================
               NAVBAR SCROLL
            ============================== */

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

                    logoMark.classList.remove("border-white/40");
                    logoMark.classList.add("border-[#2D211C]/20");

                    navLinks.forEach(function (link) {

                        if (!link.classList.contains("text-[#E8C992]")) {
                            link.classList.remove("text-white");
                            link.classList.add("text-[#2D211C]");
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
                        line.classList.remove("bg-white");
                        line.classList.add("bg-[#2D211C]");
                    });

                } else {

                    header.classList.remove(
                        "bg-[#FFFDF9]/95",
                        "backdrop-blur-xl",
                        "shadow-lg"
                    );

                    brand.classList.add("text-white");
                    brand.classList.remove("text-[#2D211C]");

                    logoMark.classList.add("border-white/40");
                    logoMark.classList.remove("border-[#2D211C]/20");

                    navLinks.forEach(function (link) {

                        if (!link.classList.contains("text-[#E8C992]")) {
                            link.classList.add("text-white");
                            link.classList.remove("text-[#2D211C]");
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
                            line.classList.add("bg-white");
                            line.classList.remove("bg-[#2D211C]");
                        });

                    }

                }

            }


            window.addEventListener("scroll", updateNavbar);
            updateNavbar();



            /* ==============================
               HERO ENTRANCE
            ============================== */

            const heroItems = document.querySelectorAll(".hero-item");

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



            /* ==============================
               MOBILE MENU
            ============================== */

            function closeMobileMenu() {

                mobileMenu.classList.remove("right-0");
                mobileMenu.classList.add("right-[-100%]");

                const lines = menuToggle.querySelectorAll("span");

                lines[0].style.transform = "";
                lines[1].style.opacity = "";
                lines[2].style.transform = "";

                updateNavbar();

            }


            menuToggle.addEventListener("click", function () {

                const isOpen =
                    mobileMenu.classList.contains("right-0");

                if (isOpen) {

                    closeMobileMenu();

                } else {

                    mobileMenu.classList.remove("right-[-100%]");
                    mobileMenu.classList.add("right-0");

                    const lines =
                        menuToggle.querySelectorAll("span");

                    lines[0].style.transform =
                        "translateY(8px) rotate(45deg)";

                    lines[1].style.opacity = "0";

                    lines[2].style.transform =
                        "translateY(-8px) rotate(-45deg)";

                    lines.forEach(function (line) {
                        line.classList.remove("bg-white");
                        line.classList.add("bg-[#2D211C]");
                    });

                }

            });


            document
                .querySelectorAll(".mobile-link")
                .forEach(function (link) {

                    link.addEventListener(
                        "click",
                        closeMobileMenu
                    );

                });



            /* ==============================
               SCROLL REVEAL
            ============================== */

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
                    element.classList.add("translate-y-10");
                }

                if (element.classList.contains("reveal-left")) {
                    element.classList.add("-translate-x-12");
                }

                if (element.classList.contains("reveal-right")) {
                    element.classList.add("translate-x-12");
                }

            });


            const observer =
                new IntersectionObserver(

                    function (entries) {

                        entries.forEach(function (entry) {

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

                        });

                    },

                    {
                        threshold: 0.12
                    }

                );


            revealElements.forEach(function (element) {
                observer.observe(element);
            });



            /* ==============================
               HERO PARALLAX
            ============================== */

            window.addEventListener("scroll", function () {

                if (!heroImage) {
                    return;
                }

                const scroll = window.scrollY;

                if (scroll < window.innerHeight) {

                    heroImage.style.transform =
                        "scale(1.10) translateY(" +
                        scroll * 0.06 +
                        "px)";

                }

            });

        });

    </script>


</body>

</html>