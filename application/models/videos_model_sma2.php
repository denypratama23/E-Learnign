<?php
defined('BASEPATH') or exit('No direct script access allowed');

class videos_model_sma2 extends CI_Model
{

    public function insert($data)
    {
        return $this->db->insert('videos_sma2', $data);
    }
    public function get_data()
    {
        return $this->db->get('videos_sma2')->result_array();
    }
}
