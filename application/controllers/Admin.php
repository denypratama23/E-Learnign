<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('materi_model');
    }
    public function index()
    {

        $this->load->model('admin_mhs');
        $dataall['user'] = $this->admin_mhs->get_data();
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/index', $dataall);
        $this->load->view('template/footer');
    }
    public function upload_sd()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upload');
        $this->load->view('temp_admin/sd');
        $this->load->view('template/footer');
    }
    public function video()
    {
        $this->load->model('videos_model');
        $data = array(
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'code' => htmlspecialchars($this->input->post('code', true))

        );
        $this->videos_model->insert($data);
        redirect('admin/upload_sd');
    }

    public function upload_sd1()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upload');
        $this->load->view('temp_admin/sd1');
        $this->load->view('template/footer');
    }
    public function videosd1()
    {
        $this->load->model('videos_model_sd1');
        $data = array(
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'code' => htmlspecialchars($this->input->post('code', true))

        );
        $this->videos_model_sd1->insert($data);
        redirect('admin/upload_sd1');
    }
    public function upload_sd2()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upload');
        $this->load->view('temp_admin/sd2');
        $this->load->view('template/footer');
    }

    public function videosd2()
    {
        $this->load->model('videos_model_sd2');
        $data = array(
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'code' => htmlspecialchars($this->input->post('code', true))

        );
        $this->videos_model_sd2->insert($data);
        redirect('admin/upload_sd2');
    }
    public function upmateri()
    {

        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upmateri', array('error' => ' '));
        $this->load->view('template/footer');
    }

    public function materi()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 0;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('admin/upmateri', $error);
        } else {
            $upload_data =  $this->upload->data();
            $data = array(
                'filename' => $upload_data['file_name'],
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'mapel' => htmlspecialchars($this->input->post('mapel', true))
            );
            $this->materi_model->insert($data);
            redirect('admin/upmateri');
        }
    }



    public function upsoal()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upsoal');
        $this->load->view('template/footer');
    }
}
