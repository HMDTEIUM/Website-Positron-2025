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
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

  <style>
    main section {
      scroll-snap-align: start;
    }

    @font-face {
      font-family: 'ScribbleMarker';
      src: url("{{ asset("fonts/ScribbleMarker.otf") }}") format('opentype') local('ScribbleMarker');
      font-weight: normal;
      font-style: normal;
    }

    .scribble-font {
      font-family: 'ScribbleMarker', sans-serif;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: rgb(12, 81, 145);
      color: white;
      overflow-x: hidden;
      position: relative;
      scroll-behavior: smooth;
      min-height: 100vh;
    }

    #mainNavbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1030;
      transition: all 0.4s ease;
      background-color: #ffffff;
      color: white;
      border: none;
      font-family: sans-serif;
      font-weight: 800;
      font-size: clamp(1.0rem, 1vw, 1.5rem)
    }

    #mainNavbar .navbar-nav .nav-link {
      font-family: sans-serif;  
      font-weight: 800;
      font-size: clamp(1.0rem, 1vw, 1.5rem)
    }

    #mainNavbar .navbar-collapse {
      display: none;
    }

    #mainNavbar .navbar-collapse.show {
      display: block;
    }

    @media (min-width: 992px) {
      #mainNavbar .navbar-collapse {
        display: flex !important;
        flex-basis: auto;
      }

      #mainNavbar .navbar-nav {
        flex-direction: row;
      }

      #mainNavbar .nav-link {
        padding-left: 1rem;
        padding-right: 1rem;
      }

      /* Hide hamburger on desktop */
      .navbar-toggler {
        display: none !important;
      }
    }

    #mainNavbar.scrolled,
    #mainNavbar.mobile-visible {
      background-color: #ffffff !important;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .navbar-nav .nav-link {
      position: relative;
      padding-bottom: 5px;
      font-weight: 500;
      font-size: 1.2rem;
      transition: color 0.3s ease;
    }

    .navbar-nav .nav-link::after {
      content: "";
      position: absolute;
      left: 10%;
      bottom: 0;
      width: 0%;
      height: 2px;
      background-color: #000000ff;
      transition: width 0.3s ease-in-out;
    }

    .navbar-nav .nav-link:hover::after {
      width: 80%;
    }

    .hamburger {
      width: 30px;
      height: 20px;
      position: relative;
      cursor: pointer;
      transition: transform 0.3s ease-in-out;
    }

    .hamburger span,
    .hamburger::before,
    .hamburger::after {
      content: '';
      position: absolute;
      height: 3px;
      width: 100%;
      background-color: #000;
      transition: 0.3s;
      border-radius: 4px;
    }

    .hamburger span {
      top: 50%;
      transform: translateY(-50%);
    }

    .hamburger::before {
      top: 0;
    }

    .hamburger::after {
      bottom: 0;
    }

    .navbar-toggler:not(.collapsed) .hamburger::before {
      transform: rotate(45deg);
      top: 50%;
    }

    .navbar-toggler:not(.collapsed) .hamburger::after {
      transform: rotate(-45deg);
      top: 50%;
      bottom: auto;
    }

    .navbar-toggler:not(.collapsed) .hamburger span {
      opacity: 0;
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

    main {
      padding-top: 60px;
    }

    @media (max-width: 991.98px) {
      #mainNavbar {
        background-color: #fff !important;
      }
    }
  </style>
</head>

<body>
  <nav id="mainNavbar" class="navbar">
    <div class="container">
      <a class="navbar-brand text-black fs-4" href="/">
        <i class="bi bi-lightning-fill me-1 text-warning"></i> POSITRON 2025
      </a>
      <button class="navbar-toggler border-0 collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#nav">
        <div class="hamburger"><span></span></div>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="nav">
        <ul class="navbar-nav gap-2">
          <li class="nav-item"><a class="nav-link text-dark px-3" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link text-dark px-3" href="/Filosofi">Filosofi</a></li>
          <li class="nav-item"><a class="nav-link text-dark px-3" href="/timeline">Timeline</a></li>
          <li class="nav-item"><a class="nav-link text-dark px-3" href="/kontak">Guide</a></li>
          <li class="nav-item"><a class="nav-link text-dark px-3" href="/group">Group</a></li>
          <li class="nav-item"><a class="nav-link text-dark px-3" href="/kontak">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

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

  <script>
    const navbar = document.getElementById('mainNavbar');
    const footer = document.querySelector('footer');
    let lastScrollTop = 0;

    window.addEventListener('load', () => {
      if (window.innerWidth >= 992 && window.scrollY <= 10) {
        navbar.classList.add('transparent-desktop');
        navbar.classList.remove('scrolled');
      } else {
        navbar.classList.add('scrolled');
        navbar.classList.remove('transparent-desktop');
      }
    });

    window.addEventListener('scroll', () => {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      if (window.innerWidth >= 992) {
        if (scrollTop > 10) {
          navbar.classList.remove('transparent-desktop');
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.add('transparent-desktop');
          navbar.classList.remove('scrolled');
        }

        if (scrollTop > lastScrollTop) {
          navbar.style.top = "-90px";
          // footer.style.bottom = "-90px";
        } else {
          navbar.style.top = "0";
          // footer.style.bottom = "0";
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
      }
    });

  </script>

</body>

</html>