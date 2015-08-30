<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4">
    <?php echo validation_errors('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><b>',' </b></div>');?>
      <h1>Add New modulename</h1>
      <?php echo form_open('modulename/submit',array('class'=>'form-horizontal'));?>
      <div class="form-group">
        <?php
        echo form_label('modulename Name','modulename_name');
        echo form_error('modulename_name');
        echo form_input(['name' => 'modulename_name', 'id' => 'modulename',  'value' => $modulename_name ,'class' => 'form-control', 'placeholder' => 'Enter modulename Name']);
        ?>
      </div>
     <div class="form-group">
        <?php
        echo form_label('modulename Name','modulename_name');
        echo form_error('modulename_name');
        echo form_input(['name' => 'modulename_name', 'id' => 'modulename',  'value' => $modulename_name ,'class' => 'form-control', 'placeholder' => 'Enter modulename Name']);
        ?>
      </div>
      <div class="col-lg-4 col-lg-offset-4">
      <button class="btn btn-lg btn-danger btn-block" name="submit" type="submit">Create modulename</button>
      </div>
      <?php 
      if (isset($update_id)){
          echo form_hidden('update_id', $update_id);
      }
      echo form_close();?>
    </div>
  </div>
