<?php
/* Smarty version 3.1.30, created on 2017-01-17 19:02:45
  from "/var/www/skycms/templates/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587df9d500c5e4_39820635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd682ed1edae52ee1a5be1f756e6a028fe64ae6c' => 
    array (
      0 => '/var/www/skycms/templates/index.html',
      1 => 1484650961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587df9d500c5e4_39820635 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
</head>
<body>
    世界欢迎你！

    <br/>
    <br/>
    <table border="1" cellspacing="1" cellpadding="10" align="center">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td>ID</td>
        <td>标题</td>
    </tr>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
        <td><a href="viewArticle.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
</body>
</html><?php }
}
