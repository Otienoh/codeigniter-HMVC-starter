 <?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php
class Hashing_algos extends MX_Controller 
{

function __construct() {
parent::__construct();
$this->load->library('encrypt' );
}

function hashe_md5(){
	//echo "welcome to Dashboard";
	
	$data['section'] = "Twiga";
    $data['subtitle'] = "Hashing Algorithms";
  	$data['page_title'] = "Demo";
	$data['module'] = "hashing_algos";
	$data['view_file'] = "demo_view";
	echo Modules::run('template/admin', $data);
}

function hashe_sha1(){
	//echo "welcome to Dashboard";
	
	$data['section'] = "Twiga";
    $data['subtitle'] = "Hashing Algorithms";
  	$data['page_title'] = "Demo";
	$data['module'] = "hashing_algos";
	$data['view_file'] = "demo_view1";
	echo Modules::run('template/admin', $data);
}

function hashe_sha512(){
	//echo "welcome to Dashboard";
	
	$data['section'] = "Twiga";
    $data['subtitle'] = "Hashing Algorithms";
  	$data['page_title'] = "Demo";
	$data['module'] = "hashing_algos";
	$data['view_file'] = "demo_view2";
	echo Modules::run('template/admin', $data);
}

function get_data_from_post(){
             $plaintext = $this->input->post('plaintext', TRUE);
            return $plaintext;
        }


function md5_hashing(){
	$this->load->library('form_validation');
	$this->form_validation->set_rules('plaintext', 'Plain Text', 'required|xss_clean');
	$plaintext= $this->get_data_from_post();
	$data['cihphered'] = md5($plaintext);
	
	$data['section'] = "Twiga";
    $data['subtitle'] = "Hashing Algorithms";
  	$data['page_title'] = "Demo";
	$data['module'] = "hashing_algos";
	$data['view_file'] = "demo_view";
	echo Modules::run('template/admin', $data);
}

function Sha1_hashing(){
$this->load->library('form_validation');
$this->form_validation->set_rules('plaintext', 'Plain Text', 'required|xss_clean');
$plaintext= $this->get_data_from_post();
$data['cihphered'] = $this->encrypt->sha1($plaintext);
$data['section'] = "Twiga";
$data['subtitle'] = "Hashing Algorithms";
$data['page_title'] = "Demo";
$data['module'] = "hashing_algos";
$data['view_file'] = "demo_view1";
echo Modules::run('template/admin', $data);

}

function Sha512_hashing(){
$this->load->library('form_validation');
$this->form_validation->set_rules('plaintext', 'Plain Text', 'required|xss_clean');
$plaintext= $this->get_data_from_post();
$data['cihphered'] =  hash("sha512", $plaintext);
$data['section'] = "Twiga";
$data['subtitle'] = "Hashing Algorithms";
$data['page_title'] = "Demo";
$data['module'] = "hashing_algos";
$data['view_file'] = "demo_view2";
echo Modules::run('template/admin', $data);
	
}

}