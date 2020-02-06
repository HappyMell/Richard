<section class="section-dark container" id="about">
        <div
          class="section-dark__display"
          data-sal-duration="1200"
          data-sal="slide-up"
          data-sal-delay="300"
          data-sal-easing="ease-out-bounce"
        >
          <p class="title"><?php echo the_field('small_title')?></p>
          <h2><?php echo the_field('big_title')?></h2>
        </div>
        <div class="section-dark__image">
          <img src="<?php echo the_field('image')?>" />
        </div>
      </section>