<?php get_header(); ?>
<style>
#menu-main, .menu-primary-container, .navbar-toggler {
    display: none;
}

</style>
<div id="jt" class="jumbotron pt-6">

    <div id="hjt" class="container">


            <div class="col-lg mt-3 mb-5">
                <div class="col-lg breadcrumbw text-white">
                  <div class="float-left mb-5">              
                    <p class="rm_breadcrumb"><?php echo do_shortcode("[rank_math_breadcrumb]"); ?></p>
					  <br>
                  </div>
                </div>                  
            </div>



        </div>
    

</div>



<div class="container">
    
<!-- Content -->
<div class="col-lg">

    <main role="main">
        <section>

            <div>
                <nav class="nav">
                  	<a class="nav-link" href="https://trucksrepair.cl/category/noticias">NOTICIAS</a>
					<a class="nav-link" href="https://trucksrepair.cl/category/consejos-y-tips">CONSEJOS Y TIPS</a>
                  	<a class="nav-link" href="https://trucksrepair.cl/category/servicios">SERVICIOS</a>
                </nav>
                <hr>                        
            </div>            


            <div class="row">
    
                    <!-- articulo -->
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-12 col-sm-6 col-md-4 mb-3">
                        <div class="card">
                            <h6><?php echo get_the_date(); ?></h6>

                            <a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4>

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


            <?php get_template_part('pagination'); ?>
        </section>
    </main>
</div>
<!-- /end content -->    


</div>


<?php get_footer(); ?>
