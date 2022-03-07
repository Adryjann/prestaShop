<?php
/* Smarty version 3.1.39, created on 2022-03-03 21:56:41
  from 'C:\xampp\htdocs\prestaShop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62212b89496aa7_73539326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dcae9fed0144f8789079bbbfeebcce337073d79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestaShop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1646340730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62212b89496aa7_73539326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestaShop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\4d\\ca\\e9\\4dcae9fed0144f8789079bbbfeebcce337073d79_2.file.helpers.tpl.php',
    'uid' => '4dcae9fed0144f8789079bbbfeebcce337073d79',
    'call_name' => 'smarty_template_function_renderLogo_22843340962212b89492423_84233698',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_22843340962212b89492423_84233698 */
if (!function_exists('smarty_template_function_renderLogo_22843340962212b89492423_84233698')) {
function smarty_template_function_renderLogo_22843340962212b89492423_84233698(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      loading="lazy"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_22843340962212b89492423_84233698 */
}
