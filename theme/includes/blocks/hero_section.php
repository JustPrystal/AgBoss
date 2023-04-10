<section class="hero <?php 
    if($block["section_type_choice"] == "with_products"){
        echo "with_products"; 
    }else if($block["section_type_choice"] == "heading_btm"){
        echo "heading_btm"; 
    }
    ?>" style="background-image:url(<?php echo $block["background_image"] ?>);">
    <div class="wrapper">
        <?php if($block["heading"]){?>
            <h1 class="heading"><?php echo $block["heading"] ; ?></h1>
        <?php } ?>
        <?php if($block["description"]){?>
            <p class="description"><?php echo $block["description"] ; ?></p>
        <?php } ?>
        <?php if($block["section_type_choice"] == "regular"){?>
            <?php if($block["buttons"]){?>
                <div class="button-group">
                    <?php foreach($block["buttons"] as $btn){?>
                        <a href="<?php echo $btn["button"]["url"]?>" class="button"><?php echo $btn["button"]["title"]?></a>
                    <?php } ?>
                </div>
            <?php } ?>
        <?php }  ?>
        <?php if($block["section_type_choice"] == "with_products"){?>
            <div class="bottom-wrap">
                <?php if($block["products"]){?>
                    <div class="product-group">
                        <?php foreach($block["products"] as $product){?>
                            <div class="product"><?php echo $product["product"]?></div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php if($block["buttons"]){?>
                    <div class="button-group">
                        <?php foreach($block["buttons"] as $btn){?>
                            <a href="<?php echo $btn["button"]["url"]?>" class="button"><?php echo $btn["button"]["title"]?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>