<?php
/* Smarty version 3.1.30, created on 2018-04-25 11:33:35
  from "C:\xampp\htdocs\acceptic\views\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae04b6f0137e1_04360994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6baf2262b2541c5900bb6f3501c895cc9f84fcf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acceptic\\views\\header.tpl',
      1 => 1524648559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae04b6f0137e1_04360994 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- HEADER -->
    <div class="header">
        <span class="head">Personal Page</span>
        <span class="name">
            <?php if (empty($_smarty_tpl->tpl_vars['users']->value['name'])) {?> 
            <?php echo $_smarty_tpl->tpl_vars['users']->value['email'];?>

            <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['users']->value['name'];?>

            <?php }?>
        </span>
    </div>
    <!-- END HEADER --><?php }
}
