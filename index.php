<?php get_header(); ?>

<!-- Video
<div class="ratio ratio-16x9 scrolled-offset">
    <video loop="" autoplay="" muted="">
      <source src="https://trucksrepair.cl/wp-content/uploads/2023/11/tr-text-final.mp4" type="video/mp4">   
    </video>    
</div>  
-->

<!-- contenido -->

<!-- Wsp
<a id="hwsp" class="float" data-bs-toggle="modal" data-bs-target="#wspModal">
<i id="wsp" class="bi bi-whatsapp"></i>
</a>
-->

<!-- Modal -->
<div class="modal fade" id="wspModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="exampleModalLabel"><b><i class="bi bi-whatsapp"></i> Contacto Whatsapp</b></h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
 
      <div class="modal-body">
              <div class="modal-body mt-2 mb-3">
                    <a id="wspg" href="https://api.whatsapp.com/send/?phone=56972628921&text&type=phone_number&app_absent=0" target="_blank" class="ml-5">Ventas Web</a> <br><br>
                    <a id="wspg" href="https://api.whatsapp.com/send/?phone=56995356239&text&type=phone_number&app_absent=0" target="_blank" class="ml-5">Servicios</a>
              </div>
      </div>

  </div>
</div>
</div>


<div class="container"> <!-- container -->

	<div id="contenido_home" class="contenido">
		
		<section id="home" class="news_desktop">
		
			<div class="row">
				<!-- articulo -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-12 col-sm-6 col-md-4 mb-3">
					<div class="card">
						<h6><?php echo get_the_date(); ?></h6>

						<a href="<?php the_permalink(); ?>" class="newtitle"><h4 class="card-title"><?php the_title(); ?></h4>

						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail('post-thumbnails', array ( 'class' => 'card-img-top img-fluid'));
						} ?></a>

						<p class="card-text"><?php the_excerpt(); ?></p>

						<div class="card-block">

						</div>
					</div>
			</div>
			<?php endwhile; endif; ?>
			<!-- articulo -->	
			</div>
			
		</section>
		
