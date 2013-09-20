<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	 <meta http-equiv="content-type" content="text/html;charset=UTF-8"></meta>
	 <link rel="stylesheet" type="text/css" href="/assets/css/homepage.css" /> 
   <title>Simple Login with CodeIgniter</title>
 </head>
 <body>
	  <div align="center"><img src="https://abs.twimg.com/a/1362168403/t1/img/front_page/city-balcony@2x.jpg" class="front-image"></div>
   <h1>Simple Login with CodeIgniter</h1>
   <?php echo BASEPATH;?>
   <?php echo validation_errors(); ?>
   <div class="login_form">
   <?php echo form_open('verifylogin'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username" class="text_field_login" placeholder="Username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="passowrd" name="password" class="text_field_login" placeholder="password"/>
     <br/>
     <input type="submit" value="Login" class="primary-btn"/>
   </form>
   </div>
   
    <div class="register_form">
		<?php echo form_open('NewRegister'); ?>
    <h2>New to Howdy? Register </h2>
       <input type="text" name="username" id="username" placeholder="Username" class="text_field_register"/><br>
		   <input type="password" name="password" id="pwd" placeholder="Password" class="text_field_register"/><br>
<input type="text" name="firstname" id="firstname" placeholder="First Name" class="text_field_register"/><br>
<input type="text" name="lastname" placeholder="Last Name" class="text_field_register"/><br>
 <input type="text" name="email" id="email" placeholder="Email" class="text_field_register"/><br>

<center><input name="register" type="submit" id="register" value="Register" class="primary-btn"></center>
    
</form>
                 </div>
 </body>
</html>
