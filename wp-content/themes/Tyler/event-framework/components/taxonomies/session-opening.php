<?php
register_taxonomy ( 'session-opening', 'session', array (
		'hierarchical' => true,
		'labels' => array (
				'name' => __ ( 'Session Openings', 'dxef' ),
				'singular_name' => __ ( 'Session Opening', 'dxef' ),
				'search_items' => __ ( 'Search Session Openings', 'dxef' ),
				'all_items' => __ ( 'All Session Openings', 'dxef' ),
				'parent_item' => __ ( 'Parent Session Opening', 'dxef' ),
				'parent_item_colon' => __ ( 'Parent Session Opening:', 'dxef' ),
				'edit_item' => __ ( 'Edit Session Opening', 'dxef' ),
				'update_item' => __ ( 'Update Session Opening', 'dxef' ),
				'add_new_item' => __ ( 'Add New Session Opening', 'dxef' ),
				'new_item_name' => __ ( 'New Session Opening', 'dxef' ),
				'menu_name' => __ ( 'Openings', 'dxef' ) 
		),
		'query_var' => true,
		'rewrite' => true 
) );