<div
          class="carousel container-sm"
          data-sal-duration="1200"
          data-sal="slide-up"
          data-sal-delay="300"
          data-sal-easing="ease-out-bounce"
        >
        <?php $carousels = get_field('carousel')?>
        <?php foreach($carousels as $carousel) {?>
          <div class="carousel__display container-sm">
            <div class="quote-icon">
              <i class="<?php echo $carousel['quote']?>"></i>
            </div>
            <div class="carousel__info">
              <p>
                <?php echo $carousel['paragraph']?>
              </p>

              <div class="carousel__details">
                <p><?php echo $carousel['details']?></p>
              </div>
            </div>
          </div>
        <?php } ?>
          
        </div>