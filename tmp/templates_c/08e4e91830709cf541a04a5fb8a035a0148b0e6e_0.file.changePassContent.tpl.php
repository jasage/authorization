<?php
/* Smarty version 3.1.30, created on 2018-04-25 12:26:40
  from "C:\xampp\htdocs\acceptic\views\changePassContent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae057e0db6409_46768857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e4e91830709cf541a04a5fb8a035a0148b0e6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acceptic\\views\\changePassContent.tpl',
      1 => 1524651999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae057e0db6409_46768857 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- CHANGE PASSWORD -->
    <div class="content">
        <div class="change-pass">
            <label class="pass">New Password
                <input type="password" class="form-control" name="password" placeholder="Enter your new password">
                <input type="password" class="form-control" name="confirm_pass" placeholder="Confirm password">
            </label>
            <button class="btn-change">Change</button> 
        </div>
    </div>
    <!-- END CHANGE PASSWORD --><?php }
}
