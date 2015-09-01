 <?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <div class="widget-body form">
                           <!-- BEGIN FORM-->
                           
                            <?php echo validation_errors('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><b>',' </b></div>');?>

                            <?php 
                            echo form_open('hashing_algos/sha1_hashing', ['class' => 'form-horizontal']);?>
                              <div class="control-group">
                                 <label class="control-label" for="plaintext">Unencrypted Text</label>
                                 <!-- <div class="">
                                    <input type="text" class="span6 popovers" id="input3" name="plaintext" data-trigger="hover" data-content="This text will be hashed using the chosen technique." data-original-title="Plain Text" />
                                 </div> -->
                                 <div class="controls">
        <?php
        echo form_error('plaintext');
        echo form_input(['name' => 'plaintext', 'id' => 'plaintext',  'class' => 'span6 popovers', 'data-trigger' => 'hover', 'data-content' => 'This text will be hashed using the chosen technique.','data-original-title' => 'Plain Text']);
        ?>
      </div>
                              </div> 
                              <div class="form-actions">
                              <button type="submit" name="submit" class="btn btn-primary ">Hash with SHA1</button>
                           
                                 
                              </div>
                            <?php echo form_close();?>
  <hr class="clearfix" />                       
<div class="row-fluid">
                    <div class="span4">
                      <h5>Encrypted Text</h5>
                    </div>
                    <div class="span8">
                     
                        <div class="control-group">
                                 
                                 <div class="controls">


                                    <textarea class="span6" rows="3" id="inputRemarks"><?php if (isset($cihphered)) {echo $cihphered;} else {echo "Ciphered Text will be shown here";} ?></textarea>
                                 </div>
                              </div>
                      
                    </div>
                  </div>
                           <!-- END FORM-->       
                        </div>