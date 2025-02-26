<?php 
/*
Template Name: Franchise Page
*/
get_header(); ?>

<main>
    <section class="banner-franchise" style="background-image:url(<?php the_field('banner_franchise:_image')?>);">
        <h1>Ice Cream is Always a Good Idea!!!</h1>
        <a href="">Own a Franchise</a>
    </section>
    <section class="about-franchise">
        <div class="left-franchise">
            <div class="franchise-about-img" style="background-image:url(<?php the_field('about_franchise:_image')?>);"></div>
        </div>
        <div class="right-franchise">
            <h2>Canadian Paleta, Inc Franchise Opportunities</h2>
            <h4>Be a Part of Something Sweeter</h4>
            <ul class="list-franchise">
                <li><i class="fas fa-check-circle"></i>The best franchise support in the industry</li>
                <li><i class="fas fa-check-circle"></i>Our simple, reliable franchise model</li>
                <li><i class="fas fa-check-circle"></i>Employee and management training programs</li>
                <li><i class="fas fa-check-circle"></i>Strong customer loyalty and relationship with the brand</li>
                <li><i class="fas fa-check-circle"></i>Sharing our famous treats and delicious food offerings</li>
                <li><i class="fas fa-check-circle"></i>A modern restaurant design and menu</li>
                <li><i class="fas fa-check-circle"></i>Industry leading mobile app</li>
                <li><i class="fas fa-check-circle"></i>Canadian Franchise Association Hall of Fame</li>
            </ul>
        </div>
    </section>
</main>

<?php get_footer();?>