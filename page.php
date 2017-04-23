<?php get_header(); ?>

  <body id="pink_background">

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

    <!-- Begin Page Content -->


    <main class="twelve columns">

    <!-- Side Scroll Images Based on this Tutorial: https://css-tricks.com/how-to-create-a-horizontally-scrolling-site/ -->

      <table> 
        <tr>
          <td>
            <!-- Begin Loop -->
      			<?php if ( have_posts() ) {
              while( have_posts() ) {
                /* OUR DATA CONTEXT IS DEFINED 	*/
                the_post(); ?>

                <?php the_post_thumbnail('medium'); ?>
              }
            } ?>
            <!-- End Loop -->
          </td>
        </tr>
      </table>

    </main>


    <?php get_footer(); ?>

    <!-- End Page Content -->
