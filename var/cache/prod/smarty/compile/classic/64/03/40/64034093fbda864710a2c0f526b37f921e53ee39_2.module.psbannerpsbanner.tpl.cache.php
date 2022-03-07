<?php
/* Smarty version 3.1.39, created on 2022-03-03 21:56:41
  from 'module:psbannerpsbanner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62212b890a7250_13087449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:psbannerpsbanner.tpl',
      1 => 1646340730,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62212b890a7250_13087449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '82424666062212b890a5a83_97384602';
?>
<a class="banner" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if ((isset($_smarty_tpl->tpl_vars['banner_img']->value))) {?>
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" loading="lazy" width="1110" height="213">
  <?php } else { ?>
    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
</a>
<?php }
}
