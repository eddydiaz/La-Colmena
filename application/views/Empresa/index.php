<?php
 include 'assets/view/header.php';
 ?>
      <div class="header-home-client__container--fixed-content">
    <section class="header-home-client__container">
      <h1 class="header-title hh-mega-l">
        Encontramos el talento digital que necesitas
      </h1>
      <p class="header-subtitle hh-light-l hide-under-l">Tú eliges la modalidad: full-time, freelance, presencial o remoto</p>

      <a href="publicar-trabajo/oferta-empleo.html" class="header-cta_how-work btn btn-xlg btn-green ">Publica tu oferta de empleo</a>
      <a href="publicar-trabajo/proyecto-freelance.html" class="header-cta_how-work btn btn-xlg btn-orange ">Publica tu proyecto freelance</a>
      <!--  <a href="#" class="header-secondary-btn btn btn-border btn-white hide-under-s">¿Cómo funciona?</a> -->

    </section>

  <script>

    // add video markup only if screen is bigger than mobile resolution

    var html  = '<section class="header-home-client-video__container">';
        html += '<video autoplay="autoplay" preload="auto" loop="loop" poster="http://cdn.nubelo.com/resources/img/home-client/home-client-header-video-poster.png" id="" class="header-home-client-video__video">';
        html += '<source src="http://cdn.nubelo.com/resources/video/home-client-header-video.mp4?v=';
        html += 63;
        html += '" type="video/mp4">';
        html += '</video></section>';

    if (window.innerWidth >= 480) {
        document.write(html);
    }

  </script>

    <section class="home-search__container full--darker-grey">
    <form class="home-search__form" id="js-home-search" role="form" method="get" action="http://www.nubelo.com/profesionales/?query=">
        <div class="home-search__wrapper form-group">
            <input type="text" autofocus name="query" class="form-control home-search__input" id="js-search" placeholder="¿Qué profesional estás buscando?"/>
            <i id="js-search-icon" aria-hidden="true" class="n-icon-search home-search__icon hide-under-s"></i>
        </div>
    </form>
</section>
    <div class="header-overlay_pattern"></div> <!-- pattern en el background only home-->

  </div>



