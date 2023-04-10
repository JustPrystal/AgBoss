<section class="contact" style="background-image: url(<?php echo $block["background_image"]?>);">
    <div class="inner">
        <div class="map"><iframe src="https://my.atlistmaps.com/map/1f1bba78-e151-4e33-adea-7d9932c2a5d9?share=true" allow="geolocation 'self' https://my.atlistmaps.com" width="100%" height="600px" frameborder="0" scrolling="no" allowfullscreen></iframe></div>
        <div class="form">
            <h3 class="heading"><?php echo $block["heading"];?></h3>
            <p class="description"><?php echo $block["description"];?></p>
            <div class="form-wrapper">
                <?php 
                    echo do_shortcode('[gravityform id="1" title="true" description="false" ajax="true"]'); 
                ?>
            </div>
        </div>
    </div>
</section>