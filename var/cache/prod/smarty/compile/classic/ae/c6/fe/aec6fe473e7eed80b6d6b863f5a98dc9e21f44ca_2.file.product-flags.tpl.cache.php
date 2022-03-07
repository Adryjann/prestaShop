<?php
/* Smarty version 3.1.39, created on 2022-03-03 21:56:40
  from 'C:\xampp\htdocs\prestaShop\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62212b88eb03c1_01455883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aec6fe473e7eed80b6d6b863f5a98dc9e21f44ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestaShop\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1646340730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62212b88eb03c1_01455883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '156200247962212b88eade72_94448033';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55761091162212b88eae9a3_34313371', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_55761091162212b88eae9a3_34313371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_55761091162212b88eae9a3_34313371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
