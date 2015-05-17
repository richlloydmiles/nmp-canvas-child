<?php
/*
Template Name: Homepage
*/

//I am a copy of the index.php file :)
get_header();

global $woo_options;
?>      

<!-- #content Starts -->
<?php woo_content_before(); ?>
<div id="content">


        <!-- #main Starts -->
        <?php woo_main_before(); ?>
        <section id="main">

            <?php
            if ( is_home() && is_active_sidebar( 'homepage' ) ) {
                dynamic_sidebar( 'homepage' );
            } else {
                get_template_part( 'loop', 'index' );
            }
            ?>

        </section><!-- /#main -->
        <?php woo_main_after(); ?>
    <?php get_sidebar( 'alt' ); ?>       

</div><!-- /#content -->
<?php woo_content_after(); ?>

<?php get_footer(); ?>