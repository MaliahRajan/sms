<?php
/*%%SmartyHeaderCode:1700255518564320e2aab435_28712393%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5352ee9e7b217af7211a2ee6dd156eeb5e4c84ac' => 
    array (
      0 => '/var/www/html/myProject/StudentManagement/application/views/templates/login_form.tpl',
      1 => 1446971306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1700255518564320e2aab435_28712393',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564320e2abfeb4_11386985',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564320e2abfeb4_11386985')) {
function content_564320e2abfeb4_11386985 ($_smarty_tpl) {
?>
<div class="row loginBody">
        <div class="container" id="formContainer">

          <form class="form-signin" id="login" role="form">
            <button class="btn btn-primary" onclick="location.reload();"><span><i class="fa fa-home" onclick"location.reload();"></i></span> Home</button></span>
            <h3 class="form-signin-heading">Please sign in</h3>
            <a href="#" id="flipToRecover" class="flipLink">
              <div id="triangle-topright"></div>
            </a>
                <div class="input-group">
                    <input type="text" class="form-control" id="userName" placeholder="User Name" aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-user"></i></span>
                </div>
                </br>
                <div class="input-group">
                <input type="password" class="form-control" id="password" placeholder="Password" aria-describedby="basic-addon2" style="margin-bottom:0px">
                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-lock"></i></span>
                </div>
                </br>
            <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="login()">Sign in</button>
          </form>
    
          <form class="form-signin" id="recover" role="form">
            <h3 class="form-signin-heading">Enter email address</h3>
            <a href="#" id="flipToLogin" class="flipLink">
              <div id="triangle-topleft"></div>
            </a>
            <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email address" aria-describedby="basic-addon2" required autofocus>
                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-at"></i></span>
             </div>
             </br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Recover password</button>
          </form>

        </div> <!-- /container -->
    </div>
</div>

<?php }
}
?>