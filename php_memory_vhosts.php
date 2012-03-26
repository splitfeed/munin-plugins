<?
/**
 * You can automatically append this file to ALL your PHP-scripts by using the auto_append_file directive in PHP
 * 
 * Don't forget to change the log location both here and in the munin plugin
 */
$mem = memory_get_peak_usage();
if ($mem > 1048576) {
	file_put_contents("php_memory_vhosts.log", date("Y-m-d H:i:s")." - ".memory_get_peak_usage()." - ".$_SERVER["SERVER_NAME"]." - ".$_SERVER["SCRIPT_URI"]." - ".$_SERVER["SCRIPT_FILENAME"]."\n", FILE_APPEND);
}
?>