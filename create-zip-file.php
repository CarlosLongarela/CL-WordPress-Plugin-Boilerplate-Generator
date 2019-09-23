<?php

$plugin_git_dir = '/our/dir/to/rename';

$dir  = new RecursiveDirectoryIterator( $plugin_git_dir, FilesystemIterator::SKIP_DOTS );
$iter = new RecursiveIteratorIterator( $dir );

$name         = filter_var( trim( $_POST['name'],         FILTER_SANITIZE_STRING ) );
$slug         = filter_var( trim( $_POST['slug'],         FILTER_SANITIZE_STRING ) );
$uri          = filter_var( trim( $_POST['uri'],          FILTER_SANITIZE_URL ) );
$author_name  = filter_var( trim( $_POST['author_name'],  FILTER_SANITIZE_STRING ) );
$author_email = filter_var( trim( $_POST['author_email'], FILTER_SANITIZE_EMAIL ) );
$author_uri   = filter_var( trim( $_POST['author_uri'],   FILTER_SANITIZE_URL ) );

// Function from https://stackoverflow.com/questions/30836521/copy-entire-directory-but-exclude-some-files-php
function copy_directory( $settings = false ) {
	// The script may take some time if there are lots of files
	ini_set( 'max_execution_time',3000 );

	// Just do some validation and pre-sets.
	$directory = ( isset( $settings['dir'] ) && ! empty( $settings['dir'] ) ) ? $settings['dir'] : false;
	$copyto    = ( isset( $settings['dest'] ) && ! empty( $settings['dest'] ) ) ? $settings['dest'] : false;
	$filter    = ( isset( $settings['filter'] ) && ! empty( $settings['filter'] ) ) ? $settings['filter'] : false;

	// Add the copy to destinations not to copy otherwise
	// you will have an infinite loop of files being copied.
	$filter[] = $copyto;

	// Stop if the directory is not set
	if ( ! $directory ) {
		return false;
	}

	// Create a recursive directory iterator
	$dir = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $directory ), RecursiveIteratorIterator::CHILD_FIRST );

	try {
		foreach ( $dir as $file ) {
			$copydest = str_replace( '//', '/', $copyto . '/' . str_replace( $_SERVER['DOCUMENT_ROOT'], '', $file ) );
			$compare  = rtrim( $file, '.' );

			if ( is_dir( $file ) ) {
				if ( ! is_dir( $copydest ) ) {
					if ( ! in_array( $compare, $filter ) ) {
						if ( isset( $skip ) && ! preg_match('!' . $skip . '!', $file ) || ! isset( $skip ) ) {
							@mkdir($copydest,0755,true);
						} else {
							$record[] = $copydest;
						}
					} else {
						$skip = $compare;
					}
				}
			} elseif ( is_file( $file ) && ! in_array( $file, $filter ) ) {
				copy( $file, $copydest );
			} else {
				if ( $file != '.' && $file != '..') {
					$record[] = $copydest;
				}
			}
		} // foreach
	} catch ( Exception $e ) { // This will catch errors in copying (like permission errors)
		$error[] = $e;
	}
}

// Copy from
//$settings['dir'] = $_SERVER['DOCUMENT_ROOT'];

// Copy to
//$settings['dest'] = $_SERVER['DOCUMENT_ROOT'] . '/tester';

// Files and folders to not include contents!
//$settings['filter'][] = $_SERVER['DOCUMENT_ROOT'] . '/core.processor/';
//$settings['filter'][] = $_SERVER['DOCUMENT_ROOT'] . '/config.php';
//$settings['filter'][] = $_SERVER['DOCUMENT_ROOT'] . '/client_assets/images/';

// Create instance
//copy_directory( $settings );

foreach ( $iter as $file ) {
	// here we rename all files to definitive name
}

foreach ( $iter as $file ) {
	// And here we replace content inside files
}