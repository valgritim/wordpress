<?php get_header(); ?>
<!-- enf of navbar part -->
<main role="main">
    <?php woocommerce_content(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h2 class="display-3">Bienvenue chez <?php bloginfo('name'); ?></h2>
            <p><?php bloginfo('description'); ?></p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">En savoir plus</a></p>
        </div>
    </div>
<!-- end of Jumbotron part -->
<section class="boxes">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <i class="fas fa-utensils"></i>
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    
                    <a class="btn btn-primary" href="#" role="button">View details</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <i class="fas fa-piggy-bank"></i>
                    <h2>Heading</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    <a class="btn btn-primary" href="#" role="button">View details &raquo;</a>
                </div>
            </div> 
            <aside class="cart col-md-4 p-3 "><?php if(is_active_sidebar('sidebar-1')){dynamic_sidebar( 'sidebar-1' );} ?></aside>           
        </div>
           
    </div> <!-- end of container -->
</section>

</main>
<hr>
<?php get_footer(); ?>
