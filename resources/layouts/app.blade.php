<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="@yield('meta_description', 'LUNÉA Pâtisserie & Bakehouse - Fresh pastries, artisan breads, and handcrafted cakes in Santa Rosa, Laguna.')"
    >

    <title>
        @yield('title', 'LUNÉA Pâtisserie & Bakehouse')
    </title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;1,500;1,600&display=swap"
        rel="stylesheet"
    >

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Extra page-specific styles -->
    @stack('styles')
</head>


<body class="overflow-x-hidden bg-[#FFFDF9] font-['DM_Sans'] text-[#2D211C]">


    <!-- =====================================================
         NAVIGATION
    ====================================================== -->

    @include('components.navbar')


    <!-- =====================================================
         PAGE CONTENT
    ====================================================== -->

    <main>
        @yield('content')
    </main>


    <!-- =====================================================
         FOOTER
    ====================================================== -->

    @include('components.footer')


    <!-- =====================================================
         GLOBAL JAVASCRIPT
    ====================================================== -->

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            /*
            |--------------------------------------------------------------------------
            | Mobile Navigation
            |--------------------------------------------------------------------------
            */

            const menuToggle = document.getElementById("menuToggle");
            const mobileMenu = document.getElementById("mobileMenu");
            const menuLines = document.querySelectorAll(".menu-line");

            if (menuToggle && mobileMenu) {

                menuToggle.addEventListener("click", function () {

                    const isOpen =
                        mobileMenu.classList.contains("right-0");

                    if (isOpen) {

                        mobileMenu.classList.remove("right-0");
                        mobileMenu.classList.add("right-[-100%]");

                        menuToggle.setAttribute(
                            "aria-expanded",
                            "false"
                        );

                    } else {

                        mobileMenu.classList.remove("right-[-100%]");
                        mobileMenu.classList.add("right-0");

                        menuToggle.setAttribute(
                            "aria-expanded",
                            "true"
                        );
                    }

                });


                document
                    .querySelectorAll(".mobile-link")
                    .forEach(function (link) {

                        link.addEventListener("click", function () {

                            mobileMenu.classList.remove("right-0");

                            mobileMenu.classList.add(
                                "right-[-100%]"
                            );

                            menuToggle.setAttribute(
                                "aria-expanded",
                                "false"
                            );

                        });

                    });

            }


            /*
            |--------------------------------------------------------------------------
            | Scroll Reveal Animation
            |--------------------------------------------------------------------------
            */

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


                if (element.classList.contains("reveal")) {

                    element.classList.add(
                        "translate-y-10"
                    );

                }


                if (element.classList.contains("reveal-left")) {

                    element.classList.add(
                        "-translate-x-10"
                    );

                }


                if (element.classList.contains("reveal-right")) {

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

        });
    </script>


    <!-- Extra page-specific scripts -->
    @stack('scripts')


</body>

</html>