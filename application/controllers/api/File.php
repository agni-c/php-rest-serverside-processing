<?php

require APPPATH . 'libraries/REST_Controller.php';

// require file
require_once APPPATH . "vendor/autoload.php";

// $this->load->helper('file');

class File extends REST_Controller
{

    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function index_get($id = 0)
    {
        if (!empty($id)) {
            $data = $this->db->get_where("picture", ['id' => $id])->row_array();
        } else {
            $data = $this->db->get("picture")->result();
        }

        $this->response($data, REST_Controller::HTTP_OK);
    }

    /**
     * Get All Data from this method.
     *
     * @return Response
     */
    public function index_post()
    {
        // require file
        require_once APPPATH . "vendor/autoload.php";

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000000000;
        $config['max_width']            = 8024;
        $config['max_height']           = 6768;

        $this->load->library('upload');
        $this->upload->initialize($config);



        if (!$this->upload->do_upload('test')) {
            $err = array("error" => $this->upload->display_errors());
            $this->response($err, REST_Controller::HTTP_BAD_REQUEST);
        } else {
            Tinify\setKey("rDb1Cy7Vz54YJG68pycWZyMDXsTZq2n3");
            $img = Tinify\fromFile($this->upload->data('full_path'))->toFile($this->upload->data('full_path'));

            $data = array('file_name' => $this->upload->data("orig_name"));
            $this->db->insert('picture', $data);
            // $this->response($img, REST_Controller::HTTP_OK);
            $this->response($data, REST_Controller::HTTP_OK);
        }

        // $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    }
}
