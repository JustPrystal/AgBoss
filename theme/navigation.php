<?php
    $logo = get_field("nav_logo", "option");
    $links = get_field("nav_links", "option");
?>
<header>
    <div id="logo" class="logo">
        <img src="<?php echo $logo;?>" alt="">
    </div>
    <div class="inner">
        <div class="nav-links">
            <?php foreach($links as $link){ ?>
                <a href="<?php echo $link["link"]["url"] ;?>" class="link"><?php echo $link["link"]["title"] ;?></a>
            <?php } ?>
        </div>
        <div class="hamb">
        <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>70 Basic icons by Xicons.co</title><path d="M41,14H7a2,2,0,0,1,0-4H41A2,2,0,0,1,41,14Z" fill="#ffffff"></path><path d="M41,26H7a2,2,0,0,1,0-4H41A2,2,0,0,1,41,26Z" fill="#ffffff"></path><path d="M41,38H7a2,2,0,0,1,0-4H41A2,2,0,0,1,41,38Z" fill="#ffffff"></path></g></svg>
        </div>
    </div>
</header>
<div class="side-menu">
    <div class="inner">
        <div class="cross">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 5L5 19M5.00001 5L19 19" stroke="#262626" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </div>
        <div class="links">
            <?php foreach($links as $link){ ?>
                <a href="<?php echo $link["link"]["url"] ;?>" class="link"><?php echo $link["link"]["title"] ;?></a>
            <?php } ?>
        </div>
    </div>
</div>