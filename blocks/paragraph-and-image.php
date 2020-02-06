<section class="section-light container" id="features">
<?php $posts = get_field('section')?>
    <?php foreach($posts as $post) {?>
        <div class="section-light__feature">
          <div
            class="section-light__display"
            data-sal-duration="1200"
            data-sal="slide-up"
            data-sal-delay="300"
            data-sal-easing="ease-out-bounce"
          >
            <p class="title"><?php echo $post['title']?></p>
            <h2><?php echo $post['big_title']?></h2>
            <p><?php echo $post['paragraph']?></p>
          </div>
          <div class="section-light__img">
            <img src="<?php echo $post['image']?>" />
          </div>
        </div>
    <?php }?>

</section>        