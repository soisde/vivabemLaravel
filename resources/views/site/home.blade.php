@extends('layout.layout')

@section('tile', 'Home')

@section('conteudo')

    <!doctype html>
    <html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Fitmas - Gym & Fitness HTML Template</title>
        <meta name="description" content="Fitmas - Gym & Fitness HTML Template">
        <meta name="keywords" content="Fitmas - Gym & Fitness HTML Template">
        <meta name="robots" content="INDEX,FOLLOW">
    </head>

    <body>
        <!--********************************
        Código Inicia Aqui
        ******************************** -->

        <!--==============================
        Área do Herói
        ==============================-->
        <div class="hero-wrapper hero-2" id="hero">
            <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1"
                data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true"
                data-xl-arrows="true" data-ml-arrows="true">
                <!-- Slide 1 -->
                    <div class="hero-slider" data-bg-src="assets/img/my/banner1.png">
                        <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                            <img src="assets/img/hero/hero_shape_3-1.png" alt="img">
                        </div>
                        <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                            <img src="assets/img/hero/hero_shape_3-2.png" alt="img">
                        </div>
                        <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                            <img src="assets/img/hero/hero_shape_3-3.png" alt="img">
                        </div>
                    <!-- Elementos do slide 1 -->
                    <div class="container">
                        <div class="row justify-content-lg-end justify-content-center">
                            <div class="col-xl-6 col-lg-7 col-md-9">
                                <div class="hero-style2">
                                    <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Aumente sua</span>
                                    <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Força</h1>
                                    <span class="hero-subtitle fw-semibold" data-ani="slideinup"
                                        data-ani-delay="0.2s">COM Fitmas</span>
                                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                        <a href="contact.html" class="btn style-r0 style2">Agende uma Consulta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="hero-slider" data-bg-src="assets/img/my/banner2.png">
                    <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                        <img src="assets/img/hero/hero_shape_3-1.png" alt="img">
                    </div>
                    <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                        <img src="assets/img/hero/hero_shape_3-2.png" alt="img">
                    </div>
                    <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                        <img src="assets/img/hero/hero_shape_3-3.png" alt="img">
                    </div>
                    <!-- Elementos do slide 2 -->
                    <div class="container">
                        <div class="row justify-content-lg-end justify-content-center">
                            <div class="col-xl-6 col-lg-7 col-md-9">
                                <div class="hero-style2">
                                    <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Aumente sua</span>
                                    <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Força</h1>
                                    <span class="hero-subtitle fw-semibold" data-ani="slideinup"
                                        data-ani-delay="0.2s">COM Fitmas</span>
                                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                        <a href="contact.html" class="btn style-r0 style2">Agende uma Consulta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-arrow">
                <button data-slick-prev="#heroSlider2" class="slick-arrow slick-prev">ANT</button>
                <button data-slick-next="#heroSlider2" class="slick-arrow slick-next">PRÓX</button>
            </div>
        </div>
        <!--======== / Hero Section ========-->

    <!--==============================
        Service Area
        ==============================-->
    <div class="service-bg2-area" data-bg-src="assets/img/bg/service-bg2.png">
        <!--==============================
            BMI Area
            ==============================-->
        <div class="bmi-area-1 space">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="title-area mb-30">
                            <span class="sub-title">TESTE SEU IMC</span>
                            <h2 class="sec-title text-white fw-semibold">ÍNDICE DE MASSA CORPORAL</h2>
                            <p class="sec-text">O IMC é uma ferramenta amplamente utilizada para avaliar o peso corporal em
                                relação à altura. Ele pode fornecer uma indicação geral de se um indivíduo está dentro de
                                uma faixa de peso saudável.</p>
                        </div>
                        <div class="bmi-table mb-lg-0 mb-40">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">IMC</th>
                                        <th scope="col">STATUS DE PESO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Abaixo de 18.5</th>
                                        <td>Abaixo do Peso</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18.5 - 24.9</th>
                                        <td>Saudável</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">25.0 - 29.9</th>
                                        <td>Acima do Peso</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">30.0 - Acima</th>
                                        <td>Obeso</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="bmi-calculator-form">
                            <h4 class="form-title">Calcule Seu IMC:</h4>
                            <form class="bmi-form" id="form" name="bmiCalc">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input for="weight" class="form-control style-border"
                                                placeholder="Peso / KG" type="text" name="weight">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input for="height" class="form-control style-border"
                                                placeholder="Altura / CM" type="text" name="height">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control style-border" name="age"
                                                id="age" placeholder="Idade">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-border" name="sex"
                                                id="sex" placeholder="Sexo">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input for="bmi_result" class="form-control style-border" placeholder="Seu IMC"
                                        type="text" name="bmi">
                                </div>
                                <div class="form-group">
                                    <input for="bmi_message" placeholder="Isso Significa"
                                        class="form-control style-border" type="text" name="meaning">
                                </div>
                                <div class="btn style3">
                                    <input type="button" value="Calcular IMC" onClick="calculateBMI()">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

           <!--==============================
            Service Area 01
            ==============================-->
            <div class="service-area-1 space-bottom overflow-hidden">
                <div class="container">
                    <div class="title-area">
                        <span class="sub-title">Nossos Recursos</span>
                        <h2 class="sec-title text-white fw-semibold">SERVIÇOS QUE ESTAMOS OFERECENDO</h2>
                    </div>
                </div>
                <div class="container-fluid p-0">
                    <div class="row global-carousel service-slider-1 style2" data-slide-show="4" data-ml-slide-show="3"
                        data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
                        data-dots="false">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-1.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Toneladas de Equipamentos</a>
                                    </h4>
                                    <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque sagittis
                                    </p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-2.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Fileiras de Cardio</a></h4>
                                    <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque sagittis
                                    </p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-3.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Pumping Cardíaco</a></h4>
                                    <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque sagittis
                                    </p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-4.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Treinamento de Força</a>
                                    </h4>
                                    <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque sagittis
                                    </p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-1.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Toneladas de Equipamentos</a>
                                    </h4>
                                    <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque sagittis
                                    </p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-2.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Fileiras de Cardio</a></h4>
                                    <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque sagittis
                                    </p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-3.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Pumping Cardíaco</a></h4>
                                    <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque sagittis
                                    </p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="service-card">
                                <div class="service-card_icon">
                                    <img src="assets/img/icon/service-icon_1-4.svg" alt="img">
                                </div>
                                <div class="service-card_content">
                                    <h4 class="service-card_title h5"><a href="service-details.html">Treinamento de Força</a>
                                    </h4>
                                    <p class="service-card_text">Montes de Lacinia est, odio tpor volutpat rhoncus quisque sagittis
                                    </p>
                                    <a href="service-details.html" class="link-btn" tabindex="0">Leia Mais <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                </div>
            </div>
        </div>
        <div class="sec-shape2-bottom">
            <img src="assets/img/bg/sec-shape2-top.png" alt="img">
        </div>
    </div>

          <!--==============================
        Área de Programação
        ==============================-->
        <div class="schedule-area-1 space">
            <div class="container container2">
                <div class="title-area text-center">
                    <span class="sub-title">Nossas Aulas</span>
                    <h2 class="sec-title fw-semibold">NOSSA GRADE DE TREINAMENTO</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="schedule-tab-1">
                            <div class="filter-menu-active mb-50 text-center">
                                <button data-filter=".cat1" class="active btn style4 style-r0" type="button">TODOS
                                    EVENTOS</button>
                                <button class="btn style4 style-r0" data-filter=".cat2" type="button">CARDIO</button>
                                <button class="btn style4 style-r0" data-filter=".cat3" type="button">ACADEMIA LIVRE</button>
                                <button class="btn style4 style-r0" data-filter=".cat4" type="button">CORPO TOTAL
                                    </button>
                                <button class="btn style4 style-r0" data-filter=".cat5" type="button">CROSSFIT</button>
                            </div>
                            <div class="filter-active-cat1">
                                <div class="filter-item cat1">
                                    <div class="table-responsive">
                                        <table class="schedule-table table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">SEGUNDA-FEIRA</th>
                                                    <th scope="col">TERÇA-FEIRA</th>
                                                    <th scope="col">QUARTA-FEIRA</th>
                                                    <th scope="col">QUINTA-FEIRA</th>
                                                    <th scope="col">SEXTA-FEIRA</th>
                                                    <th scope="col">SÁBADO</th>
                                                    <th scope="col">DOMINGO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">06:00 - 07:00</th>
                                                    <td>
                                                        <span>Academia de Boxe</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Construção Corporal</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>CrossFit Pro</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Cardio Box</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Academia Livre</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">07:00 - 08:00</th>
                                                    <td></td>
                                                    <td class="active">
                                                        <span>Aula de Fitness</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Treino Intenso Pro</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Academia de Boxe</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">08:00 - 09:00</th>
                                                    <td>
                                                        <span>Trabalho de Bombeamento</span>
                                                        Daniel
                                                    </td>
                                                    <td rowspan="2"></td>
                                                    <td>
                                                        <span>Academia de Boxe</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Academia Livre</span>
                                                        Daniel
                                                    </td>
                                                    <td rowspan="2">
                                                        <span>Academia de Boxe</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">09:00 - 10:00</th>
                                                    <td>
                                                        <span>Academia de Boxe</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Aula de Fitness</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Aula de Yoga</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Academia de Boxe</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">10:00 - 11:00</th>
                                                    <td>
                                                        <span>Construção Corporal</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Trabalho de Bombeamento</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Aula de Fitness</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Academia Livre</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Aula de Yoga</span>
                                                        Daniel
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="filter-item cat2">
                                    <div class="table-responsive">
                                        <table class="schedule-table table">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">SEGUNDA-FEIRA</th>
                                                    <th scope="col">TERÇA-FEIRA</th>
                                                    <th scope="col">QUARTA-FEIRA</th>
                                                    <th scope="col">QUINTA-FEIRA</th>
                                                    <th scope="col">SEXTA-FEIRA</th>
                                                    <th scope="col">SÁBADO</th>
                                                    <th scope="col">DOMINGO</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">06:00 - 07:00</th>
                                                    <td>
                                                        <span>Academia de Boxe</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <span>Construção Corporal</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>CrossFit Pro</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>
                                                    <td rowspan="2">
                                                        <span>Cardio Box</span>
                                                        Daniel
                                                    </td>
                                                    <td>
                                                        <span>Academia Livre</span>
                                                        Daniel
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">07:00 - 08:00</th>
                                                    <td></td>
                                                    <td class="active">
                                                        <span>Aula de Fitness</span>
                                                        Daniel
                                                    </td>
                                                    <td></td>

                                                    <div class="filter-item cat3">
                                                        <div class="table-responsive">
                                                            <table class="schedule-table table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col"></th>
                                                                        <th scope="col">SEGUNDA-FEIRA</th>
                                                                        <th scope="col">TERÇA-FEIRA</th>
                                                                        <th scope="col">QUARTA-FEIRA</th>
                                                                        <th scope="col">QUINTA-FEIRA</th>
                                                                        <th scope="col">SEXTA-FEIRA</th>
                                                                        <th scope="col">SÁBADO</th>
                                                                        <th scope="col">DOMINGO</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">06:00 - 07:00</th>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Construção Corporal</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>CrossFit Pro</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td rowspan="2">
                                                                            <span>Cardio Box</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">07:00 - 08:00</th>
                                                                        <td></td>
                                                                        <td class="active">
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td rowspan="2">
                                                                            <span>Treino Intenso Pro</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">08:00 - 09:00</th>
                                                                        <td>
                                                                            <span>Trabalho de Bombeamento</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td rowspan="2"></td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td rowspan="2">
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">09:00 - 10:00</th>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Aula de Yoga</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">10:00 - 11:00</th>
                                                                        <td>
                                                                            <span>Construção Corporal</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Trabalho de Bombeamento</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Aula de Yoga</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="filter-item cat4">
                                                        <div class="table-responsive">
                                                            <table class="schedule-table table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col"></th>
                                                                        <th scope="col">SEGUNDA-FEIRA</th>
                                                                        <th scope="col">TERÇA-FEIRA</th>
                                                                        <th scope="col">QUARTA-FEIRA</th>
                                                                        <th scope="col">QUINTA-FEIRA</th>
                                                                        <th scope="col">SEXTA-FEIRA</th>
                                                                        <th scope="col">SÁBADO</th>
                                                                        <th scope="col">DOMINGO</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">06:00 - 07:00</th>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Construção Corporal</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>CrossFit Pro</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td rowspan="2">
                                                                            <span>Cardio Box</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">07:00 - 08:00</th>
                                                                        <td></td>
                                                                        <td class="active">
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td rowspan="2">
                                                                            <span>Pro Intense
                                                                                Workout</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">08:00 - 09:00</th>
                                                                        <td>
                                                                            <span>Trabalho de Bombeamento</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td rowspan="2"></td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td rowspan="2">
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">09:00 - 10:00</th>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Aula de Yoga</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">10:00 - 11:00</th>
                                                                        <td>
                                                                            <span>Construção Corporal</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Trabalho de Bombeamento</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Aula de Yoga</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="filter-item cat5">
                                                        <div class="table-responsive">
                                                            <table class="schedule-table table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col"></th>
                                                                        <th scope="col">SEGUNDA-FEIRA</th>
                                                                        <th scope="col">TERÇA-FEIRA</th>
                                                                        <th scope="col">QUARTA-FEIRA</th>
                                                                        <th scope="col">QUINTA-FEIRA</th>
                                                                        <th scope="col">SEXTA-FEIRA</th>
                                                                        <th scope="col">SÁBADO</th>
                                                                        <th scope="col">DOMINGO</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">06:00 - 07:00</th>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Construção Corporal</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>CrossFit Pro</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td rowspan="2">
                                                                            <span>Cardio Box</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">07:00 - 08:00</th>
                                                                        <td></td>
                                                                        <td class="active">
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td rowspan="2">
                                                                            <span>Pro Intense
                                                                                Workout</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">08:00 - 09:00</th>
                                                                        <td>
                                                                            <span>Trabalho de Bombeamento</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td rowspan="2"></td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td rowspan="2">
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">09:00 - 10:00</th>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Aula de Yoga</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Academia de Boxe</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th scope="row">10:00 - 11:00</th>
                                                                        <td>
                                                                            <span>Construção Corporal</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Trabalho de Bombeamento</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td>
                                                                            <span>Aula de Fitness</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Academia Livre</span>
                                                                            Daniel
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <span>Aula de Yoga</span>
                                                                            Daniel
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
        Video Area
        ==============================-->
        <div class="video-area-1">
            <div class="container">
                <div class="video-wrap">
                    <a data-bg-src="assets/img/normal/2.jpeg" href="https://www.youtube.com/watch?v=P7fi4hP_y80"
                        class="play-btn popup-video">
                        <i class="fa-sharp fa-solid fa-play"></i>
                    </a>
                </div>
            </div>
        </div>

        <!--==============================
    Área do Portfólio
