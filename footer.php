<?php
/**
 * The template for displaying the footer
 *
 *
 */

?>

  <!--
    You will likely add here:
      - <footer>
  -->

  <footer class="page-footer container">
      <div
        class="page-footer__container"
        data-sal-duration="1200"
        data-sal="slide-up"
        data-sal-delay="300"
        data-sal-easing="ease-out-bounce"
      >
        <h2><?php echo get_field('title', 'options')?></h2>
        <p><?php echo get_field('sub_title', 'options')?></p>
        <div class="page-footer__form">
          <form>
            <input
              type="text"
              id="fname"
              name="fname"
              placeholder="Enter your email"
            />
            <button class="button__large--pink">Subscribe</button>
          </form>
        </div>
      </div>

      <div class="page-footer__footer">
        <div class="page-footer__logo">
          <img src="<?php echo get_field('logo', 'options')?>" />
        </div>
        <div class="page-footer__links">
        <?php wp_nav_menu( array( 
        'menu' => 'footer-menu',
        ) ); ?>  
        </div>
      </div>
    </footer>

  <?php wp_footer(); ?>
</main>
  </body>
</html>
