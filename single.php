<?php get_header(); ?>
<div id="jt" class="jumbotron pt-6">

    <div id="hjt" class="container">

            <div class="col-lg text-center">
                <img src="https://trucksrepair.cl/wp-content/uploads/2023/11/blog-img.png" class="img-fluid mt-5">
            </div>


            <div class="col-lg mt-3 mb-5">
				<div class="col-lg breadcrumbw text-white">
				  <div class="float-left mb-5">              
					<p class="text-white"><?php echo do_shortcode("[wpseo_breadcrumb]"); ?></p>
					  <br>
				  </div>
				</div>					
            </div>
    </div>


</div>
<style>
#menu-main, .menu-primary-container {
    display: none;
}
.navbar-toggler {
    display: none;
}
</style>

<div class="container">

    <div class="contenido mt-4">
        
    <div class="row">


        <!-- entradas -->
        <div class="col-lg-9">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <!-- entrada -->
            <div class="card-body mb-4">
                <h4 class="sep-xs post_tittle"><b><i><?php the_title() ?></i></b></h4>
                <div class="post_title_divider"></div>
            
                <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('post-thumbnails', array(
                            'class' => 'img-fluid mb-3'
                        )); 
                    }
                ?>
                                
                <!-- <img src="img/1200.jpg" alt="" class="img-fluid mb-3"> -->
                <?php the_content(); ?>
            </div>
            <!-- entrada -->

        <?php endwhile; endif; ?>


        </div>
        <!-- /entradas -->

        <div class="col-lg-3 mt-3">
            <h5 class="mt-3"><i><b>BLOG TRUCKSREPAIR</b></i></h5>

            <nav class="nav flex-column">
                <a class="nav-link single_nav" href="https://trucksrepair.cl/category/noticias/">NOTICIAS</a>               
                <a class="nav-link single_nav" href="https://trucksrepair.cl/category/consejos-y-tips/">CONSEJOS Y TIPS</a>
            </nav>


            <h5 class="mt-4"><i><b>SERVICIOS</b></i></h5>

            <nav class="nav flex-column">
              	<a class="nav-link single_nav" href="https://trucksrepair.cl/category/servicios">TODOS</a>             
              	<a class="nav-link single_nav" href="https://trucksrepair.cl/category/servicios/ecu/">ECU</a>
              	<a class="nav-link single_nav" href="https://trucksrepair.cl/category/servicios/frenos/">FRENOS</a>
				<a class="nav-link single_nav" href="https://trucksrepair.cl/category/servicios/motor/">MOTOR</a>				
				<a class="nav-link single_nav" href="https://trucksrepair.cl/category/servicios/caja/">CAJA</a>		
				<a class="nav-link single_nav" href="https://trucksrepair.cl/category/servicios/diferenciales/">DIFERENCIALES</a>		
            </nav>

        </div>          
            



    </div>          


    </div>

    
</div>

<!-- blog -->

<?php get_footer(); ?>