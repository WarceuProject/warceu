<?php

$_GET['fuse']='billing';
$_GET['action'] = 'gatewaycallback';
$_GET['plugin'] = 'worldpay';

chdir('../../..');

require_once dirname(__FILE__).'/../../../library/front.php';

?>
