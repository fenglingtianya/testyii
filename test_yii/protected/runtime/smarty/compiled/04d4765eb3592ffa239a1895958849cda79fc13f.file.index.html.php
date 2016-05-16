<?php /* Smarty version Smarty-3.1.15, created on 2016-05-12 13:05:09
         compiled from "D:\WWW\test-yii\test_yii\protected\modules\testmod\views\test\index.html" */ ?>
<?php /*%%SmartyHeaderCode:408457340a01110834-12030167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04d4765eb3592ffa239a1895958849cda79fc13f' => 
    array (
      0 => 'D:\\WWW\\test-yii\\test_yii\\protected\\modules\\testmod\\views\\test\\index.html',
      1 => 1463029501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '408457340a01110834-12030167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57340a01389735_34411938',
  'variables' => 
  array (
    'left_menu' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57340a01389735_34411938')) {function content_57340a01389735_34411938($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['left_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
::<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<br>
<?php } ?><?php }} ?>
