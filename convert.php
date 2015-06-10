<?php
require_once __DIR__ . '/ZhConversion.php';

$text = file_get_contents( 'SueiTangYanYi.txt' );
$n = 5;
$start = microtime( true );

for ( $i = 0; $i < $n; $i++ ) {
	strtr( $text, $zh2Hant );
}

$elapsed = microtime( true ) - $start;
$wall = 1000 * $elapsed / $n;
printf( "%.2fms\n", $wall );
