<?php

/**
 * Plugin Name:       adrianpajares.com - AP Tools
 * Plugin URI:        https://adrianpajares.com/
 * Description:       This plugin is neccesary to activate page settings.
 * Version:           1.0
 * Author:            adrianpajares.com
 * License:           MIT
*/

add_action( 'admin_menu', 'ap_tools_add_admin_menu' );

function ap_tools_add_admin_menu(  ) { 

	add_options_page( 'AP Tools', 'AP Tools', 'manage_options', 'ap_tools', 'ap_tools_options_page' );

}


function ap_tools_settings_section_callback(  ) { 

	echo __( 'SECTION MAIN This section description', 'td_ap_tools' );

}

function ap_tools_options_page(  ) { 

		?>
		<form action='options.php' method='post'>

			<h2>AP Tools</h2>

			<?php
			settings_fields( 'pluginPage' );
			do_settings_sections( 'pluginPage' );
			submit_button();
			?>

		</form>
		<?php

}