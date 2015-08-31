 <?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php
class Hashing_algos extends MX_Controller 
{

function __construct() {
parent::__construct();
$this->load->library('encrypt' );
}

function index(){
	//echo "welcome to Dashboard";
	$data['section'] = "Twiga";
    $data['subtitle'] = "Hashing Algorithms";
  	$data['page_title'] = "Demo";
	$data['module'] = "hashing_algos";
	$data['view_file'] = "demo_view";
	echo Modules::run('template/admin', $data);
}

function md5_hashing($text){

	$safe_password1 = md5($text);
	echo $safe_password1;
}

function Sha1_hashing($text){

$safe_password1 = $this->encrypt->sha1($text);
echo $safe_password1;
}

function Sha512_hashing($text){

	$safe_password1 = hash("sha512", $text);
	echo $safe_password1;
}

}