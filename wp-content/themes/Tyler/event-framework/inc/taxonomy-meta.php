<?php

new RW_Taxonomy_Meta(
		array(
		'id' => 'session-track-metas',
		'taxonomies' => array('session-track'),
		'fields' => 
			array(
				array(
					'name' => __('Color', 'dxef'),
					'id' => 'session_track_color',
					'type' => 'color'
				)
			)
		)
);

new RW_Taxonomy_Meta(
		array(
		'id' => 'session-location-metas',
		'taxonomies' => array('session-location'),
		'fields' => 
			array(
				array(
					'name' => __('Color', 'dxef'),
					'id' => 'session_location_color',
					'type' => 'color'
				)
			)
		)
);

new RW_Taxonomy_Meta(
		array(
		'id' => 'session-host-metas',
		'taxonomies' => array('session-host'),
		'fields' => 
			array(
				array(
					'name' => __('Color', 'dxef'),
					'id' => 'session_host_color',
					'type' => 'color'
				)
			)
		)
);

new RW_Taxonomy_Meta(
		array(
		'id' => 'session-opening-metas',
		'taxonomies' => array('session-opening'),
		'fields' => 
			array(
				array(
					'name' => __('Color', 'dxef'),
					'id' => 'session_opening_color',
					'type' => 'color'
				)
			)
		)
);
