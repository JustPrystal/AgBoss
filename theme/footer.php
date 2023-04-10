<?php 
    $copyright = get_field("copyright", "option");
    $footer_links = get_field("footer_links", "option");
?>
  <section class="footer">
    <div class="inner">
        <div class="copyright"><?php echo $copyright?></div>
        <div class="footer-links">
            <?php foreach($footer_links as $link){?>
                <a href="<?php echo $link["link"]["url"]?>" class="link"><?php echo $link["link"]["title"]?></a>    
            <?php } ?>
        </div>
    </div>
  </section>
       
    
    </div><!-- closing all div -->
    

    <?php wp_footer(); ?>
	</body>
</html>
