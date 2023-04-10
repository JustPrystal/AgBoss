<?php if($block["blurb_type_choice"] == "small"){?>
    <section class="single-blurb-small">
        <div class="inner">
            <div class="left">
                <?php if($block["heading"]){?>
                    <h2 class="heading">
                        <?php echo $block["heading"];?>
                    </h2>
                <?php } ?>
                <?php if($block["sub_heading"]){?>
                    <h3 class="sub-heading">
                        <?php echo $block["sub_heading"];?>
                    </h3>
                <?php } ?>
                <?php if($block["description"]){?>
                    <p class="description mobile">
                        <?php echo $block["description"];?>
                    </p>
                <?php } ?>
                <?php if($block["buttons"]){?>
                    <div class="button-group">
                        <?php foreach($block["buttons"] as $btn){?>
                            <a href="<?php echo $btn["button"]["url"];?>" class="button"><?php echo $btn["button"]["title"];?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="right">
                <?php if($block["description"]){?>
                    <p class="description">
                        <?php echo $block["description"];?>
                    </p>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } else if($block["blurb_type_choice"] == "medium"){?>
    <section class="single-blurb-medium" <?php if($block["medium_blurb_type_choice"] == "with_img"){?> style="background-image: url(<?php echo ($block["background_image"]);}?>">
        <div class="inner">
            <?php if($block["heading"]){?>
                <h2 class="heading">
                    <?php echo $block["heading"];?>
                </h2>
            <?php } ?>
            <?php if($block["image"]){?>
                <img class="image" src="<?php echo $block["image"];?>" alt="">
            <?php } ?>
            <div class="content">
                <?php if($block["sub_heading"]){?>
                    <h3 class="sub-heading">
                        <?php echo $block["sub_heading"];?>
                    </h3>
                <?php } ?>
                <?php if($block["description"]){?>
                    <p class="description mobile">
                        <?php echo $block["description"];?>
                    </p>
                <?php } ?>
                <?php if($block["buttons"]){?>
                    <div class="button-group">
                        <?php foreach($block["buttons"] as $btn){?>
                            <a href="<?php echo $btn["button"]["url"];?>" class="button"><?php echo $btn["button"]["title"];?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>