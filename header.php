<?php

$moduleDirName = basename(dirname(__DIR__));

require_once __DIR__ . '/../../include/cp_header.php';

$myts = MyTextSanitizer::getInstance();

//Handlers
//$XXXHandler = xoops_getModuleHandler('XXX', $moduleDirName);

if (false !== ($moduleHelper = Xmf\Module\Helper::getHelper($moduleDirName))) {
} else {
    $moduleHelper = Xmf\Module\Helper::getHelper('system');
}

// Load language files
$moduleHelper->loadLanguage('main');

