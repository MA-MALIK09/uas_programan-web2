<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') or exit('no direct script acces allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Delete_Gajih extends REST_Controller{


    public function __construct(){
        parent::__construct();
        $this->load->model('Karyawan_model', 'gajih');
    }

    public function index_delete(){

        $nik = $this->delete('nik');

        if($nik === null){

            $this->response([
                'status' => false,
                'message' => 'nik kosong, masukkan nik brother'
                ], REST_Controller::HTTP_BAD_REQUEST);
        }else{

            if($this->gajih->deleteGajih($nik)){

                $this->response([
                    'status' => true,
                    'nik' => $nik,
                    'message' => 'deleted.'
                ], REST_Controller::HTTP_OK);
            }else{
                $this->response([
                    'status' => false,
                    'message' => 'nik not found.'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

}