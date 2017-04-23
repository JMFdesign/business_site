<?php get_header(); ?>

  <body id="blue_background">

    <header class="row">
      <h1>
        <?php the_title(); ?>
      </h1>

      <a href="http://www.memoriesbyjmf.com/nateshonor/"><img src="http://www.memoriesbyjmf.com/nateshonor/wp-content/themes/business-site-jessica-arnieri-hernandez/images/nates_honor_animal_rescue_logo.png" alt="Nate's Honor Animal Rescue Logo" title="Back to Doggies' Homepage" id="large_logo" /></a>

      <div id="social_media">
          <a href="http://www.facebook.com/HonorAnimalRescue/" target="_blank">
            <img src="http://www.memoriesbyjmf.com/nateshonor/wp-content/themes/business-site-jessica-arnieri-hernandez/images/sm_facebook.png" alt="Find us on Facebook" title="Facebook" class="social_buttons" />
          </a>
          <a href="http://www.twitter.com/" target="_blank">
            <img src="http://www.memoriesbyjmf.com/nateshonor/wp-content/themes/business-site-jessica-arnieri-hernandez/images/sm_twitter.png" alt="Follow us on Twitter" title="Twitter" class="social_buttons" />
          </a>
          <a href="https://www.instagram.com/nateshonoranimalrescue/" target="_blank">
            <img src="http://www.memoriesbyjmf.com/nateshonor/wp-content/themes/business-site-jessica-arnieri-hernandez/images/sm_instagram.png" alt="Follow us on Instagram" title="Instagram" class="social_buttons" />
          </a>
          <a href="https://www.pinterest.com/honoranimal/" target="_blank">
            <img src="http://www.memoriesbyjmf.com/nateshonor/wp-content/themes/business-site-jessica-arnieri-hernandez/images/sm_pinterest.png" alt="Pin with us on Pinterest" title="Pinterest" class="social_buttons" style="margin-right: 0px" />
          </a>
      </div>
    </header>

    <main>
      <h1>
        <?php printf(
          __('Search Results for: %s'),
          '<span>' . get_search_query() . '</span>' );
        ?>
      </h1>

      <?php if (have_posts()) :
        while ( have_posts() ) : the_post(); ?>
            <section>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_excerpt(); ?></p>
              <div class="add_bottom_padding">
                <a href="<?php the_permalink(); ?>">Read More</a>
              </div>
            </section>
        <?php endwhile;
      else: ?>
        <h1>Nothing Found</h1>
        <p>Sorry, we could not find any posts that match your search criteria.  Please try again with different search terms.</p>
      <?php endif;
      ?>
    </main>

    <?php get_footer(); ?>
 
  <!-- End Search Content -->
