<?php
/* Smarty version 3.1.33, created on 2019-05-08 05:38:31
  from 'C:\xampp\htdocs\test\tpl\templates_utf8\insert.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd24f377454f7_41802200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae016a165c09aee0b80bcc804e4a656b44639b95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\tpl\\templates_utf8\\insert.html',
      1 => 1557286669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd24f377454f7_41802200 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="form1" name="form1" method="post">
    <p>新增會員資料</p>
    <p>姓名:
      <input name="name" type="text" size="15"/>
    </p>
    <p>性別:
      <input name="gender" type="text"  size="1"/>
    </p>
    <p>電話:
      <input name="phone" type="text"  size="15"/>
    </p>
    <p>手機:
      <input name="mobile" type="text" size="15"/>
    </p>
    <p>地址:
      <input name="address" type="text" size="30"/>
    </p>
    <p>
      <input type="submit" name="submit" value="送出"/>
      <input name="check" type="hidden" id="check" value="yes"/>
    </p>
    <a href="index.PHP"><input type="button" name="button" value="回上一頁"/></a>
  </form><?php }
}
