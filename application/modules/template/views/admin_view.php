<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 10]> <html lang="en" class="ie10"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Twiga</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" />
   <link href="<?php echo base_url() ?>assets/css/style_responsive.css" rel="stylesheet" />
   <link href="<?php echo base_url() ?>assets/css/style_default.css" rel="stylesheet" id="style_color" />
   <link href="#" rel="stylesheet" id="style_metro" />
   <link href="<?php echo base_url() ?>assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/chosen-bootstrap/chosen/chosen.css" />
  
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/data-tables/DT_bootstrap.css" />
 
   <script src="<?php echo base_url() ?>assets/js/jquery-1.8.2.min.js"></script>    
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
         <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="<?php echo base_url() ?>">
            TWIGA
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="arrow"></span>
            </a>          
            <!-- END RESPONSIVE MENU TOGGLER -->            
            <div class="top-nav">
              
               <!-- BEGIN TOP NAVIGATION MENU -->              
               <ul class="nav pull-right" id="top_menu">
                  <li class="divider-vertical hidden-phone hidden-tablet"></li>
                  <!-- BEGIN USER LOGIN DROPDOWN -->
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <i class="icon-user"></i> <?php echo '<b>'.$this->session->userdata('user_fname').'</b>' ;?>
                     <b class="caret"></b>
                     </a>
                     <ul class="dropdown-menu">
                         
                        <li><a href="<?php echo site_url('users/logout');?>"><i class="icon-key"></i> Log Out</a></li>
                     </ul>
                  </li>
                  <!-- END USER LOGIN DROPDOWN -->
               </ul>
               <!-- END TOP NAVIGATION MENU --> 
            </div>
         </div>
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">
         
         <!-- BEGIN SIDEBAR MENU -->
         <ul>
            <li>
               <a href="<?php echo site_url('dashboard/home');?>">
               <i class="icon-home"></i> Dashboard
               </a>         
            </li>
            <li class="has-sub">
               <a href="javascript:;" class="">
               <i class="icon-folder-open-alt"></i> File Manager
               <span class="arrow"></span>
               </a>
               <ul class="sub">
                  <li><a class="" href="<?php echo site_url('uploads');?>">Uploads Files</a></li>
                  <li><a class="" href="<?php echo site_url('uploads/list_files');?>">Download Files</a></li>
                 
               </ul>
            </li>
            <!-- <li class="has-sub">
               <a href="javascript:;" class="">
               <i class="icon-exchange"></i> Encrypting Demos
               <span class="arrow"></span>
               </a>
               <ul class="sub">
                  <li><a class="" href="<?php echo site_url('encryption_algos/');?>">Demo 1</a></li>
                  <li><a class="" href="#">Demo 2</a></li>
                  <li><a class="" href="#">Demo 3</a></li>
                  <li><a class="" href="#">Demo 4</a></li>
               </ul>
            </li> -->
            <li class="has-sub">
               <a href="javascript:;" class="">
               <i class="icon-eye-close"></i> Hashing Demos
               <span class="arrow"></span>
               </a>
               <ul class="sub">
                  <li><a class="" href="<?php echo site_url('hashing_algos/hashe_md5');?>">MD5 Demo</a></li>
                  <li><a class="" href="<?php echo site_url('hashing_algos/hashe_sha1');?>">SHA1 Demo</a></li>
                  <li><a class="" href="<?php echo site_url('hashing_algos/hashe_sha512');?>">SHA512 Demo</a></li>
                  
               </ul>
            </li>
            <li class="has-sub">
               <a href="javascript:;" class="">
               <i class="icon-cog"></i> Configuations
               <span class="arrow"></span>
               </a>
               <ul class="sub">
                  <li><a class="" href="<?php echo site_url('group');?>">Manage Groups</a></li>
                  <li><a class="" href="<?php echo site_url('users/create_user');?>">Manage Users</a></li>
                  
               </ul>
            </li>
         </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
     <div id="body">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">       
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a><?php echo $section?></a> <span class="divider">/</span>
                     </li>
                     <li><a href="#"> <?php echo $subtitle ?></a></li>
                  </ul>
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div id="page">

        <div class="row-fluid">
                  <div class="span12 sortable">
                     <!-- BEGIN GRID SAMPLE PORTLET-->
                     <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-reorder"></i> <?php echo $page_title ?></h4>
                           <span class="tools">
                                
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           
                           
                           </span>                    
                        </div>
        <?php 
    $this->load->view($module.'/'.$view_file);
    //echo "ghggh";
     ?>
    
             </div>
                     <!-- END GRID SAMPLE PORTLET-->
                  </div>
               </div>
</div>
            <!-- END PAGE CONTENT-->      
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div id="footer">
         2015 &copy; Submited as Cryptography Group Project   &mdash;   Twiga Group.
     
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->   
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="<?php echo base_url() ?>assets/js/jquery-1.8.2.min.js"></script>    
   <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="<?php echo base_url() ?>assets/js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="<?php echo base_url() ?>assets/js/excanvas.js"></script>
   <script src="<?php echo base_url() ?>assets/js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="<?php echo base_url() ?>assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url() ?>assets/uniform/jquery.uniform.min.js"></script>
    
   
   <script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
  
   <script src="<?php echo base_url() ?>assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="<?php echo base_url() ?>assets/js/app.js"></script>   
   <script>
      jQuery(document).ready(function() {     
        // initiate layout and plugins
        App.init();
      });
   </script>
   <!-- END JAVASCRIPTS --> 
</body>
<!-- END BODY -->
</html>