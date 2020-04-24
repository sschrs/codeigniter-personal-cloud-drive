<?php
class Homepage extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        chdir("uploads");
        $files = glob("*");
        $viewData = new stdClass();
        $viewData->files = $files;
        $this->load->view("index.php",$viewData);
    }

    public function upload(){
        $config = array(
            "allowed_types" => "*",
            "upload_path"   => "uploads/"
        );
        $this->load->library("upload",$config);
        $upload = $this->upload->do_upload("file");
        if ($upload){
            redirect(base_url());
        }else{
            redirect(base_url());
        }
    }

    public function delete(){
        chdir("uploads");
        $file_name = $this->input->get("filename");
        unlink($file_name);
        redirect(base_url());
    }


}