==============================-->
<div class="portfolio-area-1" data-bg-src="assets/img/bg/portfolio-bg-1.png">

    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Nosso Portfólio</span>
            <h2 class="sec-title text-white fw-semibold">NOSSO PORTFÓLIO DE TRABALHO</h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="flip-gallery-area">
            <div class="flip-gallery">
                <ul class="flip-items">
                    <li>
                        <div class="gallery-card gallery-flip">
                            <div class="gallery-img">
                                <img src="assets/img/project/project1_1.png" alt="imagem do portfólio">
                            </div>
                            <div class="gallery-content">
                                <div class="media-left">
                                    <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                    <h4 class="gallery-content_title">Treinamento Fitness Cockfights Rumble</h4>
                                </div>
                                <a href="assets/img/project/project1_1.png" class="icon-btn popup-image">
                                    <i class="far fa-eye"></i>
                                </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="gallery-card gallery-flip">
                                    <div class="gallery-img">
                                        <img src="assets/img/project/project1_1.png" alt="imagem do portfólio">
                                    </div>
                                    <div class="gallery-content">
                                        <div class="media-left">
                                            <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                            <h4 class="gallery-content_title">Treinamento Fitness Cockfights Rumble</h4>
                                        </div>
                                        <a href="assets/img/project/project1_1.png" class="icon-btn popup-image">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="gallery-card gallery-flip">
                                    <div class="gallery-img">
                                        <img src="assets/img/project/project1_1.png" alt="imagem do portfólio">
                                    </div>
                                    <div class="gallery-content">
                                        <div class="media-left">
                                            <h6 class="gallery-content_subtitle">Premier Logistics</h6>
                                            <h4 class="gallery-content_title">Treinamento Fitness Cockfights Rumble</h4>
                                        </div>
                                        <a href="assets/img/project/project1_1.png" class="icon-btn popup-image">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

       <!--==============================
    Área WCU (Wellness and Conditioning Unit)
