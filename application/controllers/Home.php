<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

    public function index()
    {
        // Link Header
        $data['all_about']     = $this->m_home->get_all_about();
        $data['all_fasilitas'] = $this->m_home->get_all_fasilitas();
        $data['all_ukm']       = $this->m_home->get_all_ukm();
        $data['all_akademik']  = $this->m_home->get_all_akademik();
        // // End Link Header
        $datenow                 = date('Y-m-d');
        $data['tentang_akfar']   = $this->m_home->beranda_tentang_akfar();
        $data['get_banner']      = $this->m_home->get_all_banner();
        $data['get_event']       = $this->m_home->beranda_event($datenow);
        $data['get_testi']       = $this->m_home->beranda_testi();
        $data['get_news']        = $this->m_home->get_all_news();
        $data['get_faq']         = $this->m_home->get_all_faq();
        $data['get_stakeholder'] = $this->m_home->get_all_stakeholder();
        // dump($data);
        $this->load->view('frontend/header.php', $data);
        $this->load->view('frontend/index.php');
        $this->load->view('frontend/footer.php');
    }

    public function about()
    {
        // Link Header
        $data['all_about']     = $this->m_home->get_all_about();
        $data['all_fasilitas'] = $this->m_home->get_all_fasilitas();
        $data['all_ukm']       = $this->m_home->get_all_ukm();
        $data['all_akademik']  = $this->m_home->get_all_akademik();
        // End Link Header
        $code        = $this->uri->segment(3);
        $data['get'] = $this->m_home->get_selected_about($code);
        // dump($data);
        $this->load->view('frontend/header.php', $data);
        $this->load->view('frontend/about.php');
        $this->load->view('frontend/footer.php');
    }

    public function events()
    {
        // Link Header
        $data['all_about']     = $this->m_home->get_all_about();
        $data['all_fasilitas'] = $this->m_home->get_all_fasilitas();
        $data['all_ukm']       = $this->m_home->get_all_ukm();
        $data['all_akademik']  = $this->m_home->get_all_akademik();
        // End Link Header
        $datenow             = date('Y-m-d');
        $data['all_events']  = $this->m_home->beranda_event($datenow);
        $data['list_author'] = $this->m_home->get_list_author($datenow);
        // dump($data);
        $this->load->view('frontend/header.php', $data);
        $this->load->view('frontend/events.php');
        $this->load->view('frontend/footer.php');
    }

    public function events_by()
    {
        // Link Header
        $data['all_about']     = $this->m_home->get_all_about();
        $data['all_fasilitas'] = $this->m_home->get_all_fasilitas();
        $data['all_ukm']       = $this->m_home->get_all_ukm();
        $data['all_akademik']  = $this->m_home->get_all_akademik();
        // End Link Header
        $author                = $this->uri->segment(3);
        $datenow               = date('Y-m-d');
        $data['author_events'] = $this->m_home->get_event_by_author($author, $datenow);
        $data['list_author']   = $this->m_home->get_list_author($datenow);
        // dump($data);
        $this->load->view('frontend/header.php', $data);
        $this->load->view('frontend/events_by_author.php');
        $this->load->view('frontend/footer.php');
    }

    public function event_detail()
    {
        // Link Header
        $data['all_about']     = $this->m_home->get_all_about();
        $data['all_fasilitas'] = $this->m_home->get_all_fasilitas();
        $data['all_ukm']       = $this->m_home->get_all_ukm();
        $data['all_akademik']  = $this->m_home->get_all_akademik();
        // End Link Header
        $code                   = $this->uri->segment(3);
        $data['event_selected'] = $this->m_home->get_selected_event($code);
        // $data['list_author'] = $this->m_home->get_list_author($datenow);
        // dump($data);
        $this->load->view('frontend/header.php', $data);
        $this->load->view('frontend/event_detail.php');
        $this->load->view('frontend/footer.php');
    }

    public function article()
    {
        // Link Header
        $data['all_about']     = $this->m_home->get_all_about();
        $data['all_fasilitas'] = $this->m_home->get_all_fasilitas();
        $data['all_ukm']       = $this->m_home->get_all_ukm();
        $data['all_akademik']  = $this->m_home->get_all_akademik();
        // End Link Header
        $datenow             = date('Y-m-d');
        $data['all_article'] = $this->m_home->get_all_news();
        $data['list_author'] = $this->m_home->get_list_author($datenow);
        // dump($data);
        $this->load->view('frontend/header.php', $data);
        $this->load->view('frontend/article.php');
        $this->load->view('frontend/footer.php');
    }

    public function article_detail()
    {
        // Link Header
        $data['all_about']     = $this->m_home->get_all_about();
        $data['all_fasilitas'] = $this->m_home->get_all_fasilitas();
        $data['all_ukm']       = $this->m_home->get_all_ukm();
        $data['all_akademik']  = $this->m_home->get_all_akademik();
        // End Link Header
        // $datenow = date('Y-m-d');
        $code                     = $this->uri->segment(3);
        $data['selected_article'] = $this->m_home->get_selected_news($code);
        $data['other_article']    = $this->m_home->get_other_news($code);
        $data['tags_list']        = $this->m_home->get_tags_list();
        // $data['list_author'] = $this->m_home->get_list_author($datenow);
        // dump($data);
        $this->load->view('frontend/header_share.php', $data);
        $this->load->view('frontend/article_detail.php');
        $this->load->view('frontend/footer.php');
    }

    public function fasilitas()
    {
        // Link Header
        $data['all_about']     = $this->m_home->get_all_about();
        $data['all_fasilitas'] = $this->m_home->get_all_fasilitas();
        $data['all_ukm']       = $this->m_home->get_all_ukm();
        $data['all_akademik']  = $this->m_home->get_all_akademik();
        // End Link Header
        $code        = $this->uri->segment(3);
        $data['get'] = $this->m_home->get_selected_about($code);
        // dump($data);
        $this->load->view('frontend/header.php', $data);
        $this->load->view('frontend/fasilitas.php');
        $this->load->view('frontend/footer.php');
    }

    public function ukm()
    {
        // Link Header
        $data['all_about']     = $this->m_home->get_all_about();
        $data['all_fasilitas'] = $this->m_home->get_all_fasilitas();
        $data['all_ukm']       = $this->m_home->get_all_ukm();
        $data['all_akademik']  = $this->m_home->get_all_akademik();
        // End Link Header
        $code        = $this->uri->segment(3);
        $data['get'] = $this->m_home->get_selected_about($code);
        // dump($data);
        $this->load->view('frontend/header.php', $data);
        $this->load->view('frontend/ukm.php');
        $this->load->view('frontend/footer.php');
    }

    public function akademik()
    {
        // Link Header
        $data['all_about']     = $this->m_home->get_all_about();
        $data['all_fasilitas'] = $this->m_home->get_all_fasilitas();
        $data['all_ukm']       = $this->m_home->get_all_ukm();
        $data['all_akademik']  = $this->m_home->get_all_akademik();
        // End Link Header
        $code        = $this->uri->segment(3);
        $data['get'] = $this->m_home->get_selected_about($code);
        // dump($data);
        $this->load->view('frontend/header.php', $data);
        $this->load->view('frontend/akademik.php');
        $this->load->view('frontend/footer.php');
    }

    public function dosen()
    {
        // Link Header
        $data['all_about']     = $this->m_home->get_all_about();
        $data['all_fasilitas'] = $this->m_home->get_all_fasilitas();
        $data['all_ukm']       = $this->m_home->get_all_ukm();
        $data['all_akademik']  = $this->m_home->get_all_akademik();
        // End Link Header
        $code          = $this->uri->segment(3);
        $data['dosen'] = $this->m_home->get_all_dosen();
        // dump($data);
        $this->load->view('frontend/header.php', $data);
        $this->load->view('frontend/dosen2.php');
        $this->load->view('frontend/footer.php');
    }

    public function dosen_detail()
    {
        // Link Header
        $data['all_about']     = $this->m_home->get_all_about();
        $data['all_fasilitas'] = $this->m_home->get_all_fasilitas();
        $data['all_ukm']       = $this->m_home->get_all_ukm();
        $data['all_akademik']  = $this->m_home->get_all_akademik();
        // End Link Header
        $nidn               = $this->uri->segment(3);
        $data['get']        = $this->m_home->get_selected_dosen($nidn);
        $data['pendidikan'] = $this->m_home->get_selected_pendidikan_dosen($nidn);
        // dump($data);
        $this->load->view('frontend/header.php', $data);
        $this->load->view('frontend/dosen_detail.php');
        $this->load->view('frontend/footer.php');
    }

    public function coomingsoon()
    {

        // dump($data);
        // $this->load->view('frontend/header.php', $data);
        $this->load->view('frontend/coomingsoon.php');
        // $this->load->view('frontend/footer.php');
    }
}
