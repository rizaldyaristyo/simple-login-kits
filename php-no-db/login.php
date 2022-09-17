<?php
require "check.php";
if (isset($failed)) {
  echo "<div id='bad-login'>Invalid user or password.</div>";
}?>
<form id="login-form" method="post" target="_self">
  <h1>SIGN IN</h1>
  <input placeholder="user" type="text" name="user" required/>
  <input placeholder="password" type="password" name="password" required/>
  <input type="submit" value="Sign In"/>
</form>