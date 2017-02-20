<?php
class Confrence{
	private $posts;
	
	function __construct(){
		$this->posts=array();
		$chosen=get_option('chosenSpeakers');
		$chosen=$chosen?$chosen:array('0');
		$posts = get_posts(array(
			'post_type' => 'speaker',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'post__in'=>$chosen,
            'orderby' => 'post__in'
		));
		foreach($posts as $k=>$v){
			$item=new SpeakerSession($v);
			$item->type='chosenSpeakers';
			$this->posts[]=$item;
			$item->setChosen();
		}
		
	}
	function render(){
		$html='';
		foreach($this->posts as $k=>$v){
			$html.=$v->render();
		}
		return $html;
	}
	function adminRender(){
		$html='';
		foreach($this->posts as $k=>$v){
			$html.=$v->adminRender();
		}
		return $html;
	}
}
class speakersList{
	private $posts;
	
	function __construct(){
		$this->posts=array();
		$chosen=get_option('homeSpeakers');
		$chosen=$chosen?$chosen:array('0');
		$posts = get_posts(array(
			'post_type' => 'speaker',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'post__in'=>$chosen,
            'orderby' => 'post__in'
		));
		foreach($posts as $k=>$v){
			$item=new SpeakerSession($v);
			$item->type='homeSpeakers';
			$this->posts[]=$item;
			$item->setChosen();
		}
		
	}
	function render(){
		$html='';
		foreach($this->posts as $k=>$v){
			$html.=$v->render();
		}
		return $html;
	}
	function adminRender(){
		$html='';
		foreach($this->posts as $k=>$v){
			$html.=$v->adminRender();
		}
		return $html;
	}
}
class SpeakerSession{
	public $title='';
	public $link='';
	public $position='';
	public $area='';
	public $id='';
	public $image;
	public $type='chosenSpeakers';
	private $chosen=false;
	function __construct($arg){
		$this->title=$arg->post_title;
		$this->link=$arg->guid;
		$this->id=$arg->ID;
		$fields   = get_post_meta($this->id, 'speaker_fields',true);
		$this->position=isset($fields['position'])?$fields['position']:'';
		$this->area=isset($fields['area'])?$fields['area']:'';
		$this->image=get_the_post_thumbnail_url($this->id);
	}
	public function render(){
		ob_start();
		extract( get_object_vars($this) );
			?>
			    <div class="session">
					<div class="session-inner">
						<span class="speakers-thumbs speakers-list">
							<a href="<?=$link?>" class="speaker  featured">
								<img width="319" height="319" src="<?=$image?>" class="attachment-post-thumbnail wp-post-image" alt="<?=$title?>" title="<?=$title?>">
								
							</a>
						</span>
						<span class="speaker-name"><a href="<?=$link?>"><?=$title?></a></span>
						<span class="speaker-title title-mobile"><?=$position?></span>
						<span class="speaker-title"><?=$area?></span>
						
					</div>
				</div>
		<?php
		return ob_get_clean();
	}
	public function adminRender(){
		ob_start();
		extract( get_object_vars($this) );
			?>
			    <tr id="post-6" class="author-self status-inherit sortable sortable1">
					<th scope="row" class="check-column">			
						<input type="checkbox" name="<?=$type?>[]"  value="<?=$id?>" <?=($this->chosen)?'checked':''?>>
					</th>
					<td class="title column-title has-row-actions column-primary" data-colname="File">		
						<strong class="has-media-icon">
							<a href="" aria-label="<?=esc_attr($title)?>”">				
								<span class="media-icon image-icon"><img width="60" height="60" src="<?=$image?>" class="attachment-60x60 size-60x60" alt=""></span>
								<?=$title?></a>		
						</strong>
					</td>
					
				</tr>
		<?php
		return ob_get_clean();
	}
	function setChosen(){
		$this->chosen=true;
	}
}

add_action( 'admin_menu', 'my_theme_menu' );

/** Step 1. */
function my_theme_menu() {
	add_options_page( 'My Theme Options', __('ניהול רשימת נשיאים לעמוד הבית'), 'manage_options', 'confrence_speakers_admin', 'my_theme_options' );
}

/** Step 3. */
function my_theme_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}	
	include_once(get_template_directory() . '/libs/confrence_speakers_admin.php');
}

add_action( 'admin_menu', 'my_theme_menu1' );

/** Step 1. */
function my_theme_menu1() {
	add_options_page( 'My Theme Options', __('ניהול דוברים נוספים לעמוד הבית'), 'manage_options', 'home_speakers_list_admin', 'my_theme_options1' );
}

/** Step 3. */
function my_theme_options1() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}	
	include_once(get_template_directory() . '/libs/home_speakers_list_admin.php');
}