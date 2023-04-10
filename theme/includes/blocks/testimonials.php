<section class="testimonials">
    <div class="inner">
        <?php if($block["heading"]){?>
            <h2 class="heading"><?php echo $block["heading"];?></h2>
        <?php } ?>
        <?php if($block["description"]){?>
            <p class="description"><?php echo $block["description"];?></p>
        <?php } ?>
        <?php if($block["testimonials"]){?>
            <div class="testimonial-wrap">
                <?php foreach($block["testimonials"] as $test){?>
                    <div class="testimony">
                        <div class="left">
                            <img src="<?php echo $test["image"]?>" alt="">
                        </div>
                        <div class="right">
                            <div class="top">
                                <div class="name"><?php echo $test["name"]?></div>
                                <div class="rating">
                                    <?php for ($i=0; $i < intval($test["rating"]); $i++) { ?>
                                        <span class="star">
                                            <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.39864 0.526123L7.69216 4.50717L11.8781 4.50717L8.4916 6.9676L9.78512 10.9486L6.39864 8.48822L3.01215 10.9486L4.30568 6.9676L0.919191 4.50717L5.10512 4.50717L6.39864 0.526123Z" fill="#FFB800"/>
                                            </svg>
                                        </span>
                                    <?php } ?>
                                </div>
                            </div>
                            <p class="text">
                                <?php echo $test["testimony"]?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        
    </div>
</section>