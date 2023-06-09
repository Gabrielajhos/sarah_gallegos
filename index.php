<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarah Gallego</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="menu.js"></script>
</head>
<body>
    
    <header>
        <!-- <nav>
            
            <a href="#">Inicio</a>
            <button onclick="sobremi()">Acerca de Mi</button>
            <button onclick="portafolio()">Portafolio</button>
            <button onclick="eventos()">Eventos</button>
            <button onclick="footer()">Contacto</button>
            position-static
            text-end
        </nav> -->
        <nav class="nav navbar navbar-expand-lg navbar-light bg  w-100 ">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button><a href="http://localhost/Sarah_Gallego/blog/blog.php">Mi Blog</a></button>
                      </li>
                  <li class="nav-item c-danger">
                    <button onclick="sobremi()">Acerca de Mi</button>
                  </li>
                  <li class="nav-item">
                    <button onclick="portafolio()">Galería</button>
                  </li>
                  <li class="nav-item">
                    <button onclick="eventos()">Eventos</button>
                  </li>
                  <li class="nav-item">
                    <button onclick="footer()">Contacto</button>
                  </li>
                </ul>
              </div>
            </div>
          </nav>







        <section class="textos-header">
        <h1>SARAH GALLEGO</h1>
        <h2>Comunicadora Social & Periodista</h2>
         </section>
         <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
            style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: rgb(247, 248, 247);"></path>
        </svg></div>
        <img src="img/sueter_blanco_2.png" alt="" class="img-p">
    </header>
    <main>
    <section class="container-fluid sobre mi" id="sobremi">
           <div class="col"> <h2 class="titulo">ABOUT ME</h2>   </div>
            <div class="row contenedor-sobre-nosotros">
               <div class="col-sm-6"> <img src="img/fondogris.png" alt="" ></div>
                <div class="col-sm-6 contenido-textos">
                    <h3><span>1</span>Nuevos inicios!</h3>
                    <p>¡Hola! Soy Sarah Gallegos, periodista y comunicadora social de origen colombiano, 
                        actualmente establecida en Nashville. Mi pasión por contar historias y comunicar 
                        me ha llevado a ser presentadora de un podcast dedicado a la historia de los inmigrantes latinos.
                        </p>
                         <p>A través de mi trabajo, busco dar voz a aquellos valientes individuos que han dejado su país de origen
                         en busca de nuevas oportunidades. Me apasiona resaltar sus experiencias, sus luchas y sus triunfos, para 
                         construir puentes de entendimiento y empatía en nuestra sociedad.</p>
                    <h3><span>2</span>Acompañanos</h3>
                    <p>Mi objetivo es crear un espacio inclusivo donde cada historia sea valorada y celebrada.
                         Creo en el poder de la comunicación para inspirar y generar un impacto positivo en la 
                         comunidad latina y más allá.</p>
                       <p> Estoy emocionada po los proyectos futuros que tengo por delante y por seguir explorando nuevas formas de
                         contar historias. Te invito a explorar mi página web para descubrir más sobre mi trabajo, mis proyectos 
                         y mi dedicación a la comunicación.</p>
                       <p> ¡Gracias por visitar mi página y ser parte de esta apasionante travesía!</p>
                </div>
            </div> 
    </section>
    <section class="portafolio" id="portafolio">
        <div class="contenedor">
            <h2 class="titulo">GALERIA</h2>
            <div class="galeria-port">
                <div class="imagen-port">
                    <img src="img/img1.jpg" alt="" >
                    <div class="hover-galeria">
                        <img src="img/icono1.png" alt="">
                        <p>VER IMAGEN</p>

                    </div>
                </div>
                <div class="imagen-port">
                    <img src="img/img2.jpg" alt="" >
                    <div class="hover-galeria">
                        <img src="img/icono1.png" alt="">
                        <p>VER IMAGEN</p>

                    </div>
                </div> <div class="imagen-port">
                    <img src="img/img3.jpg" alt="" >
                    <div class="hover-galeria">
                        <img src="img/icono1.png" alt="">
                        <p>VER IMAGEN</p>

                    </div>
                </div> <div class="imagen-port">
                    <img src="img/img4.jpg" alt="" >
                    <div class="hover-galeria">
                        <img src="img/icono1.png" alt="">
                        <p>VER IMAGEN</p>

                    </div>
                </div> <div class="imagen-port">
                    <img src="img/img5.jpg" alt="" >
                    <div class="hover-galeria">
                        <img src="img/icono1.png" alt="">
                        <p>VER IMAGEN</p>

                    </div>
                </div> <div class="imagen-port">
                    <img src="img/img6.jpg" alt="" >
                    <div class="hover-galeria">
                        <img src="img/icono1.png" alt="">
                        <p>VER IMAGEN</p>

                    </div>
                </div> <div class="imagen-port">
                    <img src="img/img7.jpg" alt="" >
                    <div class="hover-galeria">
                        <img src="img/icono1.png" alt="">
                        <p>VER IMAGEN</p>

                    </div>
                </div> <div class="imagen-port">
                    <img src="img/img8.jpg" alt="" >
                    <div class="hover-galeria">
                        <img src="img/icono1.png" alt="">
                        <p>VER IMAGEN</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="clientes contenedor" id="articulos">
        <h2 class="titulo">ARTICULOS</h2>
        <div class="cards">
            <div class="card">
                <img src="img/face1.jpg" alt="">
                <div class="contenido-texto-card">
                    <h4 class="text-center pt-2 pb-0">Name</h4>
                    <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, fugiat?</p>
                </div>
            </div>
            
            <div class="card">
                <img src="img/face2.jpg" alt="">
                <div class="contenido-texto-card">
                    <h4 class="text-center pt-2 pb-0">Name</h4>
                    <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, fugiat?</p>
                </div>
            </div>
            
        </div>
    </div>
    </section>
    <section class="about-services" id="eventos">
        <div class="contenedor">
            <h2 class="titulo">EVENTOS</h2>
            <div class="servicio-cont">
                <div class="servicio-ind">
                    <img src="img/ilustracion1.jpg" alt="">
                    <h3>Name</h3>
                    <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, dolores.</p>
                </div>
                <div class="servicio-ind">
                    <img src="img/ilustracion2.jpg" alt="">
                    <h3>Name</h3>
                    <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, dolores.</p>
                </div>
                 <div class="servicio-ind">
                    <img src="img/ilustracion4.jpg" alt="">
                    <h3>Name</h3>
                    <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, dolores.</p>
                </div>
                <div class="servicio-ind">
                    <img src="img/ilustracion3.jpg" alt="">
                    <h3>Name</h3>
                    <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, dolores.</p>
                </div>
            </div>
        </div>
    </section>
    </main>
    <footer>
        
<div class="footer container-fluid" id="footer">
    <div class="row text-center">
        <div class="col-2"></div>
        <div class="col-sm-1">
            <ul>
            <li>
              <a href="#">
                <i class="fab fa-facebook-f icon"></i> </a>
            </li>
        </ul></div>
        <div class="col-1"></div>
            <div class="col-sm-1">
                <ul>
                <li>
              <a href="#"><i class="fab fa-twitter icon"></i></a>
            </li>
        </ul></div>
        <div class="col-1"></div>
            <div class="col-sm-1">
                <ul>
                <li>
              <a href="#"><i class="fab fa-linkedin-in icon"></i></a>
            </li>
        </ul></div>
        <div class="col-1"></div>
            <div class="col-sm-1">
                <ul>
                <li>
              <a href="#"><i class="fab fa-google-plus-g icon"></i></a>
            </li>
          </ul></div>
          <div class="col-2"></div>

        
    </div>
</div>
        <div class="contenedor-footer p-3">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>+143-0000-000</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>s@sarahgallego.com</p>
            </div><div class="content-foo">
                <h4>Location</h4>
                <p>Nasville</p>
                <p></p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Sara Gallego | Una Colombiana en Nasville</h2>
    
    </footer>
</body>
</html>