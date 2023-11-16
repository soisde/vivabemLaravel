<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fitmas - Modelo HTML para Academia e Fitness</title>
    <meta name="description" content="Fitmas - Modelo HTML para Academia e Fitness">
    <meta name="keywords" content="Fitmas - Modelo HTML para Academia e Fitness">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Metas Específicas para Dispositivos Móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Coloque o favicon.ico no diretório raiz -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
     Google Fonts
     ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ asset('css/font.css') }}" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-support.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.flipster.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    {{-- <nav>
        <ul>
            <li><a href="{{ url('/') }}">Página Inicial</a></li>
            <li><a href="{{ '/sobre' }}">Sobre</a></li>
            <li><a href="{{ '/modalidade' }}">Modalidade</a></li>
            <li><a href="{{ '/treino' }}">Treino</a></li>
            <li><a href="{{ '/noticias' }}">Notícia</a></li>
            <li><a href="{{ '/contato' }}">Contato</a></li>
        </ul>
    </nav> --}}

    <!--==============================
         Carregamento
        ==============================-->
    <div class="preloader ">
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="Pesquisar aqui..">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href="index.html"><img src="assets/img/logoVivaBem.svg"style="height: 170px; width: 210px; alt="logo></a>
                    </div>
                    <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma instalação dedicada à aptidão física e exercícios, geralmente oferecendo uma variedade</p>
                    <div class="social-btn">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Links Rápidos</h3>
                <ul class="menu">
                    <li><a href="{{ asset('sobre') }}">Sobre Nós</a></li>
                    <li><a href="project-details.html">Nossa Missão</a></li>
                    <li><a href="team.html">Conheça as Equipes</a></li>
                    <li><a href="project.html">Nossos Projetos</a></li>
                    <li><a href="{{ asset('contato') }}">Contate-Nos</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
        Menu Móvel
        ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area text-center">
            <button class="menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logoVivaBem.svg"style="height: 170px; width: 210px; alt="logo></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="#">Página Inicial</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Páginas</a>
                        <ul class="sub-menu">
                            <li><a href="team.html">Página da Equipe</a></li>
                            <li><a href="team-2.html">Página da Equipe 02</a></li>
                            <li><a href="team-details.html">Detalhes da Equipe</a></li>
                            <li><a href="gallery.html">Página da Galeria</a></li>
                            <li><a href="gallery-2.html">Página da Galeria 02</a></li>
                            <li><a href="project.html">Página do Projeto</a></li>
                            <li><a href="project-details.html">Detalhes do Projeto</a></li>
                            <li><a href="shop.html">Página da Loja</a></li>
                            <li><a href="shop-details.html">Detalhes da Loja</a></li>
                            <li><a href="pricing.html">Página de Preços</a></li>
                            <li><a href="error.html">Página de Erro</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Projeto</a>
                        <ul class="sub-menu">
                            <li><a href="project.html">Projetos</a></li>
                            <li><a href="project-details.html">Detalhes do Projeto</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Serviço</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Serviço</a></li>
                            <li><a href="service-details.html">Detalhes do Serviço</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-2.html">Blog 02</a></li>
                            <li><a href="blog-details.html">Detalhes do Blog</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ asset('contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
     Área do Cabeçalho
        ==============================-->
    <header class="nav-header header-layout2">
        <div class="header-top d-lg-block d-none">
            <div class="container-fluid">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-envelope"></i><a
                                        href="mailto:info@gmail.com">suporte@gmail.com</a></li>
                                <li><i class="far fa-clock"></i>Seg - Sab: 8h00-19h00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <div class="social-links">
                                        <span class="me-3">Visite nossas páginas sociais</span>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Área do Menu Principal -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-start justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="index.html"><img src="assets/img/logoVivaBem.svg"style="height: 170px; width: 210px; alt="logo></a>
                            </div>
                        </div>
                        <div class="col-auto m-lg-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="#">Página Inicial</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('sobre') }}">Sobre</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Serviço</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Serviço</a></li>
                                            <li><a href="service-details.html">Detalhes do Serviço</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Páginas</a>
                                        <ul class="sub-menu">
                                            <li><a href="team.html">Página da Equipe</a></li>
                                            <li><a href="team-2.html">Página da Equipe 02</a></li>
                                            <li><a href="team-details.html">Detalhes da Equipe</a></li>
                                            <li><a href="gallery.html">Página da Galeria</a></li>
                                            <li><a href="gallery-2.html">Página da Galeria 02</a></li>
                                            <li><a href="project.html">Página do Projeto</a></li>
                                            <li><a href="project-details.html">Detalhes do Projeto</a></li>
                                            <li><a href="shop.html">Página da Loja</a></li>
                                            <li><a href="shop-details.html">Detalhes da Loja</a></li>
                                            <li><a href="pricing.html">Página de Preços</a></li>
                                            <li><a href="error.html">Página de Erro</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ asset('noticias') }}">Noticias</a></li>
                                            <li><a href="blog-2.html">Blog 02</a></li>
                                            <li><a href="blog-details.html">Detalhes do Blog</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('contato') }}">Contato</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"><i
                                        class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-xxl-block d-none">
                            <div class="navbar-right-desc">
                                <i class="fas fa-phone-volume"></i><a href="tel:+2590256215">+259 (0) 256 215</a>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <a href="contact.html" class="btn style2 style-r0 d-xl-block d-none">
                                    Obter um Orçamento
                                </a>
                                <button type="button" class="btn style-r0 btn-border3 sideMenuToggler">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('conteudo')
    </main>


   <!--==============================
            Área do Rodapé
        ==============================-->
        <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer-1-bg.png">
            @yield('rodape')

            <div class="container">
                <div class="widget-area">
                    <div class="row justify-content-between">
                        <div class="col-md-6 col-xl-3">
                            <div class="widget footer-widget">
                                <div class="widget-about">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/img/logoVivaBem.svg"style="height: 170px; width: 210px; alt="logo></a>
                                    </div>
                                    <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma instalação dedicada à aptidão física e ao exercício, geralmente oferecendo uma variedade de serviços.</p>
                                    <div class="social-btn">
                                        <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                        <a href="https://linkedin.com/" tabindex="0"><i
                                                class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.discord.com/" tabindex="0"><i
                                                class="fab fa-discord"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Links Rápidos</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="about.html">Sobre Nós</a></li>
                                        <li><a href="service-details.html">Nossa Missão</a></li>
                                        <li><a href="team.html">Conheça as Equipes</a></li>
                                        <li><a href="project.html">Nossos Projetos</a></li>
                                        <li><a href="{{ asset('contato') }}">Entre em Contato</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">Galeria</h3>
                                <div class="sidebar-gallery">
                                    <div class="gallery-thumb">
                                        <img src="assets/img/widget/insta-feed1.webp" alt="Imagem da Galeria">
                                        <a href="assets/img/widget/insta-feed1.webp" class="gallery-btn popup-image"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="gallery-thumb">
                                        <img src="assets/img/widget/insta-feed2.webp" alt="Imagem da Galeria">
                                        <a href="assets/img/widget/insta-feed2.webp" class="gallery-btn popup-image"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="gallery-thumb">
                                        <img src="assets/img/widget/insta-feed3.webp" alt="Imagem da Galeria">
                                        <a href="assets/img/widget/insta-feed3.webp" class="gallery-btn popup-image"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="gallery-thumb">
                                        <img src="assets/img/widget/insta-feed4.webp" alt="Imagem da Galeria">
                                        <a href="assets/img/widget/insta-feed4.webp" class="gallery-btn popup-image"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="gallery-thumb">
                                        <img src="assets/img/widget/insta-feed5.webp" alt="Imagem da Galeria">
                                        <a href="assets/img/widget/insta-feed5.webp" class="gallery-btn popup-image"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                    <div class="gallery-thumb">
                                        <img src="assets/img/widget/insta-feed6.webp" alt="Imagem da Galeria">
                                        <a href="assets/img/widget/insta-feed6.webp" class="gallery-btn popup-image"><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">Receba a Newsletter</h3>
                                <p class="footer-text">Receba 10% de desconto em seu primeiro pedido! Aproveite.</p>
                                <form class="newsletter-form">
                                    <div class="form-group">
                                        <i class="far fa-envelope"></i>
                                        <input class="form-control" type="email" placeholder="Endereço de E-mail"
                                            required="">
                                    </div>
                                    <button type="submit" class="btn style-r0 style2">Inscrever-se</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-auto align-self-center">
                            <p class="copyright-text text-center">© 2023 <a href="#">Fitmas.</a> Todos os Direitos
                                Reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
    </footer>

    <!--==============================
        All Js File
        ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Flip Slider -->
    <script src="{{ asset('assets/js/jquery.flipster.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('assets/js/bmi.calculator.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
