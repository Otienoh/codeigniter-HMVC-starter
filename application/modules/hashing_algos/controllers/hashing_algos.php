<?php
class Hashing_algos extends MX_Controller 
{

function __construct() {
parent::__construct();
}

function demo(){
	//echo "welcome to Dashboard";
	$data['section'] = "Twiga";
    $data['subtitle'] = "Hashing Algorithms";
  	$data['page_title'] = "Demo";
	$data['module'] = "hashing_algos";
	$data['view_file'] = "demo_view";
	echo Modules::run('template/admin', $data);
}

}