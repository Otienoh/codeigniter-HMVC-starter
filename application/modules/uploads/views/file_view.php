<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <div class="widget-body form">
  </br>

                           <!-- BEGIN FORM-->
                          <?php echo validation_errors('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><b>',' </b></div>');?>
<?php echo $this->session->flashdata('msg');  ?>
                            <?php 
                            echo  form_open_multipart('uploads/do_upload', ['class' => 'form-horizontal']);?>
                             <div class="control-group">
                                 <label class="control-label" for="plaintext"><b>File Name</b></label>
                                 <!-- <div class="">
                                    <input type="text" class="span6 popovers" id="input3" name="plaintext" data-trigger="hover" data-content="This text will be hashed using the chosen technique." data-original-title="Plain Text" />
                                 </div> -->
                                 <div class="controls">
        <?php
       echo form_error('file_name');
        echo form_input('file_name',set_value('file_name'),'class="form-control"');
        ?>
      </div>
       </div> 

                              <div class="control-group">
                                 <label class="control-label"><b>Add New Files</b></label>
                                 <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                      <div class="input-append">
                                        <div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span>
                                       <?php echo form_error('userfile');
        echo form_upload('userfile',set_value('userfile'),'class="default"');?>
                                        
                                          </span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                      </div>
                                    </div>
                                 </div>
                              </div>
                               <div class="form-actions">
                           <?php echo form_submit('submit', 'Upload File', 'class="btn btn-primary btn-lg"');?>
                           </div>
      <?php echo form_close();?>
                           <!-- END FORM--> 
<hr class="clearfix" />


</div>
  <script type="text/javascript">
window.setTimeout(function() {
    $("#alert-message").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);
</script>
