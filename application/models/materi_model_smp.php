<?php
defined('BASEPATH') or exit('No direct script access allowed');

class materi_model_smp extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data)
    {
        return $this->db->insert('materi_smp', $data);
    }
    public function get_data()
    {
        return $this->db->get('materi_smp')->result_array();
    }
    public function download($id)
    {
        $query = $this->db->get_where('materi_smp', array('filename' => $id));
        return $query->row_array();
    }
}
