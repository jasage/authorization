<?php
/* Smarty version 3.1.30, created on 2018-04-25 12:01:56
  from "C:\xampp\htdocs\acceptic\views\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae052144a1883_89604542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '610170f762c6c700f1ed83c263fec3a179b3ac05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acceptic\\views\\menu.tpl',
      1 => 1524650511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae052144a1883_89604542 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- MENU -->
    <div class="menu">
        <ul class="nav">
            <li><a href="?controller=user&action=home">Home</a></li>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li class="dropdown">
                <a href="#">
                    <?php if (empty($_smarty_tpl->tpl_vars['users']->value['name'])) {?> 
                    <?php echo $_smarty_tpl->tpl_vars['users']->value['email'];?>

                    <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['users']->value['name'];?>

                    <?php }?>
                </a>
                <div class="dropdown-content">
                    <a href="?controller=user&action=profile">Profile</a>
                    <a href="?controller=user&action=changePass">Change password</a>
                    <a href="?controller=user&action=logout" style="border-top: solid 1px #333">Log out</a>    
                </div>
            </li>
        </ul>  
    </div>
    <!-- END MENU --><?php }
}
