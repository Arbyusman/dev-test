<?php

class M_data extends CI_Model
{
    function get_data()
    {
        // return $this->db->get('data');

        $this->db->select('*');     // select all columns
        $this->db->from('category'); // FROM table
        $this->db->join('data', 'data.category_id = category.id '); // INNER JOIN
        return $this->db->get(); // GET RESULT
    }
}
