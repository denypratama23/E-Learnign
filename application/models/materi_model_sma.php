<?php
defined('BASEPATH') or exit('No direct script access allowed');

class materi_model_sma extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data)
    {
        return $this->db->insert('materi_sma', $data);
    }
    public function get_data()
    {
        return $this->db->get('materi_sma')->result_array();
    }
    public function download($id)
    {
        $query = $this->db->get_where('materi_sma', array('filename' => $id));
        return $query->row_array();
    }
}
