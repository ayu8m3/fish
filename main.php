<?php
require_once 'Smarty/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = './tpl/templates_utf8';
$smarty->compile_dir = './tpl/templates_c';
// $smarty->config_dir = './Smarty/demo/configs';
// $smarty->cache_dir = './Smarty/demo/cache';
$link=mysqli_connect("localhost","fish","666666");
mysqli_select_db($link,"test");
mysqli_query($link,"set names utf8");
?>