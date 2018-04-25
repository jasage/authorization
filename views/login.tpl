<!DOCTYPE html>
<html lang="en-ru">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link href="{$templateWebPath}css/login.css" rel="stylesheet">
</head>
<body>
   <div class="login">
        <form name="login" method="post" action="?controller=user&action=login">
              {if isset($message)}
              <span style="color:red">{$message}</span>
              {/if}
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
    <script src="{$templateWebPath}js/jquery-3.3.1.min.js"></script>
    <!-- SCRIPTS -->
    <script src="{$templateWebPath}js/login.js"></script>
</body>
</html>