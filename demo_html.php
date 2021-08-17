<?php
header('Cache-Control: no-cache');
header('Pragma: no-cache');

require_once __DIR__ . '/header.php';
global $xoTheme, $xoopsUser;

//require __DIR__ . '/libs/Smarty.class.php';

//$xoopsTpl = new Smarty;
require_once $GLOBALS['xoops']->path('class/template.php');
$xoopsTpl                = new XoopsTpl();
$xoopsTpl->compile_check = true;
$xoopsTpl->debugging     = false;
$xoopsTpl->force_compile = 1;

//$GLOBALS['xoopsOption']['template_main'] = 'demo_form.tpl';

$ajax_request = @('true' === $_SERVER['HTTP_AJAX_REQUEST']);

//echo "----------" .$ajax_request . '<br >';

/*
if ($ajax_request) {
    $GLOBALS['xoopsOption']['template_main'] = 'demo_form.tpl';
//    echo 'demo_form.tpl <br>';
} else {
    $GLOBALS['xoopsOption']['template_main'] = 'demo_page.tpl';
//    echo 'demo_page.tpl <br>';
}
$GLOBALS['xoopsOption']['template_main'] = 'demo_form.tpl';
*/

//$edit_mode = @($_REQUEST['edit_mode'] == "true");
//$xoopsTpl->assign("edit_mode", !$edit_mode);

//$smarty->display($ajax_request ? 'demo_form.tpl' : 'demo_page.tpl');
//$smarty->display($ajax_request ? 'demo_form.tpl' : 'demo_page.tpl');
$GLOBALS['xoopsOption']['template_main'] = $ajax_request ? 'demo_form.tpl' : 'demo_page.tpl';
require_once XOOPS_ROOT_PATH . '/header.php';

$edit_mode = @($_REQUEST['edit_mode'] === 'true');
$xoopsTpl->assign('edit_mode', !$edit_mode);
$output = $xoopsTpl->fetch('db:demo_form.tpl');
//echo $output;
$xoopsTpl->assign('output', $output);

//$edit_mode = @('true' === $_POST['edit_mode']);
//$xoopsTpl->assign('edit_mode', !$edit_mode);

//$ajax_request = @($_SERVER["HTTP_AJAX_REQUEST"] == "true");
//$xoopsTpl->display($ajax_request ? 'demo_form.tpl' : 'demo_page.tpl');

require_once XOOPS_ROOT_PATH . '/footer.php';
