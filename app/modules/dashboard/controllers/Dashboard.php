<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('template'));
  }

  function index()
  {
    $this->template->set_title('Dashboard');
    $this->template->view('content/dashboard',array());
  }

  function about()
  {
    $this->template->set_title('About');
    $this->template->view('content/about',array());
  }

}
