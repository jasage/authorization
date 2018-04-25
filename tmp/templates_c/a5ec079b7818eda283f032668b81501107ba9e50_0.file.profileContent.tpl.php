<?php
/* Smarty version 3.1.30, created on 2018-04-25 12:21:43
  from "C:\xampp\htdocs\acceptic\views\profileContent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae056b70b8ba4_58098369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5ec079b7818eda283f032668b81501107ba9e50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acceptic\\views\\profileContent.tpl',
      1 => 1524651694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae056b70b8ba4_58098369 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- PROFILE -->
    <div class="content">
        <div class="profile">
              <label class="name">Name<input type="text" class="form-control" name="name" value=<?php echo $_smarty_tpl->tpl_vars['users']->value['name'];?>
></label>
              
              <label class="email">Email<input type="text" class="form-control" name="email" value=<?php echo $_smarty_tpl->tpl_vars['users']->value['email'];?>
></label>

              <label class="phone">Phone number<input type="text" class="form-control" name="phone" value=<?php echo $_smarty_tpl->tpl_vars['users']->value['phone_number'];?>
></label>

              <label class="address">Address<input type="text" class="form-control" name="address" value=<?php echo $_smarty_tpl->tpl_vars['users']->value['address'];?>
></label>

              <button class="btn-save">Save</button> 
       </div>
    </div>
    <!-- END PROFILE --><?php }
}
