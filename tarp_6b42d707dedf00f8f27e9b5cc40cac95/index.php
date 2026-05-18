<?php
$GLOBALS['_ta_rp_key'] = 'a55b83cff99869f511c919de320141e4';
$GLOBALS['_ta_reverse_proxy_id'] = '70i9ec';

require 'bootloader_6b42d707dedf00f8f27e9b5cc40cac95.php';

$options = array();
/*
$options = array(
	'replace' => array(
		'This is the text to find' => 'The new text',
		'This is the text to find 2' => 'The new text 2',
	)
);
*/

$tarp = new TARPLoader($options);

$tarp->excute();
?>