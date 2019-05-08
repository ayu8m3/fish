<?php
/* Smarty version 3.1.33, created on 2019-05-08 08:46:56
  from 'C:\xampp\htdocs\fish\tpl\templates_utf8\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cd27b6043e768_43933760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bddd36743a1dfb7ec1f48bf7aa3b94508b262a87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fish\\tpl\\templates_utf8\\index.html',
      1 => 1557286705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cd27b6043e768_43933760 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>資料庫網頁建置</title>
<body>
  <form id="form1" name="form1" method="post">
    <p>姓名:
      <input name="name1" type="text" id="name1" value="<?php echo $_smarty_tpl->tpl_vars['name1']->value;?>
"/>
    </p>
    <p>
      <input name="sex" type="radio" id="radio" value="%" checked="checked" />
  不拘
  <input type="radio" name="sex" id="radio2" value="男" />
  男
  <input type="radio" name="sex" id="radio3" value="女" />
  女</p>
  <p>
    <input type="submit" name="button" id="button" value="搜尋" />
    </p>
  </form>
<table width="700" border="1">
  <tr>
    <td>編號</td>
    <td>姓名</td>
    <td>性別</td>
    <td>電話</td>
    <td>手機</td>
    <td>地址</td>
    <td>功能</td>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alldata']->value, 'rs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->value) {
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['contact_no'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['name'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['gender'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['phone'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['mobile'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['address'];?>
</td>
    <td align="center">
      <a href="update.php?contact_no=<?php echo $_smarty_tpl->tpl_vars['rs']->value['contact_no'];?>
;"><input type="submit" name="submit" value="修改"/></a>
      <a href="del.php?contact_no=<?php echo $_smarty_tpl->tpl_vars['rs']->value['contact_no'];?>
;"><input type="submit" name="submit" value="刪除"/></a>
    </td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <a href="insert.PHP"><input type="submit" name="submit" value="新增會員"/></a>
</table>

</body>
</html><?php }
}
