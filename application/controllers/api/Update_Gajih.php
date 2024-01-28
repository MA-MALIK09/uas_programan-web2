<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') or exit('no direct script acces allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Update_Gajih extends REST_Controller{


    public function __construct(){
        parent::__construct();
        $this->load->model('Karyawan_model', 'Gajih');
    }   

    public function index_put(){

        $nik = $this->put('nik');

        $data = [
            'nama' => $this->put('nama'),
            'posisi' => $this->put('posisi'),
            'alamat' => $this->put('alamat'),
            'usia' => $this->put('usia'),
            'Gajih' => $this->put('Gajih'),

        ];

        if($this->gajih->updateGajih($data, $nik)){
          
            $this->response([
                'status' => true,
                'message' => 'gajih berhasil dirubah brother'
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to update gajih'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}