<!-- 
		
  <div class="container" id="news_mobil">
      
    <section class="slideshow">
      <div id="CarouselTextAnim" class="carousel slide carousel-slide" data-bs-ride="carousel">
        <div class="carousel-inner">
			

            <div class="carousel-item active">
                
                <div class="col-lg">
                  <div class="card">
                    <p class="ms-3 mt-1">publicado el 17/02/2024 </p>
                    <div class="card-body">
                      <h5 class="card-title mt-1">Aceite mineral en tu motor</h5>
                      <img src="https://trucksrepair.cl/wp-content/uploads/2024/02/motor-aceite-mineral.png" class="card-img" alt="repuestos camiones mercedes">                      
                      <p class="card-text mt-3">¿Que es el aceite de motor mineral? Funciones y sus principales características </p>
                      <a href="https://trucksrepair.cl/aceite-mineral-en-tu-camion/" id="card_href" target="_blank">CONTINUAR</a>                      
                    </div>
                  </div>
                </div>                          

            </div>			

            <div class="carousel-item">
                
                <div class="col-lg">
                  <div class="card">
                    <p class="ms-3 mt-1">publicado el 20/02/2024 </p>
                    <div class="card-body">
                      <h5 class="card-title mt-1">Aceite en el motor de tu camión</h5>
                      <img src="https://trucksrepair.cl/wp-content/uploads/2024/02/lubricacion.png" class="card-img" alt="repuestos camiones mercedes">                      
                      <p class="card-text mt-3">Uno de los factores más importantes en el funcionamiento de todo vehículo es el aceite de motor. </p>
                      <a href="https://trucksrepair.cl/aceite-en-el-motor-de-tu-camion" id="card_href" target="_blank">CONTINUAR</a>                      
                    </div>
                  </div>
                </div>                          

            </div>
			
            <div class="carousel-item">
                
                <div class="col-lg">
                  <div class="card">
                    <p class="ms-3 mt-1">publicado el 13/02/2024 </p>
                    <div class="card-body">
                      <h5 class="card-title mt-1">¿QUE ES UNA ECU?</h5>
                      <img src="https://trucksrepair.cl/wp-content/uploads/2024/02/ecu2.png" class="card-img" alt="repuestos camiones mercedes">                      
                      <p class="card-text mt-3">Hoy en día todos los vehículos que podemos encontrar en nuestras carreteras, turismos, furgonetas, camiones e incluso tractores, 
						  gestionan su motor gracias a una ECU.</p>
                      <a href="https://trucksrepair.cl/que-es-una-ecu/" id="card_href" target="_blank">CONTINUAR</a>                      
                    </div>
                  </div>
                </div>                          

            </div>
			
			
            <div class="carousel-item">
                
                <div class="col-lg">
                  <div class="card">
                    <p class="ms-3 mt-1">publicado el 06/01/2024 </p>
                    <div class="card-body">
                      <h5 class="card-title mt-1">REPRO STAGE 1</h5>
                      <img src="https://trucksrepair.cl/wp-content/uploads/2024/02/stage1-1.png" class="card-img" alt="...">                      
                      <p class="card-text mt-3">Cuando se trata de mejorar el rendimiento de su motor, probablemente haya oído hablar de algo llamado “modificacion de ecu”</p>
                      <a href="https://trucksrepair.cl/repro-stage-1/" id="card_href" target="_blank">CONTINUAR</a>                      
                    </div>
                  </div>
                </div>                          

            </div>			


            <div class="carousel-item">

                <div class="col-lg">
                  <div class="card">
                    <p class="ms-3 mt-1">publicado el 16/11/2023 </p>                    
                    <div class="card-body">
                      <h5 class="card-title mt-1">TRUCKSREPAIR CAMBIARÁ DE CASA PROXIMO AÑO</h5>
                      <img src="https://trucksrepair.cl/wp-content/uploads/2023/10/tr-cambiocasa.png" class="card-img" alt="repuestos camiones mercedes">                      
                      <p class="card-text mt-3">Queremos anunciar a todos nuestros clientes que ya está en construcción nuestro nuevo local, esto con el fin de tener...</p>
                      <a href="https://trucksrepair.cl/trucksrepair-cambiara-de-casa-proximo-ano/" id="card_href" target="_blank">CONTINUAR</a>
                    </div>
                  </div>
                </div>

            </div>


            <div class="carousel-item">
              
                <div class="col-lg">
                  <div class="card">
                    <p class="ms-3 mt-1">publicado el 10/11/2023 </p>
                    <div class="card-body">
                      <h5 class="card-title mt-1">TRUCKSREPAIR SE UNE A LA RED DE OPTIMIZACIÓN DE ECUTRUCKS</h5>
                      <img src="https://trucksrepair.cl/wp-content/uploads/2023/10/ecu-tr-acuerdo.fw_-1.png" class="card-img" alt="repuestos camiones mercedes">                      
                      <p class="card-text mt-3">Agrega el servicio de reprogramación a tu taller ¿En que consiste el servicio?El servicio consiste en que usted pueda realizar la modificación...</p>
                      <a href="https://trucksrepair.cl/trucksrepair-se-une-a-la-red-de-optimizacion-de-ecutrucks/" id="card_href" target="_blank">CONTINUAR</a>
                    </div>
                  </div>
                </div>

            </div>
                                                 

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#CarouselTextAnim" data-bs-slide="prev">
        <span class="carousel-control carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
        <button class="carousel-control-next" type="button" data-bs-target="#CarouselTextAnim" data-bs-slide="next">
        <span class="carousel-control carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </section>      


    </div>	

-->
	  
<!--	 
		
<section id="repuestos" class="repuestos">

  <h2 class="text-center text-white"> Visita Nuestra Tienda</h2>
	<h1 id="titulo_h1">Repuestos camiones Mercedes</h1>
  <p class="text-center text-white">TrucksRepair cuenta con un sitio web y tienda en mercado libre con mas de 1000 productos para Actros, Axor y Atego.</p>

  <div class="text-center">
  <a class="repuestos-btn" href="https://listado.mercadolibre.cl/_CustId_797727679" target="_blank">Mercado Libre</a>
  <a class="repuestos-btn" href="https://www.tienda.trucksrepair.cl" target="_blank">Tienda Online</a>
  </div>

</section>

-->

<section id="servicios" class="servicios">

        <div class="section-title text-center">

            <h3 class="text-center mb-4">SERVICIOS</h3>
            <h2 class="mb-2">Descubre nuestros <span>Servicios Especializados</span></h2>

        </div>


</section>


