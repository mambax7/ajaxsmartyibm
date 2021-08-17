<?php

//  ------------------------------------------------------------------------    //
//                XOOPS - PHP Content Management System                 //
//                    Copyright (c) 2004 XOOPS.org                          //
//                       <https://xoops.org>                              //
//                                                          //
//                  Authors :                                   //
//                      - solo (www.wolfpackclan.com)           //
//                  Moved v1.2                              //
//  ------------------------------------------------------------------------    //

// defined('XOOPS_ROOT_PATH') || die('XOOPS Root Path not defined');

$modversion['name'] = basename(__DIR__);

$modversion['version']       = 1.0;
$modversion['module_status'] = 'Beta 1';
$modversion['release_date']  = '2017/04/02';
$modversion['name']          = _MI_AJAXSMARTY_NAME;
$modversion['description']   = _MI_AJAXSMARTY_DESC;
$modversion['credits']       = 'based on article: http://www.ibm.com/developerworks/library/wa-aj-smarty/';
$modversion['author']        = 'Andrei Cioroianu; Mamba';
$modversion['help']          = 'page=help';
$modversion['license']       = 'GNU GPL 2.0 or later';
$modversion['license_url']   = 'www.gnu.org/licenses/gpl-2.0.html';
$modversion['official']      = 0;
$modversion['dirname']       = basename(__DIR__);
$modversion['modicons16']    = 'assets/images/icons/16';
$modversion['modicons32']    = 'assets/images/icons/32';
$modversion['image']         = 'assets/images/logoModule.png';
//about
$modversion['module_website_url']  = 'www.xoops.org';
$modversion['module_website_name'] = 'XOOPS';
$modversion['min_php']             = '5.5';
$modversion['min_xoops']           = '2.5.8';
$modversion['min_admin']           = '1.2';
$modversion['min_db']              = ['mysql' => '5.5'];
$modversion['system_menu']         = 1;
$modversion['adminindex']          = 'admin/index.php';
$modversion['adminmenu']           = 'admin/menu.php';

//sql tables
//$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
//$modversion['tables'][0] = "moved_ref";

//Admin
// Admin things
$modversion['hasAdmin'] = 1;
//Main
$modversion['hasMain'] = 1;

// ------------------- Help files ------------------- //
$modversion['helpsection'] = [
    ['name' => _MI_AJAXSMARTY_OVERVIEW, 'link' => 'page=help'],
    ['name' => _MI_AJAXSMARTY_DISCLAIMER, 'link' => 'page=disclaimer'],
    ['name' => _MI_AJAXSMARTY_LICENSE, 'link' => 'page=license'],
    ['name' => _MI_AJAXSMARTY_SUPPORT, 'link' => 'page=support'],
];

// Templates
//$modversion['templates']  = array();
//$modversion['templates'][1]   = array(
//    'file'            => 'demo_form.tpl',
//    'description' => 'Display categories'
//    );
//$modversion['templates'][]    = array(
//    'file'            => 'demo_json.tpl',
//    'description' => 'Display index'
//    );
//$modversion['templates'][]    = array(
//    'file'            => 'demo_json2.tpl',
//    'description' => 'Display term'
//    );
//$modversion['templates'][]    = array(
//    'file'            => 'demo_page.tpl',
//    'description' => 'Display letter'
//    );
//$modversion['templates'][]    = array(
//    'file'            => 'demo_xml.tpl',
//    'description' => 'search glossary'
//    );

// Templates
$cptt = 0;

//$cptt++;
$modversion['templates'][$cptt]['file']        = 'demo_form.tpl';
$modversion['templates'][$cptt]['description'] = "Used in Ajax to display product's price";

$cptt++;
$modversion['templates'][$cptt]['file']        = 'demo_page.tpl';
$modversion['templates'][$cptt]['description'] = '';

$cptt++;
$modversion['templates'][$cptt]['file']        = 'demo_xml.tpl';
$modversion['templates'][$cptt]['description'] = '';

//$cptt++;
//$modversion['templates'][$cptt]['file'] = 'demo_json.html';
//$modversion['templates'][$cptt]['description'] = '';

$cptt++;
$modversion['templates'][$cptt]['file']        = 'demo_json.tpl';
$modversion['templates'][$cptt]['description'] = '';

$cptt++;
$modversion['templates'][$cptt]['file']        = 'demo_json2.tpl';
$modversion['templates'][$cptt]['description'] = '';
