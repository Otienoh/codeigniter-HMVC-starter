 <?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php
class Encryption_algos extends MX_Controller 
{

function __construct() {
parent::__construct();
$this->load->library('encrypt' );
}

function index(){
	//echo "welcome to Dashboard";
	$data= $this->get_data_from_post();
	$data['section'] = "Twiga";
    $data['subtitle'] = "Hashing Algorithms";
  	$data['page_title'] = "Demo";
	$data['module'] = "hashing_algos";
	$data['view_file'] = "demo_view";
	echo Modules::run('template/admin', $data);
}

function get_data_from_post(){
            $data['plaintext']=$this->input->post('plaintext', TRUE);
            return $data;
        }

function encrypting_without_key($text){
	$encrypted_string_no = $this->encrypt->encode($text);
	return $encrypted_string_no; 
}

function encrypting_with_key($text){
$key = 'super-secret-key';
$encrypted_string = $this->encrypt->encode($text, $key);
return $encrypted_string; 
}

function decoding_without_key($test){
$ciphertext=$this->encrypting_without_key($test);
$plaintext_string = $this->encrypt->decode($ciphertext);
echo $plaintext_string;
}

function decoding_with_key($test){
$key = 'super-secret-key';
$ciphertext=$this->encrypting_with_key($test);
$plaintext_string = $this->encrypt->decode($ciphertext, $key);
echo $plaintext_string;
}

}