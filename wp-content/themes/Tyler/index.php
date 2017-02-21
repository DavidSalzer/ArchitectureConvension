<?php
    get_header();
    // Get Theme Options
    //$ef_options = get_option( 'eventframework' );
    $ef_options = EF_Event_Options::get_theme_options();
?>
<!-- LANDING - BIG PICTURE -->
<div class="home-baner" style="<?php if(!empty( $ef_options['ef_banerbg']))?>background-image:url('<?php echo $ef_options['ef_banerbg'] ?>'); <?php if(!empty( $ef_options['ef_banerbgcolor']))?>background-color:<?php echo $ef_options['ef_banerbgcolor']; ?>">

<?php
    if (is_active_sidebar('homepage-top'))
        dynamic_sidebar('homepage-top');
?>

</div>



<?php
    if (is_active_sidebar('homepage'))
        dynamic_sidebar('homepage');
?>
<?php get_footer(); ?>
