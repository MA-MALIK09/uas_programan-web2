<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') or exit('no direct script acces allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Insert_Gajih extends REST_Controller{


    public function __construct(){
        parent::__construct();
        $this->load->model('Karyawan_model', 'Gajih');
    }

    public function index_post(){

        $data = [
            'nik' => $this->post('nik'),
            'nama' => $this->post('nama'),
            'posisi' => $this->post('posisi'),
            'alamat' => $this->post('alamat'),
            'usia' => $this->post('usia'),
            'Gajih' => $this->post('Gajih'),
        ];

        if($this->gajih->insertGajih($data) > 0){

                $this->response([
                    'status' => true,
                    'message' => "Input gajih berhasil brother"
                ], REST_Controller::HTTP_CREATED);

            }else{
                $this->response([
                    'status' => false,
                    'message' => "Input gajih gagal brother"
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
    }
}