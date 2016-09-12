<?php
    $ef_options = EF_Event_Options::get_theme_options();
?>

<div style="background: #e7e7e7; padding: 25px 0;"><a href="http://designcity.org.il/%D7%94%D7%A8%D7%A9%D7%9E%D7%94-%D7%9C%D7%95%D7%A2%D7%99%D7%93%D7%AA-%D7%94%D7%90%D7%93%D7%A8%D7%99%D7%9B%D7%9C%D7%99%D7%9D/"><img src="<?php echo get_template_directory_uri() . '/images/hakdimu.png'; ?>" class="main-text-img" style="margin-bottom: 0;" /></a></div>
<footer>
    <div style="text-align: center; margin-bottom: 20px;"><img class="img-logo" src="<?php echo get_template_directory_uri() . '/images/kadira_logo.png'; ?>" alt="הדירה - שיפוץ ובנייה" title="הדירה - שיפוץ ובנייה" /></div>
    <?php wp_nav_menu( array('menu' => 'links' )); ?>
    <div class="container">
        <div class="row row-sm">
            <a id="cambium-logo" href="http://cambium.co.il/" target="_blank"></a>
            <?php dynamic_sidebar('footer'); ?>
        </div>
    </div>
    <div class="credits">
        <?php
            
            if ( isset( $ef_options['ef_footer_content'] ) ) {
                echo stripslashes( $ef_options['ef_footer_content'] ); 
            }
        ?>
        <div class="footer-tyler-event">
       	Powered by <a href="http://eventmanagerblog.com/event-wordpress-theme-tyler">Tyler WordPress Theme</a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- SCROLL UP BTN -->
<a href="#" id="scroll-up"><?php _e('UP', 'tyler'); ?></a>
<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<!-- backdrop -->
<div id="backdrop"></div>


<script>
        $( document ).ready(function() {
    
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE");
    
             if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
                 $('.startup_input_file').css('width','60%');
             } 
            $( ".startup_input_select" ).change(function() {
                if($( ".startup_input_select").val() == "אחר" && $( ".startup_input_other").val() == ""){
                    alert("שים לב! יש למלא את השדה:'עיסוק אחר'");
                }
                if ($( ".startup_input_select" ).val() == "אחר") {
                            $(".other_accu").css('display', 'block');
    
                        } else {
                            $(".other_accu").css('display', 'none');
                        }
        });
        });

</script>
</body>
</html>
