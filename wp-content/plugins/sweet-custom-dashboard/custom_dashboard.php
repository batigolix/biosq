<?php
/**
 * Our custom dashboard page
 */

/** WordPress Administration Bootstrap */
require_once( ABSPATH . 'wp-load.php' );
require_once( ABSPATH . 'wp-admin/admin.php' );
require_once( ABSPATH . 'wp-admin/admin-header.php' );
?>
<div class="wrap about-wrap dashboard">

	<img src="/wp-content/uploads/OneBonsai-Web-and-Mobile-development.png" style="width: 400px;vertical-align:middle" />
	
	<div class="about-text">
		<?php _e('Website developed by OneBonsai.' ); ?>
	</div>

</div>