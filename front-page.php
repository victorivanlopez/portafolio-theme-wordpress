<?php get_header(); ?>
        <section id="inicio" class="hero scroll">
            <div class="hero-content">
                <p>Hola. Mi nombre es Víctor Iván López González</p>
                <h1>Desarrollador Web <span id="element"></span></h1>
                <div class="hero-action smooth">
                    <a class="boton boton-primaryTransp" href="#portafolio">Ver Portafolio</a>
                </div>
            </div>
            <div class="smooth">
                <a href="#sobre-mi">
                    <i class="fa-sharp fa-solid fa-arrow-down fa-bounce"></i>
                </a>
            </div>
        </section>

        <section id="sobre-mi" class="sobre-mi contenedor seccion scroll">
            <h2>Sobre mi</h2>
            <p class="seccion-descripcion">Conoce un poco más sobre mi, habilidades y mi experiencia</p>

            <div class="sobre-mi-content">
                <div class="resumen">
                    <h3>Hola. Soy <span>Víctor Iván López</span></h3>
                    <p>Me gradué de la carrera de Ingeniería en Telemática en la Universidad de Colima en el año 2017. Al inicio de mi carrera laboral, me dediqué a temas relacionados con la tecnología, las redes y la comunicación de datos. Siempre he sentido una gran pasión por la programación web, y he fortalecido mis conocimientos de manera autodidacta en programación y diseño web.
                    <p>Actualmente, disfruto trabajar en el desarrollo de páginas web para emprendedores que buscan mejorar su negocio y ofrecer sus servicios o productos de manera más profesional a sus clientes.</p>
                </div>

                <div class="biografia">
                    <h3>Información Adicional</h3>
                    <ul class="biografia-listado">
                        <li>
                            <p><span>Nombre:</span> Víctor Iván López González</p>
                        </li>
                        <li>
                            <p><span>Puesto:</span> Desarrollador Front-end</p>
                        </li>
                        <li>
                            <p><span>Edad:</span> 28 Años</p>
                        </li>
                        <li>
                            <p><span>País:</span> México</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="experiencia" class="experiencia-habilidades contenedor seccion scroll">
            <h2>Experiencia y Habilidades</h2>
            <p class="seccion-descripcion">La experiencia y habilidades que he adquirido desarrollando proyectos</p>
             <div class="tabs">
                <button class="actual boton" type="button" data-paso="1">Experiencia</button>
                <button class="boton" type="button" data-paso="2">Habilidades</button>
            </div>

            <div id="paso-1" class="experiencias">
                <div class="experiencia">
                    <p class="periodo">2018-2020</p>
                    <h3 class="nombre">Coorninador de Informática</h3>
                    <p class="empresa">ASIPONA</p>
                    <p class="descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis autem minima velit quibusdam vero.</p>
                </div>

                <div class="experiencia">
                    <p class="periodo">2018-2020</p>
                    <h3 class="nombre">Coorninador de Informática</h3>
                    <p class="empresa">ASIPONA</p>
                    <p class="descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis autem minima velit quibusdam vero.</p>
                </div>

                <div class="experiencia">
                    <p class="periodo">2018-2020</p>
                    <h3 class="nombre">Coorninador de Informática</h3>
                    <p class="empresa">ASIPONA</p>
                    <p class="descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis autem minima velit quibusdam vero.</p>
                </div>

                <div class="experiencia">
                    <p class="periodo">2018-2020</p>
                    <h3 class="nombre">Coorninador de Informática</h3>
                    <p class="empresa">ASIPONA</p>
                    <p class="descripcion">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis autem minima velit quibusdam vero.</p>
                </div>
            </div>

            <div id="paso-2" class="habilidades">
                <div class="habilidad">
                    <i class="fa-brands fa-figma"></i>
                    <h3 class="nombre">Maquetación y Diseño</h3>
                </div>
                <div class="habilidad">
                    <i class="fa-brands fa-react"></i>
                    <h3 class="nombre">Desarrollo con React</h3>
                </div>
                <div class="habilidad">
                    <i class="fa-solid fa-database"></i>
                    <h3 class="nombre">Manejo de Bases de Datos</h3>
                </div>
                <div class="habilidad">
                    <i class="fa-solid fa-code-branch"></i>
                    <h3 class="nombre">Uso de Git y GitHub</h3>
                </div>
            </div>
        </section>

        <main id="portafolio" class="portafolio contenedor seccion scroll">
            <h2>Portafolio</h2>
            <p class="seccion-descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="listado-cards">
                <div class="card">
                    <div class="card-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/proyecto1.png" alt="Proyecto">
                        </a>           
                    </div>

                    <div class="card-content">
                        <h3><a href="#">MuebleWorld</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit sint quod aliquid.</p>
                    </div>

                    <div class="card-footer">
                        <ul class="listado-meta">
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-sass.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-js.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-php.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mysql.png" alt="Icono Técnologia">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/proyecto2.png" alt="Proyecto">
                        </a>           
                    </div>

                    <div class="card-content">
                        <h3><a href="#">Meeti</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit sint quod aliquid.</p>
                    </div>

                    <div class="card-footer">
                        <ul class="listado-meta">
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mongodb.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-express.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-react.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-nodejs.png" alt="Icono Técnologia">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/proyecto3.png" alt="Proyecto">
                        </a>           
                    </div>

                    <div class="card-content">
                        <h3><a href="#">GuitarLA</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit sint quod aliquid.</p>
                    </div>

                    <div class="card-footer">
                        <ul class="listado-meta">
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mongodb.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-express.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-react.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-nodejs.png" alt="Icono Técnologia">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>

        <section id="blog" class="blog contenedor seccion scroll">
            <h2>Blog</h2>
            <p class="seccion-descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            
            <div class="listado-cards">
                <div class="card">
                    <div class="card-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/entrada1.png" alt="Entrada">
                        </a>           
                    </div>

                    <div class="card-content">
                        <p class="categoria"><a href="#">Desarrollo Web</a></p>
                        <h3><a href="#">Lo que debes saber sobre una tienda virtual</a></h3>
                    </div>

                    <div class="card-footer">
                        <ul class="listado-meta">
                            <li class="meta meta-blog">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>03 de Mayo de 2023</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/entrada2.png" alt="Entrada">
                        </a>           
                    </div>

                    <div class="card-content">
                        <p class="categoria"><a href="#">Desarrollo Web</a></p>
                        <h3><a href="#">6 Ventajas de invertir en una pagina web</a></h3>
                    </div>

                    <div class="card-footer">
                        <ul class="listado-meta">
                            <li class="meta meta-blog">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>05 de Mayo de 2023</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/entrada3.png" alt="Entrada">
                        </a>           
                    </div>

                    <div class="card-content">
                        <p class="categoria"><a href="#">Desarrollo Web</a></p>
                        <h3><a href="#">Beneficios al realizar un mantenimiento web</a></h3>
                    </div>

                    <div class="card-footer">
                        <ul class="listado-meta">
                            <li class="meta meta-blog">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>07 de Mayo de 2023</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="contacto" class="contacto contenedor seccion scroll">
            <h2>Contacto</h2>
            <p class="seccion-descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="contacto-grid">
                <div class="formulario">
                    <h3>Enviame un mensaje</h3>
                    <?php  echo do_shortcode('[contact-form-7 id="37" title="Formulario de contacto 1"]'); ?>
                </div>

                <div class="informacion-medios">
                    <h3>Medios de contácto</h3>
                    <div class="medios">
                        <div class="medio">
                            <div class="icono">
                                <i class="fa-solid fa-mobile-screen"></i>
                            </div>
                            <div class="contenido">
                                <p class="titulo">Telefono</p>
                                <a href="tel:+3143767156">(314)3767-156</a>
                            </div>
                        </div>

                        <div class="medio">
                            <div class="icono">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="contenido">
                                <p class="titulo">Email</p>
                                <a href="mailto:victor_ivan2211@hotmail.com">victor_ivan2211@hotmail.com</a>
                            </div>
                        </div>

                        <div class="medio">
                            <div class="icono">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contenido">
                                <p class="titulo">Ubicación</p>
                                <p>Manzanillo, Colima, México</p>
                            </div>
                        </div>
                    </div>
                    <h3>Redes Sociales</h3>
                    <nav class="redes-menu">
                        <a href="https://mx.linkedin.com/" target="_blank">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href="https://github.com/" target="_blank">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </section>
 <?php get_footer(); ?>