</header>

      <main class="home-content full--white js-main-content floating-container-shadow">
    <div class="home-client__content ">
      <section class="home-client-plans full--lighter-grey">
        <h2 class="hh-mega-m">Elige el plan que más te convenga</h2>
        <div class="home-client-plans__container">

          <div class="home-client-plans__plan">
            <div class="home-client-plans__plan__img">
              <div class="home-client-plans__plan__data__name">
                Marketplace
              </div>
              <img src="../cdn.nubelo.com/resources/img/home-client/home-client-plan-01.jpg"/>
            </div>
            <div class="home-client-plans__plan__data">
              <div class="home-client-plans__plan__data__title">
                Tú gestionas la búsqueda
              </div>
              <div class="home-client-plans__plan__data__desc">
                Publica tu proyecto freelance u oferta de empleo y elige al profesional que mejor encaje con tu necesidad. Solo pagarás si encuentras lo que buscas.
              </div>
              <div class="home-client-plans__plan__data__cta">
                <a href="publicar-trabajo.html" class="btn btn-lg btn-green js-transition">Comenzar</a>
              </div>
            </div>
          </div>

          <div class="home-client-plans__plan">
            <div class="home-client-plans__plan__img">
              <div class="home-client-plans__plan__data__name">
                Nubelo Pro
              </div>
              <img src="../cdn.nubelo.com/resources/img/home-client/home-client-plan-02.jpg"/>
            </div>
            <div class="home-client-plans__plan__data">
              <div class="home-client-plans__plan__data__title">
                Talento digital seleccionado
              </div>
              <div class="home-client-plans__plan__data__desc">
                Talento premium previamente evaluado. Te ofrecemos los mejores profesionales en modalidad full time, freelance local o remoto.
              </div>
              <div class="home-client-plans__plan__data__cta">
                <a href="empresa/nubelo-pro.html" class="btn btn-lg btn-green js-transition">Más información</a>
              </div>
            </div>
          </div>

          <div class="home-client-plans__plan">
            <div class="home-client-plans__plan__img">
              <div class="home-client-plans__plan__data__name">
                  Nubelo Solutions
              </div>
              <img src="../cdn.nubelo.com/resources/img/home-client/home-client-plan-03.jpg"/>
            </div>
            <div class="home-client-plans__plan__data">
              <div class="home-client-plans__plan__data__title">
                  Nubelo Solutions
              </div>
              <div class="home-client-plans__plan__data__desc">
                Creación de Equipos, Selección de Talento, Outsourcing y Employer Branding. Soluciones diseñadas según las necesidades de tu empresa.
              </div>
              <div class="home-client-plans__plan__data__cta">
                <a href="empresa/nubelo-solutions.html" class="btn btn-lg btn-green js-transition">Más información</a>
              </div>
            </div>
          </div>
        </div>

      </section>


      <section class="home-client-why-nubelo full--blue">
        <h3 class="home-client-why-nubelo__title hh-light-m">¿Por qué contratar en Nubelo?</h3>
      </section>

      <section class="home-client-features full--lighter-grey">

        <div class="home-client-features__container">

          <div class="home-client-features__feature">

            <div class="home-client-features__feature--left">
              <img src="../cdn.nubelo.com/resources/img/home-client/home-client-feature-01.jpg"/>
            </div>

            <div class="home-client-features__feature--right home-client-features__feature__data">
              <div class="home-client-features__feature__title">
                El mejor talento digital
              </div>
              <div class="home-client-features__feature__desc">
                Somos especialistas gestionando talento digital.<br />Obtén grandes resultados trabajando con los mejores profesionales tecnológicos.
              </div>
            </div>

          </div>

          <div class="home-client-features__feature">

            <div class="home-client-features__feature--left">
              <img src="../cdn.nubelo.com/resources/img/home-client/home-client-feature-02.jpg"/>
            </div>

            <div class="home-client-features__feature--right home-client-features__feature__data">
              <div class="home-client-features__feature__title">
                Perfect match
              </div>
              <div class="home-client-features__feature__desc">
                Gracias a nuestro algoritmo de matching obtendrás un listado instantáneo de profesionales cualificados.<br />Entrevista y contrata con un solo clic.
              </div>
            </div>

          </div>

          <div class="home-client-features__feature">

            <div class="home-client-features__feature--left">
              <img src="../cdn.nubelo.com/resources/img/home-client/home-client-feature-03.jpg"/>
            </div>

            <div class="home-client-features__feature--right home-client-features__feature__data">
              <div class="home-client-features__feature__title">
                Contrata a tu manera
              </div>
              <div class="home-client-features__feature__desc">
                No importa la dimensión y complejidad del proyecto. Tu eliges la modalidad de contratación y al mejor candidato para trabajar.
              </div>
            </div>

          </div>

        </div>

      </section>

      <section class="home-client-tabs full--white">

        <h2 class="hh-mega-m">¿Cómo funciona Nubelo para empresas?</h2>

        <!-- Tab Nav -->
        <div class="component-tabs-navigator">
  <ul class="nav nav-tabs" role="tablist">

            <li class="nav-tab-item js-nav-tab-item active" data-tab-name="tabHireEmployees">
          <a href="javascript:void()" data-target="#tabHireEmployees" aria-controls="tabHireEmployees" role="tab" data-toggle="tab"><span class="hide-under-s">Si buscas </span>empleados</a>
        </li>
            <li class="nav-tab-item js-nav-tab-item " data-tab-name="tabHireFreelance">
          <a href="javascript:void()" data-target="#tabHireFreelance" aria-controls="tabHireFreelance" role="tab" data-toggle="tab"><span class="hide-under-s">Si buscas </span>freelance</a>
        </li>

  </ul>
