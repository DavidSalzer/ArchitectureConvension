<link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript">

jQuery( function( ) {

	jQuery( '#progressbar' ).progressbar( { value: 0 } );

	var retpercent = 0;
	var progress = 0;
	var base_url = '<?php echo site_url( ); ?>';
	function getProgress( progress, retpercent) {	
		jQuery.ajax({
			url: base_url + '/wp-admin/admin-ajax.php?action=process_export',
			type: "GET",
			data: 'start=' + progress + '&progress=' + retpercent,
			dataType : 'json',
			success: function( data ) {
				var percentage = parseFloat( data.percentagecomplete );
				if ( percentage < 0 ) {
					jQuery( '#progressbar' ).addClass( 'ui-widget-content' ).removeClass( 'stripes' );
					jQuery( '#nothing-to-export' ).show( );
					jQuery( '#export_wrapper' ).hide( );
					jQuery( '#download_link' ).hide( );
				} else if ( percentage < 100 ) {
					jQuery( '#progressbar' ).progressbar( "value", percentage );
					jQuery( '#percent' ).text( '(' + percentage + '%)' );
					getProgress( data.position, data.percentagecomplete );
				} else {
					jQuery( '#progressbar' ).progressbar( "value", percentage );
					jQuery( '#percent' ).text( '(' + percentage + '%)' );
					jQuery( '#download_link' ).show( );
					window.clearInterval( interval_id );
				}
			},
			error: function( data ) {
				alert( 'Export failed due to a server error.  Check the error log.' );
				jQuery( '#export_wrapper' ).show( );
				jQuery( '#download_link' ).hide( );
				jQuery( '#progressbar' ).progressbar( "value", 0 );
				jQuery( '#progressbar' ).addClass( 'ui-widget-content' ).removeClass( 'stripes' );
				window.clearInterval( interval_id );
				jQuery( '#timer' ).text( '00:00:00' );
				jQuery( '#percent' ).text( '(0%)' );
				return;
			}

		});
	}

	jQuery( '#start_export' ).on( 'click', function( ) {
		interval_id = window.setInterval( function() {
			jQuery("#timer").timer();
		}, 1000);
		jQuery( '#export_wrapper' ).hide( );
		jQuery( '#download_link' ).hide( );
		jQuery( '#progressbar' ).progressbar( "value", 0 );
		jQuery( '#progressbar' ).removeClass( 'ui-widget-content' ).addClass( 'stripes' );
		getProgress( 0, 0 );
	});
	
	String.prototype.toHHMMSS = function () {
		var sec_num = parseInt(this, 10); // don't forget the second param
		var hours   = Math.floor(sec_num / 3600);
		var minutes = Math.floor((sec_num - (hours * 3600)) / 60);
		var seconds = sec_num - (hours * 3600) - (minutes * 60);

		if (hours   < 10) {hours   = "0"+hours;}
		if (minutes < 10) {minutes = "0"+minutes;}
		if (seconds < 10) {seconds = "0"+seconds;}
		var time    = hours+':'+minutes+':'+seconds;
		return time;
	}

	var seconds = 0;
	var interval_id;

	jQuery.fn.timer = function() {
		seconds++;		
		jQuery( this ).text( seconds.toString( ).toHHMMSS( ) );
	} // timer function end
		
});

</script>
<table class='widefat'>
<thead>
<tr><th colspan='2'><strong><?php _e( 'Export To CSV', 'wp-csv' ); ?></strong></th></tr>
</thead>
<tbody>
<tr><th><?php _e( 'Progress', 'wp-csv' ); ?></th><td><div id="progressbar_holder"><div id="progressbar"></div></div><span id='percent'>(0%)</span>
<div id="download_link">
<a href='<?php echo $export_link; ?>'><?php _e( 'Download CSV File', 'wp-csv' ); ?></a>
</div>
<p id='nothing-to-export'><?php _e( 'You seem to have nothing to export.  Add a post or page and try again.', 'wp-csv' ); ?></p>
</td></tr>
<tr><th><?php _e( 'Elapsed Time', 'wp-csv' ); ?>:</th><td><p id="timer">00:00:00</p></td></tr>
</tbody>
</table>
<br />
<div id="export_wrapper">
<div id="start_button_wrapper">
<input type='button' id='start_export' value='Export' />
</div>
</div>
<br />
<table class='widefat'>
<thead>
<tr><th colspan='2'><strong><?php _e( 'Upload CSV File For Import', 'wp-csv' ); ?></strong></th></tr>
</thead>
<tbody>
<tr><th><?php _e( 'Select CSV File', 'wp-csv' ); ?></th><td>
<form enctype="multipart/form-data" action="" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_bits ?>" />
<?php echo $nonce ?>
<input type="hidden" name="action" value="import" />
<input name="uploadedfile" type="file" />
</fieldset>
<strong class='red'><?php echo $error ?></strong></td></tr>
</tbody>
</table>
<br />
<input type='submit' value='Upload'/>
</form>
