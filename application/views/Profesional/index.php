      <?php
       include 'assets/view/header.php';
       ?>

        <div class="header-home-talent__container--fixed-content">
            <section class="header-home-talent__container">
                <h1 class="header-title hh-mega-l">Empleos y proyectos freelance digitales</h1>
                <p class="header-subtitle hh-light-l hide-under-l">Donde las mejores empresas buscan el talento digital</p>
            </section>

            <section class="home-search__container-tabs js-btn-group">
                <div class="home-search__tabs">
                    <div class="home-search__tabs-wrapper">
                        <a id="js-btn-prof" type="button" class="btn btn-border btn-white home-search-btn active-btn" data-search-target="ofertas-empleo/" href="javascript:void(0)">Ofertas  <span class="hide-under-l">de empleo</span></a>
                        <a id="js-btn-emp" type="button" class="btn  btn-border btn-white home-search-btn" data-search-target="empresas/" href="javascript:void(0)">Empresas</a>
                    </div>
                </div>
            </section>

            <script>
                // add video markup only if screen is bigger than mobile resolution

                var html = '<section class="header-video__container">';
                html += '<video autoplay="autoplay" preload="auto" loop="loop" poster="http://cdn.nubelo.com/resources/img/home-talent/home-talent-header-video-poster.png" id="" class="header-home__video">';
                html += '<source src="http://cdn.nubelo.com/resources/video/home-talent-header-video.mp4?v=';
                html += 63;
                html += '" type="video/mp4">';
                html += '</video></section>';

                if (window.innerWidth >= 480) {
                    document.write(html);
                }
            </script>

            <section class="home-search__container full--darker-grey">
                <form class="home-search__form" id="js-home-search" role="form" method="get" action="<?php echo base_url('Empleos/buscar')?>">
                    <div class="home-search__wrapper form-group">
                        <input type="search" autofocus name="query" class="form-control home-search__input" id="js-search" placeholder=" Busca ofertas de empleo o proyectos freelance aquí... " />
                        <i id="js-search-icon" aria-hidden="true" class="n-icon-search home-search__icon hide-under-s"></i>
                    </div>
                </form>
            </section>
            <div class="header-overlay_pattern"></div>
            <!-- pattern en el background only home-->

        </div>



    </header>
    <main class="home-content full--white js-main-content floating-container-shadow">
        <div class="home-talent__content ">

            <section class="home-talent-tabs full--white">

                <h2 class="hh-mega-m">¿Cómo funciona Nubelo para profesionales?</h2>

                <!-- Tab Nav -->
                <div class="component-tabs-navigator">
                    <ul class="nav nav-tabs" role="tablist">

                        <li class="nav-tab-item js-nav-tab-item active" data-tab-name="tabSearchOffers">
                            <a href="javascript:void()" data-target="#tabSearchOffers" aria-controls="tabSearchOffers" role="tab" data-toggle="tab"><span class="hide-under-s">Busco ofertas de </span>empleo</a>
                        </li>
                        <li class="nav-tab-item js-nav-tab-item " data-tab-name="tabSearchJobs">
                            <a href="javascript:void()" data-target="#tabSearchJobs" aria-controls="tabSearchJobs" role="tab" data-toggle="tab"><span class="hide-under-s">Busco proyectos </span>freelance</a>
                        </li>

                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content component-tabs-content">
                    <div role="tabpanel" class="tab-pane active" id="tabSearchOffers">

                        <div class="big-numbered-list">
                            <ul class="big-numbered-list__list">

                                <li class="big-numbered-list__item">
                                    <span class="big-numbered-list__numeral">1</span>
                                    <h4 class="big-numbered-list__title">Completa tu perfil</h4>
                                    <p class="big-numbered-list__text">Regístrate en Nubelo totalmente gratis y completa tu perfil profesional. Define tus preferencias laborales, habilidades, experiencia laboral y formación.</p>
                                </li>

                                <li class="big-numbered-list__item">
                                    <span class="big-numbered-list__numeral">2</span>
                                    <h4 class="big-numbered-list__title">Envía candidaturas</h4>
                                    <p class="big-numbered-list__text">Busca ofertas de empleo y postúlate a las que te interesen con un simple click.</p>
                                </li>

                                <li class="big-numbered-list__item">
                                    <span class="big-numbered-list__numeral">3</span>
                                    <h4 class="big-numbered-list__title">Perfect match</h4>
                                    <p class="big-numbered-list__text">Te recomendamos los mejores trabajos para tu perfil. Recíbelos vía email o directamente en tu móvil con la app de Nubelo. Además puedes aceptar o rechazar entrevistas laborales según tu interés, con un simple gesto.</p>
                                </li>

                                <li class="big-numbered-list__item">
                                    <span class="big-numbered-list__numeral">4</span>
                                    <h4 class="big-numbered-list__title">Sigue y valora a empresas</h4>
                                    <p class="big-numbered-list__text">Valora las empresas donde hayas trabajado y ayuda a otros profesionales a decidir su futuro laboral. Además puedes seguirlas y serás el primero en conocer sus ofertas de empleo.</p>
                                </li>

                            </ul>
                        </div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="tabSearchJobs">

                        <div class="big-numbered-list">
                            <ul class="big-numbered-list__list">

                                <li class="big-numbered-list__item">
                                    <span class="big-numbered-list__numeral">1</span>
                                    <h4 class="big-numbered-list__title">Completa tu perfil</h4>
                                    <p class="big-numbered-list__text">Regístrate en Nubelo totalmente gratis y completa tu perfil profesional. Define tus preferencias laborales, habilidades, experiencia laboral y formación.</p>
                                </li>

                                <li class="big-numbered-list__item">
                                    <span class="big-numbered-list__numeral">2</span>
                                    <h4 class="big-numbered-list__title">Envía propuestas</h4>
                                    <p class="big-numbered-list__text">Busca proyectos freelance y envía propuestas a los proyectos que te interesen definiendo las fases y el precio.</p>
                                </li>

                                <li class="big-numbered-list__item">
                                    <span class="big-numbered-list__numeral">3</span>
                                    <h4 class="big-numbered-list__title">Perfect match</h4>
                                    <p class="big-numbered-list__text">Te recomendamos los mejores trabajos para tu perfil. Recíbelos vía email o directamente en tu móvil con la app de Nubelo. Además, puedes chatear con los clientes y negociar precios y condiciones.</p>
                                </li>

                                <li class="big-numbered-list__item">
                                    <span class="big-numbered-list__numeral">4</span>
                                    <h4 class="big-numbered-list__title">Trabaja online</h4>
                                    <p class="big-numbered-list__text">Utiliza nuestras herramientas online para trabajar cómodamente gestionando mensajes, archivos y pagos.
                                        <br />Finalmente pide una valoración al cliente y construye tu reputación laboral online.</p>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

            </section>
            <!-- /.home-talent-tabs  -->

            <section class="home-client-category__container full--lighter-grey">
                <h2 class="hh-mega-m">¿Qué trabajos encontrarás en Nubelo?</h2>

                <div class="display-category__row">
                    <div class="display-category__cell display-category--programming">
                        <div>
                            <div class="card" style="background-image: url('../cdn.nubelo.com/resources/img/home-category-icons/home-category-item_01.png');">
                                <div class="card-image">
                                    <div class="card-image__content card-image__button--trabajos">


                                        <a href="trabajos/desarrollo-web-y-movil.html" class="card-image__button btn btn-lg btn-white">Ver trabajos</a>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Desarrollo web y móvil</h4>
                                    <p class="card-text"> Front-end · Back-end · Full-stack · iOS · Android
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="display-category__cell display-category--design">
                        <div>
                            <div class="card" style="background-image: url('../cdn.nubelo.com/resources/img/home-category-icons/home-category-item_02.png');">
                                <div class="card-image">
                                    <div class="card-image__content card-image__button--trabajos">


                                        <a href="trabajos/diseno-y-multimedia.html" class="card-image__button btn btn-lg btn-white">Ver trabajos</a>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Diseño y creatividad</h4>
                                    <p class="card-text"> UX/UI · Logos · Vídeo · Ilustración
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="display-category__cell display-category--marketing">
                        <div>
                            <div class="card" style="background-image: url('../cdn.nubelo.com/resources/img/home-category-icons/home-category-item_03.png');">
                                <div class="card-image">
                                    <div class="card-image__content card-image__button--trabajos">


                                        <a href="trabajos/marketing-y-ventas.html" class="card-image__button btn btn-lg btn-white">Ver trabajos</a>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Marketing digital</h4>
                                    <p class="card-text"> SEO · SEM · CRM
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="display-category__cell display-category--it hide-under-s">
                        <div>
                            <div class="card" style="background-image: url('../cdn.nubelo.com/resources/img/home-category-icons/home-category-item_04.png');">
                                <div class="card-image">
                                    <div class="card-image__content card-image__button--trabajos">


                                        <a href="trabajos/informatica-y-telecomunicaciones.html" class="card-image__button btn btn-lg btn-white">Ver trabajos</a>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Ingeniería de software</h4>
                                    <p class="card-text"> Software · Sistemas · BBDD · .NET · C#
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="display-category__cell display-category--writing">
                        <div>
                            <div class="card" style="background-image: url('../cdn.nubelo.com/resources/img/home-category-icons/home-category-item_05.png');">
                                <div class="card-image">
                                    <div class="card-image__content card-image__button--trabajos">


                                        <a href="trabajos/redaccion-y-traduccion.html" class="card-image__button btn btn-lg btn-white">Ver trabajos</a>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Redacción y traducción </h4>
                                    <p class="card-text"> Blogs · Periodismo · Contenido Web
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="display-category__cell display-category--apps hide-under-s">
                        <div>
                            <div class="card" style="background-image: url('../cdn.nubelo.com/resources/img/home-category-icons/home-category-item_06.png');">
                                <div class="card-image">
                                    <div class="card-image__content card-image__button--trabajos">


                                        <a href="trabajos/servicios-empresariales.html" class="card-image__button btn btn-lg btn-white">Ver trabajos</a>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Servicios empresariales</h4>
                                    <p class="card-text"> Contabilidad · RRHH · Consultoría
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.home-categories__container -->

            <section class="home-talent-projects__container">
                <h2 class="hh-mega-m">Últimos trabajos publicados</h2>

                <div class="home-talent-projects__list-container">

                    <div class="home-talent-projects__list-column home-talent-projects__list-column--jobs">

                        <h3 class="home-talent-projects__list-column__header">Ofertas de empleo</h3>

                        <ul class="home-talent-projects__list">
                            <li class="home-talent-projects__item">
                                <a href="proyecto/modelador-animador-cinema4d.html" class="home-talent-project__link">
                                    <h5 class="home-talent-project__title hh-xxs">
                                        Modelador / animador Cinema4d
                                    </h5>
                                </a>
                                <div class="home-talent-project__info">
                                    <span class="home-talent-project__info-item">Publicado hace 1 minuto</span>
                                    <!-- <span class="home-talent-project__info-item">Termina en 29 días</span> -->
                                    <span class="home-talent-project__info-item"><img src="../cdn.nubelo.com/img/flags/es.gif" width="16" height="11" border="0" alt="España" />España</span>
                                </div>
                            </li>
                            <li class="home-talent-projects__item">
                                <a href="proyecto/senior-front-end-developer-11.html" class="home-talent-project__link">
                                    <h5 class="home-talent-project__title hh-xxs">
                                        Senior Front End Developer
                                    </h5>
                                </a>
                                <div class="home-talent-project__info">
                                    <span class="home-talent-project__info-item">Publicado hace 1 hora y 6 minutos</span>
                                    <!-- <span class="home-talent-project__info-item">Termina en 29 días</span> -->
                                    <span class="home-talent-project__info-item"><img src="../cdn.nubelo.com/img/flags/es.gif" width="16" height="11" border="0" alt="España" />España</span>
                                </div>
                            </li>
                            <li class="home-talent-projects__item">
                                <a href="proyecto/senior-cloud-engineer-5.html" class="home-talent-project__link">
                                    <h5 class="home-talent-project__title hh-xxs">
                                        Senior Cloud Engineer
                                    </h5>
                                </a>
                                <div class="home-talent-project__info">
                                    <span class="home-talent-project__info-item">Publicado hace 1 hora y 10 minutos</span>
                                    <!-- <span class="home-talent-project__info-item">Termina en 29 días</span> -->
                                    <span class="home-talent-project__info-item"><img src="../cdn.nubelo.com/img/flags/es.gif" width="16" height="11" border="0" alt="España" />España</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="home-talent-projects__list-column home-talent-projects__list-column--projects">

                        <h3 class="home-talent-projects__list-column__header">Proyectos freelance</h3>

                        <ul class="home-talent-projects__list">
                            <li class="home-talent-projects__item">
                                <a href="proyecto/os-commerce.html" class="home-talent-project__link">
                                    <h5 class="home-talent-project__title hh-xxs">
                                        os commerce
                                    </h5>
                                </a>
                                <div class="home-talent-project__info">
                                    <span class="home-talent-project__info-item">Publicado hace 6 horas</span>
                                    <!-- <span class="home-talent-project__info-item">Termina en 29 días</span> -->
                                    <span class="home-talent-project__info-item"><img src="../cdn.nubelo.com/img/flags/es.gif" width="16" height="11" border="0" alt="España" />España</span>
                                </div>
                            </li>
                            <li class="home-talent-projects__item">
                                <a href="proyecto/professional-sales-support.html" class="home-talent-project__link">
                                    <h5 class="home-talent-project__title hh-xxs">
                                        Professional sales support
                                    </h5>
                                </a>
                                <div class="home-talent-project__info">
                                    <span class="home-talent-project__info-item">Publicado hace 6 horas</span>
                                    <!-- <span class="home-talent-project__info-item">Termina en 29 días</span> -->
                                    <span class="home-talent-project__info-item"><img src="../cdn.nubelo.com/img/flags/mx.gif" width="16" height="11" border="0" alt="Mexico" />Mexico</span>
                                </div>
                            </li>
                            <li class="home-talent-projects__item">
                                <a href="proyecto/periodista-freelance-4.html" class="home-talent-project__link">
                                    <h5 class="home-talent-project__title hh-xxs">
                                        periodista freelance
                                    </h5>
                                </a>
                                <div class="home-talent-project__info">
                                    <span class="home-talent-project__info-item">Publicado hace 6 horas</span>
                                    <!-- <span class="home-talent-project__info-item">Termina en 29 días</span> -->
                                    <span class="home-talent-project__info-item"><img src="../cdn.nubelo.com/img/flags/es.gif" width="16" height="11" border="0" alt="España" />España</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="home-talent-projects__button-container">
                    <a href="trabajos/index.html" class="home-projects__button">Ver todos los trabajos</a>
                </div>
            </section>
            <!-- /.home-talent-projects__container -->

            <section class="home-client__project-stats project-stats__wrapper hide-under-l full--white">
                <div class="project-stats__container">
                    <div class="project-stats__item">Profesionales: <span>+981 K</span></div>
                    <div class="project-stats__item">Trabajos: <span>+102 K</span></div>
                    <div class="project-stats__item">Tasa repetición: <span>+84%</span></div>
                </div>
            </section>
            <!-- /.project-stats__wrapper -->

            <section class="customer-brands__container">
                <h4 class="customer-brands__title">Empresas que ya confían en Nubelo</h4>
                <div class="customer-brands__wrapper">
                    <ul class="customer-brands__list">
                        <li class="customer-brands__item sprite-logos-nubelo-logo-wallapop"></li>
                        <li class="customer-brands__item sprite-logos-nubelo-mercado-libre"></li>
                        <li class="customer-brands__item sprite-logos-nubelo-taringa"></li>
                        <li class="customer-brands__item sprite-logos-nubelo-wuaki-logo"></li>
                        <li class="customer-brands__item sprite-logos-nubelo-web"></li>
                        <li class="customer-brands__item sprite-logos-nubelo-trovit"></li>
                        <li class="customer-brands__item sprite-logos-nubelo-tiendeo"></li>
                        <li class="customer-brands__item sprite-logos-nubelo-everis-logo"></li>
                        <li class="customer-brands__item sprite-logos-nubelo-almundo"></li>
                        <li class="customer-brands__item sprite-logos-nubelo-elogia"></li>
                    </ul>
                </div>
            </section>
            <!-- /.customer-brands__container -->
        </div>
    </main>


    <footer class="footer full--darkest-grey js-footer">
        <div class="footer-scroll-ani-wrapper full--darkest-grey">
            <section class="footer-links__wrapper hide-under-l clearfix">
                <nav class="footer-links">
                    <div class="footer-links__container">
                        <h4 class="footer-links__title">Acerca de Nubelo</h4>

                        <!-- <a href="mision"        title="Misión" rel="nofollow" class="footer-links_link">Misión</a>
                    <a href="manifiesto"   title="Nuestro manifiesto" rel="nofollow" class="footer-links_link">Nuestro manifiesto</a> -->

                        <a href="sobre-nosotros.html" title="Sobre nosotros" rel="nofollow" class="footer-links_link">Sobre nosotros</a>

                        <a href="equipo.html" title="Equipo" rel="nofollow" class="footer-links_link">Equipo</a>

                        <a href="colaboradores.html" title="Colaboradores" rel="nofollow" class="footer-links_link">Colaboradores</a>

                        <a href="http://blog.nubelo.com/" title="Blog" rel="nofollow" class="footer-links_link">Blog</a>
                        <!-- <a href="http://www.laempresahibrida.com/" target="_blank" rel="nofollow" class="footer-links_link">Nuestro libro</a> -->

                        <div id="js-currency" class="footer-currency app clearfix">
                            <div id="js-footer-currency__list-container" class="footer-currency__list-container hidden">
                                <ul class="footer-currency__list">
                                    <li class="footer-currency__item js-footer-currency__item" data-currency-id="ARS" data-currency-symbol="AR$ " data-currency-name="Peso Argentino">
                                        <a href="#">
                                            <div class="footer-currency__sign ARS">
                                                <span class="currency-eur">AR$ </span>
                                            </div>
                                            Peso Argentino (ARS)
                                        </a>
                                    </li>
                                    <li class="footer-currency__item js-footer-currency__item" data-currency-id="BRL" data-currency-symbol="R$" data-currency-name="Real Brasileño">
                                        <a href="#">
                                            <div class="footer-currency__sign BRL">
                                                <span class="currency-eur">R$</span>
                                            </div>
                                            Real Brasileño (BRL)
                                        </a>
                                    </li>
                                    <li class="footer-currency__item js-footer-currency__item" data-currency-id="CLP" data-currency-symbol="CL$ " data-currency-name="Peso Chileno">
                                        <a href="#">
                                            <div class="footer-currency__sign CLP">
                                                <span class="currency-eur">CL$ </span>
                                            </div>
                                            Peso Chileno (CLP)
                                        </a>
                                    </li>
                                    <li class="footer-currency__item js-footer-currency__item" data-currency-id="COP" data-currency-symbol="CO$ " data-currency-name="Peso Colombiano">
                                        <a href="#">
                                            <div class="footer-currency__sign COP">
                                                <span class="currency-eur">CO$ </span>
                                            </div>
                                            Peso Colombiano (COP)
                                        </a>
                                    </li>
                                    <li class="footer-currency__item js-footer-currency__item" data-currency-id="EUR" data-currency-symbol="€" data-currency-name="Euro">
                                        <a href="#">
                                            <div class="footer-currency__sign EUR">
                                                <span class="currency-eur">€</span>
                                            </div>
                                            Euro (EUR)
                                        </a>
                                    </li>
                                    <li class="footer-currency__item js-footer-currency__item" data-currency-id="MXN" data-currency-symbol="MX$ " data-currency-name="Peso Mexicano">
                                        <a href="#">
                                            <div class="footer-currency__sign MXN">
                                                <span class="currency-eur">MX$ </span>
                                            </div>
                                            Peso Mexicano (MXN)
                                        </a>
                                    </li>
                                    <li class="footer-currency__item js-footer-currency__item" data-currency-id="PNS" data-currency-symbol="S/. " data-currency-name="Nuevos Soles Perú">
                                        <a href="#">
                                            <div class="footer-currency__sign PNS">
                                                <span class="currency-eur">S/. </span>
                                            </div>
                                            Nuevos Soles Perú (PNS)
                                        </a>
                                    </li>
                                    <li class="footer-currency__item js-footer-currency__item" data-currency-id="USD" data-currency-symbol="US$ " data-currency-name="United States Dollar">
                                        <a href="#">
                                            <div class="footer-currency__sign USD">
                                                <span class="currency-eur">US$ </span>
                                            </div>
                                            United States Dollar (USD)
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="js-footer-currency__sign" class="footer-currency__sign ">
                                <span class="">€</span>
                            </div>
                            <label id="js-footer-currency__label" class="footer-currency__label">Euro<i class="n-icon n-icon-down-micro"></i></label>
                        </div>

                    </div>
                    <div class="footer-links__container">
                        <h4 class="footer-links__title">¿Necesitas Ayuda?</h4>
                        <a href="http://soporte.nubelo.com/hc/es" title="Soporte" rel="nofollow" class="footer-links_link">Soporte</a>
                        <a href="http://soporte.nubelo.com/hc/es/sections/200596753-Introducción-a-Nubelo" title="Consejos" rel="nofollow" class="footer-links_link">Consejos</a>
                        <h4 class="footer-links__title">Plataforma</h4>
                        <a href="casos-de-exito.html" title="Casos de éxito" rel="nofollow" class="footer-links_link">Casos de éxito</a>
                        <a href="privacidad.html" title="Política de privacidad" rel="nofollow" class="footer-links_link">Política de privacidad</a>
                        <a href="terminos.html" title="Términos y condiciones" rel="nofollow" class="footer-links_link">Términos y condiciones</a>
                    </div>

                    <div class="footer-links__container">
                        <h4 class="footer-links__title">Contacto</h4>
                        <a href="contacto.html" title="Datos de contacto" rel="nofollow" class="footer-links_link">Datos de contacto</a>
                        <a href="trabaja-con-nosotros.html" title="Trabaja con nosotros" rel="nofollow" class="footer-links_link">Trabaja con nosotros</a>
                        <h4 class="footer-links__title">Prensa</h4>
                        <a href="prensa/apariciones-en-medios" target="_blank" title="Apariciones en medios" rel="nofollow" class="footer-links_link">Apariciones en medios</a>
                        <a href="prensa/comunicados-de-prensa.html" target="_blank" title="Comunicación de prensa" rel="nofollow" class="footer-links_link">Comunicación de prensa</a>
                        <a href="prensa/index.html" title="Prensa" rel="nofollow" class="footer-links_link home-app--last">Media kit</a>
                    </div>
                    <div class="footer-links__container">
                        <h4 class="footer-links__title">Servicios</h4>
                        <a href="empresa/nubelo-solutions.html" title="Nubelo Solutions" rel="nofollow" class="footer-links_link">Nubelo Solutions</a>
                        <a href="empresa/nubelo-pro.html" title="Nubelo Pro" rel="nofollow" class="footer-links_link">Nubelo Pro</a>
                        <a href="cuenta-premium.html" title="Cuentas Premium" rel="nofollow" class="footer-links_link">Cuentas Premium</a>
                        <a href="http://labs.nubelo.com/calculadora-salario/" target="_blank" title="Calculadora salarial" rel="nofollow" class="footer-links_link">Calculadora salarial</a>
                    </div>
                </nav>
            </section>
            <section class="footer-note">


                <div class="footer-legal">© 2011-2016 Nubelo Solutions, S.L.<span class="hide-under-l"> Todos los derechos reservados.</span></div>
                <div class="footer-social hide-under-l">
                    <a class="footer-social__item linkedin" href="http://www.linkedin.com/company/nubelo/" title="linkedin" target="_blank"><i class="n-icon n-icon-linkedin"></i></a>
                    <a class="footer-social__item twitter" href="https://twitter.com/#!/nubelo" title="twitter" target="_blank"><i class="n-icon n-icon-twitter"></i></a>
                    <a class="footer-social__item facebook" href="http://www.facebook.com/Nubelo" title="facebook" target="_blank"><i class="n-icon n-icon-facebook"></i></a>
                </div>
            </section>


        </div>

    </footer>

    <script src="<?php echo base_url('assets/js/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/laravel-layout.min1b3b.js')?>"></script>
    <script src="<?php echo base_url('assets/js/laravel-home-expert.min1b3b.js')?>"></script>
</body>

</html>