==============================-->
<div class="wcu-area-2 space">
    <div class="container container2">
        <div class="row justify-content-between">
            <div class="col-xl-6 align-self-center order-xl-2">
                <div class="wcu-thumb-wrap ms-xl-5 mb-xl-0 mb-40">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="wcu-thumb2">
                                <img src="assets/img/normal/wcu_2-11.webp" alt="img">
                            </div>
                            <div class="wcu-grid2 mt-4" data-bg-src="assets/img/bg/wcu_box-bg.png">
                                <div class="details">
                                    <span class="wcu-grid_text">
                                        <span class="counter-number">15000</span>+
                                        Estudantes Felizes e Bem-Sucedidos
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="wcu-grid2 mb-4 mt-sm-0 mt-4 bg-theme">
                                <div class="details">
                                    <span class="wcu-grid_text">
                                        <span class="counter-number">25</span>+ Anos de Experiência
                                    </span>
                                </div>
                            </div>
                            <div class="wcu-thumb2">
                                <img src="assets/img/normal/wcu_2-2.webp" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 order-xl-1">
                <div class="title-area">
                    <span class="sub-title">POR QUE NOS ESCOLHER</span>
                    <h2 class="sec-title fw-semibold">FORNECEMOS NOSSO <br> SUPORTE FITNESS CONFIÁVEL 100%</h2>
                    <p class="sec-text">Defina seus objetivos específicos de musculação. Determine o que você deseja alcançar
                        em termos de tamanho muscular, força e físico geral. Estabeleça metas realistas e mensuráveis
                        que guiarão seu plano de treinamento e nutrição.</p>
                    <div class="about-grid-wrap mt-40">
                        <div class="about-grid style2">
                            <div class="about-grid_icon">
                                <img src="assets/img/icon/wcu-icon_2-1.svg" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Instrutor Especializado</h4>
                                <p class="about-grid_text">Envio regular em 30 dias</p>
                            </div>
                        </div>
                        <div class="about-grid style2">
                            <div class="about-grid_icon">
                                <img src="assets/img/icon/wcu-icon_2-2.svg" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Equipamento Moderno</h4>
                                <p class="about-grid_text">Envio rápido em 24 horas</p>
                            </div>
                        </div>
                    </div>
                    <p class="sec-text">Implemente princípios de sobrecarga progressiva em seu treinamento. Aumente
                        gradualmente o peso, as repetições ou a intensidade de seus exercícios ao longo do tempo...</p>
                </div>
                <div class="btn-wrap mt-40">
                    <a href="about.html" class="btn style-r0">Agende uma Consulta</a>
                    <div class="about-info-wrap style2">
                        <div class="icon"><i class="fas fa-phone"></i></div>
                        <div class="details">
                            <p class="about-info-title">Ligue-nos 24/7</p>
                            <a class="about-info-link" href="tel:+25825692582">+236-3256.21456</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
    Fim da Área WCU 02
