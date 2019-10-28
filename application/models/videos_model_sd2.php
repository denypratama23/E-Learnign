<?php
defined('BASEPATH') or exit('No direct script access allowed');

class videos_model_sd2 extends CI_Model
{

    public function insert($data)
    {
        return $this->db->insert('videos_sd2', $data);
    }
    public function get_data()
    {
        return $this->db->get('videos_sd2')->result_array();
    }
}
