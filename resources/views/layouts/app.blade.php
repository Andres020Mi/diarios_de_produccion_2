<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            font-size: 0.75rem; /* Smaller base font for mobile */
        }
        .main-container {
            display: flex;
            flex-direction: column;
            min-height: calc(100vh - 4rem); /* Ensure full height minus nav */
        }
        .text-xl {
            font-size: 1rem; /* Smaller for mobile */
            font-weight: 500;
            letter-spacing: -0.01em;
        }
        .text-lg {
            font-size: 0.875rem; /* Smaller for mobile */
            font-weight: 500;
        }
        .text-sm {
            font-size: 0.625rem; /* Smaller for mobile */
            font-weight: 400;
        }
        .text-xs {
            font-size: 0.5rem; /* Smaller for mobile */
            font-weight: 400;
        }
        nav ul li a {
            font-size: 0.75rem; /* Smaller sidebar links for mobile */
            font-weight: 400;
        }
        #footer {
            padding: 0.5rem; /* Minimal padding */
            height: 2.5rem; /* Fixed smallylinders

System: small footer height */
            overflow-x: auto; /* Enable horizontal scroll */
            white-space: nowrap; /* Prevent wrapping */
        }
        #footer .container {
            flex-wrap: nowrap; /* Keep content in a single row */
        }
        @media (max-width: 360px) {
            #sidebar {
                width: 14rem; /* Smaller sidebar width for mobile */
            }
            nav {
                height: 3rem; /* Smaller nav height for mobile */
                padding: 0.5rem;
            }
            #main-content {
                padding: 0.5rem; /* Smaller padding for mobile */
            }
            .avatar div {
                width: 1.25rem !important; /* Smaller avatar for mobile */
            }
            .avatar img {
                width: 1rem !important;
                height: 1rem !important;
            }
            #profile-img {
                width: 1rem !important;
                height: 1rem !important;
            }
            #profile-menu {
                width: 7rem; /* Smaller profile menu for mobile */
            }
            #profile-menu ul li a {
                padding: 0.25rem 0.5rem; /* Smaller padding for profile menu items */
            }
            .gap-4 {
                gap: 0.5rem !important; /* Smaller gaps for mobile */
            }
            .gap-2 {
                gap: 0.25rem !important;
            }
            .container {
                padding-left: 0.25rem;
                padding-right: 0.25rem;
            }
            #footer {
                height: 2rem; /* Even smaller footer height for mobile */
            }
        }
    </style>
