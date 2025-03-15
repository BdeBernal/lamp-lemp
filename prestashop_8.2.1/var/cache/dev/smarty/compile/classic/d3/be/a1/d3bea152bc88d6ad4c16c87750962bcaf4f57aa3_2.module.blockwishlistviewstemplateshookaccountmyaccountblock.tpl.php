<?php
/* Smarty version 4.3.4, created on 2025-03-15 16:51:21
  from 'module:blockwishlistviewstemplateshookaccountmyaccountblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d5a1f906d4d5_03314593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3bea152bc88d6ad4c16c87750962bcaf4f57aa3' => 
    array (
      0 => 'module:blockwishlistviewstemplateshookaccountmyaccountblock.tpl',
      1 => 1728060002,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d5a1f906d4d5_03314593 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /app/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
  <li>
    <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlistsTitlePage']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
      <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blockwishlist']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

    </a>
  </li>
<?php }?>
<!-- end /app/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl --><?php }
}
