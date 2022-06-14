<?php
class M_home extends CI_Model{

	public function beranda_tentang_akfar() 
	{
		$query = rst2Array("SELECT * FROM tb_pages WHERE tb_pages.hyperlink = 'sejarah-akfar'");
		return $query;
	}

	public function beranda_event($datenow) 
	{
		$query = rst2Array("SELECT * FROM tb_event WHERE tb_event.event_end > '$datenow' ORDER BY tb_event.event_start ASC");
		return $query;
	}
	
	public function beranda_testi() 
	{
		$query = rst2Array("SELECT * FROM tb_testi ORDER BY RAND() LIMIT 4");
		return $query;
	}

	public function get_all_faq()
    {
        $query = rst2Array("SELECT * FROM tb_faq  ORDER BY tb_faq.created_at ASC");
        return $query;
    }
	
	public function get_all_ukm() 
	{
		$query = rst2Array("SELECT * FROM tb_pages where tb_pages.type = 'ukm' ORDER BY tb_pages.id");
		return $query;
	}

	 public function get_all_stakeholder()
    {
        $query = rst2Array("SELECT * FROM tb_stakeholder where tb_stakeholder.`status` is NULL ORDER BY tb_stakeholder.created_at");
        return $query;
    }

	public function get_all_akademik() 
	{
		$query = rst2Array("SELECT * FROM tb_pages where tb_pages.type = 'akademik' ORDER BY tb_pages.id");
		return $query;
	}

	public function get_selected_dosen($nidn)
    {
        $query = rst2Array("SELECT * FROM tb_dosen where tb_dosen.nidn  = '$nidn' ORDER BY tb_dosen.nama ASC");
        return $query;
    }

    public function get_selected_pendidikan_dosen($nidn)
    {
        $query = rst2Array("SELECT * FROM tb_pendidikan WHERE tb_pendidikan.rel_nidn = '$nidn' ORDER BY tb_pendidikan.mulai ASC");
        return $query;
    }

	public function get_all_banner() 
	{
		$query = rst2Array("SELECT
			tb_banner.id,
			tb_banner.title,
			tb_banner.content,
			tb_banner.picture,
			CONCAT( tb_news.id ,'/', tb_news.hyperlink ) AS hyperlink 
			FROM
			tb_banner
			LEFT JOIN tb_news ON tb_banner.hyperlink = tb_news.id
			ORDER BY RAND()");
		return $query;
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

	public function get_all_fasilitas() 
	{
		$query = rst2Array("SELECT * FROM tb_pages where tb_pages.type = 'facility' ORDER BY tb_pages.id");
		return $query;
	}

	public function get_selected_about($code) 
	{
		$query = rst2Array("SELECT * FROM tb_pages WHERE tb_pages.code = '$code' ");
		return $query;
	}	
	
	public function get_all_dosen() 
	{
		$query = rst2Array("SELECT * FROM tb_dosen ORDER BY tb_dosen.nidn ASC ");
		return $query;
	}	

	public function get_list_author($datenow) 
	{
		$query = rst2Array("SELECT *, count(author) as total  FROM tb_event WHERE event_end > '$datenow' GROUP BY tb_event.author");
		return $query;
	}

	public function get_event_by_author($author,$datenow) 
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

}
