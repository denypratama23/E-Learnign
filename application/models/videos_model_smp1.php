<?php
defined('BASEPATH') or exit('No direct script access allowed');

class videos_model_smp1 extends CI_Model
{

    public function insert($data)
    {
        return $this->db->insert('videos_smp1', $data);
    }
    public function get_data()
    {
        return $this->db->get('videos_smp1')->result_array();
    }
}
