  
        <div class="main-feature">
        <?php $icons = get_field('icons_and_info')?>
        <?php foreach($icons as $icon) {?>
          <div class="main-feature__icons">
            <div class="main-icon">
              <i class="<?php echo $icon['icons']?>"></i>
            </div>
            <h4><?php echo $icon['title']?></h4>
            <p>
              <?php echo $icon['paragraph']?>
            </p>
          </div>
        <?php }?>
         
       
        </div>