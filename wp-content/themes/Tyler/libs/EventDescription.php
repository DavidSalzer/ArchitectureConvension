<?php
register_post_type ( 'event_description', array (
		'labels' => array (
				'name' => __ ( 'Event Description', 'dxef' ),
				'singular_name' => __ ( 'Event Description', 'dxef' ),
				'add_new' => __ ( 'Add New', 'dxef' ),
				'add_new_item' => __ ( 'Add New Event Description', 'dxef' ),
				'edit_item' => __ ( 'Edit Event Description', 'dxef' ),
				'new_item' => __ ( 'New Event Description', 'dxef' ),
				'all_items' => __( 'All Event Descriptions', 'dxef' ),
				'view_item' => __ ( 'View Event Description', 'dxef' ),
				'search_items' => __ ( 'Search Event Descriptions', 'dxef' ),
				'not_found' => __ ( 'No Event Descriptions found', 'dxef' ),
				'not_found_in_trash' => __ ( 'No Event Descriptions found in trash', 'dxef' ),
				'menu_name' => __ ( 'Event Description', 'dxef' ) 
		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array (
				'slug' => 'event_descriptions' 
		),
		'capability_type' => 'post',
		'has_archive' => false,
		'hierarchical' => false,
		'menu_position' => 5,
		'show_in_nav_menus'   => false,
		'publicly_queryable'  => false,
		'query_var'           => false,
		'supports' => array (
				'title',
				'thumbnail' 
		) 
) );
add_action( 'add_meta_boxes', 'event_description_metaboxes' );

function event_description_metaboxes() {
	add_meta_box('metabox-event_description', __('Event Description Color', 'dxef'), 
		'ef_metabox_event_description', 'event_description', 'normal', 'high');
	add_meta_box('metabox-event_description-preview', __('Event Description Preview(need to update/publish to see)', 'dxef'), 
		'ef_metabox_event_preview', 'event_description', 'normal', 'high');
}

function ef_metabox_event_description($post) {
	$color = get_post_meta($post->ID, 'color', true);
	$color=isset($color)?$color:'#377267';
	wp_nonce_field( 'tyler_event_description_meta_box_data', 'tyler_event_description_meta_box_nonce' );	
	?>
    <p>
        <input type="text" id="color" class="colorpicker" name="color" value="<?=$color?>"  />
    </p>

    <?php
}
function ef_metabox_event_preview($post) {
	$widget= new EventDescription($post);
	?>
	  <div id="nadlan-description">
            <div class="speakers">
	<?php
	echo $widget->render();
	?>
			</div>
	</div>
	<?php
}


/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function tyler_event_description_meta_box_data( $post_id ) {

	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['tyler_event_description_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['tyler_event_description_meta_box_nonce'], 'tyler_event_description_meta_box_data' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* OK, it's safe for us to save the data now. */
	
	// Make sure that it is set.
	if ( ! isset( $_POST['color'] )  && ! isset( $_POST['color'] ) && ! isset( $_POST['color'] ) ) {
		return;
	}

	// Sanitize user input.
	 $my_data = $_POST['color'] ;
	// $area_priority   = sanitize_text_field($_POST['article_area_priority']);
	// $article_type = sanitize_text_field( $_POST['article_type'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'color', $my_data );
	
}
add_action( 'save_post', 'tyler_event_description_meta_box_data' );

class EventDescription{
	public $title;
	public $image;
	public $color;
	private $id;
	function __construct($arg){
		if(is_object($arg)){
			$this->title=$arg->post_title;
			$this->id=$arg->ID;
			$color   = get_post_meta($this->id, 'color',true);
			$this->color=isset($color)?$color:'#377267';
			$this->image=get_the_post_thumbnail_url($this->id);
		}
			
	}
	public function render(){
		ob_start();
		extract( get_object_vars($this) );
			?>
			    <div class="speaker  featured">
                    <a class="speaker-inner">

                        <span class="photo" style="background: <?=$color?>;">
                            <img src="<?=$image?>" class="attachment-tyler-speaker wp-post-image" alt="<?=$title?>" title="<?=$title?>">
                        </span>
                        <span class="name"><span class="text-fit"><span class="text-fit-inner" style="display:block"><?=$title?></span></span></span>

                    </a>
                </div>
		<?php
		return ob_get_clean();
	}
}