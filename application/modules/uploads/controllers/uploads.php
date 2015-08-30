<?php
class Uploads extends MX_Controller 
{

function __construct() {
parent::__construct();
}


function index () {
	$this->load->model('mdl_uploads');
    $this->load->library('pagination');
    $this->load->library('table');
    $config['base_url'] = base_url().'/uploads/index';
    $config['total_rows'] = $this->mdl_uploads->get('id')->num_rows;
    $config['per_page'] = 5;
    $config['num_links'] = 4;
    $config['full_tag_open'] = '<div><ul class="pagination pagination-small pagination-centered">';
    $config['full_tag_close'] = '</ul></div>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tagl_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";
    
    $this->pagination->initialize($config);
    $data['records'] = $this->db->get('m_uploads', $config['per_page'], $this->uri->segment(3));
	//echo "welcome to Dashboard";
	$data['section'] = "Twiga";
    $data['subtitle'] = "File Manager";
  	$data['page_title'] = "Files";
	$data['module'] = "uploads";
	$data['view_file'] = "file_view";
	echo Modules::run('template/admin', $data);
}




































function get($order_by){
$this->load->model('mdl_uploads');
$query = $this->mdl_uploads->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_uploads');
$query = $this->mdl_uploads->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id){
$this->load->model('mdl_uploads');
$query = $this->mdl_uploads->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_uploads');
$query = $this->mdl_uploads->get_where_custom($col, $value);
return $query;
}

function _insert($data){
$this->load->model('mdl_uploads');
$this->mdl_uploads->_insert($data);
}

function _update($id, $data){
$this->load->model('mdl_uploads');
$this->mdl_uploads->_update($id, $data);
}

function _delete($id){
$this->load->model('mdl_uploads');
$this->mdl_uploads->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_uploads');
$count = $this->mdl_uploads->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_uploads');
$max_id = $this->mdl_uploads->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_uploads');
$query = $this->mdl_uploads->_custom_query($mysql_query);
return $query;
}

}