<div class="container"> <!-- container -->
  
        <div id="servdesktop" class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">

                <div class="row">
                  
                  <div class="col-lg">

                  <div class="card">
                    <h5><b>REPARACIÓN Y MANTENCIÓN ECU</b></h5>
                    <img class="card-img-top mt-2" src="assets/img/s-ecu.png" alt="repuestos camiones mercedes">
                    <div class="card-body">
                      <p class="card-text"> Caja, Motor, GS, GP , MR O PLD</p>
                      <a href="https://trucksrepair.cl/ecu-reparacion-y-mantenimiento" id="card_href" target="_blank">CONTINUAR</a>
                    </div>
                  </div>

                  </div>

                  <div class="col-lg">

                  <div class="card">
                    <h5><b>REPROGRAMACIÓN ECU</b></h5>
                    <img class="card-img-top mt-2" src="assets/img/s-reproecu.png" alt="repuestos camiones mercedes">
                    <div class="card-body">
                      <p class="card-text">Aumentamos la potencia de tu motor</p>
                      <a href="https://trucksrepair.cl/ecu-reprogramacion" id="card_href" target="_blank">CONTINUAR</a>
                    </div>
                  </div>

                  </div>

                  <div class="col-lg">

                  <div class="card">
                    <h5><b>FRENOS</b></h5>
                    <img class="card-img-top mt-2" src="assets/img/s-frenos.png" alt="repuestos camiones mercedes">
                    <div class="card-body">
                      <p class="card-text">Reparación y Mantención</p>
                      <a href="https://trucksrepair.cl/frenos-reparacion-y-mantencion" id="card_href" target="_blank">CONTINUAR</a>
                    </div>
                  </div>

                  </div>

                </div>

              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  
                  <div class="col-lg">

                  <div class="card">
                    <h5><b>MOTOR</b></h5>                    
                    <img class="card-img-top mt-2" src="assets/img/s-motor.png" alt="repuestos camiones mercedes">
                    <div class="card-body">
                      <p class="card-text">Reparación y Mantención</p>
                      <a href="https://trucksrepair.cl/motor-reparacion-y-mantencion" id="card_href" target="_blank">CONTINUAR</a>
                    </div>
                  </div>

                  </div>

                  <div class="col-lg">

                  <div class="card">
                    <h5><b>CAJA DE CAMBIOS</b></h5>                        
                    <img class="card-img-top mt-2" src="assets/img/s-caja.png" alt="repuestos camiones mercedes">
                    <div class="card-body">
                      <p class="card-text">Reparación y Mantención</p>
                      <a href="https://trucksrepair.cl/caja-de-cambios-reparacion-y-mantencion" id="card_href" target="_blank">CONTINUAR</a>
                    </div>
                  </div>

                  </div>

                  <div class="col-lg">

                  <div class="card">
                    <h5><b>DIFERENCIALES</b></h5>                        
                    <img class="card-img-top mt-2" src="assets/img/s-diferenciales.png" alt="repuestos camiones mercedes">
                    <div class="card-body">
                      <p class="card-text">Reparación y Mantención</p>
                      <a href="https://trucksrepair.cl/diferenciales-reparacion-y-mantencion" id="card_href" target="_blank">CONTINUAR</a>
                    </div>
                  </div>
                  
                  </div>

                </div>

              </div>
            </div><!-- End testimonial item -->

          </div>

          <br><br><br>
          <div id="sp1" class="swiper-pagination"></div>
        </div>
        
        
        <div id="servmobil" class="services-slider swiper" data-aos="fade-up" data-aos-delay="100">

          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">

                <div class="row">
                  
                  <div class="col-lg-4">

                  <div class="card">
                    <h5><b>REPARACIÓN Y MANTENCIÓN ECU</b></h5>
                    <img class="card-img-top mt-2" src="assets/img/s-ecu.png" alt="repuestos camiones mercedes">
                    <div class="card-body">
                      <p class="card-text"> Caja, Motor, GS, GP , MR O PLD</p>
                      <a href="https://trucksrepair.cl/2023/10/20/ecu-reparacion-y-mantenimiento/" id="card_href" target="_blank">CONTINUAR</a>
                    </div>
                  </div>

                  </div>

                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">

                  <div class="col-lg-4">

                  <div class="card">
                    <h5><b>REPROGRAMACIÓN ECU</b></h5>
                    <img class="card-img-top mt-2" src="assets/img/s-reproecu.png" alt="repuestos camiones mercedes">
                    <div class="card-body">
                      <p class="card-text">Aumentamos la potencia de tu motor</p>
                      <a href="https://trucksrepair.cl/2023/10/20/ecu-reprogramacion/" id="card_href" target="_blank">CONTINUAR</a>
                    </div>
                  </div>

                  </div>                  

                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">

                  <div class="col-lg-4">

                  <div class="card">
                    <h5><b>FRENOS</b></h5>
                    <img class="card-img-top mt-2" src="assets/img/s-frenos.png" alt="repuestos camiones mercedes">
                    <div class="card-body">
                      <p class="card-text">Reparación y mantención</p>
                      <a href="https://trucksrepair.cl/2023/10/20/frenos-reparacion-y-mantencion/" id="card_href" target="_blank">CONTINUAR</a>
                    </div>
                  </div>

                  </div>                  

                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">

                  <div class="col-lg-4">

                  <div class="card">
                    <h5><b>MOTOR</b></h5>                    
                    <img class="card-img-top mt-2" src="assets/img/s-motor.png" alt="repuestos camiones mercedes">
                    <div class="card-body">
                      <p class="card-text">Reparación y Mantención.</p>
                      <a href="https://trucksrepair.cl/2023/10/20/motor-reparacion-y-mantencion/" id="card_href" target="_blank">CONTINUAR</a>
                    </div>
                  </div>

                  </div>                  

                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">

                  <div class="col-lg-4">

                  <div class="card">
                    <h5><b>CAJA DE CAMBIOS</b></h5>                        
                    <img class="card-img-top mt-2" src="assets/img/s-caja.png" alt="repuestos camiones mercedes">
                    <div class="card-body">
                      <p class="card-text">Reparación y Mantención.</p>
                      <a href="https://trucksrepair.cl/2023/10/20/caja-de-cambios-reparacion-y-mantencion/" id="card_href" target="_blank">CONTINUAR</a>
                    </div>
                  </div>


                  </div>                  

                </div>
              </div>
            </div><!-- End testimonial item -->


            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">

                  <div class="col-lg-4">

                  <div class="card">
                    <h5><b>DIFERENCIALES</b></h5>                        
                    <img class="card-img-top mt-2" src="assets/img/s-diferenciales.png" alt="repuestos camiones mercedes">
                    <div class="card-body">
                      <p class="card-text">Reparación y Mantención</p>
                      <a href="https://trucksrepair.cl/2023/10/20/diferenciales-reparacion-y-mantencion/" id="card_href" target="_blank">CONTINUAR</a>
                    </div>
                  </div>

                  </div>                  

                </div>
              </div>
            </div><!-- End testimonial item -->                                                            


          </div>

          <br><br><br>
          <div class="swiper-pagination"></div>
        </div>        
        
        
        
        