</div>
          <!-- Tab panes -->
        <div class="tab-content component-tabs-content">
          <div role="tabpanel" class="tab-pane active" id="tabHireEmployees">

            <div class="big-numbered-list">
              <ul class="big-numbered-list__list">

                <li class="big-numbered-list__item">
                  <span class="big-numbered-list__numeral">1</span>
                  <h4 class="big-numbered-list__title">Publica tu oferta de empleo</h4>
                  <p class="big-numbered-list__text">Para comenzar solo necesitas una breve descripción del puesto a cubrir incluyendo las responsabilidades y los requisitos técnicos del candidato.</p>
                </li>

                <li class="big-numbered-list__item">
                  <span class="big-numbered-list__numeral">2</span>
                  <h4 class="big-numbered-list__title">Nuestro algoritmo trabaja por ti</h4>
                  <p class="big-numbered-list__text">El algoritmo de matching de Nubelo analiza miles de candidatos atendiendo a sus preferencias laborales e idoneidad para el puesto. Los profesionales reciben notificación inmediata a través de la plataforma web o la aplicación móvil en la que pueden aceptar o rechazar entrevistas con un simple swipe.</p>
                </li>

                <li class="big-numbered-list__item">
                  <span class="big-numbered-list__numeral">3</span>
                  <h4 class="big-numbered-list__title">Perfect match</h4>
                  <p class="big-numbered-list__text">Te ofrecemos profesionales digitales recomendados para cubrir tus necesidades en la modalidad de contratación que elijas. Además del matching automático, a través de un simple clic puedes invitar a entrevista a los profesionales que te parezcan interesantes.</p>
                </li>

                <li class="big-numbered-list__item">
                  <span class="big-numbered-list__numeral">4</span>
                  <h4 class="big-numbered-list__title">Configura tu perfil de empresa</h4>
                  <p class="big-numbered-list__text">Piensa en el perfil como una acción de employer branding. Destaca todo aquello que hace atractiva tu empresa para los profesionales. Haz que quieran trabajar contigo.</p>
                </li>

              </ul>
            </div>

          </div>
          <div role="tabpanel" class="tab-pane" id="tabHireFreelance">

            <div class="big-numbered-list">
              <ul class="big-numbered-list__list">

                <li class="big-numbered-list__item">
                  <span class="big-numbered-list__numeral">1</span>
                  <h4 class="big-numbered-list__title">Publica tu proyecto freelance</h4>
                  <p class="big-numbered-list__text">Describe brevemente las tareas a desarrollar. Todo lo que aportes en cuanto a tecnología y habilidades será de ayuda a nuestros procesos de data science.</p>
                </li>

                <li class="big-numbered-list__item">
                  <span class="big-numbered-list__numeral">2</span>
                  <h4 class="big-numbered-list__title">Algoritmo de recomendación</h4>
                  <p class="big-numbered-list__text">Hemos desarrollado un algoritmo de matching que constantemente aprende de las preferencias de nuestros profesionales y combina análisis de código y segmentaciones avanzadas para invitar a los profesionales adecuados a participar en tu proyecto.</p>
                </li>

                <li class="big-numbered-list__item">
                  <span class="big-numbered-list__numeral">3</span>
                  <h4 class="big-numbered-list__title">Perfect match</h4>
                  <p class="big-numbered-list__text">Adjudica el proyecto al mejor candidato. Utiliza las herramientas colaborativas de la plataforma para comunicarte con los profesionales, realizar seguimiento y pagar el importe acordado. Al concluir el proyecto no olvides valorar el trabajo desarrollado por el profesional, contribuyendo así a su reputación online.</p>
                </li>

                <li class="big-numbered-list__item">
                  <span class="big-numbered-list__numeral">4</span>
                  <h4 class="big-numbered-list__title">Configura tu perfil de empresa</h4>
                  <p class="big-numbered-list__text">Piensa en el perfil como una acción de employer branding. Destaca todo aquello que hace atractiva tu empresa para los profesionales. Haz que quieran trabajar contigo.</p>
                </li>

              </ul>
            </div>

          </div>
        </div>

      </section><!-- /.home-client-tabs  -->

      <section class="home-client-category__container full--lighter-grey hide-under-l">
        <h2 class="hh-mega-m">¿Qué profesionales puedes encontrar en Nubelo?</h2>
        <div class="display-category__row">
    <div class="display-category__cell display-category--programming">
    <div>
                                <div class="card" style="background-image: url('../cdn.nubelo.com/resources/img/home-category-icons/home-category-item_01.png');">
    <div class="card-image">            <div class="card-image__content card-image__button--profesionales">

                    <a href="profesionales/desarrollo-web-y-movil.html" class="card-image__button btn btn-lg btn-white">Ver profesionales</a>


            </div>
        </div>
    <div class="card-content">
        <h4 class="card-title">            Desarrollo web y móvil
        </h4>
        <p class="card-text">            Front-end · Back-end · Full-stack · iOS · Android
        </p>
    </div>
