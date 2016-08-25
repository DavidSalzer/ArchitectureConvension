<?php
    /*
          Template Name: Upload Image Page
      */
    
    
?>
<?php
    
    get_header();
    wp_enqueue_script('nadlan-upload', get_template_directory_uri() . '/js/nadlan-upload.js', array('jquery'), false, true);   
    wp_enqueue_script('nadlan-fileUpload', get_template_directory_uri() . '/js/nadlan-fileUpload.js', array('jquery'), false, true);      
    wp_enqueue_script('tooltip', get_template_directory_uri() . '/js/tooltip.js', array('jquery'), false, true);   
    
    
?>
<script>
    var domain = "<?php echo home_url( '/' ); ?>";
    var signupNum= "<?php echo $signup; ?>";
</script>
<?php while (have_posts()) : the_post(); ?>
<?php $categories = get_the_category(); ?>
<div class="heading">
    <div class="container">
        <h1><?php the_title() ?></h1>
    </div>
</div>
<div class="container" style="position: relative;">
   
     <?php the_content(); ?>
    <div id="nadlan-mask"><div id="nadlan-loader"></div></div>
    <form id="nadlan-register-form">
        <div class="register-step">
            <div class="row">
                <div class="col-sm-6">
                    <input id="Email1" type="text" value="" placeholder="אימייל">
                </div>
                <div class="col-sm-6">
                    <input id="Phone_Mobile1" type="text" value="" placeholder="טל' נייד ">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <input id="id1" type="text" value="" placeholder=" ת.ז">
                </div>
            </div>
            

            <div class="row">
                <div class="upload-imag-icon">
                    <input id="upload-imag1" name="upload-imag1" type="file" value="">
                </div>
            </div>



            <div class="row">
                <div class="col-sm-11">
                    <button id="send-button" class="btn btn-secondary">הבא</button>
                </div>
            </div>
        </div>


        <!--</div>-->
    </form>
</div>
<?php endwhile; // end of the loop. ?>
<?php get_footer();?>