<section id="faq" class="faq">

    <div class="container">
        <div class="section-title text-center">
            <h3 class="text-center mb-4">PREGUNTAS FRECUENTES</h3>
            <h2 class="mb-4">Preguntas frecuentes de parte de <span>Transportistas</span></h2>
        </div>

        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <b>¿Quienes somos?</b>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse mt-3" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Somos una empresa dedicada a brindar soluciones tecnológicas basadas en la electrónica y software de control.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <b>¿A que nos dedicamos?</b>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse mt-3" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Nos dedicamos a la optimización electrónica de las unidades de control que tienen los vehículos de camiones Mercedes Benz.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <b>¿Que buscamos con la optimización electronica de las unidades de control de los vehiculos?</b>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse mt-3" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Maximizar el rendimiento de los motores, permitiendo que entreguen un mayor torque útil con menos utilización de la potencia del motor, mejores sobrepasos, menos caída de rpm en largas pendientes mejorando los consumos de combustible. Nosotros no trabajamos sobre partes mecánicas del motor, sino sobre la computadora que controla, reprogramando fundamentalmente la curva de torque del motor, lo que permitirá que el vehículo transite con el motor más aliviado, ligeramente con mayor potencia. Nuestro trabajo no prioriza la potencia máxima, sino la reducción del consumo de combustible.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				  <b>¿Esto afecta al motor?</b>
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                NO, nuestro trabajo se realiza siempre dentro de los márgenes de tolerancia que el fabricante dispuso para el motor y que estén presentes en la programación de la computadora del mismo. Hoy en día se fabrican vehículos para todo el mundo, por esto, los motores tienen amplias tolerancias. La optimización de TrucksRepair adapta los motores a las circunstancias de nuestro país.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <b>¿Por que no lo ofrecen los fabricantes de los vehiculos?</b>
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Los fabricantes ofrecen el mejor producto para un segmento, o sea, producen distintos modelos de vehículos para poder ocupar distintos segmentos de precio del mercado. Comparten mismos motores para camiones más económicos pero con menor torque que otros camiones más caros y potentes. La diferencia la logran con una diferente programación de la computadora de control del motor.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
              <button class="accordion-button collapsed mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <b>¿Se puede volver a la programación original del vehiculo si debo llevarlo a una revisión en fabrica?</b>
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Efectivamente, es posible reprogramar el mismo con el programa original, sin que esto ocasione un costo extra.
              </div>
            </div>
          </div>                              

        </div>
     
    </div>

