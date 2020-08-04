<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class nama extends REST_Controller
{

    public function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    public function index_get()
    {
        $username = $this->get('username');
        if ($username == '') {
            $bmi = $this->db->get('username')->result();
        } else {
            $this->db->where('username', $username);
            $bmi = $this->db->get('username')->result();
        }
        $this->response($bmi, 200);
    }

    //Masukan function selanjutnya disini
}
