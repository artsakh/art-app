<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Get_db extends CI_Model
{

    function getAll()
    {
        $query = $this->db->query('SELECT * FROM ci_test');

        return $query->result();
    }

    function insert1($data)
    {
        $this->db->insert("ci_test", $data);
    }

    function insert2($data)
    {
        $this->db->insert_batch("ci_test", $data);
    }

    function update1($data)
    {
        $this->db->update("ci_test", $data, "id = 1");
    }

    function update2($data)
    {
        $this->db->update_batch("ci_test", $data, "id");
    }

    function delete1($data)
    {
        $this->db->delete("ci_test", $data);
    }

    function empty1($table)
    {
        $this->db->empty_table($table);
    }

}