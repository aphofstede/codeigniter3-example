<?php

/**
 * Class News_model
 * @property CI_DB_driver|CI_DB_sqlite3_driver $db The DB driver
 */
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }

    /**
     * @param string $title
     * @param string $text
     * @return mixed
     */
    public function set_news($title, $text)
    {
        $this->load->helper('url');

        $slug = url_title($title, 'dash', TRUE);

        $data = array(
            'title' => $title,
            'slug' => $slug,
            'text' => $text
        );

        return $this->db->insert('news', $data);
    }

}
