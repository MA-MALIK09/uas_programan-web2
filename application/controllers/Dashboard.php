<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard mahasiswa';

        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}