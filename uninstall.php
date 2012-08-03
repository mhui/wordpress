<?php
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) )
    exit ();

global $facebook;

$facebook->clearAllPersistantData();
unset($facebook);

?>