==============================-->

        <div class="bg-img-sec" data-bg-src="assets/img/bg/team-bg-2.png">
            <!--==============================
            team area 02
            ==============================-->
            <div class="team-area-2 space overflow-hidden">
                <div class="container container2">
                    <div class="title-area text-center text-sm-start">
                        <span class="sub-title">Nossos Membros</span>
                        <h2 class="sec-title text-white fw-semibold">CONHEÇA SEU TREINADOR</h2>
                    </div>
                </div>
                <div class="container-fluid p-0">
                    <div class="row global-carousel team-slider-2" data-slide-show="4" data-ml-slide-show="3"
                        data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
                        data-dots="false">
                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/team/team-2-1.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">George Edward</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/team/team-2-2.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">William Henry</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/team/team-2-3.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">Harper Victoria</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/team/team-2-4.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">Matthew Thomas</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/team/team-2-1.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">George Edward</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/team/team-2-2.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">William Henry</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/team/team-2-3.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">Harper Victoria</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="team-card2">
                                <div class="team-card_img">
                                    <img src="assets/img/team/team-2-4.png" alt="img">
                                </div>
                                <div class="team-card_content">
                                    <span class="team-card_subtitle">INSTRUTOR DE YOGA</span>
                                    <h4 class="team-card_title h5"><a href="team-details.html">Matthew Thomas</a></h4>
                                    <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                            class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

           <!--==============================
    Área de Contadores
