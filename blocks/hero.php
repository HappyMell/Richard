<section class="main-hero container">
        <div class="main-hero__display">
          <div
            class="main-hero__info"
            data-sal-duration="1200"
            data-sal="slide-up"
            data-sal-delay="300"
            data-sal-easing="ease-out-bounce"
          >
            <h1><?php echo the_field('title')?></h1>
            <h3><?php echo the_field('sub_title')?></h3>
            <button class="button__small" href="<?php echo get_field('button')['url']?>"><?php echo get_field('button')['title']?></button>
          </div>
          <div
            class="main-hero__img"
            data-sal-duration="1200"
            data-sal="slide-up"
            data-sal-delay="600"
            data-sal-easing="ease-out-bounce"
          >
            <img src="<?php echo the_field('image')?>" />
          </div>

          <div class="arrow-icon">
            <i class="fas fa-long-arrow-alt-down fa-3x"></i>
          </div>
        </div>
      </section>