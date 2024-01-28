<?php

class Karyawan_model extends CI_Model
{
    

    public function getKaryawan($nik = null)
    {
        if ($nik === null) {
            return $this->db->get('gajih')->result_array();
        } else {
            return $this->db->get_where('gajih', ['nik' => $nik])->result_array();
        }
    }


    public function insertGajih($data = null)
    {
        $query = "insert into karyawandb.gajih (nik,nama,posisi,alamat,usia,Gajih) 
        values('" . $data['NIK'] . "','" . $data['NAMA'] . "','" . $data['POSISI'] . "','" . $data['ALAMAT'] . "','" . $data['USIA'] . "','"  . $data['GAJIH'] . "')";
        if ($this->db->simple_query($query)){
            return true;
        }else{
            echo $query;
            return false;
        }
    }

    public function deleteGajih($nik){

        $this->db->delete('gajih',['nik' => $nik]);
        return $this->db->affected_rows();
    }

    public function updateGajih($data, $nik){

        $this->db->update('gajih', $data, ['nik' => $nik]);
        return $this->db->affected_rows();
    }
}