<?php

class UploadController extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                // $config['allowed_types']        = 'gif';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $files = $_FILES;
                echo '<pre>';
                var_dump($files);
                echo '</pre>';
                exit;
                $_FILES = NULL;
                $_FILES['userfile'] = $files['userfile'];

                // アップロード実行
                $this->load->library('upload', $config);


                if ( ! $this->upload->do_upload('userfile')) {
                        echo 'Error';
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('upload_form', $error);
                } else {
                        echo 'success';
                        $data = array('upload_data' => $this->upload->data());
                        // var_dump($data);
                        exit;
                        $this->load->view('upload_success', $data);
                }
        }
}