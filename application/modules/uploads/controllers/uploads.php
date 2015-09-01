<?php
class Uploads extends MX_Controller 
{

function __construct() {
parent::__construct();
}


function index () {
	$this->load->model('mdl_uploads');
   
	$data['section'] = "Twiga";
    $data['subtitle'] = "File Manager";
  	$data['page_title'] = "Files";
	$data['module'] = "uploads";
	$data['view_file'] = "file_view";
	echo Modules::run('template/admin', $data);
}


 public function do_upload()
    {
        $config['upload_path']='./docs/';
        $config['allowed_types']='pdf|doc|jpg|png|gif|docx';
        $config['max_size']='2048';
        $config['remove_spaces']= TRUE;
        
        $this->load->library('upload', $config);
        //$this->upload->initialize($config);
    if ( ! $this->upload->do_upload())
        {
            //$error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('msg', $this->upload->display_errors());
            //echo $this->upload->display_errors();
            redirect('uploads/index', 'refresh');
        }
        else
        {
            $data = $this->upload->data();
            $mydata = array(
                                 'file_name' => $this->input->post('file_name'),
                                 'raw_name' => $data["file_name"],
                                 'file_type' => $data["file_type"],
                                 'full_path' => $data["full_path"], 
                                 'upload_date' => date('Y-m-d')   
                            );
            $this->load->model('mdl_uploads');
            $this->mdl_uploads->add_uploads($mydata);
            $data = array('upload_data' => $this->upload->data());
            $this->session->set_flashdata('msg','<div id="alert-message" class="alert alert-success text-center">File uploaded successfully!</div> ');
            redirect('uploads/list_files', 'refresh');
        }
    }
    

function list_files()
    {


            $this->load->model('mdl_uploads');
            $this->load->library('pagination');
            $this->load->library('table');
            $config['base_url'] = base_url().'/county/index';
            $config['total_rows'] = $this->mdl_uploads->get_files();
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
          // $data['query'] = $this->mdl_county->get('id', $config['per_page'], $this->uri->segment(3));
            $data['files'] = $this->db->get('m_uploads', $config['per_page'], $this->uri->segment(3));
           //$this->load->view('display', $data);
            $data['section'] = "Twiga";
            $data['subtitle'] = "File Manager";
            $data['page_title'] = "Files";
            $data['module'] = "uploads";
            $data['view_file'] = "list_view";
            echo Modules::run('template/admin', $data);  

 
    }


function download_file($file_name){
     $this->load->helper('download');
    $data = file_get_contents('./docs/'.$file_name); // Read the file's contents
    $name = $file_name;
    force_download($name, $data);
    }

     function delete($id){
     $this->load->model('mdl_uploads');
     $this->mdl_uploads->_delete($id);
     redirect('uploads/list_files', 'refresh');
    }


}