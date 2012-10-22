<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 */
class Boilerplate extends CI_Controller
{

    function index()
    {
        $data['title'] = 'CodeIgniter & Boilerplate App';

        $data['charset'] = 'utf-8';
        $data['description'] = 'CodeIgniter & Boilerplate App HTML5 App';
        $data['author'] = 'Arthur';

        $data['style'] = 'style_css_file_path';
        $data['grid'] = '960gs_css_file_path';
        $data['main'] = 'main_css_file_path';

        $data['modernizr'] = '';
        $data['jquery'] = '';
        $data['plugins'] = '';
        $data['script'] = '';

        // $extra['alfabet'] = range('a', 'z');
        // $extra = count($extra);
        $data['var1'] = 'var1 content';
        $data['var2'] = 'var2 content';

        $this->load->view('view_boilerplate', $data);
    }

}