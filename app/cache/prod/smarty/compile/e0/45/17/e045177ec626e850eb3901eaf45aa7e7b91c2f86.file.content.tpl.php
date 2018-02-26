<?php /* Smarty version Smarty-3.1.19, created on 2018-02-26 20:04:03
         compiled from "C:\xampp\htdocs\prestashop\admin021ejrtkp\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145475a945a238cc1b2-85501650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e045177ec626e850eb3901eaf45aa7e7b91c2f86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin021ejrtkp\\themes\\default\\template\\content.tpl',
      1 => 1519139562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145475a945a238cc1b2-85501650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a945a238d3eb9_68767271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a945a238d3eb9_68767271')) {function content_5a945a238d3eb9_68767271($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