</div>
    </div>
</div>    <div class="display-category__cell display-category--design">
    <div>
                                <div class="card" style="background-image: url('../cdn.nubelo.com/resources/img/home-category-icons/home-category-item_02.png');">
    <div class="card-image">            <div class="card-image__content card-image__button--profesionales">

                    <a href="profesionales/diseno-y-multimedia.html" class="card-image__button btn btn-lg btn-white">Ver profesionales</a>


            </div>
        </div>
    <div class="card-content">
        <h4 class="card-title">            Diseño y creatividad
        </h4>
        <p class="card-text">            UX/UI · Logos · Vídeo · Ilustración
        </p>
    </div>
</div>
    </div>
</div>    <div class="display-category__cell display-category--marketing">
    <div>
                                <div class="card" style="background-image: url('../cdn.nubelo.com/resources/img/home-category-icons/home-category-item_03.png');">
    <div class="card-image">            <div class="card-image__content card-image__button--profesionales">

                    <a href="profesionales/marketing-y-ventas.html" class="card-image__button btn btn-lg btn-white">Ver profesionales</a>


            </div>
        </div>
    <div class="card-content">
        <h4 class="card-title">            Marketing digital
        </h4>
        <p class="card-text">            SEO · SEM · CRM
        </p>
    </div>
</div>
    </div>
</div>    <div class="display-category__cell display-category--it hide-under-s">
    <div>
                                <div class="card" style="background-image: url('../cdn.nubelo.com/resources/img/home-category-icons/home-category-item_04.png');">
    <div class="card-image">            <div class="card-image__content card-image__button--profesionales">

                    <a href="profesionales/informatica-y-telecomunicaciones.html" class="card-image__button btn btn-lg btn-white">Ver profesionales</a>


            </div>
        </div>
    <div class="card-content">
        <h4 class="card-title">            Ingeniería de software
        </h4>
        <p class="card-text">            Software · Sistemas · BBDD · .NET · C#
        </p>
    </div>
</div>
    </div>
</div>    <div class="display-category__cell display-category--writing">
    <div>
                                <div class="card" style="background-image: url('../cdn.nubelo.com/resources/img/home-category-icons/home-category-item_05.png');">
    <div class="card-image">            <div class="card-image__content card-image__button--profesionales">

                    <a href="profesionales/redaccion-y-traduccion.html" class="card-image__button btn btn-lg btn-white">Ver profesionales</a>


            </div>
        </div>
    <div class="card-content">
        <h4 class="card-title">            Redacción y traducción
        </h4>
        <p class="card-text">            Blogs · Periodismo · Contenido Web
        </p>
    </div>
</div>
    </div>
</div>    <div class="display-category__cell display-category--apps hide-under-s">
    <div>
                                <div class="card" style="background-image: url('../cdn.nubelo.com/resources/img/home-category-icons/home-category-item_06.png');">
    <div class="card-image">            <div class="card-image__content card-image__button--profesionales">

                    <a href="profesionales/servicios-empresariales.html" class="card-image__button btn btn-lg btn-white">Ver profesionales</a>


            </div>
        </div>
    <div class="card-content">
        <h4 class="card-title">            Servicios empresariales
        </h4>
        <p class="card-text">            Contabilidad · RRHH · Consultoría
        </p>
    </div>
</div>
    </div>
</div></div>      </section><!-- /.home-categories__container -->

      <section class="home-client__project-stats project-stats__wrapper hide-under-l full--white">
        <div class="project-stats__container">
  <div class="project-stats__item">Profesionales: <span>+981 K</span></div>
  <div class="project-stats__item">Trabajos: <span>+102 K</span></div>
  <div class="project-stats__item">Tasa repetición: <span>+84%</span></div>
