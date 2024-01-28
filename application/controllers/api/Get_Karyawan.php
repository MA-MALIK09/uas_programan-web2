<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('no direct script acces allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Get_Karyawan extends REST_Controller
{


    //http://karyawan.com/payrolAPI/api/Get_Karyawan?nik=123

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Karyawan_model', 'karyawan');
    }

    public function index_get()
    {
        $nik = $this->get('nik');
        

        if ($nik === "") {
           
            $karyawan = $this->karyawan->getKaryawan();
        } else {
            $karyawan = $this->karyawan->getKaryawan($nik);
        }

        if ($karyawan) {
            $this->response([
                'status' => true,
                'data' => $karyawan
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => "NIK Not Found"
            ], REST_Controller::HTTP_OK);
        }
    }
}
