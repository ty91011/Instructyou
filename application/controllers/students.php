<?php

class Students extends CI_Controller
{
    function Students()
    {
	parent::__construct();
    }
    
    function index()
    {
	$content = $this->load->view('students/students_home', array(), true);
	$this->load->view("layouts/main", array("content" => $content));
    }
}