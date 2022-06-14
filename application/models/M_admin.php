<?php
class M_admin extends CI_Model
{

    public function get_rand_id()
    {
        $seed = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ'
            . '0123456789'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $rand = '';
        foreach (array_rand($seed, 6) as $k) {
            $rand .= $seed[$k];
        }
        return $rand;
    }

    public function get_all_news()
    {
        $query = rst2Array("SELECT * FROM tb_news ORDER BY tb_news.posted DESC");
        return $query;
    }

    public function get_all_about()
    {
        $query = rst2Array("SELECT * FROM tb_pages where tb_pages.type = 'about' ORDER BY tb_pages.id");
        return $query;
    }

    public function get_all_dosen()
    {
        $query = rst2Array("SELECT * FROM tb_dosen  ORDER BY tb_dosen.nama ASC");
        return $query;
    }

    public function get_selected_dosen($nidn)
    {
        $query = rst2Array("SELECT * FROM tb_dosen where tb_dosen.nidn  = '$nidn' ORDER BY tb_dosen.nama ASC");
        return $query;
    }

    public function get_pendidikan_dosen($nidn)
    {
        $query = rst2Array("SELECT * FROM tb_pendidikan where tb_pendidikan.rel_nidn  = '$nidn' ORDER BY tb_pendidikan.selesai ASC");
        return $query;
    }

    public function get_riset_dosen($nidn)
    {
        $query = rst2Array("SELECT * FROM tb_detil_dosen where tb_detil_dosen.rel_nidn = '$nidn' and tb_detil_dosen.jenis = 'riset' ORDER BY tb_detil_dosen.tahun ASC");
        return $query;
    }

    public function get_publikasi_dosen($nidn)
    {
        $query = rst2Array("SELECT * FROM tb_detil_dosen where tb_detil_dosen.rel_nidn = '$nidn' and tb_detil_dosen.jenis = 'publikasi' ORDER BY tb_detil_dosen.tahun ASC");
        return $query;
    }

    public function get_pengabdian_dosen($nidn)
    {
        $query = rst2Array("SELECT * FROM tb_detil_dosen where tb_detil_dosen.rel_nidn = '$nidn' and tb_detil_dosen.jenis = 'pengabdian' ORDER BY tb_detil_dosen.tahun ASC");
        return $query;
    }

    public function get_all_aakademik()
    {
        $query = rst2Array("SELECT * FROM tb_pages where tb_pages.type = 'akademik' ORDER BY tb_pages.id");
        return $query;
    }

    public function get_all_fasilitas()
    {
        $query = rst2Array("SELECT * FROM tb_pages where tb_pages.type = 'facility' ORDER BY tb_pages.id");
        return $query;
    }

    public function get_all_ukm()
    {
        $query = rst2Array("SELECT * FROM tb_pages where tb_pages.type = 'ukm' ORDER BY tb_pages.id");
        return $query;
    }

    public function get_all_faq()
    {
        $query = rst2Array("SELECT * FROM tb_faq where tb_faq.status is NULL ORDER BY tb_faq.created_at");
        return $query;
    }

    public function get_all_banner()
    {
        $query = rst2Array("SELECT * FROM tb_banner where tb_banner.`status` is NULL ORDER BY tb_banner.created_at");
        return $query;
    }

    public function get_all_stakeholder()
    {
        $query = rst2Array("SELECT * FROM tb_stakeholder where tb_stakeholder.`status` is NULL ORDER BY tb_stakeholder.created_at");
        return $query;
    }

    public function get_all_blog()
    {
        $query = rst2Array("SELECT * FROM tb_news ORDER BY tb_news.posted DESC");
        return $query;
    }

    public function get_all_event()
    {
        $query = rst2Array("SELECT * FROM tb_event ORDER BY tb_event.event_end DESC");
        return $query;
    }

    public function get_list_author($datenow)
    {
        $query = rst2Array("SELECT *, count(author) as total  FROM tb_event WHERE event_end > '$datenow' GROUP BY tb_event.author");
        return $query;
    }

