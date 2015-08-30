<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* The MX_Controller class is autoloaded as required */

class  MY_Controller  extends  MX_Controller {
	function __construct() {
		parent::__construct();
		date_default_timezone_set('Africa/Nairobi');
	}

	//loading the user template
	//protected function template($data){

	//	$this->load->module('template');
	//$this->template->load_view($data);

	//}
	//loading admin template
	/*protected function admin_template($info){

		$this->load->module('template');
		$this->template->admin_view($info);

	}
	public function load_libraries($arr){

		array_unshift($arr, "jquery","bootstrap");
				
		$libs['js_files']				=	array();		
		$libs['css_files']				=	array();			
		$libs['js_plugin_files']		=	array();
		$libs['css_plugin_files']		=	array();

		$asset_path		=	$this->config->item('asset_path');

		$css_path		=	$this->config->item('asset_path');
		$js_path		=	$this->config->item('js_path');
		$plugin_path	=	$this->config->item('plugin_path');

		$all_css		=	$this->config->item('css_files');
		$all_js			=	$this->config->item('js_files');
		$all_plugin_css	=	$this->config->item('plugin_css_files');
		$all_plugin_js	=	$this->config->item('plugin_js_files');

		//load custom made css
		foreach ($arr as $css) {
			foreach($all_css as $all){
				if($css==$all['title']){
					$libs['css_files']			=	array_merge($libs['css_files'],array($all['file']));
				}
			}
		}

		//load custom made js
		foreach ($arr as $js) {
			foreach($all_js as $all){
				if($js==$all['title']){
					$libs['js_files']			=	array_merge($libs['js_files'],array($all['file']));
				}
			}
		}
		//load plugin css from the css folder
		foreach ($arr as $css) {
			foreach($all_plugin_css as $all){
				if($css==$all['title']){
					$libs['css_plugin_files']	=	array_merge($libs['css_plugin_files'],array($all['file']));
				}
			}
		}
		//load plugin js from the plugin js folder
		foreach ($arr as $js) {
			foreach($all_plugin_js as $all){
				if($js==$all['title']){
					$libs['js_plugin_files']	=	array_merge($libs['js_plugin_files'],array($all['file']));

				}
			}
		}
		
		
		return 	$libs;
	}
*/
	//checkk the current session for Admin
	function admin_session()
	{
		if ($this->session->userdata('is_logged_in') == TRUE) {
			$email = $this->session->userdata('email');
			$result = $this->db->query("SELECT * FROM `tbl_admin_details` WHERE `email_address` = '$email'");
			$result = $result->result_array();
				if($result == FALSE)
				{
					redirect('home');
				}
		}
		else{
			redirect('admin');
		}
	}

	//checkk the current session for user
	function user_session()
	{
		if ($this->session->userdata('is_logged_in') == TRUE) {
			$email = $this->session->userdata('email');
			$result = $this->db->query("SELECT * FROM `tbl_user_details` WHERE `email_address` = '$email'");
			$result = $result->result_array();
				if($result == FALSE)
				{
					redirect('home');
				}
		}
		else{
			redirect('home');
		}
	}

}