</head>
<body class="bg-base-100 text-base-content">
    <div class="flex flex-row h-screen w-screen overflow-hidden">
        <!-- Navegacion lateral -->
        <aside id="sidebar" class="h-full w-64 bg-base-100 shadow-lg md:w-64 w-0 overflow-hidden">
            <div class="flex flex-row w-full gap-4 items-center border-b border-base-200 p-3">
                @include('svg.iconSoftware')
                <p class="text-xl font-bold break-words bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text">
                    Software Agropecuario
                </p>
            </div>
            <nav class="p-3">
                <span></span>
                @include('Navegaciones.DiariosDeProduccion.blade')
            </nav>
        </aside>
        <!-- Contenedor principal -->
        <div class="flex flex-col w-full h-full">
            <nav class="flex flex-row h-16 items-center justify-between p-4 bg-base-100 shadow-sm">
                <div class="flex flex-row gap-4 items-center">
                    <button id="menu-toggle" class="hover:bg-base-200 p-2 rounded-full">
                        @include('svg.menu')
                    </button>
                    <p class="text-lg font-bold text-base-content">
                        Titulo de la vista
                    </p>
                </div>
                <div class="flex flex-row gap-4 items-center">
                    <button id="btn-theme" class="hover:bg-base-200 p-2 rounded-full cursor-pointer">
                        <span id="moon" class="block">
                            @include('svg.moon')
                        </span>
                        <span id="sun" class="hidden">
                            @include('svg.sun')
                        </span>
                    </button>
                    <div class="relative">
                        <img id="profile-img" src="{{ asset('src/img/users/perfil.png') }}" alt="User Profile" class="w-6 h-6 rounded-full cursor-pointer object-cover">
                        <div id="profile-menu" class="absolute right-0 mt-2 w-40 bg-base-100 shadow-lg rounded-lg hidden z-10">
                            <ul class="py-1">
                                <li><a href="/profile" class="block px-3 py-1.5 hover:bg-base-200 text-base-content hover:text-primary text-sm">View Profile</a></li>
                                <li><a href="/logout" class="block px-3 py-1.5 hover:bg-base-200 text-base-content hover:text-primary text-sm">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="main-container">
                <main id="main-content" class="flex-1 p-4 bg-base-200 overflow-y-auto">
                    <!-- Main content goes here -->
                    @yield('contenido')
                </main>
                <footer id="footer" class="bg-base-100 shadow-inner border-t border-base-200 ">
                    <div class="container mx-auto flex justify-between  items-center gap-5 text-xs">
                        <div class="flex items-center gap-5">
                            <div class="avatar">
                                <div class="w-5 md:w-6 rounded-full ring ring-primary ring-offset-base-100 ring-offset-1">
                                    <img src="{{ asset('src/img/users/perfil.png') }}" alt="User Profile" class="w-full h-full rounded-full object-cover">
                                </div>
                            </div>
                            <div>
                                <span class="font-medium">Andres Barrera</span>
                                <a href="mailto:andresgbarrerac@gmail.com" class="hover:underline">andresgbarrerac@gmail.com</a>
                                <span>+57 316 820 9707</span>
                            </div>
                        </div>
                       
                        <div class="text-right">
                            <span class="font-medium">© {{ date('Y') }} SENAEMPRESA</span>
                            <span class="text-base-content/60">Hecho con <span class="text-primary">Laravel</span>, <span class="text-primary">DaisyUI</span>, <span class="text-primary">TailwindCSS</span></span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btnTheme = document.getElementById('btn-theme');
            const moon = document.getElementById('moon');
            const sun = document.getElementById('sun');
            const sidebar = document.getElementById('sidebar');
            const menuToggle = document.getElementById('menu-toggle');
            const profileImg = document.getElementById('profile-img');
            const profileMenu = document.getElementById('profile-menu');

            // Hide sidebar on small screens by default
            if (window.innerWidth < 768) {
                sidebar.setAttribute('hidden', '');
                sidebar.classList.add('w-0', 'overflow-hidden');
                sidebar.classList.remove('w-64');
            }

            btnTheme.addEventListener('click', () => {
                const currentTheme = document.documentElement.getAttribute('data-theme');
                if (currentTheme === 'light') {
                    document.documentElement.setAttribute('data-theme', 'dark');
                    moon.classList.add('hidden');
                    sun.classList.remove('hidden');
                } else {
                    document.documentElement.setAttribute('data-theme', 'light');
                    sun.classList.add('hidden');
                    moon.classList.remove('hidden');
                }
            });

            menuToggle.addEventListener('click', () => {
                if (sidebar.hasAttribute('hidden')) {
                    sidebar.removeAttribute('hidden');
                    sidebar.classList.remove('w-0', 'overflow-hidden');
                    sidebar.classList.add('w-64');
                } else {
                    sidebar.setAttribute('hidden', '');
                    sidebar.classList.add('w-0', 'overflow-hidden');
                    sidebar.classList.remove('w-64');
                }
            });

            // Update sidebar visibility on window resize
            window.addEventListener('resize', () => {
                if (window.innerWidth < 768 && !sidebar.hasAttribute('hidden')) {
                    sidebar.setAttribute('hidden', '');
                    sidebar.classList.add('w-0', 'overflow-hidden');
                    sidebar.classList.remove('w-64');
                } else if (window.innerWidth >= 768 && sidebar.hasAttribute('hidden')) {
                    sidebar.removeAttribute('hidden');
                    sidebar.classList.remove('w-0', 'overflow-hidden');
                    sidebar.classList.add('w-64');
                }
            });

            // Profile menu toggle
            profileImg.addEventListener('click', (event) => {
                event.stopPropagation(); // Prevent drawer toggle
                profileMenu.classList.toggle('hidden');
            });

            // Close profile menu when clicking outside
            document.addEventListener('click', (event) => {
                if (!profileImg.contains(event.target) && !profileMenu.contains(event.target)) {
                    profileMenu.classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>