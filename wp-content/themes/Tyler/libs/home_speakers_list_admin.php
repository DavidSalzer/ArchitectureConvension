<?php

foreach($_POST as $key=>$value){
	if($key!='save')
		update_option($key, $value);
}
$chosen=get_option('homeSpeakers');
$chosen=$chosen?$chosen:array('0');
$sessionsSpeakersList=new speakersList();
$posts = get_posts(array(
			'post_type' => 'speaker',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'post__not_in'=>$chosen
		));

$speakers=array();
foreach($posts as $k=>$v){
	$item=new SpeakerSession($v);
	$item->type='homeSpeakers';
	$speakers[]=$item;
}

?>

<script>
	jQuery(function() {
	    jQuery( "#the-list" ).sortable({
	        connectWith: ".sortable1"
	        
	    }).disableSelection();
	});
	</script>
<h1><?php _e('דוברים נוספים בעמוד הבית:')?></h1>

<form method="post">
	<h2>דוברים נוספים לעמוד הבית:</h2>
	<table class="wp-list-table widefat fixed striped media">

	<tbody id="the-list">
		<?php
			echo $sessionsSpeakersList->adminRender();

		?>
	</tbody>
	<input type="hidden" name="homeSpeakers[]"  value="">
</table>
	<h2>כל הדוברים:</h2>
	<table class="wp-list-table widefat fixed striped media">

	<tbody id="the-list">
		<?php
			
			foreach($speakers as $k=>$v):
				echo $v->adminrender();
			endforeach;
		?>
	</tbody>
</table>
	
	<input name="save" type="submit" class="button button-primary button-large" id="publish" value="<?=__('עדכן') ?>">
</form>