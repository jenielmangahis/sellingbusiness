<<<<<<< HEAD
(function() {
	
	if(typeof tinymce !== 'undefined') {
		
		tinymce.PluginManager.add('revslider_sc_button', function(editor, url) {
			
			editor.addButton('revslider_sc_button', {
				
				title: 'Slider Revolution Shortcode Creator',
				icon: 'icon dashicons-before dashicons-update',
				onclick: function() {
					
					// OPEN THE OBJECT LIBRARY
					RS_SC_WIZARD.openTemplateLibrary('tinymce');
					
				}
			});
			
		});
		
	}
	
=======
(function() {
	
	if(typeof tinymce !== 'undefined') {
		
		tinymce.PluginManager.add('revslider_sc_button', function(editor, url) {
			
			editor.addButton('revslider_sc_button', {
				
				title: 'Slider Revolution Shortcode Creator',
				icon: 'icon dashicons-before dashicons-update',
				onclick: function() {
					
					// OPEN THE OBJECT LIBRARY
					RS_SC_WIZARD.openTemplateLibrary('tinymce');
					
				}
			});
			
		});
		
	}
	
>>>>>>> 12e5ad6e736125b89a23634631fb9afa8f10232c
})();