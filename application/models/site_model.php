<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Site_model extends CI_Model
{
    function getAllTest()
    {
        $query = $this->db->get('ci_test');
        
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                //echo $row->title;
                $data[] = $row;
            }            
        
            return $data;
        }       
    }
    
    function getAllUsers()
    {
        $query = $this->db->get('users');
        
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                //echo $row->title;
                $data[] = $row;
            }            
        
            return $data;
        }       
    }
    
    function getAllRole() {
    	$query = $this->db->get('role');
    
    	if($query->num_rows() > 0) 
    	{
    		foreach ($query->result() as $row) 
    		{
    			$data[] = $row;
    		}
    		
    		return $data;
    	}
    }
}