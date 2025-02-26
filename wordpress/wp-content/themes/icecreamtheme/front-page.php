<?php get_header();?>

<main>

    <section class="banner" style="background-image:url(<?php the_field('banner:_background-img')?>);">
        <h1><?php the_field('banner:_title')?></h1>
        <a href="<?php the_field('banner:_button')?>">Flavors</a>
    </section>
    <section class="about-us" id="about-us">
        <div class="left">
            <h2><?php the_field('section_about:_title')?></h2>
            <h4><?php the_field('section_about:_subtitle')?></h4>
            <div class="lines">
                <div class="line-blue-about line-about"></div>
                <div class="line-yellow-about line-about"></div>
                <div class="line-red-about line-about"></div>
            </div>
            <p><?php the_field('section_about:_paragraph_1')?></p>
            <p><?php the_field('section_about:_paragraph_2')?></p>
        </div>
        <div class="right">
            <div class="img-about" style="background-image:url(<?php the_field('section_about:_image')?>);"></div>
        </div>
    </section>
    <section class="cards-display">
    <div class="titles">
            <h2>Our Flavor Picks!</h2>
            <div class="lines lines-cards">
                <div class="line-blue-about line-cards"></div>
                <div class="line-yellow-about line-cards"></div>
                <div class="line-red-about line-cards"></div>
            </div>
        </div>
        <div class="posts-container">
        <?php 
                //CUSTOM QUERY (step 1)
                $homepageBlogPosts = new WP_Query(
                    array(
                        'posts_per_page' => 2,
                        'post_type' => 'post'
                        // 'orderby' => 'rand'
                    ));

                ?>

                <div class="blog-grid">

                    <?php 

                    //STEP 2: Run the Loop to get the DB items
                    //LOOP STARTS
                    while($homepageBlogPosts->have_posts()){
                        $homepageBlogPosts->the_post();
                    
                    ?>

                    <div class="card">

                        <?php 
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
                        ?>

                        <a href="<?php the_permalink(); ?>">
                            <div class="blog-img" style="background-image:url(<?php echo $url; ?>);">
                            </div>
                        </a>
                                               
                        <h3><?php the_title(); ?></h3>
                        
                        <p><?php echo wp_trim_words(get_the_content(), 22, '...'); ?></p>

                        <h6>
                        <?php
                            $day = get_the_date('j');
                            $month = get_the_date('F');
                            $year = get_the_date('Y');

                            if ($day == '1' || $day == '21' || $day == '31') {
                                $day_suffix = 'st';
                            } elseif ($day == '2' || $day == '22') {
                                $day_suffix = 'nd';
                            } elseif ($day == '3' || $day == '23') {
                                $day_suffix = 'rd';
                            } else {
                                $day_suffix = 'th';
                            }

                            echo $day . $day_suffix . ' ' . $month . ' ' . $year;
                            ?>
                        </h6>
                        
                    
                    </div>

                    <?php 
                    //LOOP ENDS
                        } wp_reset_postdata();
                    ?>

                </div>
        </div>
    </section>

</main>

<?php get_footer();?>