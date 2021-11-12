<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function select_data($table, $where, $id)
    {
        return $this->db->where($where, $id)->get($table)->result();
    }

    public function select_all_data($table)
    {
        return $this->db->get($table)->result();
    }

    public function select_data_join_2($table, $table2, $key2, $table3, $key3, $where, $id)
    {
        return $this->db->join($table2, "$table.$key2=$table2.$key2", "LEFT")->join($table3, "$table.$key3=$table3.$key3", "LEFT")->where($where, $id)->get($table)->result();
    }

    public function select_row($table, $where, $id)
    {
        return $this->db->where($where, $id)->get($table)->row();
    }

    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function delete($table, $where, $id)
    {
        return $this->db->where($where, $id)->delete($table);
    }

    public function update($table, $where, $id, $data)
    {
        return $this->db->where($where, $id)->update($table, $data);
    }
}
