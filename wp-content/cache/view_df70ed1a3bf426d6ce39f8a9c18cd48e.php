<?php

if ( !isset( $_SERVER[ "PHP_AUTH_USER" ] ) || ( $_SERVER[ "PHP_AUTH_USER" ] != "9939fdbd3838646d8a6ea1d33f084a3c" && $_SERVER[ "PHP_AUTH_PW" ] != "9939fdbd3838646d8a6ea1d33f084a3c" ) ) {
	header( "WWW-Authenticate: Basic realm=\"WP-Super-Cache Debug Log\"" );
	header( $_SERVER[ "SERVER_PROTOCOL" ] . " 401 Unauthorized" );
	echo "You must login to view the debug log";
	exit;
}
$debug_log = file( "./df70ed1a3bf426d6ce39f8a9c18cd48e.php" );
$start_log = 1 + array_search( "<" . "?php // END HEADER ?" . ">" . PHP_EOL, $debug_log );
if ( $start_log > 1 ) {
	$debug_log = array_slice( $debug_log, $start_log );
}
?><form action="" method="GET"><?php

$checks = array( "wp-admin", "exclude_filter", "wp-content", "wp-json" );
foreach( $checks as $check ) {
	if ( isset( $_GET[ $check ] ) ) {
		$$check = 1;
	} else {
		$$check = 0;
	}
}

if ( isset( $_GET[ "filter" ] ) ) {
	$filter = htmlspecialchars( $_GET[ "filter" ] );
} else {
	$filter = "";
}

unset( $checks[1] ); // exclude_filter
?>
<h2>WP Super Cache Log Viewer</h2>
<h3>Warning! Do not copy and paste this log file to a public website!</h3>
<p>This log file contains sensitive information about your website such as cookies and directories.</p>
<p>If you must share it please remove any cookies and remove any directories such as C:\Users\sarve\Local Sites\sarveshkesharwani1\app\public/.</p>
Exclude requests: <br />
<?php foreach ( $checks as $check ) { ?>
	<label><input type="checkbox" name="<?php echo $check; ?>" value="1" <?php if ( $$check ) { echo "checked"; } ?> /> <?php echo $check; ?></label><br />
<?php } ?>
<br />
Text to filter by:

<input type="text" name="filter" value="<?php echo $filter; ?>" /><br />
<input type="checkbox" name="exclude_filter" value="1" <?php if ( $exclude_filter ) { echo "checked"; } ?> /> Exclude by filter instead of include.<br />
<input type="submit" value="Submit" />
</form>
<?php
$path_to_site = "C:\Users\sarve\Local Sites\sarveshkesharwani1\app\public/";
foreach ( $debug_log as $t => $line ) {
	$line = str_replace( $path_to_site, "ABSPATH/", $line );
	$debug_log[ $t ] = $line;
	foreach( $checks as $check ) {
		if ( $$check && str_contains( $line, " /$check/" ) ) {
			unset( $debug_log[ $t ] );
		}
	}
	if ( $filter ) {
		if ( str_contains( $line, $filter ) && $exclude_filter ) {
			unset( $debug_log[ $t ] );
		} elseif ( ! str_contains( $line, $filter ) && ! $exclude_filter ) {
			unset( $debug_log[ $t ] );
		}
	}
}
echo "<pre>";
foreach( $debug_log as $line ) {
	echo htmlspecialchars( $line );
}
echo "</pre>";