==============================-->
<div class="counter-area-2 overflow-hidden">
    <div class="container container2">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-xl-auto counter-card_wrap">
                <div class="counter-card style2">
                    <div class="counter-card_icon">
                        <img src="assets/img/icon/counter-icon_2-1.svg" alt="ícone">
                    </div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">3658</span>+</h2>
                        <p class="counter-card_text">Clientes Satisfeitos</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-auto counter-card_wrap">
                <div class="counter-card style2">
                    <div class="counter-card_icon">
                        <img src="assets/img/icon/counter-icon_2-2.svg" alt="ícone">
                    </div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">658</span>+</h2>
                        <p class="counter-card_text">Membros Especializados</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-auto counter-card_wrap">
                <div class="counter-card style2">
                    <div class="counter-card_icon">
                        <img src="assets/img/icon/counter-icon_2-3.svg" alt="ícone">
                    </div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">368</span>+</h2>
                        <p class="counter-card_text">Equipamentos Modernos</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-auto counter-card_wrap">
                <div class="counter-card style2">
                    <div class="counter-card_icon">
                        <img src="assets/img/icon/counter-icon_2-4.svg" alt="ícone">
                    </div>
                    <div class="media-body">
                        <h2 class="counter-card_number"><span class="counter-number">153</span>+</h2>
                        <p class="counter-card_text">Toneladas de Colheita</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ad-slider">
    <div class="global-carousel" data-autoplay-speed="1" data-speed="10000">
        <h2 class="ad-slider_title">Fitmas <span>CENTRO DE FITNESS</span> </h2>
        <h2 class="ad-slider_title">Fitmas <span>CENTRO DE FITNESS</span> </h2>
    </div>