</div>
      </section><!-- /.project-stats__wrapper -->
              <section class="home-client-testimonials testimonial-slider-wrapper full--lighter-grey">
          <div id="carousel-testimonials" class="testimonial-slider-carousel carousel slide" data-ride="carousel" data-interval="false" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
                    <li data-target="#carousel-testimonials" data-slide-to="0" class="active" style="background-image: url('../cdn.nubelo.com/resources/img/testimonials/pedro-1.jpg');"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="1" class="" style="background-image: url('../cdn.nubelo.com/resources/img/testimonials/wed-2.jpg');"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="2" class="" style="background-image: url('../cdn.nubelo.com/resources/img/testimonials/pilar-3.jpg');"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="3" class="" style="background-image: url('../cdn.nubelo.com/resources/img/testimonials/alan-4.jpg');"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="4" class="" style="background-image: url('../cdn.nubelo.com/resources/img/testimonials/diana-5.jpg');"></li>
            </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner testimonial-slider-carousel-inner" role="listbox">

            <div class="item active">

                    <ul class="testimonial-slider-container">
                        <li class="testimonial-slider">
                            <div class="testimonial-slider-img"><img src="../cdn.nubelo.com/resources/img/testimonials/pedro-1.jpg" /></div>
                            <div class="testimonial-slider-text">
                                <blockquote>
                                    <span class="testimonial-slider-main-quote">Nubelo nos da garantía de éxito en todos los procesos de selección.</span>
                                    <p>Te asesoran sobre los profesionales más adecuados, lo que te genera seguridad a la hora de empezar un nuevo proyecto.</p>
                                </blockquote>
                                <small><strong Class="testimonial-slider-name">Pedro D. Cañas</strong> · IT Delivery Manager de Grupo Solutio</small>
                                <a href="publicar-trabajo.html" data-target="publicar-trabajo" class="testimonial-slider-cta btn-xlg btn btn-green js-scroll-to-element">Empieza ahora</a>
                            </div>
                        </li>
                    </ul>

            </div>

            <div class="item ">

                    <ul class="testimonial-slider-container">
                        <li class="testimonial-slider">
                            <div class="testimonial-slider-img"><img src="../cdn.nubelo.com/resources/img/testimonials/wed-2.jpg" /></div>
                            <div class="testimonial-slider-text">
                                <blockquote>
                                    <span class="testimonial-slider-main-quote">​Nubelo se comprometió con la necesidad de WedCompany.</span>
                                    <p>Conseguimos cubrir un puesto clave con un profesional de Nubelo Pro, obteniendo excelentes resultados en cuanto a la calidad del trabajo.</p>
                                </blockquote>
                                <small><strong Class="testimonial-slider-name">Ramiro Gramajo</strong> · CEO de WedCompany</small>
                                <a href="publicar-trabajo.html" data-target="publicar-trabajo" class="testimonial-slider-cta btn-xlg btn btn-green js-scroll-to-element">Empieza ahora</a>
                            </div>
                        </li>
                    </ul>

            </div>

            <div class="item ">

                    <ul class="testimonial-slider-container">
                        <li class="testimonial-slider">
                            <div class="testimonial-slider-img"><img src="../cdn.nubelo.com/resources/img/testimonials/pilar-3.jpg" /></div>
                            <div class="testimonial-slider-text">
                                <blockquote>
                                    <span class="testimonial-slider-main-quote">​Decidir trabajar con Nubelo ha sido un gran acierto.</span>
                                    <p>Su profesionalidad, transparencia y adaptabilidad nos han ayudado a encontrar a los mejores candidatos.</p>
                                </blockquote>
                                <small><strong Class="testimonial-slider-name">Pilar Blancafort</strong> · HR Coordinator de LetsBonus</small>
                                <a href="publicar-trabajo.html" data-target="publicar-trabajo" class="testimonial-slider-cta btn-xlg btn btn-green js-scroll-to-element">Empieza ahora</a>
                            </div>
                        </li>
                    </ul>

            </div>

            <div class="item ">

                    <ul class="testimonial-slider-container">
                        <li class="testimonial-slider">
                            <div class="testimonial-slider-img"><img src="../cdn.nubelo.com/resources/img/testimonials/alan-4.jpg" /></div>
                            <div class="testimonial-slider-text">
                                <blockquote>
                                    <span class="testimonial-slider-main-quote">​Confiamos plenamente en el equipo de Nubelo Solutions.</span>
                                    <p>Gracias a Nubelo Solutions logramos cerrar con éxito el proceso de selección y gestión del pago de profesionales freelance IT para nuestros equipos en Argentina y México.</p>
                                </blockquote>
                                <small><strong Class="testimonial-slider-name">Alan Haslop</strong> · Head of HR en Data Factory LatAm</small>
                                <a href="publicar-trabajo.html" data-target="publicar-trabajo" class="testimonial-slider-cta btn-xlg btn btn-green js-scroll-to-element">Empieza ahora</a>
                            </div>
                        </li>
                    </ul>

            </div>

            <div class="item ">

                    <ul class="testimonial-slider-container">
                        <li class="testimonial-slider">
                            <div class="testimonial-slider-img"><img src="../cdn.nubelo.com/resources/img/testimonials/diana-5.jpg" /></div>
                            <div class="testimonial-slider-text">
                                <blockquote>
                                    <span class="testimonial-slider-main-quote">​Nubelo came to our support and delivered priceless results.</span>
                                    <p>As a growing technology company, it has been crucial for us to find the right candidates matching our professional requirements and work environment.</p>
                                </blockquote>
                                <small><strong Class="testimonial-slider-name">Diana Daniels</strong> · CEO de Cronos Group</small>
                                <a href="publicar-trabajo.html" data-target="publicar-trabajo" class="testimonial-slider-cta btn-xlg btn btn-green js-scroll-to-element">Empieza ahora</a>
                            </div>
                        </li>
                    </ul>

            </div>
             </div>

      <!-- Controls -->
      <a class="left carousel-control hide-under-xl" href="javascript:void()" data-target="#carousel-testimonials" role="button" data-slide="prev">
          <i class="n-icon-left-open-big" aria-hidden="true"></i>
          <span class="sr-only">Anterior</span>
      </a>
      <a class="right carousel-control hide-under-xl" href="javascript:void()" data-target="#carousel-testimonials" role="button" data-slide="next">
          <i class="n-icon-right-open-big" aria-hidden="true"></i>
          <span class="sr-only">Siguiente</span>
      </a>
