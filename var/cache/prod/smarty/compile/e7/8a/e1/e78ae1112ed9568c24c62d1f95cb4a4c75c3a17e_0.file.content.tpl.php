<?php
/* Smarty version 4.3.1, created on 2024-04-11 14:49:20
  from 'C:\wamp64\www\prestashop\adminange\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6617dc50ec7609_25683389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e78ae1112ed9568c24c62d1f95cb4a4c75c3a17e' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\adminange\\themes\\default\\template\\content.tpl',
      1 => 1712837846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6617dc50ec7609_25683389 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
