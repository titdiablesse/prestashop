<?php
/* Smarty version 4.3.1, created on 2024-04-11 14:57:51
  from 'C:\wamp64\www\prestashop\adminange\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6617de4feac093_20161131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcd87cea621b3ac4fd4888fc0d61d59dc35f72be' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\adminange\\themes\\new-theme\\template\\content.tpl',
      1 => 1712837831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6617de4feac093_20161131 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