    public function get_event_by_author($author, $datenow)
    {
        $query = rst2Array("SELECT * FROM tb_event WHERE event_end > '$datenow' and tb_event.author = '$author' ORDER BY tb_event.event_start ASC");
        return $query;
    }

    public function get_selected_event($code)
    {
        $query = rst2Array("SELECT * FROM tb_event where tb_event.code = '$code'");
        return $query;
    }

    public function get_selected_news($code)
    {
        $query = rst2Array("SELECT * FROM tb_news where tb_news.id = '$code'");
        return $query;
    }

    public function get_other_news($code)
    {
        $query = rst2Array("SELECT * FROM tb_news WHERE tb_news.id != '$code' ORDER BY tb_news.posted DESC");
        return $query;
    }

    public function get_tags_list()
    {
        $query = rst2Array("SELECT
     tags,
     count( 2 ) AS total
     FROM
     (
     SELECT
     id,
     substring_index( substring_index( tb_news.tags, ',', n ), ',', - 1 ) AS tags
     FROM
     tb_news
     JOIN numbers ON char_length( tb_news.tags ) - char_length(
     REPLACE ( tb_news.tags, ',', '' )) >= n - 1
     ) tags
     GROUP BY
     1
     ORDER BY
     total DESC
     limit 5");
        return $query;
    }

    public function about_create()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nmFile1    = $_FILES['foto1']['name'];
        $tmpFile1   = $_FILES['foto1']['tmp_name'];
        $judul      = $this->input->post('title');
        $lowerjudul = strtolower($judul);
        $link       = $str       = preg_replace('/[^a-z0-9 ]/i', '', $lowerjudul);
        $hyperlink  = str_replace(' ', '-', $link);
        $type       = "about";
        $explode    = explode(".", $nmFile1);
        $ekstensi   = $explode[1];
        //dump($nmFile);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        $code = $this->get_rand_id();
        $data = array(
            'code'       => $code,
            'title'      => $this->input->post('title'),
            'content'    => $this->input->post('description'),
            'picture'    => $code . "-" . $hyperlink . "." . $ekstensi,
            'type'       => $type,
            'hyperlink'  => $hyperlink,
            'created_at' => date("Y-m-d H-i-s"),
            'update_at'  => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->insert('tb_pages', $data);
        move_uploaded_file($tmpFile1, 'uploads/' . $code . "-" . $hyperlink . "." . $ekstensi);
    }

    public function about_edit($code)
    {
        date_default_timezone_set('Asia/Jakarta');
        $nmFile1    = $_FILES['foto1']['name'];
        $tmpFile1   = $_FILES['foto1']['tmp_name'];
        $judul      = $this->input->post('title');
        $lowerjudul = strtolower($judul);
        $link       = $str       = preg_replace('/[^a-z0-9 ]/i', '', $lowerjudul);
        $hyperlink  = str_replace(' ', '-', $link);
        $explode    = explode(".", $nmFile1);
        $ekstensi   = end($explode);
        // dump($nmFile);
        // dump($get);
        //$tmpFile = "file_".time();
        if (empty($nmFile1)) {
            $data = array(
                'title'     => $this->input->post('title'),
                'content'   => $this->input->post('description'),
                'hyperlink' => $hyperlink,
                'update_at' => date("Y-m-d H-i-s"),
            );
            // dump($data);
            $res_insert = $this->db->update('tb_pages', $data, array('code' => $code));

        } else {
            $data = array(
                'title'     => $this->input->post('title'),
                'content'   => $this->input->post('description'),
                'picture'   => $code . "-" . $hyperlink . "." . $ekstensi,
                'hyperlink' => $hyperlink,
                'update_at' => date("Y-m-d H-i-s"),
            );
            // dump($data);
            $res_insert = $this->db->update('tb_pages', $data, array('code' => $code));
            move_uploaded_file($tmpFile1, 'uploads/' . $code . "-" . $hyperlink . "." . $ekstensi);
        }

    }

    public function akademik_create()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nmFile1    = $_FILES['foto1']['name'];
        $tmpFile1   = $_FILES['foto1']['tmp_name'];
        $judul      = $this->input->post('title');
        $lowerjudul = strtolower($judul);
        $link       = $str       = preg_replace('/[^a-z0-9 ]/i', '', $lowerjudul);
        $hyperlink  = str_replace(' ', '-', $link);
        $type       = "akademik";
        $explode    = explode(".", $nmFile1);
        $ekstensi   = $explode[1];
        //dump($nmFile);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        $code = $this->get_rand_id();
        $data = array(
            'code'       => $code,
            'title'      => $this->input->post('title'),
            'content'    => $this->input->post('description'),
            'picture'    => $code . "-" . $hyperlink . "." . $ekstensi,
            'type'       => $type,
            'hyperlink'  => $hyperlink,
            'created_at' => date("Y-m-d H-i-s"),
            'update_at'  => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->insert('tb_pages', $data);
        move_uploaded_file($tmpFile1, 'uploads/' . $code . "-" . $hyperlink . "." . $ekstensi);
    }

    public function fasilitas_create()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nmFile1    = $_FILES['foto1']['name'];
        $tmpFile1   = $_FILES['foto1']['tmp_name'];
        $judul      = $this->input->post('title');
        $lowerjudul = strtolower($judul);
        $link       = $str       = preg_replace('/[^a-z0-9 ]/i', '', $lowerjudul);
        $hyperlink  = str_replace(' ', '-', $link);
        $type       = "facility";
        $explode    = explode(".", $nmFile1);
        $ekstensi   = $explode[1];
        //dump($nmFile);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        $code = $this->get_rand_id();
        $data = array(
            'code'       => $code,
            'title'      => $this->input->post('title'),
            'content'    => $this->input->post('description'),
            'picture'    => $code . "-" . $hyperlink . "." . $ekstensi,
            'type'       => $type,
            'hyperlink'  => $hyperlink,
            'created_at' => date("Y-m-d H-i-s"),
            'update_at'  => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->insert('tb_pages', $data);
        move_uploaded_file($tmpFile1, 'uploads/' . $code . "-" . $hyperlink . "." . $ekstensi);
    }

    public function ukm_create()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nmFile1    = $_FILES['foto1']['name'];
        $tmpFile1   = $_FILES['foto1']['tmp_name'];
        $judul      = $this->input->post('title');
        $lowerjudul = strtolower($judul);
        $link       = $str       = preg_replace('/[^a-z0-9 ]/i', '', $lowerjudul);
        $hyperlink  = str_replace(' ', '-', $link);
        $type       = "ukm";
        $explode    = explode(".", $nmFile1);
        $ekstensi   = $explode[1];
        //dump($nmFile);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        $code = $this->get_rand_id();
        $data = array(
            'code'       => $code,
            'title'      => $this->input->post('title'),
            'content'    => $this->input->post('description'),
            'picture'    => $code . "-" . $hyperlink . "." . $ekstensi,
            'type'       => $type,
            'hyperlink'  => $hyperlink,
            'created_at' => date("Y-m-d H-i-s"),
            'update_at'  => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->insert('tb_pages', $data);
        move_uploaded_file($tmpFile1, 'uploads/' . $code . "-" . $hyperlink . "." . $ekstensi);
    }

    public function blog_create()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nmFile1    = $_FILES['foto1']['name'];
        $tmpFile1   = $_FILES['foto1']['tmp_name'];
        $judul      = $this->input->post('title');
        $lowerjudul = strtolower($judul);
        $link       = $str       = preg_replace('/[^a-z0-9 ]/i', '', $lowerjudul);
        $hyperlink  = str_replace(' ', '-', $link);
        $author     = "redaksi";
        $explode    = explode(".", $nmFile1);
        $ekstensi   = $explode[1];
        //dump($nmFile);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        $code   = $this->get_rand_id();
        $posted = $this->input->post('posted');
        if (empty($posted)) {
            $data = array(
                'id'         => $code,
                'title'      => $this->input->post('title'),
                'content'    => $this->input->post('description'),
                'tags'       => $this->input->post('tags'),
                'type'       => $this->input->post('type'),
                'picture'    => $code . "-" . $hyperlink . "." . $ekstensi,
                'author'     => $author,
                'hyperlink'  => $hyperlink,
                'posted'     => date("Y-m-d"),
                'created_at' => date("Y-m-d H-i-s"),
                'updated_at' => date("Y-m-d H-i-s"),
            );
            // dump($data);
            $res_insert = $this->db->insert('tb_news', $data);
            move_uploaded_file($tmpFile1, 'uploads/' . $code . "-" . $hyperlink . "." . $ekstensi);

        } else {
            $data = array(
                'id'         => $code,
                'title'      => $this->input->post('title'),
                'content'    => $this->input->post('description'),
                'tags'       => $this->input->post('tags'),
                'type'       => $this->input->post('type'),
                'picture'    => $code . "-" . $hyperlink . "." . $ekstensi,
                'author'     => $author,
                'hyperlink'  => $hyperlink,
                'posted'     => $posted,
                'created_at' => date("Y-m-d H-i-s"),
                'updated_at' => date("Y-m-d H-i-s"),
            );
            // dump($data);
            $res_insert = $this->db->insert('tb_news', $data);
            move_uploaded_file($tmpFile1, 'uploads/' . $code . "-" . $hyperlink . "." . $ekstensi);
        }
    }