</div>

        <!--==============================
    Área de Metas
==============================-->
<section class="goal-area space">
    <div class="container container2">
        <div class="row">
            <div class="col-lg-6 order-lg-2">
                <div class="goal-thumb-2 mb-40 mb-lg-0">
                    <div class="img-1">
                        <img src="assets/img/normal/goal_2-2.webp" alt="img">
                    </div>
                    <div class="img-2 jump">
                        <img src="assets/img/normal/goal_2-1.webp" alt="img">
                    </div>
                    <div class="wcu-grid movingX">
                        <div class="icon">
                            <img src="assets/img/icon/wcu-icon_1-1.svg" alt="img">
                        </div>
                        <div class="details">
                            <h3 class="wcu-grid_year"><span class="counter-number">25</span>+</h3>
                            <span class="wcu-grid_text">Anos de Experiência</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="title-area">
                    <span class="sub-title">Metas da Fitmas
                    </span>
                    <h2 class="sec-title fw-semibold">LIBERTE SEU POTENCIAL TOTAL, ALCANCE SEUS OBJETIVOS DE FITNESS.</h2>
                </div>
                <div class="goal-grid-wrap">
                    <div class="about-grid style3">
                        <div class="about-grid_icon">
                            <img src="assets/img/icon/goal-icon_1-1.svg" alt="img">
                        </div>
                        <div class="about-grid_content">
                            <h4 class="about-grid_title">Treinamento de Fitness Gratuito</h4>
                            <p class="about-grid_text">Pedale em direção à forma física em nosso estúdio especializado de ciclismo
                                indoor. Equipado com bicicletas estacionárias...</p>
                        </div>
                    </div>
                    <div class="about-grid style3">
                        <div class="about-grid_icon">
                            <img src="assets/img/icon/goal-icon_1-2.svg" alt="img">
                        </div>
                        <div class="about-grid_content">
                            <h4 class="about-grid_title">Cardio e Força</h4>
                            <p class="about-grid_text">Pedale em direção à forma física em nosso estúdio especializado de ciclismo
                                indoor. Equipado com bicicletas estacionárias...</p>
                        </div>
                    </div>
                    <div class="btn-wrap">
                        <a class="btn style-r0" href="service-details.html">Saiba Mais</a>
                        <a class="btn btn-border style-r0" href="service-details.html">Ver Todos os Serviços</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
    Área de Chamada para Ação (CTA)
