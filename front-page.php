<?php get_header(); ?>
        <section id="inicio" class="hero">
            <div class="hero-content">
                <p>Hola. Mi nombre es Víctor Iván López González</p>
                <h1>Desarrollador Web <span id="element"></span></h1>
                <div class="hero-action">
                    <a class="boton boton-primaryTransp" href="#">Ver Portafolio</a>
                </div>
            </div>
            <a href="#sobre-mi">
                <i class="fa-sharp fa-solid fa-arrow-down fa-bounce"></i>
            </a>
        </section>

        <section id="sobre-mi" class="sobre-mi contenedor seccion">
            <h2>Sobre mi</h2>
            <p class="seccion-descripcion">Conoce un poco más sobre mi, habilidades y mi experiencia</p>

            <div class="sobre-mi-content">
                <div class="resumen">
                    <h3>Hola. Soy <span>Víctor Iván López</span> Desarrollador Web</h3>
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
                            <p><span>Email:</span> <a href="mailto:victor_ivan2211@hotmail.com">victor_ivan2211@hotmail.com</a></p>
                        </li>
                        <li>
                            <p><span>Teléfono:</span> <a href="tel:+3143767156">(314)3767-156</a></p>
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

        <section class="experiencia-habilidades contenedor seccion">
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

        <section class="portafolio contenedor seccion">
            <h2>Portafolio</h2>
            <p class="seccion-descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="proyectos">
                <div class="proyecto">
                    <div class="proyecto-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/proyecto1.png" alt="Proyecto">
                        </a>           
                    </div>

                    <div class="proyecto-content">
                        <h3>MuebleWorld</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit sint quod aliquid.</p>
                    </div>

                    <div class="proyecto-footer">
                        <ul class="tecnologias">
                            <li class="tecnologia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-sass.png" alt="Icono Técnologia">
                            </li>
                            <li class="tecnologia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-js.png" alt="Icono Técnologia">
                            </li>
                            <li class="tecnologia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-php.png" alt="Icono Técnologia">
                            </li>
                            <li class="tecnologia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mysql.png" alt="Icono Técnologia">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="proyecto">
                    <div class="proyecto-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/proyecto2.png" alt="Proyecto">
                        </a>           
                    </div>

                    <div class="proyecto-content">
                        <h3>Meeti</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit sint quod aliquid.</p>
                    </div>

                    <div class="proyecto-footer">
                        <ul class="tecnologias">
                            <li class="tecnologia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mongodb.png" alt="Icono Técnologia">
                            </li>
                            <li class="tecnologia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-express.png" alt="Icono Técnologia">
                            </li>
                            <li class="tecnologia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-react.png" alt="Icono Técnologia">
                            </li>
                            <li class="tecnologia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-nodejs.png" alt="Icono Técnologia">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="proyecto">
                    <div class="proyecto-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/proyecto3.png" alt="Proyecto">
                        </a>           
                    </div>

                    <div class="proyecto-content">
                        <h3>GuitarLA</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit sint quod aliquid.</p>
                    </div>

                    <div class="proyecto-footer">
                        <ul class="tecnologias">
                            <li class="tecnologia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mongodb.png" alt="Icono Técnologia">
                            </li>
                            <li class="tecnologia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-express.png" alt="Icono Técnologia">
                            </li>
                            <li class="tecnologia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-react.png" alt="Icono Técnologia">
                            </li>
                            <li class="tecnologia">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-nodejs.png" alt="Icono Técnologia">
                            </li>
                        </ul>
                    </div>
                </div>
               
            </div>
        </section>
 <?php get_footer(); ?>