    public function blog_edit($code)
    {
        date_default_timezone_set('Asia/Jakarta');
        $nmFile1    = $_FILES['foto1']['name'];
        $tmpFile1   = $_FILES['foto1']['tmp_name'];
        $judul      = $this->input->post('title');
        $lowerjudul = strtolower($judul);
        $link       = $str       = preg_replace('/[^a-z0-9 ]/i', '', $lowerjudul);
        $hyperlink  = str_replace(' ', '-', $link);
        $author     = "redaksi";
        $explode    = explode(".", $nmFile1);
        $ekstensi   = $explode[1];
        //dump($nmFile);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        // $code = $this->get_rand_id();
        $posted = $this->input->post('posted');
        if (empty($nmFile1)) {
            $data = array(
                'title'      => $this->input->post('title'),
                'content'    => $this->input->post('description'),
                'tags'       => $this->input->post('tags'),
                'type'       => $this->input->post('type'),
                'author'     => $author,
                'hyperlink'  => $hyperlink,
                'posted'     => $posted,
                'updated_at' => date("Y-m-d H-i-s"),
            );
            // dump($data);
            $res_insert = $this->db->update('tb_news', $data, array('id' => $code));

        } else {
            $data = array(
                'title'      => $this->input->post('title'),
                'content'    => $this->input->post('description'),
                'tags'       => $this->input->post('tags'),
                'type'       => $this->input->post('type'),
                'picture'    => $code . "-" . $hyperlink . "." . $ekstensi,
                'author'     => $author,
                'hyperlink'  => $hyperlink,
                'posted'     => $posted,
                'updated_at' => date("Y-m-d H-i-s"),
            );
            // dump($data);
            $res_insert = $this->db->update('tb_news', $data, array('id' => $code));
            move_uploaded_file($tmpFile1, 'uploads/' . $code . "-" . $hyperlink . "." . $ekstensi);
        }
    }