==============================-->
<section class="cta-area space" data-bg-src="assets/img/bg/cta-bg1.webp">
    <div class="container">
        <div class="row justify-content-lg-end justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="cta-wrap text-center text-lg-start">
                    <div class="title-area">
                        <span class="sub-title">Agende uma Consulta</span>
                        <h2 class="sec-title text-white fw-semibold">TENHA UMA CONSULTORIA GRATUITA AGORA MESMO!</h2>
                    </div>
                    <div class="btn-wrap mt-40">
                        <a href="about.html" class="btn style2 style-r0">Agendar Consulta</a>
                        <div class="about-info-wrap style3">
                            <div class="icon"><i class="fas fa-phone-volume"></i></div>
                            <div class="details">
                                <p class="about-info-title text-white">Precisa de Ajuda?</p>
                                <a class="about-info-link" href="tel:+25825692582">(+258) 2569 2582</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
    Área do Blog
==============================-->
<section class="blog-area-2 space">
    <div class="container container2">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 position-relative">
                <div class="blog_sec_title_static me-lg-3">
                    <div class="blog_sec_title_wrap">
                        <div class="title-area">
                            <span class="sub-title">Nossas Postagens no Blog
                            </span>
                            <h2 class="sec-title fw-semibold">LEIA NOSSAS ÚLTIMAS HISTÓRIAS</h2>
                            <p class="sec-text">Bem-vindo ao nosso blog de academia, onde compartilhamos insights valiosos, dicas e
                                inspiração para ajudá-lo em sua jornada para uma vida mais saudável...</p>
                        </div>
                        <a class="btn style-r0" href="blog.html">Ver Mais Postagens</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-6">
                <div class="blog-card style2">
                    <div class="blog-img">
                        <img src="assets/img/blog/blog_2_1.webp" alt="imagem do blog">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="blog.html">15 DE JUNHO DE 2023</a>
                            <a href="blog.html">COMPRAS</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Dominando as Máquinas: Um Guia
                                Iniciante para Equipamentos de Academia</a></h3>
                        <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i>
                            LEIA MAIS</a>
                    </div>
                </div>
                <!-- Repita os blocos de código para outras postagens do blog conforme necessário -->
            </div>
        </div>
    </div>
</section>


        <!-- Scroll To Top -->
        <div class="scroll-top">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
                </path>
            </svg>
        </div>


    </body>

    </html>

@endsection
