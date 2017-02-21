jQuery(function($){
	 $(function () {
			$('.colorpicker').each(function(e){
					$(this).wpColorPicker();
			})
		});
		$(document).ready(function(){
                $('#widgets-right .color-picker, .inactive-sidebar .widget-color-picker').wpColorPicker();
            });
            $(document).ajaxComplete(function() {
                $('#widgets-right .color-picker, .inactive-sidebar .widget-color-picker').wpColorPicker();
            }); 
	  // Set all variables to be used in scope
	  var frame,
	      fileUploader = $('.fileUploader'), // Your meta box id here
	      addImgLink = $('#the_video_upload'),
	      imgContainer =$( '#post_video');
	     
	  
	  // ADD IMAGE LINK
	  fileUploader.on( 'click', function( event ){
		   var frame;
	    var self=this;
	    event.preventDefault();
	    
	    // If the media frame already exists, reopen it.
	    if ( frame ) {
	      frame.open();
	      return;
	    }
	    
	    // Create a new media frame
	    frame = wp.media({
	      title: 'Select or Upload Media Of Your Chosen Persuasion',
	      button: {
	        text: 'Use this media'
	      },
	      multiple: false  // Set to true to allow multiple files to be selected
	    });

	    
	    // When an image is selected in the media frame...
	    frame.on( 'select', function() {
	      
	      // Get media attachment details from the frame state
	      var attachment = frame.state().get('selection').first().toJSON();
	      self.value=attachment.url;
	      // Send the attachment URL to our custom image input field.
	      
	    });

	    // Finally, open the modal on click
	    frame.open();
	  });
	  


	   

	  



	});