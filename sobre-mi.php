<?php
$pg = "sobre-mi"
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php") ?>
    </header>
    <main class="">
        <div class="row pb-5 mx-5 mb-4 descripcion">
            <div class="col-12 col-sm-5">
                <h2 class="my-4">Sobre mí</h2>
                <p class="mb-5 pb-5">Soy jugador de Basquet profesional. Amante y estudiante eterno del mundo de la tecnología y marketing.</p>
                <a class=" btn-rojo" href="contacto.html">Enviar mensaje</a>
            </div>
            <div class="col-12 col-sm-5">
                <img src="images/santifoto.jpg" class="foto-santi  float-end shadow" alt="Santiago Ferreyra">
            </div>
        </div>
        <section class="py-3 px-5 " id="stack">
            <div class="container-fluid p-4">
                <div class="row">
                    <div class="col-12 pt-0 pb-4">
                        <h3>Stack Tecnológico</h3>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-2">
                            <div class="bg-white my-3 p-3 text-center">
                                <p class="text-center ">Javascript</p>
                                <img src="images/stack-javascript.jpeg" alt="JavaScript">
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="bg-white my-3 p-3 text-center">
                                <p class="text-center">PHP</p>
                                <img src="images/stack-php.jpg" alt="PHP">
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="bg-white my-3 p-3 text-center">
                                <p class="text-center">HTML5</p>
                                <img src="images/stack-html5.png" alt="HTML5">
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="bg-white my-3 p-3 text-center">
                                <p class="text-center">React.js</p>
                                <img src="images/stack-react.png" alt="React.js">
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="bg-white my-3 p-3 text-center">
                                <p class="text-center">jQuery</p>
                                <img src="images/stack-jquery.jpg" alt="jQuery">
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="bg-white my-3 p-3 text-center">
                                <p class="text-center">Bootstrap</p>
                                <img src="images/stack-boostrap.png" alt="Bootstrap">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-2">
                            <div class="bg-white my-3 p-3 text-center">
                                <p class="text-center">Laravel</p>
                                <img src="images/stack-laravel.png" alt="Laravel">
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="bg-white my-3 p-3 text-center">
                                <p class="text-center">MySQL</p>
                                <img src="images/stack-mysql.png" alt="MySQL">
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="bg-white my-3 p-3 text-center">
                                <p class="text-center">CSS</p>
                                <img src="images/stack-css.png" alt="CSS">
                            </div>

                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="bg-white my-3 p-3 text-center">
                                <p class="text-center">GIT</p>
                                <img src="images/stack-git.png" alt="Git">
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="bg-white my-3 p-3 text-center">
                                <p class="text-center">Apache</p>
                                <img class="w-100" src="images/stack-apache.png" alt="Apache">
                            </div>
                        </div>
                        <div class="col-12 col-sm-2">
                            <div class="bg-white my-3 p-3 text-center">
                                <p class="text-center">Mercadopago</p>
                                <img src="images/stack-mercadopago.jpg" alt="MercadoPago">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia" class="p-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 mx-3 mb-4">
                        <h2 class="fw-light">
                            <i class="fa-solid fa-briefcase"></i>
                            Experiencia laboral
                        </h2>
                    </div>
                </div>
                <div class="container shadow ">
                    <div class="row mb-3">
                        <div class="col-12 col-sm-2 text-center">
                            <img src="images/sanmartin_kz.svg" alt="Club San Martin">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Jugador</h3>
                            <h4>Club San Martín</h4>
                            <h5>Temporada 21/22 y actualidad</h5>
                            <p>El club San Martín se encuentra en la ciudad de Corrientes capital y es uno de los 20 equipos que conforman la Liga Nacional de Basquet (máxima categoría del Basquet argentino). En la temporada 21/22 finalizamos en la 4ta posición perdiendo las seminifinales contra Instituto (futuro campeón). </p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-sm-2 text-center">
                            <img src="images/barrioparque.png" alt="Club Barrio Parque">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Jugador</h3>
                            <h4>Club Barrio Parque</h4>
                            <h5>Temporada 19/20 y 20/21</h5>
                            <p>El club Barrio Parque se encuentra en la ciudad de Córdoba capital y conforma la Liga Argentina de Basquet (segunda categoría del Basquet argentino). En la temporada 19/20 el torneo se vió interrumpido por la pandemia a causa del COVID-19. En la temporada 20/21 Terminamos entre los 8 mejores equipos. </p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-sm-2 text-center">
                            <img src="images/sanlorenzo.jpg" alt="Club San Lorenzo">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Jugador</h3>
                            <h4>Club San Lorenzo</h4>
                            <h5>Temporada 20/21 </h5>
                            <p>El club San Lorenzo se encuentra en la ciudad de Buenos Aires y es uno de los 20 equipos que conforman la Liga Nacional de Basquet (máxima categoría del Basquet argentino). El "ciclón" cuenta con una enorme trayectoria en la liga nacional (Pentacampeón) y solamente dispute 3 meses de la competencia (préstamo) en la que luego el equipo termino en el primer puesto del torneo logrando el pentacampeonato.</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-sm-2 text-center">
                            <img src="images/hindu.jfif" alt="Club Hindu">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Jugador</h3>
                            <h4>Club Hindu</h4>
                            <h5>Temporada 18/19</h5>
                            <p>El club Hindu se encuentra en la ciudad de Resistencia, capital de la provincia del Chaco y conforma la Liga Argentina de Basquet (segunda categoría del Basquet argentino). Finalizamos la temporada entre los 4 mejores.
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-sm-2 text-center">
                                <img src="images/union.png" alt="Club Union">
                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Jugador</h3>
                                <h4>Club Atletico Union</h4>
                                <h5>Temporada 17/18</h5>
                                <p>El club Atlético Union se encuentra en la ciudad de Santa Fe capital y conforma la Liga Argentina de Basquet (segunda categoría del Basquet argentino). Finalizamos en la 10ma posición.</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-sm-2 text-center">
                                <img src="images/comuniacaciones.png" alt="Club Comunicaciones">
                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Jugador</h3>
                                <h4>Club Comunicaciones</h4>
                                <h5>Temporada 16/17</h5>
                                <p>El club Comunicaciones se encuentra en la ciudad de Mercedes (Corrientes) y conforma la Liga Argentina de Basquet (segunda categoría del Basquet argentino). En la temporada 16/17 finalizamos en la 1era posición obteniendo el título de campeones y logrando el ascenso a la máxima categoría (Liga Nacional) </p>
                            </div>
                        </div>

                    </div>
                </div>
        </section>
        <section id="formacion" class="p-5">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-12 mx-3 mb-4">
                            <h2 class="fw-light">
                                <i class="fa-solid fa-graduation-cap"></i>
                                Formación académica
                            </h2>
                        </div>
                    </div>
                    <div class="container shadow">
                        <div class="row pb-5">
                            <div class="col-12 col-sm-6">
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <img src="images/IDC.jfif" alt="IDC">
                                    </div>
                                    <div class="col-sm-6 p-4 ">
                                        <h3> Secundaria completa</h3>
                                        <h4> Instituto Divino Corazón</h4>
                                        <h5>2008-2014</h5>
                                        <p>http://www.ean.edu.ar</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <img src="images/blaspascal.png" alt="Blas Pascal">
                                    </div>
                                    <div class="col-6 p-4 ">
                                        <h3>Licenciatura en Marketing (incompleta)</h3>
                                        <h4>Universidad Blas Pascal</h4>
                                        <h5>2017-2019</h5>
                                        <p>http://www.ubp.com.ar</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row pb-4">
                            <div class="col-12 col-sm-6">
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <img src="images/proyecto-integrador.png" alt="proyecto integrador">
                                    </div>
                                    <div class="col-6 p-4 ">
                                        <h3> Licenciado en Tecnologia</h3>
                                        <h4> Escuela Argentina de Negocios</h4>
                                        <h5>2015-2020</h5>
                                        <p>http://www.ean.edu.ar</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <img src="images/proyecto-integrador.png" alt="proyecto integrador">
                                    </div>
                                    <div class="col-6  p-4 ">
                                        <h3> Licenciado en Tecnologia</h3>
                                        <h4> Escuela Argentina de Negocios</h4>
                                        <h5>2015-2020</h5>
                                        <p>http://www.ean.edu.ar</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 mx-3 mb-4 pt-5">
                        <h2 class="fw-light">
                            <i class="fa-solid fa-graduation-cap"></i>
                            Cursos de desarrollo profesional
                        </h2>
                    </div>
                </div>
                <div class="container shadow">
                    <div class="row pb-5">
                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <img src="images/devrock.svg" class="" alt="DevRock">
                                </div>
                                <div class="col-6 p-4 ">
                                    <h3>HTML, CSS & Javascript</h3>
                                    <h4>Escuela DevRock</h4>
                                    <h5>2020</h5>
                                    <p>https://escueladevrock.com/</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <img src="images/proyecto-integrador.png" alt="proyecto integrador">
                                </div>
                                <div class="col-6  p-4 ">
                                    <h3> Lorem</h3>
                                    <h4> Escuela Argentina de Negocios</h4>
                                    <h5>2015-2020</h5>
                                    <p>http://www.ean.edu.ar</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row pb-4">
                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <img src="images/proyecto-integrador.png" p-4 alt="proyecto integrador">
                                </div>
                                <div class="col-6  p-4">
                                    <h3> Licenciado en Tecnologia</h3>
                                    <h4> Escuela Argentina de Negocios</h4>
                                    <h5>2015-2020</h5>
                                    <p>http://www.ean.edu.ar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <img src="images/proyecto-integrador.png" alt="proyecto integrador">
                                </div>
                                <div class="col-6 p-4 ">
                                    <h3> Licenciado en Tecnologia</h3>
                                    <h4> Escuela Argentina de Negocios</h4>
                                    <h5>2015-2020</h5>
                                    <p>http://www.ean.edu.ar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <img src="images/proyecto-integrador.png" alt="proyecto integrador">
                                </div>
                                <div class="col-6 p-4 ">
                                    <h3> Licenciado en Tecnologia</h3>
                                    <h4> Escuela Argentina de Negocios</h4>
                                    <h5>2015-2020</h5>
                                    <p>http://www.ean.edu.ar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <img src="images/proyecto-integrador.png" alt="proyecto integrador">
                                </div>
                                <div class="col-6 p-4 ">
                                    <h3> Licenciado en Tecnologia</h3>
                                    <h4> Escuela Argentina de Negocios</h4>
                                    <h5>2015-2020</h5>
                                    <p>http://www.ean.edu.ar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Intermediate B2</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Leer</li>
                                    <li>Videojuegos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3 text-center text-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0 ">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
                <a href="mailto:santi_f97@hotmial.com">santi_f97@hotmail.com</a>
            </div>
        </div>
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=3535653057" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
    </footer>
</body>

</html>