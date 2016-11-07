<?php
/**
*   Removed admin items not needed to be seen my users.
*/
function remove_menus(){
	$user = wp_get_current_user();
	if ( in_array( 'author', (array) $user->roles ) || in_array( 'editor', (array) $user->roles ) ) {
		    remove_menu_page( 'edit-comments.php' );          //Comments
		    remove_menu_page( 'themes.php' );                 //Appearance
		    remove_menu_page( 'edit.php' );                   //Posts
		    remove_menu_page( 'plugins.php' );                //Plugins
	 		remove_menu_page( 'upload.php' );                 //Media
	 		remove_menu_page( 'tools.php' );                  //Tools
	  		remove_menu_page( 'options-general.php' );        //Settings
	  	}
	  }

	  add_action( 'admin_menu', 'remove_menus' );

	  ?>