<?php
    get_header();
    // Get Theme Options
    //$ef_options = get_option( 'eventframework' );
    $ef_options = EF_Event_Options::get_theme_options();
    $string = $_SERVER['REQUEST_URI'];
        $newString = substr($string, 1);
        $registerUrl = '/%D7%94%D7%A8%D7%A9%D7%9E%D7%94-%D7%9C%D7%A2%D7%99%D7%A8-%D7%94%D7%A0%D7%93%D7%9C%D7%9F/' . $newString;
?>
<!-- LANDING - BIG PICTURE -->
<div class="home-baner">

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