</div>        </section>

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
</section><!-- /.customer-brands__container -->
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

                     <a href="sobre-nosotros.html"title="Sobre nosotros" rel="nofollow" class="footer-links_link">Sobre nosotros</a>

                                            <a href="equipo.html"        title="Equipo" rel="nofollow" class="footer-links_link">Equipo</a>

                                            <a href="colaboradores.html"      title="Colaboradores" rel="nofollow" class="footer-links_link">Colaboradores</a>

                    <a href="http://blog.nubelo.com/"          title="Blog" rel="nofollow" class="footer-links_link">Blog</a>
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
                        <a href="http://soporte.nubelo.com/hc/es"       title="Soporte" rel="nofollow" class="footer-links_link">Soporte</a>
                                                <a href="http://soporte.nubelo.com/hc/es/sections/200596753-Introducción-a-Nubelo" title="Consejos" rel="nofollow" class="footer-links_link">Consejos</a>
                                         <h4 class="footer-links__title">Plataforma</h4>
                                                                                        <a href="casos-de-exito.html"    title="Casos de éxito" rel="nofollow" class="footer-links_link">Casos de éxito</a>
                                        <a href="privacidad.html"        title="Política de privacidad" rel="nofollow" class="footer-links_link">Política de privacidad</a>
                    <a href="terminos.html"          title="Términos y condiciones" rel="nofollow" class="footer-links_link">Términos y condiciones</a>
                </div>

                <div class="footer-links__container">
                   <h4 class="footer-links__title">Contacto</h4>
                    <a href="contacto.html"              title="Datos de contacto" rel="nofollow" class="footer-links_link">Datos de contacto</a>
                                            <a href="trabaja-con-nosotros.html"  title="Trabaja con nosotros" rel="nofollow" class="footer-links_link">Trabaja con nosotros</a>
                                                                <h4 class="footer-links__title">Prensa</h4>
                        <a href="prensa/apariciones-en-medios"  target="_blank" title="Apariciones en medios" rel="nofollow" class="footer-links_link">Apariciones en medios</a>
                        <a href="prensa/comunicados-de-prensa.html"  target="_blank" title="Comunicación de prensa" rel="nofollow" class="footer-links_link">Comunicación de prensa</a>
                        <a href="prensa/index.html"  title="Prensa" rel="nofollow" class="footer-links_link home-app--last">Media kit</a>
                                    </div>
                <div class="footer-links__container">
                    <h4 class="footer-links__title">Servicios</h4>
                                            <a href="empresa/nubelo-solutions.html"   title="Nubelo Solutions" rel="nofollow" class="footer-links_link">Nubelo Solutions</a>
                                        <a href="empresa/nubelo-pro.html"   title="Nubelo Pro" rel="nofollow" class="footer-links_link">Nubelo Pro</a>
                    <a href="cuenta-premium.html"   title="Cuentas Premium" rel="nofollow" class="footer-links_link">Cuentas Premium</a>
                                            <a href="http://labs.nubelo.com/calculadora-salario/" target="_blank" title="Calculadora salarial" rel="nofollow" class="footer-links_link">Calculadora salarial</a>
                                    </div>

                <div class="footer-links__container">
                                            <a href="https://itunes.apple.com/es/app/nubelo-busca-empleo-ama-tu/id1065056333" title="Descargar en AppStore" class="footer-app__link" target="_blank"><img src="../cdn.nubelo.com/resources/img/applestore-footer-btn.png" alt="App Store" class="footer-app__appstore-img" width="132" height="42" /></a>
                        <a href="https://play.google.com/store/apps/details?id=com.nubelo.nubelo" title="Descargar en Google Play" class="footer-app__link" target="_blank"><img src="../cdn.nubelo.com/resources/img/googleplay-footer-btn.png" alt="Google Play" class="footer-app__googleplay-img" width="132" height="42" /></a>
                                    </div>
            </nav>
                    </section>

        <section class="footer-note">
    <div class= "footer-legal" >© 2011-2016 Nubelo Solutions, S.L.<span class="hide-under-l"> Todos los derechos reservados.</span></div>
    <div class="footer-social hide-under-l">
        <a class="footer-social__item linkedin" href="http://www.linkedin.com/company/nubelo/" title="linkedin" target="_blank"><i class="n-icon n-icon-linkedin"></i></a>
        <a class="footer-social__item twitter" href="https://twitter.com/#!/nubelo" title="twitter" target="_blank"><i class="n-icon n-icon-twitter"></i></a>
        <a class="footer-social__item facebook" href="http://www.facebook.com/Nubelo" title="facebook" target="_blank"><i class="n-icon n-icon-facebook"></i></a>
    </div>
</section>


    </div>
</footer>

    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="http://static.nubelo.com/error404"><\/script>')</script>
    <script src="../cdn.nubelo.com/resources/js/laravel-layout.min1b3b.js?v=63"></script>


    <!-- Incluir aquí Google analytics -->




  <script src="../cdn.nubelo.com/resources/js/laravel-home-client.min1b3b.js?v=63" xmlns="http://www.w3.org/1999/html"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {



  CurrencySelectorViewModule.loadCurrencySelector();
  HomeClientViewModule.loadClientHome();
        });
    </script>
  <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"5adc1f39e3","applicationID":"22412384","transactionName":"Y10AbBADWRFQV0VeDFoXIU0RFlgPHnxFQxNocA1VByFYDEVGXlsPUUoiUA0PUiFdXVRZFw==","queueTime":0,"applicationTime":47,"atts":"TxoDGlgZSh8=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>

<!-- Mirrored from www.nubelo.com/empresa by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jul 2016 05:39:17 GMT -->
</html>
