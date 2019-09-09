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
    $this->template->set_title('Administrator');
    $this->template->view('content/dashboard/index',array());
  }

}
