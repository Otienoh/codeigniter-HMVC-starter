<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <div class="widget-body">
    
    <?php echo validation_errors('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><b>',' </b></div>');?>

      <?php echo form_open('group/submit',array('class'=>'form-horizontal'));?>
      <div class="form-group">
        <?php
        echo form_label('Group Name','name');
        echo form_error('name');
        echo form_input(['name' => 'name', 'id' => 'name',  'value' => $name ,'class' => 'form-control', 'placeholder' => 'Enter Group Name']);
        ?>
      </div>
     <div class="form-group">
        <?php
        echo form_label('Group Description','role');
        echo form_error('role');
        echo form_input(['name' => 'role', 'id' => 'role',  'value' => $role ,'class' => 'form-control', 'placeholder' => 'Enter Group Description']);
        ?>
      </div>
      <br>
      <button class="btn btn-primary" name="submit" type="submit">Create Group</button>
     
      <?php 
      if (isset($update_id)){
          echo form_hidden('update_id', $update_id);
      }
      echo form_close();?>
    
  </div>
