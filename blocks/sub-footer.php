<section class="sub-footer ">
        <div class="sub-footer__content ">
          <div class="sub-footer__img">
            <img src="<?php echo the_field('image')?>" />
          </div>

          <div class="sub-footer__info " id="download">
            <div
              class="sub-footer__display"
              data-sal-duration="1200"
              data-sal="slide-up"
              data-sal-delay="300"
              data-sal-easing="ease-out-bounce"
            >
              <h2><?php echo the_field('title')?></h2>
              <div class="buttons container-sm">
                <button class="button__large--pink" href="<?php echo get_field('download_button')['url']?>"><?php echo get_field('download_button')['title']?></button>
                <button class="button__large--clear" href="<?php echo get_field('touch_button')['url']?>"><?php echo get_field('touch_button')['title']?></button>
              </div>
            </div>
          </div>
        </div>
      </section>