<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
 <div class="widget-body">
      <a href="<?php echo site_url('group/create');?>" class="btn btn-primary">Add Group</a>
  </br>
  </br>
  <?php echo $this->session->flashdata('msg');  ?>
     
        <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Group Name</th>
                                        <th>Group Description</th>
                                        <td align="center"><b>Edit</b></td>
                                        <td align="center"><b>Delete</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($records->result() as $row){
                                        $edit_url = base_url().'group/create/'.$row->id;
                                        $delete_url = base_url().'group/delete/'.$row->id;
                                      ?>
                                    <tr>
                                        <td><?php echo $row->name ?></td>
                                        <td><?php echo $row->role ?></td>
                                        <td align="center"><a href="<?php echo $edit_url ?>">Edit</a></td>
                                        <td align="center"><a href="<?php echo $delete_url ?>">Delete</td>
                                       
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                    <hr>
                    </br>
                    
                    <?php 

                    //echo $this->table->generate($records);
                    echo $this->pagination->create_links(); ?>
                    
                    
                    
                
      </div>

  <script type="text/javascript">
window.setTimeout(function() {
    $("#alert-message").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);

</script>
