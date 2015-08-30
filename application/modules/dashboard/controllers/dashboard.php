<?php
class Dashboard extends MX_Controller 
{

function __construct() {
parent::__construct();
Modules::run('secure_tings/is_logged_in');
}

function home() {
	//echo "welcome to Dashboard";
	$data['section'] = "Twiga";
    $data['subtitle'] = "Dashboard";
  	$data['page_title'] = "Project Description";
	$data['module'] = "dashboard";
	$data['view_file'] = "home";
	echo Modules::run('template/admin', $data);

}



}