<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog extends CI_Controller
{

    function index()
    {
        $data['title'] = 'My Blog Title';
        $data['heading'] = 'My Blog Heading';
        $data['todo'] = array('clean house', 'eat lunch', 'call mom');

        $data['feed_name'] = 'MyWebsite.com';
        $data['encoding'] = 'utf-8';
        $data['feed_url'] = 'http://www.MyWebsite.com/feed';
        $data['page_description'] = 'What my site is about comes here';
        $data['page_language'] = 'en-en';
        $data['creator_email'] = 'mail@me.com';

        $this->load->view('view_blog', $data);
    }

}