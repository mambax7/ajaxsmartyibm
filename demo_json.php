<?php
header('Content-Type: application/json');
header('Cache-Control: no-cache');
header('Pragma: no-cache');

//$GLOBALS['xoopsOption']['template_main'] = 'demo_json2.tpl';

require_once __DIR__ . '/header.php';

$GLOBALS['xoopsOption']['template_main'] = 'demo_json.tpl';
require_once XOOPS_ROOT_PATH . '/header.php';

global $xoTheme, $xoopsUser;

//$GLOBALS['xoopsOption']['template_main'] = 'demo_json.tpl';

//require __DIR__ . '/libs/Smarty.class.php';

//$xoopsTpl = new Smarty;

$xoopsTpl->compile_check = true;
$xoopsTpl->debugging     = false;
$xoopsTpl->force_compile = 1;

/*
 To use <% and %> instead of { and } in your Smarty templates,
 uncomment the following lines and use demo_json2.tpl below
*/
// $xoopsTpl->left_delimiter = '<{';
// $xoopsTpl->right_delimiter = '}>';

/**
 * @param $value
 * @return string
 */
function json_modifier($value)
{
    return json_encode($value);
}

/**
 * @param $params
 * @param $smarty
 * @return string
 */
function json_function($params, $smarty)
{
    return json_encode($params);
}

$xoopsTpl->register_modifier('json', 'json_modifier');
$xoopsTpl->register_function('json', 'json_function');

$xoopsTpl->assign('str', 'a"b"c');
$xoopsTpl->assign('num', 123);
$xoopsTpl->assign('bool', false);
$xoopsTpl->assign('arr', [1, 2, 3]);

require_once XOOPS_ROOT_PATH . '/footer.php';
