<?php

@unlink(__FILE__);

// Validate if the request is from Softaculous
if($_REQUEST['pass'] != '[[autopass]]'){
	die("Unauthorized Access");
}

require('config.php');

$pluginman = core_plugin_manager::instance();
$plugins_list = array();
foreach ($pluginman->get_plugins() as $type => $plugins) {
    foreach ($plugins as $shortname => $plugin) {;
        if ($plugin->source == core_plugin_manager::PLUGIN_SOURCE_EXTENSION) {
            $plugins_list[] = $plugin->rootdir;
        }
    }
}

echo '<moodle_plugins>'.json_encode($plugins_list).'</moodle_plugins>';
?>