<?php
/* Smarty version 3.1.30, created on 2018-04-25 10:33:14
  from "C:\xampp\htdocs\acceptic\views\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae03d4a579a08_86514117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20140f274d910cffbc9cda522134da8fd1be729f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acceptic\\views\\login.tpl',
      1 => 1524645190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae03d4a579a08_86514117 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en-ru">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/login.css" rel="stylesheet">
</head>
<body>
   <div class="login">
        <form name="login" method="post" action="?controller=user&action=login">
              <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
              <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span>
              <?php }?>
              <label class="email">Email<input type="email" class="form-control" name="email" placeholder="Enter your email" required></label>

              <label class="pass">Password<input type="password" class="form-control" name="password" placeholder="Enter your password" required></label>

              <button class="btn-login">Login</button>
              <a class="signup">Sign Up</a>
        </form>
   </div>
   <div class="modal" id="modal">
       <div class="modal-signup">
              <span class="close">&times;</span>

              <label class="name">Name<input type="text" class="form-control" name="name" placeholder="Enter your name"></label>
              
              <label class="email">Email<input type="text" class="form-control" name="email" placeholder="Enter your email"></label>

              <label class="pass">Password
                <input type="password" class="form-control" name="password" placeholder="Enter your password">
                <input type="password" class="form-control" name="confirm_pass" placeholder="Confirm password">
              </label>

              <label class="phone">Phone number<input type="text" class="form-control" name="phone" placeholder="Enter your phone number"></label>

              <label class="address">Address<input type="text" class="form-control" name="address" placeholder="Enter your address"></label>

              <button class="btn-signup">Sign Up</button> 
       </div>
   </div>
    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <!-- SCRIPTS -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/login.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
