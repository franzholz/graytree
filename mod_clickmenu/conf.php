<?php

$path = realpath('.');
if (strstr($path, 'typo3conf') !== false) 	{
	define('TYPO3_MOD_PATH', '../typo3conf/ext/graytree/mod_clickmenu/');
	$BACK_PATH='../../../../typo3/';

} else {
	define('TYPO3_MOD_PATH', 'ext/graytree/mod_clickmenu/');
	$BACK_PATH='../../../';
}

$MCONF['name']='web_txgraytreeClickmenu';
$MCONF['access']='';

#$MCONF['exclude']=TRUE;

$MCONF['script']='index.php';

$MLANG['default']['tabs_images']['tab'] = 'moduleicon.gif';
$MLANG['default']['ll_ref']='LLL:EXT:graytree/mod_clickmenu/locallang_mod.php';

?>