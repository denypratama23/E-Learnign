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

    //------------------upload video sd------------------//
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

    //------------------------upload video smp----------------//
    public function upload_smp()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upload_smp');
        $this->load->view('temp_admin/smp');
        $this->load->view('template/footer');
    }

    public function videosmp()
    {
        $this->load->model('videos_model_smp');
        $data = array(
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'code' => htmlspecialchars($this->input->post('code', true))

        );
        $this->videos_model_smp->insert($data);
        redirect('admin/upload_smp');
    }

    public function upload_smp1()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upload_smp');
        $this->load->view('temp_admin/smp1');
        $this->load->view('template/footer');
    }

    public function videosmp1()
    {
        $this->load->model('videos_model_smp1');
        $data = array(
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'code' => htmlspecialchars($this->input->post('code', true))

        );
        $this->videos_model_smp1->insert($data);
        redirect('admin/upload_smp1');
    }


    public function upload_smp2()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upload_smp');
        $this->load->view('temp_admin/smp2');
        $this->load->view('template/footer');
    }

    public function videosmp2()
    {
        $this->load->model('videos_model_smp2');
        $data = array(
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'code' => htmlspecialchars($this->input->post('code', true))

        );
        $this->videos_model_smp2->insert($data);
        redirect('admin/upload_smp2');
    }



    //---------------------upload video sma--------------------//

    public function upload_sma()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upload_sma');
        $this->load->view('temp_admin/sma');
        $this->load->view('template/footer');
    }

    public function videosma()
    {
        $this->load->model('videos_model_sma');
        $data = array(
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'code' => htmlspecialchars($this->input->post('code', true))

        );
        $this->videos_model_sma->insert($data);
        redirect('admin/upload_sma');
    }

    public function upload_sma1()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upload_sma');
        $this->load->view('temp_admin/sma1');
        $this->load->view('template/footer');
    }

    public function videosma1()
    {
        $this->load->model('videos_model_sma1');
        $data = array(
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'code' => htmlspecialchars($this->input->post('code', true))

        );
        $this->videos_model_sma1->insert($data);
        redirect('admin/upload_sma1');
    }

    public function upload_sma2()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upload_sma');
        $this->load->view('temp_admin/sma2');
        $this->load->view('template/footer');
    }

    public function videosma2()
    {
        $this->load->model('videos_model_sma2');
        $data = array(
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'code' => htmlspecialchars($this->input->post('code', true))

        );
        $this->videos_model_sma2->insert($data);
        redirect('admin/upload_sma2');
    }


    //---------------------------------------------------------------------//
    //---------------------------upload materi----------------------------//
    //--------------------------------------------------------------------//

    //-------------------------materi sd---------------------------------//

    public function upmateri()
    {

        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upmateri');
        $this->load->view('temp_admin/mat_sd', array('error' => ' '));
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

            $this->load->view('temp_admin/mat_sd', $error);
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


    public function upmateri_sd1()
    {
        $this->load->model('materi_model_sd1');
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upmateri');
        $this->load->view('temp_admin/mat_sd1', array('error' => ' '));
        $this->load->view('template/footer');
    }
    public function materi_sd1()
    {
        $this->load->model('materi_model_sd1');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 0;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('temp_admin/mat_sd1', $error);
        } else {
            $upload_data =  $this->upload->data();
            $data = array(
                'filename' => $upload_data['file_name'],
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'mapel' => htmlspecialchars($this->input->post('mapel', true))
            );
            $this->materi_model_sd1->insert($data);
            redirect('admin/upmateri_sd1');
        }
    }

    public function upmateri_sd2()
    {
        $this->load->model('materi_model_sd2');
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upmateri');
        $this->load->view('temp_admin/mat_sd2', array('error' => ' '));
        $this->load->view('template/footer');
    }
    public function materi_sd2()
    {
        $this->load->model('materi_model_sd2');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 0;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('temp_admin/mat_sd2', $error);
        } else {
            $upload_data =  $this->upload->data();
            $data = array(
                'filename' => $upload_data['file_name'],
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'mapel' => htmlspecialchars($this->input->post('mapel', true))
            );
            $this->materi_model_sd2->insert($data);
            redirect('admin/upmateri_sd1');
        }
    }

    //------------------------materi smp----------------------------//



    public function upmateri_smp()
    {
        $this->load->model('materi_model_smp');
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upmateri_smp');
        $this->load->view('temp_admin/mat_smp', array('error' => ' '));
        $this->load->view('template/footer');
    }
    public function materi_smp()
    {
        $this->load->model('materi_model_smp');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 0;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('temp_admin/mat_smp', $error);
        } else {
            $upload_data =  $this->upload->data();
            $data = array(
                'filename' => $upload_data['file_name'],
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'mapel' => htmlspecialchars($this->input->post('mapel', true))
            );
            $this->materi_model_smp->insert($data);
            redirect('admin/upmateri_smp');
        }
    }

    public function upmateri_smp1()
    {
        $this->load->model('materi_model_smp1');
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upmateri_smp');
        $this->load->view('temp_admin/mat_smp1', array('error' => ' '));
        $this->load->view('template/footer');
    }
    public function materi_smp1()
    {
        $this->load->model('materi_model_smp1');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 0;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('temp_admin/mat_smp1', $error);
        } else {
            $upload_data =  $this->upload->data();
            $data = array(
                'filename' => $upload_data['file_name'],
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'mapel' => htmlspecialchars($this->input->post('mapel', true))
            );
            $this->materi_model_smp1->insert($data);
            redirect('admin/upmateri_smp1');
        }
    }

    public function upmateri_smp2()
    {
        $this->load->model('materi_model_smp2');
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upmateri_smp');
        $this->load->view('temp_admin/mat_smp2', array('error' => ' '));
        $this->load->view('template/footer');
    }
    public function materi_smp2()
    {
        $this->load->model('materi_model_smp2');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 0;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('temp_admin/mat_smp2', $error);
        } else {
            $upload_data =  $this->upload->data();
            $data = array(
                'filename' => $upload_data['file_name'],
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'mapel' => htmlspecialchars($this->input->post('mapel', true))
            );
            $this->materi_model_smp2->insert($data);
            redirect('admin/upmateri_smp2');
        }
    }



    //----------------------materi sma-------------------------------------//
    public function upmateri_sma()
    {
        $this->load->model('materi_model_sma');
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upmateri_sma');
        $this->load->view('temp_admin/mat_sma', array('error' => ' '));
        $this->load->view('template/footer');
    }
    public function materi_sma()
    {
        $this->load->model('materi_model_sma');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 0;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('temp_admin/mat_sma', $error);
        } else {
            $upload_data =  $this->upload->data();
            $data = array(
                'filename' => $upload_data['file_name'],
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'mapel' => htmlspecialchars($this->input->post('mapel', true))
            );
            $this->materi_model_sma->insert($data);
            redirect('admin/upmateri_sma');
        }
    }

    public function upmateri_sma1()
    {
        $this->load->model('materi_model_sma1');
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upmateri_sma');
        $this->load->view('temp_admin/mat_sma1', array('error' => ' '));
        $this->load->view('template/footer');
    }
    public function materi_sma1()
    {
        $this->load->model('materi_model_sma1');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 0;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('temp_admin/mat_sma1', $error);
        } else {
            $upload_data =  $this->upload->data();
            $data = array(
                'filename' => $upload_data['file_name'],
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'mapel' => htmlspecialchars($this->input->post('mapel', true))
            );
            $this->materi_model_sma1->insert($data);
            redirect('admin/upmateri_sma1');
        }
    }

    public function upmateri_sma2()
    {
        $this->load->model('materi_model_sma2');
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('admin/upmateri_sma');
        $this->load->view('temp_admin/mat_sma2', array('error' => ' '));
        $this->load->view('template/footer');
    }
    public function materi_sma2()
    {
        $this->load->model('materi_model_sma2');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 0;


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('filename')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('temp_admin/mat_sma2', $error);
        } else {
            $upload_data =  $this->upload->data();
            $data = array(
                'filename' => $upload_data['file_name'],
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'mapel' => htmlspecialchars($this->input->post('mapel', true))
            );
            $this->materi_model_sma2->insert($data);
            redirect('admin/upmateri_sma2');
        }
    }

















    //----------------------------------------------------//


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
