@extends('layout.layout')

@section('tile', 'Noticias')

@section('conteudo')

<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Fitmas - Modelo HTML para Academia e Fitness</title>
        <meta name="description" content="Fitmas - Modelo HTML para Academia e Fitness">
        <meta name="keywords" content="Fitmas - Modelo HTML para Academia e Fitness">
        <meta name="robots" content="INDEX,FOLLOW">
    </head>

    <!--==============================
    Breadcrumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
        <!-- Imagem animada de fundo/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Nossas Noticias</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ asset('/') }}">INÍCIO</a></li>
                            <li class="active">PÁGINA DE NOTICIA</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="blog-area space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_s2_1.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">15 DE JUNHO DE 2023</a>
                                <a href="blog.html">COMPRAS</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Dominando as Máquinas: Um Guia para Iniciantes sobre Equipamentos de Academia</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> LEIA MAIS</a></a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_s2_2.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">15 DE JUNHO DE 2023</a>
                                <a href="blog.html">COMPRAS</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Dominando a Academia: Estratégias Essenciais para Maximizar Seus Treinos</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> LEIA MAIS</a></a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_s2_3.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">15 DE JUNHO DE 2023</a>
                                <a href="blog.html">COMPRAS</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Quebrando a Barreira do Suor: Abraçando o Desafio do Fitness no Fitmas</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> LEIA MAIS</a></a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_s2_4.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">15 DE JUNHO DE 2023</a>
                                <a href="blog.html">COMPRAS</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Alimente Sua Jornada Fitness: Dicas e Conselhos de Nutrição para Praticantes de Academia</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> LEIA MAIS</a></a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_s2_5.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">15 DE JUNHO DE 2023</a>
                                <a href="blog.html">COMPRAS</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Liberte Seu Atleta Interior: Descubra Seu Verdadeiro Potencial no Fitmas</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> LEIA MAIS</a></a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="assets/img/blog/blog_s2_6.png" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">15 DE JUNHO DE 2023</a>
                                <a href="blog.html">COMPRAS</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Alimente a Sua Jornada Fitness: Dicas de Nutrição e Conselhos para Praticantes de Academia</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> LEIA MAIS</a></a>
                        </div>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="fas fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Enter Keyword">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget">
                            <h3 class="widget_title">Postagens Recentes</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post1.png" alt="Imagem do Blog"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Estratégias Essenciais para Maximizar...</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">25 Jun, 2023</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post2.png" alt="Imagem do Blog"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Treinamento Funcional na sua Rotina...</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">25 Jun, 2023</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="assets/img/blog/recent-post3.png" alt="Imagem do Blog"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Dicas de Nutrição para Praticantes de Academia</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html">25 Jun, 2023</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categorias</h3>
                            <ul>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Treino de Boxe</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Aula de Musculação</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Aula de Meditação</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Treino Mental de Yoga</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa-solid fa-arrow-right"></i>Aula de CrossFit</a>
                                </li>
                            </ul>
                        </div>


                        <div class="widget widget_gallery">
                            <h3 class="widget_title">Galeria de Projetos</h3>
                            <div class="insta-feed">
                                <a href="blog.html"><img src="assets/img/widget/widget1-1.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-2.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-3.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-4.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-5.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                                <a href="blog.html"><img src="assets/img/widget/widget1-6.png" alt="img">
                                    <i class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Tags Populares</h3>
                            <div class="tagcloud">
                                <a href="blog.html">CONSELHO</a>
                                <a href="blog.html">FIT</a>
                                <a href="blog.html">AUTOR</a>
                                <a href="blog.html">FAMÍLIA</a>
                                <a href="blog.html">Fitmas</a>
                                <a href="blog.html">SAÚDE</a>
                                <a href="blog.html">FITNESS</a>
                                <a href="blog.html">ACADEMIA</a>
                                <a href="blog.html">JUIZ</a>
                                <a href="blog.html">SOLUÇÃO</a>
                                <a href="blog.html">TREINAMENTO</a>
                            </div>
                        </div>
                        </aside>
                        </div>
                        </div>
                        </div>
                        </section>


@endsection
