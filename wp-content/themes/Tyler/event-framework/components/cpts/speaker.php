<?php
register_post_type ( 'speaker', array (
		'labels' => array (
				'name' => __ ( 'Speakers', 'dxef' ),
				'singular_name' => __ ( 'Speaker', 'dxef' ),
				'add_new' => __ ( 'Add New', 'dxef' ),
				'add_new_item' => __ ( 'Add New Speaker', 'dxef' ),
				'edit_item' => __ ( 'Edit Speaker', 'dxef' ),
				'new_item' => __ ( 'New Speaker', 'dxef' ),
				'all_items' => __( 'All Speakers', 'dxef' ),
				'view_item' => __ ( 'View Speaker', 'dxef' ),
				'search_items' => __ ( 'Search Speakers', 'dxef' ),
				'not_found' => __ ( 'No Speakers found', 'dxef' ),
				'not_found_in_trash' => __ ( 'No Speakers found in trash', 'dxef' ),
				'menu_name' => __ ( 'Speakers', 'dxef' ) 
		),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array (
				'slug' => 'speakers' 
		),
		'capability_type' => 'post',
		'has_archive' => false,
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array (
				'title',
				'editor',
				'excerpt',
				'thumbnail' 
		) 
) );

/**
 * Message Filter
 *
 * Add filter to ensure the text Review, or review, 
 * is displayed when a user updates a custom post type.
 */  
function tyler_speaker_updated_messages( $messages ) {

	global $post, $post_ID;

	$messages['speaker'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __( 'Speaker updated. <a href="%s">View Speaker</a>', 'wpSpeaker' ), esc_url( get_permalink($post_ID) ) ),
		2 => __( 'Custom field updated.', 'wpSpeaker' ),
		3 => __( 'Custom field deleted.', 'wpSpeaker' ),
		4 => __( 'Speaker updated.', 'wpSpeaker' ),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __( 'Speaker restored to revision from %s', 'wpSpeaker' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __( 'Speaker published. <a href="%s">View Speaker</a>', 'wpSpeaker' ), esc_url( get_permalink($post_ID) ) ),
		7 => __( 'Speaker saved.', 'wpSpeaker' ),
		8 => sprintf( __( 'Speaker submitted. <a target="_blank" href="%s">Preview Speaker</a>', 'wpSpeaker' ), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
		9 => sprintf( __( 'Speaker scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Speaker</a>', 'wpSpeaker'),
			// translators: Publish box date format, see http://php.net/date
			date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
		10 => sprintf( __( 'Speaker draft updated. <a target="_blank" href="%s">Preview Speaker</a>', 'wpSpeaker' ), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	);

	return $messages;
}

add_filter( 'post_updated_messages', 'tyler_speaker_updated_messages' );


/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function tyler_speaker_meta_box_data( $post_id ) {

	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['tyler_speaker_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['tyler_speaker_meta_box_nonce'], 'tyler_speaker_meta_box_data' ) ) {
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
	if ( ! isset( $_POST['speaker_fields'] )  && ! isset( $_POST['speaker_fields'] ) && ! isset( $_POST['speaker_fields'] ) ) {
		return;
	}

	// Sanitize user input.
	 $my_data = $_POST['speaker_fields'] ;
	// $area_priority   = sanitize_text_field($_POST['article_area_priority']);
	// $article_type = sanitize_text_field( $_POST['article_type'] );

	// Update the meta field in the database.
	update_post_meta( $post_id, 'speaker_fields', $my_data );
	
}
add_action( 'save_post', 'tyler_speaker_meta_box_data' );