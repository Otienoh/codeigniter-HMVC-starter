<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <div class="widget-body form">
  </br>
  <?php echo $this->session->flashdata('msg');  ?>

                           <!-- BEGIN FORM-->
                           <form action="#" class="form-horizontal">
                              <div class="control-group">
                                 <label class="control-label"><b>Add New Files</b></label>
                                 <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                      <div class="input-append">
                                        <div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span>
                                        <input type="file" class="default" />
                                          </span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                      </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
                           <!-- END FORM--> 
<hr class="clearfix" />
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
<div class="row-fluid">
                    <div class="span2">
                      <div class="thumbnail">
                        <div class="item">
                          <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="assets/img/gallery/photo4.jpg">
                            <div class="zoom">
                              <img src="assets/img/gallery/photo4.jpg" alt="Photo" />                   
                              <div class="zoom-icon"></div>
                            </div>
                          </a>
                          <div class="details">
                            <a href="#" class="icon"><i class="icon-paper-clip"></i></a>
                            <a href="#" class="icon"><i class="icon-link"></i></a>
                            <a href="#" class="icon"><i class="icon-pencil"></i></a>
                            <a href="#" class="icon"><i class="icon-remove"></i></a>    
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="span2">
                      <div class="thumbnail">
                        <div class="item">
                          <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="assets/img/gallery/photo6.jpg">
                            <div class="zoom">
                              <img src="assets/img/gallery/photo6.jpg" alt="Photo" />                   
                              <div class="zoom-icon"></div>
                            </div>
                          </a>
                          <div class="details">
                            <a href="#" class="icon"><i class="icon-paper-clip"></i></a>
                            <a href="#" class="icon"><i class="icon-link"></i></a>
                            <a href="#" class="icon"><i class="icon-pencil"></i></a>
                            <a href="#" class="icon"><i class="icon-remove"></i></a>    
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="span2">
                      <div class="thumbnail">
                        <div class="item">
                          <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="assets/img/gallery/photo2.jpg">
                            <div class="zoom">
                              <img src="assets/img/gallery/photo2.jpg" alt="Photo" />                   
                              <div class="zoom-icon"></div>
                            </div>
                          </a>
                          <div class="details">
                            <a href="#" class="icon"><i class="icon-paper-clip"></i></a>
                            <a href="#" class="icon"><i class="icon-link"></i></a>
                            <a href="#" class="icon"><i class="icon-pencil"></i></a>
                            <a href="#" class="icon"><i class="icon-remove"></i></a>    
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="span2">
                      <div class="thumbnail">
                        <div class="item">
                          <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="assets/img/gallery/photo1.jpg">
                            <div class="zoom">
                              <img src="assets/img/gallery/photo1.jpg" alt="Photo" />                   
                              <div class="zoom-icon"></div>
                            </div>
                          </a>
                          <div class="details">
                            <a href="#" class="icon"><i class="icon-paper-clip"></i></a>
                            <a href="#" class="icon"><i class="icon-link"></i></a>
                            <a href="#" class="icon"><i class="icon-pencil"></i></a>
                            <a href="#" class="icon"><i class="icon-remove"></i></a>    
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="span2">
                      <div class="thumbnail">
                        <div class="item">
                          <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="assets/img/gallery/photo5.jpg">
                            <div class="zoom">
                              <img src="assets/img/gallery/photo5.jpg" alt="Photo" />                   
                              <div class="zoom-icon"></div>
                            </div>
                          </a>
                          <div class="details">
                            <a href="#" class="icon"><i class="icon-paper-clip"></i></a>
                            <a href="#" class="icon"><i class="icon-link"></i></a>
                            <a href="#" class="icon"><i class="icon-pencil"></i></a>
                            <a href="#" class="icon"><i class="icon-remove"></i></a>    
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="span2">
                      <div class="thumbnail">
                        <div class="item">
                          <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="assets/img/gallery/photo2.jpg">
                            <div class="zoom">
                              <img src="assets/img/gallery/photo2.jpg" alt="Photo" />                   
                              <div class="zoom-icon"></div>
                            </div>
                          </a>
                          <div class="details">
                            <a href="#" class="icon"><i class="icon-paper-clip"></i></a>
                            <a href="#" class="icon"><i class="icon-link"></i></a>
                            <a href="#" class="icon"><i class="icon-pencil"></i></a>
                            <a href="#" class="icon"><i class="icon-remove"></i></a>    
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="span2">
                      <div class="thumbnail">
                        <div class="item">
                          <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="assets/img/gallery/photo4.jpg">
                            <div class="zoom">
                              <img src="assets/img/gallery/photo4.jpg" alt="Photo" />                   
                              <div class="zoom-icon"></div>
                            </div>
                          </a>
                          <div class="details">
                            <a href="#" class="icon"><i class="icon-paper-clip"></i></a>
                            <a href="#" class="icon"><i class="icon-link"></i></a>
                            <a href="#" class="icon"><i class="icon-pencil"></i></a>
                            <a href="#" class="icon"><i class="icon-remove"></i></a>    
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="span2">
                      <div class="thumbnail">
                        <div class="item">
                          <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="assets/img/gallery/photo6.jpg">
                            <div class="zoom">
                              <img src="assets/img/gallery/photo6.jpg" alt="Photo" />                   
                              <div class="zoom-icon"></div>
                            </div>
                          </a>
                          <div class="details">
                            <a href="#" class="icon"><i class="icon-paper-clip"></i></a>
                            <a href="#" class="icon"><i class="icon-link"></i></a>
                            <a href="#" class="icon"><i class="icon-pencil"></i></a>
                            <a href="#" class="icon"><i class="icon-remove"></i></a>    
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="span2">
                      <div class="thumbnail">
                        <div class="item">
                          <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="assets/img/gallery/photo2.jpg">
                            <div class="zoom">
                              <img src="assets/img/gallery/photo2.jpg" alt="Photo" />                   
                              <div class="zoom-icon"></div>
                            </div>
                          </a>
                          <div class="details">
                            <a href="#" class="icon"><i class="icon-paper-clip"></i></a>
                            <a href="#" class="icon"><i class="icon-link"></i></a>
                            <a href="#" class="icon"><i class="icon-pencil"></i></a>
                            <a href="#" class="icon"><i class="icon-remove"></i></a>    
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="span2">
                      <div class="thumbnail">
                        <div class="item">
                          <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="assets/img/gallery/photo1.jpg">
                            <div class="zoom">
                              <img src="assets/img/gallery/photo1.jpg" alt="Photo" />                   
                              <div class="zoom-icon"></div>
                            </div>
                          </a>
                          <div class="details">
                            <a href="#" class="icon"><i class="icon-paper-clip"></i></a>
                            <a href="#" class="icon"><i class="icon-link"></i></a>
                            <a href="#" class="icon"><i class="icon-pencil"></i></a>
                            <a href="#" class="icon"><i class="icon-remove"></i></a>    
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="span2">
                      <div class="thumbnail">
                        <div class="item">
                          <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="assets/img/gallery/photo5.jpg">
                            <div class="zoom">
                              <img src="assets/img/gallery/photo5.jpg" alt="Photo" />                   
                              <div class="zoom-icon"></div>
                            </div>
                          </a>
                          <div class="details">
                            <a href="#" class="icon"><i class="icon-paper-clip"></i></a>
                            <a href="#" class="icon"><i class="icon-link"></i></a>
                            <a href="#" class="icon"><i class="icon-pencil"></i></a>
                            <a href="#" class="icon"><i class="icon-remove"></i></a>    
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="span2">
                      <div class="thumbnail">
                        <div class="item">
                          <a class="fancybox-button" data-rel="fancybox-button" title="Photo" href="assets/img/gallery/photo2.jpg">
                            <div class="zoom">
                              <img src="assets/img/gallery/photo2.jpg" alt="Photo" />                   
                              <div class="zoom-icon"></div>
                            </div>
                          </a>
                          <div class="details">
                            <a href="#" class="icon"><i class="icon-paper-clip"></i></a>
                            <a href="#" class="icon"><i class="icon-link"></i></a>
                            <a href="#" class="icon"><i class="icon-pencil"></i></a>
                            <a href="#" class="icon"><i class="icon-remove"></i></a>    
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

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