    public function agenda_create($author)
    {
        date_default_timezone_set('Asia/Jakarta');
        $nmFile1    = $_FILES['foto1']['name'];
        $tmpFile1   = $_FILES['foto1']['tmp_name'];
        $judul      = $this->input->post('title');
        $lowerjudul = strtolower($judul);
        $link       = $str       = preg_replace('/[^a-z0-9 ]/i', '', $lowerjudul);
        $hyperlink  = str_replace(' ', '-', $link);
        $explode    = explode(".", $nmFile1);
        $ekstensi   = $explode[1];
        //dump($nmFile);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        $code = $this->get_rand_id();
        $data = array(
            'code'        => $code,
            'title'       => $this->input->post('title'),
            'content'     => $this->input->post('description'),
            'picture'     => $code . "-" . $hyperlink . "." . $ekstensi,
            'author'      => $author,
            'hyperlink'   => $hyperlink,
            'event_start' => $this->input->post('event_start'),
            'event_end'   => $this->input->post('event_end'),
            'created_at'  => date("Y-m-d H-i-s"),
            'update_at'   => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->insert('tb_event', $data);
        move_uploaded_file($tmpFile1, 'uploads/' . $code . "-" . $hyperlink . "." . $ekstensi);
    }

    public function agenda_edit($code)
    {
        date_default_timezone_set('Asia/Jakarta');
        $nmFile1    = $_FILES['foto1']['name'];
        $tmpFile1   = $_FILES['foto1']['tmp_name'];
        $judul      = $this->input->post('title');
        $lowerjudul = strtolower($judul);
        $link       = $str       = preg_replace('/[^a-z0-9 ]/i', '', $lowerjudul);
        $hyperlink  = str_replace(' ', '-', $link);
        $explode    = explode(".", $nmFile1);
        $ekstensi   = $explode[1];
        //dump($nmFile);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        // $code = $this->get_rand_id();
        // $posted = $this->input->post('posted');
        if (empty($nmFile1)) {
            $data = array(
                'title'       => $this->input->post('title'),
                'content'     => $this->input->post('description'),
                'picture'     => $code . "-" . $hyperlink . "." . $ekstensi,
                'hyperlink'   => $hyperlink,
                'event_start' => $this->input->post('event_start'),
                'event_end'   => $this->input->post('event_end'),
                'created_at'  => date("Y-m-d H-i-s"),
                'update_at'   => date("Y-m-d H-i-s"),
            );
            // dump($data);
            $res_insert = $this->db->update('tb_event', $data, array('code' => $code));

        } else {
            $data = array(
                'title'       => $this->input->post('title'),
                'content'     => $this->input->post('description'),
                'picture'     => $code . "-" . $hyperlink . "." . $ekstensi,
                'hyperlink'   => $hyperlink,
                'event_start' => $this->input->post('event_start'),
                'event_end'   => $this->input->post('event_end'),
                'created_at'  => date("Y-m-d H-i-s"),
                'update_at'   => date("Y-m-d H-i-s"));
            // dump($data);
            $res_insert = $this->db->update('tb_event', $data, array('code' => $code));
            move_uploaded_file($tmpFile1, 'uploads/' . $code . "-" . $hyperlink . "." . $ekstensi);
        }
    }

    public function stakeholder_create()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nmFile1    = $_FILES['foto1']['name'];
        $tmpFile1   = $_FILES['foto1']['tmp_name'];
        // $judul      = $this->input->post('title');
        // $lowerjudul = strtolower($judul);
        // $link       = $str       = preg_replace('/[^a-z0-9 ]/i', '', $lowerjudul);
        // $hyperlink = str_replace(' ', '-', $link);
        // $type = "about";
        $explode  = explode(".", $nmFile1);
        $ekstensi = $explode[1];
        //dump($nmFile);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        $code = $this->get_rand_id();
        $data = array(
            'id'         => $code,
            'title'      => $this->input->post('title'),            
            'picture'    => $code . "." . $ekstensi,           
            'created_at' => date("Y-m-d H-i-s"),
            'updated_at' => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->insert('tb_stakeholder', $data);
        move_uploaded_file($tmpFile1, 'uploads/' . $code . "." . $ekstensi);
    }

    public function banner_create()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nmFile1    = $_FILES['foto1']['name'];
        $tmpFile1   = $_FILES['foto1']['tmp_name'];
        $judul      = $this->input->post('title');
        $lowerjudul = strtolower($judul);
        $link       = $str       = preg_replace('/[^a-z0-9 ]/i', '', $lowerjudul);
        // $hyperlink = str_replace(' ', '-', $link);
        // $type = "about";
        $explode  = explode(".", $nmFile1);
        $ekstensi = $explode[1];
        //dump($nmFile);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        $code = $this->get_rand_id();
        $data = array(
            'id'         => $code,
            'title'      => $this->input->post('title'),
            'content'    => $this->input->post('description'),
            'picture'    => $code . "." . $ekstensi,
            'hyperlink'  => $this->input->post('hyperlink'),
            'created_at' => date("Y-m-d H-i-s"),
            'updated_at' => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->insert('tb_banner', $data);
        move_uploaded_file($tmpFile1, 'uploads/' . $code . "." . $ekstensi);
    }

    public function faq_create()
    {
        date_default_timezone_set('Asia/Jakarta');        
        $code = $this->get_rand_id();
        $data = array(
            'id'         => $code,
            'heading'      => $this->input->post('heading'),
            'content'    => $this->input->post('content'),           
            'created_at' => date("Y-m-d H-i-s"),
            'updated_at' => date("Y-m-d H-i-s")
        );
        // dump($data);
        $res_insert = $this->db->insert('tb_faq', $data);
     
    }

    public function get_selected_faq($id)
    {
        $query = rst2Array("SELECT * FROM tb_faq where tb_faq.id  = '$id' ");
        return $query;
    }

    public function faq_edit($id)
    {
            date_default_timezone_set('Asia/Jakarta');
            $data = array(
            'heading'     => $this->input->post('heading'),
            'content'    => $this->input->post('content'),                 
            'updated_at' => date("Y-m-d H-i-s")
            );
            // dump($data);
            $res_insert = $this->db->update('tb_faq', $data, array('id' => $id));           
        }
    

    public function get_selected_banner($id)
    {
        $query = rst2Array("SELECT
    tb_banner.id,
    tb_banner.title,
    tb_banner.content,
    tb_banner.picture,
    tb_news.id as hyperlink,
    tb_news.title as hyperlink_title
    FROM
    tb_banner
    LEFT JOIN tb_news ON tb_banner.hyperlink = tb_news.id
    WHERE tb_banner.id = '$id'
    ");
        return $query;
    }

    public function banner_edit($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $nmFile1    = $_FILES['foto1']['name'];
        $tmpFile1   = $_FILES['foto1']['tmp_name'];
        $judul      = $this->input->post('title');
        $lowerjudul = strtolower($judul);
        $link       = $str       = preg_replace('/[^a-z0-9 ]/i', '', $lowerjudul);
        // $hyperlink = str_replace(' ', '-', $link);
        $explode  = explode(".", $nmFile1);
        $ekstensi = end($explode);
        // dump($nmFile);
        // dump($get);
        //$tmpFile = "file_".time();
        if (empty($nmFile1)) {
            $data = array(
                'title'      => $this->input->post('title'),
                'content'    => $this->input->post('description'),
                'hyperlink'  => $this->input->post('hyperlink'),
                'updated_at' => date("Y-m-d H-i-s"),
            );
            // dump($data);
            $res_insert = $this->db->update('tb_banner', $data, array('id' => $id));

        } else {
            $data = array(
                'title'      => $this->input->post('title'),
                'content'    => $this->input->post('description'),
                'picture'    => $code . "." . $ekstensi,
                'hyperlink'  => $this->input->post('hyperlink'),
                'updated_at' => date("Y-m-d H-i-s"),
            );
            // dump($data);
            $res_insert = $this->db->update('tb_banner', $data, array('id' => $id));
            move_uploaded_file($tmpFile1, 'uploads/' . $code . "." . $ekstensi);
        }
    }

    public function dosen_add()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nmFile1   = $_FILES['foto1']['name'];
        $tmpFile1  = $_FILES['foto1']['tmp_name'];
        $nama      = $this->input->post('nama');
        $lowernama = strtolower($nama);
        $link      = $str      = preg_replace('/[^a-z0-9 ]/i', '', $lowernama);
        $hyperlink = str_replace(' ', '-', $link);
        $explode   = explode(".", $nmFile1);
        $ekstensi  = $explode[1];
        $code      = $this->input->post('nidn');
        // dump($ekstensi);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        // $code = $this->get_rand_id();
        $data = array(
            'nidn'           => $this->input->post('nidn'),
            'nama'           => $this->input->post('nama'),
            'picture'        => $code . "-" . $hyperlink . "." . $ekstensi,
            'gelar_depan'    => $this->input->post('gelar_depan'),
            'gelar_belakang' => $this->input->post('gelar_belakang'),
            'hyperlink'      => $hyperlink,
            'created_at'     => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->insert('tb_dosen', $data);
        move_uploaded_file($tmpFile1, 'uploads/' . $code . "-" . $hyperlink . "." . $ekstensi);
    }

    public function riwayat_pendidikan_add()
    {
        date_default_timezone_set('Asia/Jakarta');
        // $nmFile1 = $_FILES['foto1']['name'];
        // $tmpFile1 = $_FILES['foto1']['tmp_name'];
        // $nama = $this->input->post('nama');
        // $lowernama = strtolower($nama);
        // $link = $str = preg_replace( '/[^a-z0-9 ]/i', '', $lowernama);
        // $hyperlink = str_replace(' ', '-', $link);
        // $explode = explode(".", $nmFile1);
        // $ekstensi = $explode[1];
        // $code =  $this->input->post('nidn');
        // dump($ekstensi);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        $code = $this->get_rand_id();
        $data = array(
            'id'         => $code,
            'rel_nidn'   => $this->input->post('rel_nidn'),
            'jenjang'    => $this->input->post('jenjang'),
            'institusi'  => $this->input->post('institusi'),
            // 'picture' => $code."-".$hyperlink.".".$ekstensi,
            'mulai'      => $this->input->post('mulai'),
            'selesai'    => $this->input->post('selesai'),
            'created_at' => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->insert('tb_pendidikan', $data);
        // move_uploaded_file($tmpFile1, 'uploads/'.$code."-".$hyperlink.".".$ekstensi);
    }

    public function riwayat_pendidikan_edit($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        // $nmFile1 = $_FILES['foto1']['name'];
        // $tmpFile1 = $_FILES['foto1']['tmp_name'];
        // $nama = $this->input->post('nama');
        // $lowernama = strtolower($nama);
        // $link = $str = preg_replace( '/[^a-z0-9 ]/i', '', $lowernama);
        // $hyperlink = str_replace(' ', '-', $link);
        // $explode = explode(".", $nmFile1);
        // $ekstensi = $explode[1];
        // $code =  $this->input->post('nidn');
        // dump($ekstensi);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        // $code = $this->get_rand_id();
        $data = array(
            'jenjang'   => $this->input->post('jenjang'),
            'institusi' => $this->input->post('institusi'),
            // 'picture' => $code."-".$hyperlink.".".$ekstensi,
            'mulai'     => $this->input->post('mulai'),
            'selesai'   => $this->input->post('selesai'),
            'edited_at' => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->update('tb_pendidikan', $data, array('id' => $id));
        // move_uploaded_file($tmpFile1, 'uploads/'.$code."-".$hyperlink.".".$ekstensi);
    }

    public function riset_add()
    {
        date_default_timezone_set('Asia/Jakarta');
        // $nmFile1 = $_FILES['foto1']['name'];
        // $tmpFile1 = $_FILES['foto1']['tmp_name'];
        // $nama = $this->input->post('nama');
        // $lowernama = strtolower($nama);
        // $link = $str = preg_replace( '/[^a-z0-9 ]/i', '', $lowernama);
        // $hyperlink = str_replace(' ', '-', $link);
        // $explode = explode(".", $nmFile1);
        // $ekstensi = $explode[1];
        // $code =  $this->input->post('nidn');
        // dump($ekstensi);
        //$nmfile = "file_".time();
        //$tmpFile = "file_".time();
        $code = $this->get_rand_id();
        $data = array(
            'id'         => $code,
            'rel_nidn'   => $this->input->post('rel_nidn'),
            'jenjang'    => $this->input->post('jenjang'),
            'institusi'  => $this->input->post('institusi'),
            // 'picture' => $code."-".$hyperlink.".".$ekstensi,
            'mulai'      => $this->input->post('mulai'),
            'selesai'    => $this->input->post('selesai'),
            'created_at' => date("Y-m-d H-i-s"),
        );
        // dump($data);
        $res_insert = $this->db->insert('tb_pendidikan', $data);
        // move_uploaded_file($tmpFile1, 'uploads/'.$code."-".$hyperlink.".".$ekstensi);
    }

}
