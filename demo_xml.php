<?php

header('Content-Type: text/xml');
header('Cache-Control: no-cache');
header('Pragma: no-cache');

$GLOBALS['xoopsOption']['template_main'] = 'demo_xml.tpl';

require_once __DIR__ . '/header.php';
require_once XOOPS_ROOT_PATH . '/header.php';

global $xoTheme, $xoopsUser;

//require __DIR__ . '/libs/Smarty.class.php';

//$xoopsTpl = new Smarty;

$xoopsTpl->compile_check = true;
$xoopsTpl->debugging     = false;
$xoopsTpl->force_compile = 1;

$xoopsTpl->assign('root_attr', '< abc & def >');
$xoopsTpl->assign('elem_data', ['111', '222', '333']);

//$xoopsTpl->display('demo_xml.tpl');

require_once XOOPS_ROOT_PATH . '/footer.php';
