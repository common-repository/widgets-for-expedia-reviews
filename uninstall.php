<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_expedia = new TrustindexPlugin_expedia("expedia", __FILE__, "12.4.1", "Widgets for Expedia Reviews", "Expedia");
$trustindex_pm_expedia->uninstall();
?>