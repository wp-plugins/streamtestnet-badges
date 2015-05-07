<?php


//if uninstall not called from WordPress exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) 
    exit();

function remove_streamtest_badges() {

	delete_option( $streamtest_badge_options );
	
}

?>