<?php
    /*
    Template Name: Home page
    */
    ?>

<?php get_header();?>   <!--  Tells WordPress to include header.php -->

<section class="container-fluid about-bg text-center">
        <div class="container">
            <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
            <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
            <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
            <div class="blocker"></div>

        </div> <!-- container -->
    </section>

    <section class="container-fluid articles-bg">
        <div class="container">
            <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
            <div class="row">
                    <div class="col-md-4">
                    <img class="img-fluid" src="<?php the_field('articleimage'); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
                    <p class="article-date"><?php the_field('articledate'); ?></p>
                    <p class="article-p"><?php the_field('articleexcerpt'); ?></p>
                    <a href="<?php the_field('readmore'); ?>" class="read-more">CONTINUE READING</a>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="http://170.187.231.66/~mesh14/wp-content/themes/starter_for_josh_site/images/article_image_2.jpg" alt="3D renders of a sci-fi character model.">
                    <h4 class="article-title">A PORTRAIT</h4>
                    <p class="article-date">Friday, November 10, 2030</p>
                    <p class="article-p">STS has never been shy of seeking new terrains of  investigation. More and  more  STS 
                        scholars are  starting to explore and intervene in the arts.  This object of study  
                        brings  new challenges and  opportunities that we want  to explore in this session.   
                        We would  like to gather first of all simply  new kinds of  knowledge arising from  STS 
                        study  of the arts.</p>
                        <a class="read-more" href="#">CONTINUE READING</a>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="http://170.187.231.66/~mesh14/wp-content/themes/starter_for_josh_site/images/article_image_3.jpg" alt="Top down perspective of a pixelated race track.">
                    <h4 class="article-title">A PORTRAIT</h4>
                    <p class="article-date">Friday, November 10, 2030</p>
                    <p class="article-p">STS has never been shy of seeking new terrains of  investigation. More and  more  STS 
                        scholars are  starting to explore and intervene in the arts.  This object of study  
                        brings  new challenges and  opportunities that we want  to explore in this session.   
                        We would  like to gather first of all simply  new kinds of  knowledge arising from  STS 
                        study  of the arts.</p>
                        <a class="read-more" href="#">CONTINUE READING</a>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
<?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->