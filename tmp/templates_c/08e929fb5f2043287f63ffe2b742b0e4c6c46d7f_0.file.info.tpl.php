<?php
/* Smarty version 3.1.30, created on 2018-04-25 11:15:31
  from "C:\xampp\htdocs\acceptic\views\info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae04733a2db52_03034542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e929fb5f2043287f63ffe2b742b0e4c6c46d7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\acceptic\\views\\info.tpl',
      1 => 1524647720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae04733a2db52_03034542 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Personal Infomation</title>
    <meta charset="utf-8">
    <link href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" rel="stylesheet">
</head>
<body>
  
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
    <!-- END HEADER -->

    <!-- MENU -->
    <div class="menu">
        <ul class="nav">
            <li><a href="#">Home</a></li>
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
                    <a href="#">Profile</a>
                    <a href="#">Change password</a>
                    <a href="?controller=user&action=logout" style="border-top: solid 1px #333">Log out</a>    
                </div>
            </li>
        </ul>  
    </div>
    <!-- END MENU -->

    <!-- CONTENT -->
    <div class="content">
        <h1>
          Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
        Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
        Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
        Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
        Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
        Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
        Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
        Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.
        </h1>
    </div>
    <!-- END CONTENT -->

    <!-- HEADER -->
    <div class="footer">
      <span class="foot">2018 &copy; fantasymc9x@gmail.com </span>
    </div>
    <!-- END HEADER -->


    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <!-- SCRIPTS -->
    
</body>
</html><?php }
}
