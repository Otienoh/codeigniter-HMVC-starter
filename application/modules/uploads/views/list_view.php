<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="widget-body form">
	  </br>
	  <div class="row-fluid">
	   
	                    <div class="span4">
	                      <h5>My Secured Files </h5>
	                    </div>
	                    <div class="span8">
	                      <div class="pull-right">
	                        <select data-placeholder="Sort By" class="chosen input-small" tabindex="-1" id="inputSort">
	                          <option value="0"></option>
	                          <option value="1">Date</option>
	                          <option value="1">Author</option>
	                          <option value="1">Title</option>
	                          <option value="1">Hits</option>
	                        </select>
	                      </div>
	                    </div>
	   </div>
	<hr class="clearfix" />
	<br>
	 <?php echo $this->session->flashdata('msg');  ?>
	<div class="row-fluid">
		<div class="well">
			<table class="table table-bordered table-hover table-striped">
			                                <thead>
			                                    <tr>
			                                        <th>File Name</th>
			                                        <th>File Type</th>
			                                        <th>Date Uploaded</th>
			                                        <td align="center"><b>Download</b></td>
			                                        <td align="center"><b>Delete</b></td>
			                                    </tr>
			                                </thead>
			                                <tbody>
			                                    <?php
				                                   foreach ($files->result() as $row){
				                                        $edit_url = base_url().'uploads/download_file/'.$row->raw_name;
				                                        $delete_url = base_url().'uploads/delete/'.$row->id;
			                                      ?>
			                                    <tr>
			                                        <td><?php echo $row->file_name ?></td>
			                                        <td><?php echo $row->file_type ?></td>
			                                        <td><?php echo $row->upload_date ?></td>
			                                        <td align="center"><a href="<?php echo $edit_url ?>"><i class="icon-download-alt"></i></a></td>
			                                        <td align="center"><a href="<?php echo $delete_url ?>"><i class="icon-trash"></i></td>
			                                       
		                                  </tr>
			                                  <?php } ?>
			                                </tbody>
			                            </table>
		</div>
	</div>
</div>