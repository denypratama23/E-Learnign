<?php
defined('BASEPATH') or exit('No direct script access allowed');

class videos_model extends CI_Model
{

    public function insert($data)
    {
        return $this->db->insert('videos', $data);
    }
    public function get_data()
    {
        return $this->db->get('videos')->result_array();
    }
}
