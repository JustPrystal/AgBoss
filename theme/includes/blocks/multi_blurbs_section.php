<section class="multi-blurbs-section <?php if($block["background_choice"] == "with_img"){ echo "with_img" ;} ?>">
    <?php if($block["background_images"]){?>
        <div class="bg-imgs <?php 
        if($block["background_images"]["position"] == "set1"){
            echo "set1";
        }else if($block["background_images"]["position"] == "set2"){
            echo "set2";
        }
        ?>">
            <img class="bg-img" src="<?php echo $block["background_images"]["image_1"]?>" alt="">
            <img class="bg-img" src="<?php echo $block["background_images"]["image_2"]?>" alt="">
        </div>
    <?php } ?>
    <div class="inner">
        <?php foreach($block["blurbs"] as $blurb){?>
            <div class="blurb <?php if(count($blurb["invert_blurb_layout"]) > 0){ echo "inverted";}?>">
                <div class="left">
                    <img src="<?php echo $blurb["image"] ;?>" alt="">
                </div>
                <div class="right">
                    <?php
                    if($blurb["blurb_type"] == "regular"){?>
                        <h4 class="subtitle"><?php echo $blurb["subtitle"] ?></h4>
                        <h3 class="title"><?php echo $blurb["title"] ?></h3>
                        <p class="description"><?php echo $blurb["description"] ?></p>
                        <a href="<?php echo $blurb["button"]["url"] ?>" class="button"><?php echo $blurb["button"]["title"] ?></a>
                    <?php } 
                    if($blurb["blurb_type"] == "list"){?>
                        <h4 class="subtitle"><?php echo $blurb["subtitle"] ?></h4>
                        <h3 class="title"><?php echo $blurb["title"] ?></h3>
                        <div class="list">
                            <?php foreach($blurb["list"] as $item){?>
                                <div class="list-item"><?php echo $item["item"];?></div>
                            <?php } ?>
                        </div>
                    <?php } 
                    ?>
                    </div>
            </div>              
        <?php } ?>                
    </div>
</section>