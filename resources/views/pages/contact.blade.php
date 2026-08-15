<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us | LUNÉA Pâtisserie & Bakehouse</title>

    <meta
        name="description"
        content="Contact LUNÉA Pâtisserie & Bakehouse in Santa Rosa, Laguna for pastry orders, custom cakes, gift boxes, and event inquiries."
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
                    class="nav-link text-sm text-white transition hover:text-[#E8C992]"
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
                    class="nav-link border-b border-[#D6A760] pb-1 text-sm text-[#E8C992]"
                >
                    Contact
                </a>

                <a
                    id="navButton"
                    href="#contactForm"
                    class="rounded-full border border-white/50 px-5 py-3 text-xs font-semibold text-white transition duration-300 hover:border-[#D6A760] hover:bg-[#D6A760] hover:text-[#2D211C]"
                >
                    Order Inquiry
                </a>

            </nav>


            <!-- MOBILE MENU BUTTON -->

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
                class="mobile-link text-xl font-medium text-[#B96F52]"
            >
                Contact
            </a>

            <a
                href="#contactForm"
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
            class="relative flex min-h-[78vh] items-end overflow-hidden pb-20 pt-32 text-white lg:pb-24"
        >

            <img
                id="heroImage"
                src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=1800&q=85"
                alt="Fresh pastries and cakes"
                class="absolute inset-0 h-full w-full scale-110 object-cover"
            >

            <div
                class="absolute inset-0 bg-gradient-to-r from-[#201510]/95 via-[#201510]/70 to-[#201510]/30"
            ></div>


            <div
                class="relative z-10 mx-auto w-[90%] max-w-7xl"
            >

                <div class="max-w-4xl">

                    <div
                        class="hero-item mb-6 flex translate-y-8 items-center gap-4 text-xs uppercase tracking-[0.3em] text-[#E8C992] opacity-0"
                    >
                        <span class="h-px w-10 bg-[#D6A760]"></span>
                        Contact LUNÉA
                    </div>


                    <h1
                        class="hero-item translate-y-8 font-['Playfair_Display'] text-6xl font-medium leading-[0.95] tracking-tight opacity-0 sm:text-7xl lg:text-[7rem]"
                    >
                        Come say hello.

                        <span class="block italic text-[#E8C992]">
                            We'd love to hear from you.
                        </span>
                    </h1>


                    <p
                        class="hero-item mt-8 max-w-2xl translate-y-8 text-base leading-8 text-white/75 opacity-0 md:text-lg"
                    >
                        Questions, custom orders, gift boxes, or something
                        worth celebrating? Send us a message and tell us
                        what you have in mind.
                    </p>

                </div>

            </div>

        </section>



        <!-- =====================================================
             CONTACT INTRO
        ====================================================== -->

        <section class="bg-[#F7F0E7] py-24 lg:py-32">

            <div
                class="mx-auto grid w-[90%] max-w-7xl gap-14 lg:grid-cols-[0.9fr_1.1fr] lg:gap-24"
            >

                <!-- LEFT CONTENT -->

                <div class="reveal-left opacity-0">

                    <div
                        class="mb-5 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#B96F52]"
                    >
                        <span class="h-px w-9 bg-[#D6A760]"></span>
                        Get in Touch
                    </div>


                    <h2
                        class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl lg:text-6xl"
                    >
                        Planning something

                        <span class="block italic text-[#B96F52]">
                            sweet?
                        </span>
                    </h2>


                    <p class="mt-7 max-w-xl leading-8 text-[#766860]">
                        Whether you're looking for a celebration cake,
                        pastry box, event order, or simply want to ask
                        about our daily bakes, our team is ready to help.
                    </p>


                    <p class="mt-5 max-w-xl leading-8 text-[#766860]">
                        For larger and customized orders, we recommend
                        contacting us ahead of time so we can prepare
                        everything with the attention it deserves.
                    </p>

                </div>


                <!-- CONTACT DETAILS -->

                <div
                    class="reveal-right grid gap-px overflow-hidden border border-[#2D211C]/10 bg-[#2D211C]/10 opacity-0 sm:grid-cols-2"
                >

                    <!-- ADDRESS -->

                    <div
                        class="group bg-[#FFFDF9] p-8 transition duration-300 hover:bg-[#2D211C] hover:text-white"
                    >

                        <div
                            class="mb-8 grid size-12 place-items-center rounded-full bg-[#F7F0E7] text-xl text-[#B96F52] transition group-hover:bg-white/10 group-hover:text-[#D6A760]"
                        >
                            ◇
                        </div>

                        <p
                            class="text-[10px] uppercase tracking-[0.22em] text-[#B96F52] group-hover:text-[#D6A760]"
                        >
                            Visit Us
                        </p>

                        <h3
                            class="mt-3 font-['Playfair_Display'] text-2xl font-medium"
                        >
                            Santa Rosa, Laguna
                        </h3>

                        <p
                            class="mt-4 text-sm leading-7 text-[#766860] transition group-hover:text-white/60"
                        >
                            Santa Rosa, Laguna 4026<br>
                            Philippines
                        </p>

                    </div>


                    <!-- PHONE -->

                    <div
                        class="group bg-[#FFFDF9] p-8 transition duration-300 hover:bg-[#2D211C] hover:text-white"
                    >

                        <div
                            class="mb-8 grid size-12 place-items-center rounded-full bg-[#F7F0E7] text-xl text-[#B96F52] transition group-hover:bg-white/10 group-hover:text-[#D6A760]"
                        >
                            ☏
                        </div>

                        <p
                            class="text-[10px] uppercase tracking-[0.22em] text-[#B96F52] group-hover:text-[#D6A760]"
                        >
                            Call Us
                        </p>

                        <h3
                            class="mt-3 font-['Playfair_Display'] text-2xl font-medium"
                        >
                            +63 917 583 2746
                        </h3>

                        <p
                            class="mt-4 text-sm leading-7 text-[#766860] transition group-hover:text-white/60"
                        >
                            Available during regular business hours
                            for order and service inquiries.
                        </p>

                    </div>


                    <!-- EMAIL -->

                    <div
                        class="group bg-[#FFFDF9] p-8 transition duration-300 hover:bg-[#2D211C] hover:text-white"
                    >

                        <div
                            class="mb-8 grid size-12 place-items-center rounded-full bg-[#F7F0E7] text-xl text-[#B96F52] transition group-hover:bg-white/10 group-hover:text-[#D6A760]"
                        >
                            ✉
                        </div>

                        <p
                            class="text-[10px] uppercase tracking-[0.22em] text-[#B96F52] group-hover:text-[#D6A760]"
                        >
                            Email Us
                        </p>

                        <h3
                            class="mt-3 break-all font-['Playfair_Display'] text-2xl font-medium"
                        >
                            hello@luneapatisserie.ph
                        </h3>

                        <p
                            class="mt-4 text-sm leading-7 text-[#766860] transition group-hover:text-white/60"
                        >
                            Send us your questions, custom requests,
                            or event-order details.
                        </p>

                    </div>


                    <!-- HOURS -->

                    <div
                        class="group bg-[#FFFDF9] p-8 transition duration-300 hover:bg-[#2D211C] hover:text-white"
                    >

                        <div
                            class="mb-8 grid size-12 place-items-center rounded-full bg-[#F7F0E7] text-xl text-[#B96F52] transition group-hover:bg-white/10 group-hover:text-[#D6A760]"
                        >
                            ◷
                        </div>

                        <p
                            class="text-[10px] uppercase tracking-[0.22em] text-[#B96F52] group-hover:text-[#D6A760]"
                        >
                            Bakehouse Hours
                        </p>

                        <h3
                            class="mt-3 font-['Playfair_Display'] text-2xl font-medium"
                        >
                            Open Daily
                        </h3>

                        <p
                            class="mt-4 text-sm leading-7 text-[#766860] transition group-hover:text-white/60"
                        >
                            Monday – Thursday<br>
                            7:00 AM – 7:00 PM
                        </p>

                        <p
                            class="mt-3 text-sm leading-7 text-[#766860] transition group-hover:text-white/60"
                        >
                            Friday – Sunday<br>
                            7:00 AM – 8:00 PM
                        </p>

                    </div>

                </div>

            </div>

        </section>



        <!-- =====================================================
             FORM SECTION
        ====================================================== -->

        <section
            id="contactForm"
            class="bg-[#FFFDF9] py-24 lg:py-32"
        >

            <div
                class="mx-auto grid w-[90%] max-w-7xl gap-16 lg:grid-cols-[0.75fr_1.25fr] lg:gap-24"
            >


                <!-- FORM INTRO -->

                <div class="reveal-left opacity-0">

                    <div
                        class="mb-5 flex items-center gap-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#B96F52]"
                    >
                        <span class="h-px w-9 bg-[#D6A760]"></span>
                        Send an Inquiry
                    </div>


                    <h2
                        class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl"
                    >
                        Tell us what

                        <span class="block italic text-[#B96F52]">
                            you have in mind.
                        </span>
                    </h2>


                    <p class="mt-7 leading-8 text-[#766860]">
                        Fill out the form with your inquiry details.
                        For this project, the form is for interface
                        demonstration only and does not submit to a database.
                    </p>


                    <div
                        class="mt-10 border-l-2 border-[#D6A760] pl-6"
                    >

                        <p
                            class="font-['Playfair_Display'] text-2xl leading-relaxed"
                        >
                            Planning a custom cake or large event order?
                        </p>

                        <p class="mt-3 text-sm leading-7 text-[#766860]">
                            Include your preferred date, number of guests,
                            flavor ideas, and other important details in your message.
                        </p>

                    </div>

                </div>



                <!-- FORM -->

                <form
                    id="inquiryForm"
                    class="reveal-right bg-[#F7F0E7] p-7 opacity-0 sm:p-10 lg:p-12"
                >

                    <div class="grid gap-7 sm:grid-cols-2">


                        <!-- NAME -->

                        <div class="sm:col-span-1">

                            <label
                                for="name"
                                class="mb-2 block text-[10px] font-semibold uppercase tracking-[0.2em] text-[#766860]"
                            >
                                Full Name
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Your full name"
                                class="w-full border-0 border-b border-[#2D211C]/20 bg-transparent px-0 py-4 text-sm outline-none transition placeholder:text-[#766860]/60 focus:border-[#B96F52] focus:ring-0"
                                required
                            >

                        </div>


                        <!-- EMAIL -->

                        <div class="sm:col-span-1">

                            <label
                                for="email"
                                class="mb-2 block text-[10px] font-semibold uppercase tracking-[0.2em] text-[#766860]"
                            >
                                Email Address
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="you@example.com"
                                class="w-full border-0 border-b border-[#2D211C]/20 bg-transparent px-0 py-4 text-sm outline-none transition placeholder:text-[#766860]/60 focus:border-[#B96F52] focus:ring-0"
                                required
                            >

                        </div>


                        <!-- PHONE -->

                        <div>

                            <label
                                for="phone"
                                class="mb-2 block text-[10px] font-semibold uppercase tracking-[0.2em] text-[#766860]"
                            >
                                Phone Number
                            </label>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                placeholder="+63 9XX XXX XXXX"
                                class="w-full border-0 border-b border-[#2D211C]/20 bg-transparent px-0 py-4 text-sm outline-none transition placeholder:text-[#766860]/60 focus:border-[#B96F52] focus:ring-0"
                            >

                        </div>


                        <!-- INQUIRY TYPE -->

                        <div>

                            <label
                                for="inquiry"
                                class="mb-2 block text-[10px] font-semibold uppercase tracking-[0.2em] text-[#766860]"
                            >
                                Inquiry Type
                            </label>

                            <select
                                id="inquiry"
                                name="inquiry"
                                class="w-full border-0 border-b border-[#2D211C]/20 bg-transparent px-0 py-4 text-sm outline-none transition focus:border-[#B96F52] focus:ring-0"
                            >
                                <option value="">Choose an inquiry</option>
                                <option>General Inquiry</option>
                                <option>Artisan Pastries</option>
                                <option>Celebration Cake</option>
                                <option>Custom Cake</option>
                                <option>Pastry & Gift Box</option>
                                <option>Corporate Order</option>
                                <option>Event Order</option>
                                <option>Other</option>
                            </select>

                        </div>


                        <!-- PREFERRED DATE -->

                        <div>

                            <label
                                for="date"
                                class="mb-2 block text-[10px] font-semibold uppercase tracking-[0.2em] text-[#766860]"
                            >
                                Preferred Date
                            </label>

                            <input
                                type="date"
                                id="date"
                                name="date"
                                class="w-full border-0 border-b border-[#2D211C]/20 bg-transparent px-0 py-4 text-sm outline-none transition focus:border-[#B96F52] focus:ring-0"
                            >

                        </div>


                        <!-- GUEST / QUANTITY -->

                        <div>

                            <label
                                for="quantity"
                                class="mb-2 block text-[10px] font-semibold uppercase tracking-[0.2em] text-[#766860]"
                            >
                                Estimated Quantity / Guests
                            </label>

                            <input
                                type="text"
                                id="quantity"
                                name="quantity"
                                placeholder="Example: 20 guests"
                                class="w-full border-0 border-b border-[#2D211C]/20 bg-transparent px-0 py-4 text-sm outline-none transition placeholder:text-[#766860]/60 focus:border-[#B96F52] focus:ring-0"
                            >

                        </div>


                        <!-- MESSAGE -->

                        <div class="sm:col-span-2">

                            <label
                                for="message"
                                class="mb-2 block text-[10px] font-semibold uppercase tracking-[0.2em] text-[#766860]"
                            >
                                Message
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                placeholder="Tell us about your order, occasion, flavor ideas, or questions..."
                                class="w-full resize-none border-0 border-b border-[#2D211C]/20 bg-transparent px-0 py-4 text-sm leading-7 outline-none transition placeholder:text-[#766860]/60 focus:border-[#B96F52] focus:ring-0"
                                required
                            ></textarea>

                        </div>

                    </div>


                    <div
                        class="mt-9 flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between"
                    >

                        <p class="max-w-sm text-xs leading-6 text-[#766860]">
                            This contact form is for UI demonstration only.
                        </p>

                        <button
                            type="submit"
                            class="inline-flex items-center justify-center gap-3 bg-[#2D211C] px-8 py-4 text-sm font-semibold text-white transition duration-300 hover:-translate-y-1 hover:bg-[#B96F52]"
                        >
                            Send Inquiry
                            <span>→</span>
                        </button>

                    </div>


                    <!-- UI SUCCESS MESSAGE -->

                    <div
                        id="successMessage"
                        class="mt-7 hidden border border-[#D6A760] bg-[#FFFDF9] p-5"
                    >
                        <p
                            class="font-['Playfair_Display'] text-xl text-[#2D211C]"
                        >
                            Thank you for your inquiry.
                        </p>

                        <p class="mt-2 text-sm leading-6 text-[#766860]">
                            This is a demo contact form, so no information
                            has been sent or stored.
                        </p>
                    </div>

                </form>

            </div>

        </section>



        <!-- =====================================================
             SOCIAL MEDIA
        ====================================================== -->

        <section class="bg-[#2D211C] py-24 text-white lg:py-28">

            <div class="mx-auto w-[90%] max-w-7xl">

                <div
                    class="reveal mb-14 flex flex-col justify-between gap-8 opacity-0 lg:flex-row lg:items-end"
                >

                    <div>

                        <div
                            class="mb-5 flex items-center gap-3 text-xs uppercase tracking-[0.28em] text-[#E8C992]"
                        >
                            <span class="h-px w-9 bg-[#D6A760]"></span>
                            Follow Along
                        </div>


                        <h2
                            class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl lg:text-6xl"
                        >
                            Find a little more

                            <span class="block italic text-[#E8C992]">
                                LUNÉA online.
                            </span>
                        </h2>

                    </div>


                    <p class="max-w-md leading-7 text-white/60">
                        Follow our social pages for daily bakes,
                        seasonal collections, cakes, and behind-the-scenes moments.
                    </p>

                </div>


                <div class="grid gap-px bg-white/10 md:grid-cols-3">


                    <!-- INSTAGRAM -->

                    <a
                        href="#"
                        class="reveal group bg-[#2D211C] p-8 opacity-0 transition duration-300 hover:bg-[#D6A760] hover:text-[#2D211C] sm:p-10"
                    >

                        <div class="flex items-start justify-between">

                            <span
                                class="text-[10px] uppercase tracking-[0.2em] text-[#D6A760] transition group-hover:text-[#2D211C]/60"
                            >
                                Instagram
                            </span>

                            <span class="text-2xl transition group-hover:translate-x-1">
                                ↗
                            </span>

                        </div>

                        <h3
                            class="mt-16 font-['Playfair_Display'] text-3xl"
                        >
                            @luneapatisserie
                        </h3>

                        <p
                            class="mt-3 text-sm text-white/55 transition group-hover:text-[#2D211C]/65"
                        >
                            Daily bakes, cakes, and pastry moments.
                        </p>

                    </a>


                    <!-- FACEBOOK -->

                    <a
                        href="#"
                        class="reveal group bg-[#2D211C] p-8 opacity-0 transition duration-300 hover:bg-[#D6A760] hover:text-[#2D211C] sm:p-10"
                    >

                        <div class="flex items-start justify-between">

                            <span
                                class="text-[10px] uppercase tracking-[0.2em] text-[#D6A760] transition group-hover:text-[#2D211C]/60"
                            >
                                Facebook
                            </span>

                            <span class="text-2xl transition group-hover:translate-x-1">
                                ↗
                            </span>

                        </div>

                        <h3
                            class="mt-16 font-['Playfair_Display'] text-3xl"
                        >
                            LUNÉA Pâtisserie
                        </h3>

                        <p
                            class="mt-3 text-sm text-white/55 transition group-hover:text-[#2D211C]/65"
                        >
                            Updates, announcements, and order information.
                        </p>

                    </a>


                    <!-- TIKTOK -->

                    <a
                        href="#"
                        class="reveal group bg-[#2D211C] p-8 opacity-0 transition duration-300 hover:bg-[#D6A760] hover:text-[#2D211C] sm:p-10"
                    >

                        <div class="flex items-start justify-between">

                            <span
                                class="text-[10px] uppercase tracking-[0.2em] text-[#D6A760] transition group-hover:text-[#2D211C]/60"
                            >
                                TikTok
                            </span>

                            <span class="text-2xl transition group-hover:translate-x-1">
                                ↗
                            </span>

                        </div>

                        <h3
                            class="mt-16 font-['Playfair_Display'] text-3xl"
                        >
                            @luneapatisserie
                        </h3>

                        <p
                            class="mt-3 text-sm text-white/55 transition group-hover:text-[#2D211C]/65"
                        >
                            Baking clips and behind-the-scenes content.
                        </p>

                    </a>

                </div>

            </div>

        </section>



        <!-- =====================================================
             VISIT CTA
        ====================================================== -->

        <section
            class="relative flex min-h-[600px] items-center overflow-hidden py-24 text-white"
        >

            <img
                src="https://images.unsplash.com/photo-1511081692775-05d0f180a065?auto=format&fit=crop&w=1800&q=85"
                alt="Warm bakery interior"
                class="absolute inset-0 h-full w-full object-cover"
            >

            <div class="absolute inset-0 bg-[#211814]/75"></div>


            <div
                class="reveal relative z-10 mx-auto w-[90%] max-w-7xl opacity-0"
            >

                <div class="max-w-3xl">

                    <div
                        class="mb-5 flex items-center gap-3 text-xs uppercase tracking-[0.28em] text-[#E8C992]"
                    >
                        <span class="h-px w-9 bg-[#D6A760]"></span>
                        Visit the Bakehouse
                    </div>


                    <h2
                        class="font-['Playfair_Display'] text-4xl font-medium leading-tight sm:text-5xl lg:text-6xl"
                    >
                        Fresh from the oven,

                        <span class="block italic text-[#E8C992]">
                            waiting in Laguna.
                        </span>
                    </h2>


                    <p class="mt-7 max-w-2xl leading-8 text-white/65">
                        Drop by LUNÉA in Santa Rosa for a morning pastry,
                        fresh bread, or something sweet to take home and share.
                    </p>


                    <a
                        href="#contactForm"
                        class="mt-9 inline-flex items-center gap-3 bg-[#D6A760] px-7 py-4 text-sm font-semibold text-[#2D211C] transition duration-300 hover:-translate-y-1 hover:bg-[#E8C992]"
                    >
                        Send an Inquiry
                        <span>→</span>
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
                    class="text-[#D6A760]"
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


            /* ===============================================
               NAVBAR SCROLL
            =============================================== */

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



            /* ===============================================
               HERO ENTRANCE
            =============================================== */

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



            /* ===============================================
               MOBILE MENU
            =============================================== */

            function closeMobileMenu() {

                mobileMenu.classList.remove("right-0");
                mobileMenu.classList.add("right-[-100%]");

                const lines =
                    menuToggle.querySelectorAll("span");

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



            /* ===============================================
               SCROLL REVEAL
            =============================================== */

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



            /* ===============================================
               HERO PARALLAX
            =============================================== */

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



            /* ===============================================
               DEMO CONTACT FORM
            =============================================== */

            const inquiryForm =
                document.getElementById("inquiryForm");

            const successMessage =
                document.getElementById("successMessage");


            inquiryForm.addEventListener(
                "submit",
                function (event) {

                    event.preventDefault();

                    successMessage.classList.remove("hidden");

                    successMessage.scrollIntoView({
                        behavior: "smooth",
                        block: "nearest"
                    });

                }
            );

        });

    </script>


</body>

</html>