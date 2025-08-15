<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>POSITRON 2025</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/csslider/1.4.0/csslider.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/csslider/1.4.0/csslider-zen.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: rgb(12, 81, 145);
            color: white;
            overflow-x: hidden;
            position: relative;
            scroll-behavior: smooth;
            min-height: 100vh;
        }

        footer {
            background-color: #061f3e;
            bottom: 0;
            left: 0;
            width: 100%;
            color: #bbb;
            padding: 20px 10px;
            z-index: 10;
            transition: bottom 0.4s ease;
            text-align: center;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            /* logo kiri, menu kanan */
            align-items: center;
            /* vertikal rata tengah */
            padding: 0 2rem;
            /* jarak kiri-kanan */
        }

        .desktop-nav {
            display: flex;
            align-items: center;
        }

        .nav-menu {
            display: flex;
            gap: 2rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            font-family: 'Atlanta College', sans-serif;
            font-size: 1.1rem;
            text-transform: uppercase;
            color: white;
            margin: 0;
            line-height: 1.3;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        .nav-link {
            color: white !important;
            text-decoration: none;
            padding: 0.5rem 1rem;
        }

        .nav-link:hover {
            color: #ffd700;
            transform: translateY(-2px);
            text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.8);
        }

        .nav-link::before {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            background: linear-gradient(90deg, #ffd700, #ffa500);
            transition: width 0.3s ease;
            border-radius: 2px;
        }

        .nav-link:hover::before {
            width: 0;
        }

        /* Color coding for menu items */
        .nav-link.home {
            color: #ffb347;
        }

        .nav-link.filosofi {
            color: #ffb347;
        }

        .nav-link.guide {
            color: #ffb347;
        }

        .nav-link.group {
            color: #ffb347;
        }

        .nav-link.home:hover,
        .nav-link.filosofi:hover,
        .nav-link.guide:hover,
        .nav-link.group:hover {
            color: #ffd700;
        }

        /* Hamburger Menu - Hidden by default */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 10px;
            z-index: 20;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: white;
            margin: 3px 0;
            transition: 0.3s;
            border-radius: 2px;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }

        /* Mobile Navigation - Dropdown Style */
        .mobile-nav {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 15;
            background: linear-gradient(135deg, #6b7a99 0%, #8b9bb3 50%, #6b7a99 100%);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transform: translateY(-100%);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .mobile-nav.active {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .nav-menu.mobile {
            position: static;
            width: 100%;
            height: auto;
            background: transparent;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            gap: 0;
            padding: 20px 0;
            box-shadow: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                height: 100px;
                background-size: cover;
                background-position: center;
            }

            .nav-container {
                padding: 0 20px;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                gap: 0;
            }

            .logo {
                transform: scale(0.6);
                transform-origin: left center;
            }

            .logo-icon {
                width: 111px;
                height: 151px;
            }

            .logo-text {
                font-size: 28px;
            }

            /* Hide desktop menu */
            .nav-menu {
                display: none;
            }

            .desktop-nav {
                display: none;
            }

            /* Show hamburger menu */
            .hamburger {
                display: flex;
            }

            /* Mobile menu styles */
            .nav-menu.mobile {
                display: flex;
            }

            .nav-menu.mobile .nav-link {
                font-size: 24px;
                /* Increased from 18px to 24px */
                font-weight: 600;
                letter-spacing: 1px;
                padding: 12px 30px;
                text-align: center;
                border-bottom: 1px solid rgba(255, 255, 255, 0.2);
                width: 100%;
                display: block;
                transition: all 0.3s ease;
            }

            .nav-menu.mobile .nav-link:last-child {
                border-bottom: none;
            }

            .nav-menu.mobile .nav-link:hover {
                background: rgba(255, 255, 255, 0.1);
                transform: none;
            }

            /* Mobile menu animation */
            .nav-menu.mobile .nav-item {
                opacity: 0;
                transform: translateY(-10px);
                animation: slideInDown 0.3s ease forwards;
            }

            .nav-menu.mobile .nav-item:nth-child(1) {
                animation-delay: 0.1s;
            }

            .nav-menu.mobile .nav-item:nth-child(2) {
                animation-delay: 0.2s;
            }

            .nav-menu.mobile .nav-item:nth-child(3) {
                animation-delay: 0.3s;
            }

            .nav-menu.mobile .nav-item:nth-child(4) {
                animation-delay: 0.4s;
            }
        }

        @keyframes slideInDown {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="nav-container">
            <div class="logo">
                <div class="logo-icon"></div>
            </div>

            <!-- Desktop Navigation -->
            <nav class="desktop-nav">
                <ul class="nav-menu">
                    <li class="nav-item"><a class="nav-link text-dark px-3" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-dark px-3" href="/Filosofi">Filosofi</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-dark px-3" href="/group">Timeline</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-dark px-3" href="/kontak">Guide</a></li>
                    <li class="nav-item"><a class="nav-link text-dark px-3" href="/group">Group</a></li>
                    <li class="nav-item"><a class="nav-link text-dark px-3" href="/kontak">Contact</a></li>
                </ul>
            </nav>

            <!-- Hamburger Menu -->
            <div class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <nav class="mobile-nav">
            <ul class="nav-menu mobile atlanta-font" id="mobileMenu">
                <li class="nav-item"><a class="nav-link text-dark px-3" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link text-dark px-3" href="/Filosofi">Filosofi</a></li>
                <li class="nav-item"><a class="nav-link text-dark px-3" href="/timeline">Timeline</a></li>
                <li class="nav-item"><a class="nav-link text-dark px-3" href="/kontak">Guide</a></li>
                <li class="nav-item"><a class="nav-link text-dark px-3" href="/group">Group</a></li>
                <li class="nav-item"><a class="nav-link text-dark px-3" href="/kontak">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div>
            <p class="mb-1">© {{ date('Y') }} POSITRON 2025</p>
            <small>Departemen Teknik Elektro dan Informatika - Universitas Negeri Malang</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')

</body>

</html>
