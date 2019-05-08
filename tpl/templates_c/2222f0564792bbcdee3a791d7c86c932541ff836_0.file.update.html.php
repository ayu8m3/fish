<?php
/* Smarty version 3.1.33, created on 2019-05-08 05:38:37
  from 'C:\xampp\htdocs\test\tpl\templates_utf8\update.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd24f3d118a08_81381605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2222f0564792bbcdee3a791d7c86c932541ff836' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test\\tpl\\templates_utf8\\update.html',
      1 => 1557286682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd24f3d118a08_81381605 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="form1" name="form1" method="post">
    <p>修改會員資料</p>
    <p>姓名:
      <input name="name" type="text" size="15" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['name'];?>
"/>
    </p>
    <p>性別:
      <input name="gender" type="text"  size="1" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['gender'];?>
"/>
    </p>
    <p>電話:
      <input name="phone" type="text"  size="15" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['phone'];?>
"/>
    </p>
    <p>手機:
      <input name="mobile" type="text" size="15" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['mobile'];?>
"/>
    </p>
    <p>地址:
      <input name="address" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['rs']->value['address'];?>
"/>
    </p>
    <p>
      <a href="index.php"><input type="submit" name="submit" value="送出"/></a>
      <input name="check" type="hidden" id="check" value="yes"/>
    </p>
    <a href="index.PHP"><input type="button" name="button" value="回上一頁"/></a>
  </form><?php }
}
