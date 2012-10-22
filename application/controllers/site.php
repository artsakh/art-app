<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Site extends CI_Controller
{
    /* function index() {
      $this->load->model('site_model');
      $data['records_test'] = $this->site_model->getAllTest();
      $data['records_users'] = $this->site_model->getAllUsers();
      $data['records_role'] = $this->site_model->getAllRole();
      $this->load->view('site', $data);
      } */

    /* function about()
      {
      echo 'done';
      $this->load->view('about');
      } */

    public function index()
    {
        echo "Hello, World! == Hi, Internet! <br />";
        /*$this->hello();
        $this->addStuff();*/
        $this->home();
        $this->memorytime();
    }
    
    public function memorytime()
    {        
        $this->load->view('view_memorytime');
    }

    public function home()
    {
        $data['title'] = "Welcome to CodeIgniter Home view!";
        $data['var1'] = "2";
        $data['var2'] = "8";

        $this->load->model('math');

        $data['addTotal'] = $this->math->add($data['var1'], $data['var2']);
        $data['subtractTotal'] = $this->math->subtract($data['var1'], $data['var2']);
        $data['multiplyTotal'] = $this->math->multiply($data['var1'], $data['var2']);
        $data['divideTotal'] = $this->math->divide($data['var1'], $data['var2']);
        
        $data['memorytime'] = $this->load->view('view_memorytime');

        $this->load->view('view_home', $data);
    }

    public function about()
    {
        $data['title'] = "Welcome to CodeIgniter About view!";
        $this->load->view('view_about', $data);
        $this->memorytime();
    }

    public function getValues()
    {
        $this->load->model('get_db');

        $data['results'] = $this->get_db->getAll();
        $data['title'] = "Welcome to CodeIgniter DB view!";

        $this->load->view('view_db', $data);
        $this->memorytime();
    }

    public function insertValues()
    {
        $this->load->model('get_db');

        $newRow = array(
            array(
                "user" => "Name1",
                "title" => "Extra Title..."
            ),
            array(
                "user" => "Name2",
                "title" => "Extra Title..."
            ),
            array(
                "user" => "Name3",
                "title" => "Extra Title..."
            ),
            array(
                "user" => "Name4",
                "title" => "Extra Title..."
            ),
            array(
                "user" => "Name5",
                "title" => "Extra Title..."
            )
        );

        $this->get_db->insert2($newRow);
        echo "it has been added again";
    }

    /* public function insertValues()
      {
      $this->load->model('get_db');

      $newRow = array (
      "user" =>  "Elina",
      "title" => "4th Title..."
      );

      $this->get_db->insert1($newRow);
      echo "it has been added";
      } */

    public function updateValues()
    {
        $this->load->model('get_db');

        $newRow = array(
            array(
                "id" => "1",
                "user" => "Arthur",
                "title" => "Some smecial title..."
            ),
            array(
                "id" => "8",
                "user" => "Amélie",
                "title" => "8th Title..."
            )
        );

        $this->get_db->update2($newRow);
        echo "it has been updated again ";
    }

    /* public function updateValues()
      {
      $this->load->model('get_db');

      $newRow = array(
      "user" => "ARTHUR",
      "title" => "Some smecial title..."
      );

      $this->get_db->update1($newRow);
      echo "it has been updated";
      } */

    public function deleteValues()
    {
        $this->load->model('get_db');

        $oldRow = array(
            "id" => "13",
        );

        $this->get_db->delete1($oldRow);
        echo "it has been deleted";
    }

    public function emptyTable()
    {
        $this->load->model('get_db');

        $oldRow = "locales_target";

        $this->get_db->empty1($oldRow);
        echo "table is empty";
    }

    public function hello()
    {
        echo "And this is something else <br />";
    }

    public function addStuff()
    {
        $this->load->model('math');
        echo $this->math->addBasic();
        echo "<br />";
        echo $this->math->add(2, 2);
    }

}