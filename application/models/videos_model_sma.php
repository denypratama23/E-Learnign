<?php
defined('BASEPATH') or exit('No direct script access allowed');

class videos_model_sma extends CI_Model
{

    public function insert($data)
    {
        return $this->db->insert('videos_sma', $data);
    }
    public function get_data()
    {
        return $this->db->get('videos_sma')->result_array();
    }
}
