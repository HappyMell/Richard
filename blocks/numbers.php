<div class="section-light__feature numbers">
<?php $numbers = get_field('numbers')?>
<?php foreach($numbers as $number) {?>
          <div class="numbers__container">
            <p class="number-p"><?php echo $number['number']?></p>
            <h4><?php echo $number['title']?></h4>
          </div>
<?php }?>
          
        
          
        </div>