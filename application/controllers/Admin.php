<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == "") {
            redirect('login');
        }
        if ($this->session->userdata('level') !== "admin") {
            echo "<script>alert('Maaf anda tidak diperkenankan mengakses Halaman ini.');history.go(-1);</script>";
            //redirect('login');
        }
        $this->load->helper('text');
        // $this->load->library('pdf');
        $this->load->helper('tanggal');
        $this->load->model('m_admin');
    }

    public function index()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/index.php');
        $this->load->view('backend/footer.php');
    }

    public function testimoni()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $data['get'] = $this->m_admin->get_all_testimoni();

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/about/index.php');
        $this->load->view('backend/footer.php');
    }

    public function about()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $data['get'] = $this->m_admin->get_all_about();

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/about/index.php');
        $this->load->view('backend/footer.php');
    }

    public function about_create()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        if ($this->input->post('submit')) {
            $this->m_admin->about_create();
            redirect("admin/about");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/about/create.php');
        $this->load->view('backend/footer.php');
    }

    public function about_edit()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $code          = $this->uri->segment(3);
        $data['about'] = $this->db->get_where('tb_pages', array('code' => $code))->row();
        if ($this->input->post('submit')) {
            $this->m_admin->about_edit($code);
            redirect("admin/about");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/about/edit.php');
        $this->load->view('backend/footer.php');
    }

    public function about_delete()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $code = $this->uri->segment(3);
        date_default_timezone_set('Asia/Jakarta');
        $type = "deleted";
        //dump($nmFile);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        $data = array(
            'type'      => $type,
            'update_at' => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->update('tb_pages', $data, array('code' => $code));
        redirect("admin/about");
    }

    public function akademik()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $data['get'] = $this->m_admin->get_all_aakademik();

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/akademik/index.php');
        $this->load->view('backend/footer.php');
    }

    public function akademik_create()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        if ($this->input->post('submit')) {
            $this->m_admin->akademik_create();
            redirect("admin/akademik");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/akademik/create.php');
        $this->load->view('backend/footer.php');
    }

    public function akademik_edit()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $code             = $this->uri->segment(3);
        $data['akademik'] = $this->db->get_where('tb_pages', array('code' => $code))->row();
        if ($this->input->post('submit')) {
            $this->m_admin->about_edit($code);
            redirect("admin/akademik");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/akademik/edit.php');
        $this->load->view('backend/footer.php');
    }

    public function fasilitas()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $data['get'] = $this->m_admin->get_all_fasilitas();

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/fasilitas/index.php');
        $this->load->view('backend/footer.php');
    }

    public function fasilitas_create()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        if ($this->input->post('submit')) {
            $this->m_admin->fasilitas_create();
            redirect("admin/fasilitas");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/about/create.php');
        $this->load->view('backend/footer.php');
    }

    public function fasilitas_edit()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $code          = $this->uri->segment(3);
        $data['about'] = $this->db->get_where('tb_pages', array('code' => $code))->row();
        if ($this->input->post('submit')) {
            $this->m_admin->about_edit($code);
            redirect("admin/fasilitas");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/about/edit.php');
        $this->load->view('backend/footer.php');
    }

    public function fasilitas_delete()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $code = $this->uri->segment(3);
        date_default_timezone_set('Asia/Jakarta');
        $type = "deleted";
        //dump($nmFile);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        $data = array(
            'type'      => $type,
            'update_at' => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->update('tb_pages', $data, array('code' => $code));
        redirect("admin/about");
    }

    public function stakeholder()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $data['get'] = $this->m_admin->get_all_stakeholder();

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/stakeholder/index.php');
        $this->load->view('backend/footer.php');
    }

    public function stakeholder_create()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        if ($this->input->post('submit')) {
            $this->m_admin->stakeholder_create();
            redirect("admin/stakeholder");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/stakeholder/create.php');
        $this->load->view('backend/footer.php');
    }

    public function ukm()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $data['get'] = $this->m_admin->get_all_ukm();

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/ukm/index.php');

        $this->load->view('backend/footer.php');
    }

    public function ukm_create()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        if ($this->input->post('submit')) {
            $this->m_admin->ukm_create();
            redirect("admin/ukm");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/about/create.php');
        $this->load->view('backend/footer.php');
    }

    public function ukm_edit()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $code          = $this->uri->segment(3);
        $data['about'] = $this->db->get_where('tb_pages', array('code' => $code))->row();
        if ($this->input->post('submit')) {
            $this->m_admin->about_edit($code);
            redirect("admin/ukm");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/about/edit.php');
        $this->load->view('backend/footer.php');
    }

    public function ukm_delete()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $code = $this->uri->segment(3);
        date_default_timezone_set('Asia/Jakarta');
        $type = "deleted";
        //dump($nmFile);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        $data = array(
            'type'      => $type,
            'update_at' => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->update('tb_pages', $data, array('code' => $code));
        redirect("admin/about");
    }

    public function blog()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $data['get'] = $this->m_admin->get_all_blog();

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/blog/index.php');
        $this->load->view('backend/footer.php');
    }

    public function blog_create()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        if ($this->input->post('submit')) {
            $this->m_admin->blog_create();
            redirect("admin/blog");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/blog/create.php');
        $this->load->view('backend/footer.php');
    }

    public function blog_edit()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $code        = $this->uri->segment(3);
        $data['get'] = $this->db->get_where('tb_news', array('id' => $code))->row();
        if ($this->input->post('submit')) {
            $this->m_admin->blog_edit($code);
            redirect("admin/blog");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/blog/edit.php');
        $this->load->view('backend/footer.php');
    }

    public function agenda()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $data['get'] = $this->m_admin->get_all_event();

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/event/index.php');
        $this->load->view('backend/footer.php');
    }

    public function agenda_create()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $author = $this->session->userdata('level');
        if ($this->input->post('submit')) {
            $this->m_admin->agenda_create($author);
            redirect("admin/agenda");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/event/create.php');
        $this->load->view('backend/footer.php');
    }

    public function agenda_edit()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $code        = $this->uri->segment(3);
        $data['get'] = $this->db->get_where('tb_event', array('code' => $code))->row();
        if ($this->input->post('submit')) {
            $this->m_admin->agenda_edit($code);
            redirect("admin/agenda");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/event/edit.php');
        $this->load->view('backend/footer.php');
    }

    public function faq()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $data['get'] = $this->m_admin->get_all_faq();

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/faq/index.php');
        $this->load->view('backend/footer.php');
    }

    public function faq_create()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header        
        if ($this->input->post('submit')) {
            $this->m_admin->faq_create();
            redirect("admin/faq");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/faq/create.php');
        $this->load->view('backend/footer.php');
    }

    public function faq_delete()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $code = $this->uri->segment(3);
        date_default_timezone_set('Asia/Jakarta');
        $type = "deleted";
        //dump($nmFile);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        $data = array(
            'status'      => $type,
            'updated_at' => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->update('tb_faq', $data, array('id' => $code));
        redirect("admin/faq");
    }

    public function banner()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $data['get'] = $this->m_admin->get_all_banner();

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/banner/index.php');
        $this->load->view('backend/footer.php');
    }

    public function banner_create()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $data['get'] = $this->m_admin->get_all_blog();
        if ($this->input->post('submit')) {
            $this->m_admin->banner_create();
            redirect("admin/banner");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/banner/create.php');
        $this->load->view('backend/footer.php');
    }

    public function faq_edit()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $id             = $this->uri->segment(3);
        $data['faq'] = $this->m_admin->get_selected_faq($id);        
        if ($this->input->post('submit')) {
            $this->m_admin->faq_edit($id);
            redirect("admin/faq");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/faq/edit.php');
        $this->load->view('backend/footer.php');
    }

    public function banner_edit()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $id             = $this->uri->segment(3);
        $data['banner'] = $this->m_admin->get_selected_banner($id);
        $data['get']    = $this->m_admin->get_all_blog();
        if ($this->input->post('submit')) {
            $this->m_admin->banner_edit($id);
            redirect("admin/banner");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/banner/edit.php');
        $this->load->view('backend/footer.php');
    }

    public function dosen()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $data['get'] = $this->m_admin->get_all_dosen();

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/dosen/index.php');
        $this->load->view('backend/footer.php');
    }

    public function dosen_add()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        if ($this->input->post('submit')) {
            $this->m_admin->dosen_add();
            redirect("admin/dosen");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/dosen/create.php');
        $this->load->view('backend/footer.php');
    }

    public function detil_dosen()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $nidn               = $this->uri->segment(3);
        $data['nidn']       = $nidn;
        $data['get']        = $this->m_admin->get_selected_dosen($nidn);
        $data['pendidikan'] = $this->m_admin->get_pendidikan_dosen($nidn);
        $data['riset']      = $this->m_admin->get_riset_dosen($nidn);
        $data['publikasi']  = $this->m_admin->get_publikasi_dosen($nidn);
        $data['pengabdian'] = $this->m_admin->get_pengabdian_dosen($nidn);
        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/dosen/detil_dosen.php');
        $this->load->view('backend/footer.php');
    }

    public function riwayat_pendidikan_add()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $nidn        = $this->uri->segment(3);
        $data['get'] = $this->m_admin->get_selected_dosen($nidn);
        if ($this->input->post('submit')) {
            $this->m_admin->riwayat_pendidikan_add();
            redirect("admin/detil_dosen/$nidn");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/dosen/riwayat_pendidikan_add.php');
        $this->load->view('backend/footer.php');
    }

    public function riwayat_pendidikan_edit()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $nidn               = $this->uri->segment(3);
        $id                 = $this->uri->segment(4);
        $data['get']        = $this->m_admin->get_selected_dosen($nidn);
        $data['pendidikan'] = $this->db->get_where('tb_pendidikan', array('id' => $id))->row();
        if ($this->input->post('submit')) {
            $this->m_admin->riwayat_pendidikan_edit($id);
            redirect("admin/detil_dosen/$nidn");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/dosen/riwayat_pendidikan_edit.php');
        $this->load->view('backend/footer.php');
    }

    public function riset_add()
    {
        // Link Header
        $data['user'] = $this->session->userdata();
        // // End Link Header
        $nidn        = $this->uri->segment(3);
        $data['get'] = $this->m_admin->get_selected_dosen($nidn);
        if ($this->input->post('submit')) {
            $this->m_admin->riset_add();
            redirect("admin/detil_dosen/$nidn");
        }

        // dump($data);
        $this->load->view('backend/header.php', $data);
        $this->load->view('backend/dosen/riset_add.php');
        $this->load->view('backend/footer.php');
    }
}
