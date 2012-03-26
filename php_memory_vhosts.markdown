PHP Memory usage plugin for Munin
=================================

Logs peak PHP memory usage along with some servername and URL info and parse that into a graph for Munin.


* Don't forget to change the log location both in the PHP-file and in the munin plugin and make it writable
* The logger can be appended to all scripts serverwide by using the auto_append_file directive in PHP, or just included to work with certain points
* Memory threshold can be "configured" in the PHP file

Tested with Munin 1.4.4.