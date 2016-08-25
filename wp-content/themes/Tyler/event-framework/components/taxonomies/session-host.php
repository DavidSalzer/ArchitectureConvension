<?php
register_taxonomy ( 'session-host', 'session', array (
		'hierarchical' => true,
		'labels' => array (
				'name' => __ ( 'Session Hosts', 'dxef' ),
				'singular_name' => __ ( 'Session Host', 'dxef' ),
				'search_items' => __ ( 'Search Session Hosts', 'dxef' ),
				'all_items' => __ ( 'All Session Hosts', 'dxef' ),
				'parent_item' => __ ( 'Parent Session Host', 'dxef' ),
				'parent_item_colon' => __ ( 'Parent Session Host:', 'dxef' ),
				'edit_item' => __ ( 'Edit Session Host', 'dxef' ),
				'update_item' => __ ( 'Update Session Host', 'dxef' ),
				'add_new_item' => __ ( 'Add New Session Host', 'dxef' ),
				'new_item_name' => __ ( 'New Session Host', 'dxef' ),
				'menu_name' => __ ( 'Hosts', 'dxef' ) 
		),
		'query_var' => true,
		'rewrite' => true 
) );