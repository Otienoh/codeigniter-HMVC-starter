<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- BEGIN LOGIN -->
  <div id="login">
    <!-- BEGIN LOGIN FORM -->
     <?php 

echo validation_errors('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><b>',' </b></div>');?>     

 <?php 

$attributes = array('class' => 'form-vertical no-padding no-margin', 'id'=>'loginform');

 echo form_open('users/submit', $attributes);?>

   <h4>Twiga Group Members</h4>
    <hr>
    <p class="center">
    <b>
      Christine Kamathi<br>
      Julie Otieno<br>
     </b>
    </p>
    <hr>
      <p class="center">Enter your username and password.</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-user"></i></span><?php echo form_input(['name' => 'username', 'id' => 'username', 'class' => 'form-control', 'placeholder' => 'Enter Username Name']);?>
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-lock"></i></span><?php  echo form_password(['name' => 'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Enter Password']); ?>           
          </div>
          <div class="block-hint pull-right">
            <a href="javascript:;" class="" id="forget-password">Forgot Password?</a>
          </div>
          <div class="clearfix space5"></div>
        </div>
      </div>
      <input type="submit" name="submit"  id="login-btn" class="btn btn-block btn-inverse" value="Login" />
    </form>
    <!-- END LOGIN FORM -->        
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form id="forgotform" class="form-vertical no-padding no-margin hide" action="index.html">
      <p class="center">Enter your e-mail address below to reset your password.</p>
      <div class="control-group">
        <div class="controls">
          <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span><?php echo form_input(['name' => 'email', 'id' => 'email',  'value' => $email ,'class' => 'form-control', 'placeholder' => 'Enter Email']); ?>
          </div>
        </div>
        <div class="space10"></div>
      </div>
      <input type="button" id="forget-btn" class="btn btn-block btn-inverse" value="Submit" />
     <?php echo form_close();?>
    <!-- END FORGOT PASSWORD FORM -->
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div id="login-copyright">
    CRYPTOGRAPHY GROUP PROJECT
  </div>
  <!-- END COPYRIGHT -->