</section>	


<section id="new" class="new">

<div class="container"> <!-- container -->
<div class="row">
  
<div class="col-lg">

<span id="bnew" class="badge bg-secondary">NOTICIA</span>  
<h2 class="text-white mt-3">TrucksRepair se une a la red de optimización de EcuTrucks</h2>

<h2 class="text-white mt-3">Agrega el servicio de <span id="snew">reprogramación</span> a tu taller</h2>

<p class="text-white mt-3">
¿En que consiste el servicio?
El servicio consiste en que usted pueda realizar la modificación electrónica de las centralitas (ecu) en su taller y poder ofrecerle a sus clientes este servicio, para mejorar el rendimiento de sus vehiculos y poder solucionar problemas referidos a los diferentes sistemas electronicos adblue, dpf, egr, etc.

<br><br><br>
<a href="https://trucksrepair.cl/2023/10/30/trucksrepair-se-une-a-la-red-de-optimizacion-de-ecutrucks" target="_blank" class="new_href"><b class="text-white">LEER MÁS</b></a>

</p>
  
</div>
<div class="col-lg">

        <div class="new-slider swiper">
          <div class="swiper-wrapper">


            <div class="swiper-slide">
              <div class="new-item">
                <img src="assets/img/distrib0.jpg" class="img-fluid" alt="repuestos camiones mercedes">
              </div>

            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="new-item">
                <img src="assets/img/distrib2.jpg" class="img-fluid" alt="repuestos camiones mercedes">
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="new-item">
                <img src="assets/img/distrib3.jpg" class="img-fluid" alt="repuestos camiones mercedes">
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="new-item">
                <img src="assets/img/distrib1.jpg" class="img-fluid" alt="repuestos camiones mercedes">
              </div>
            </div><!-- End testimonial item -->             

          </div>
          <br><br><br>
          <div class="swiper-pagination"></div>
        </div> 

</div>



</div>


</div>
</section>                

<section id="contacto" class="contacto">
<div class="container">

<div class="section-title text-center">
    <h3 class="mb-4">Contacto</h3>    
</div>

        <div>
                <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3201.827398726314!2d-72.09006938471492!3d-36.6305410799838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669292e9f002c61%3A0x22fa2671f1cb5b8f!2sTrucks%20Repair%20Chillan!5e0!3m2!1ses!2scl!4v1664894150025!5m2!1ses!2scl" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen=""></iframe>
        </div>

        <div class="row mt-5">

              <div class="col-lg-4">
              <i class="bi bi-geo-alt"></i>
                    <h4>Ubicación</h4>
                    <p class="mr-4 ml-4">Avenida Río Viejo #1110, Chillán</p>
              </div>            



              <div class="col-lg-4">
                    <h4><i class="bi bi-envelope"></i>Email</h4>
                    <p>trucksrepairweb@gmail.com</p>          
                
              </div>


              <div class="col-lg-4">

                    <h4><i class="bi bi-phone"></i>Teléfono</h4>

                    <p>Ventas <br>
                    +56 9 5879 4619 <br>
                    +56 9 7262 8921 (web) <br>
                    Servicios <br>
                    +56 9 95356239 <br>
                    +56 9 74015365</p>         
                

              </div>                    


        </div>

</section>	

	<!-- Fin container -->
</div>   

        


</div>
<!-- fin contenido -->


</div>



<?php get_footer(); ?>
