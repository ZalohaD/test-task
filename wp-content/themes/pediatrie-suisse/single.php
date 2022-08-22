<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Pediatrie_suisse
 */

get_header();
?>


    <body>
    <div class="container">
        <div class="img-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/background.png" alt="#" class="background-img">
        </div>
        <div class="background-wrapper">
            <p class="top-text">Annual Congress 2021 <span class="date">10-11 Juni </span> </p>
            <h1 class="heading">Pediatric Integrative Medicine</h1>
            <p class="bottom-text">Building bridges between conventional and complementary medicine</p>
            <button class="main-button"><a class="button-text" href="#">Register</a></button>
        </div>
    </div>

    <div class="whitespace"></div>
    <div class="main-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/inc/img/doctor.png" alt="" class="doctor-img">

    </div>

    </body>

<?php
get_sidebar();
get_footer();
